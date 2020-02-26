<?php

require_once __DIR__ . '/../../Utils/RandomGenerators.php';
require_once __DIR__ . '/../../Utils/OmieUtils.php';

class OrdemServicoIntegrationTest extends PHPUnit\Framework\TestCase
{
    private $app;

    public function setUp(): void
    {
        $this->app = new \Omie\Core\App(API_KEY, API_SECRET);
    }
    
    public function testInsert()
    {
        /**
         * @var \Omie\Base\Clientes\ClientesCadastro
         */
        $cliente = $this->getCliente();
        
        $codigoInt = rand(1, 1000);
        // data da viagem (D0) é a data do serviço prestado
        $dataServicoPrestado = date('d/m/Y');
        $valorNota = 12;
        
        $os = new \Omie\Base\Servicos\OsCadastro();
        
        // cabeçalho
        $os->Cabecalho = new \Omie\Base\Servicos\Cabecalho();
        $os->Cabecalho->cCodIntOS = $codigoInt;
        $os->Cabecalho->cNumOS = $codigoInt;
        //$os->Cabecalho->cCodIntCli = $cliente->codigo_cliente_integracao;
        $os->Cabecalho->nCodCli = $cliente->codigo_cliente_omie;
        $os->Cabecalho->dDtPrevisao = $dataServicoPrestado;
        $os->Cabecalho->cEtapa = \Omie\Core\OrdemServico::ETAPA_CADASTRO;
        $os->Cabecalho->nQtdeParc = 1;
        
        // departamentos
        //$departamento = new \Omie\Base\Servicos\Departamentos();
        $os->Departamentos = [];
        
        // email
        $os->Email = new \Omie\Base\Servicos\Email();
        $os->Email->cEnvLink = 'S';
        $os->Email->cEnviarPara = $cliente->email;
        
        // parcelas
        $parcela = new \Omie\Base\Servicos\Parcelas();
        $parcela->nParcela = 1;
        $parcela->dDtVenc = $dataServicoPrestado;
        $parcela->nDias = 1;
        $parcela->nValor = $valorNota;
        $parcela->nPercentual = 100;
        $os->Parcelas = [$parcela];
        
        // serviços da OS
        $servico = new \Omie\Base\Servicos\ServicosPrestados();
        $servico->cCodServMun = CODIGO_SERVICO_MUNICIPAL;
        $servico->cTribServ = TIPO_TRIBUTACAO_SERVICOS; // duvida
        $servico->cCodServLC116 = CODIGO_SERVICO_LC116; // duvida
        $servico->cDescServ = 'Intermediação de serviço prestado através da plataforma The iFriend. Código: ' . rand(1, 1000);
        $servico->nQtde = 1;
        $servico->nValUnit = $valorNota;
        $servico->cNbs = CODIGO_NBS;
        $servico->nValUnit = $valorNota;
        $servico->cRetemISS = SERVICO_AGENDAMENTO_RETEM_ISS;
        $servico->cNaoGerarFinanceiro = 'N';
        
        // impostos
        $servico->impostos = new \Omie\Base\Servicos\Impostos();
        $servico->impostos->cFixarCOFINS = FIXAR_COFINS;
        $servico->impostos->cFixarCSLL = FIXAR_CSLL;
        $servico->impostos->cFixarINSS = FIXAR_INSS;
        $servico->impostos->cFixarIRRF = FIXAR_IRRF;
        $servico->impostos->cFixarISS = FIXAR_ISS;
        $servico->impostos->cFixarPIS = FIXAR_PIS;
        $servico->impostos->cRetemCOFINS = RETEM_COFINS;
        $servico->impostos->cRetemCSLL = RETEM_CSLL;
        $servico->impostos->cRetemINSS= RETEM_INSS;
        $servico->impostos->cRetemIRRF = RETEM_IRRF;
        $servico->impostos->cRetemPIS = RETEM_PIS;
        $servico->impostos->nAliqCOFINS = ALIQ_COFINS;
        $servico->impostos->nAliqCSLL = ALIQ_CSLL;
        $servico->impostos->nAliqINSS = ALIQ_INSS;
        $servico->impostos->nAliqIRRF = ALIQ_IRRF;
        $servico->impostos->nAliqISS = ALIQ_ISS;
        $servico->impostos->nAliqPIS = ALIQ_PIS;
        $servico->impostos->nBaseISS = BASE_ISS;
        $servico->impostos->nAliqRedBaseINSS = ALIQ_RED_BASE_INSS;
        $servico->impostos->nTotDeducao = 0;

        // Valores todos 0 (simples nacional emitindo pf)
        $servico->impostos->nValorCOFINS = VALOR_COFINS;
        $servico->impostos->nValorCSLL = VALOR_CSLL;
        $servico->impostos->nValorIRRF = VALOR_IRRF;
        $servico->impostos->nValorINSS = VALOR_INSS;
        $servico->impostos->nValorISS = VALOR_ISS;
        $servico->impostos->nValorPIS = VALOR_PIS;
        
        // ....
        
        // @todo terá que adicionar OBS na nota: R$ 12,00 referente a R$ 40,00 repassando R$ 28,00
        
        $os->ServicosPrestados = [$servico];

        // informações adicionais
        $codigoContaCorrente = OmieUtils::getCodigoContaCorrente(CONTA_CORRENTE, $this->app);
        $this->assertNotFalse($codigoContaCorrente);
        
        $codigoCategoria = OmieUtils::getCodigoCategoria(CATEGORIA_SERVICO_AGENDAMENTO_OS, $this->app);
        $this->assertNotFalse($codigoCategoria);
        
        $os->InformacoesAdicionais = new \Omie\Base\Servicos\InformacoesAdicionais();
        $os->InformacoesAdicionais->cCidPrestServ = CIDADE_PRESTACAO_SERVICO;
        $os->InformacoesAdicionais->dDataRps = $dataServicoPrestado; // igual a data da viagem (D0)
        $os->InformacoesAdicionais->nCodCC = $codigoContaCorrente;
        $os->InformacoesAdicionais->cCodCateg = $codigoCategoria;
        
        try {
            $service = new Omie\Core\OrdemServico($this->app);
            $status = $service->insert($os);
            $this->assertTrue(isset($status->nCodOS) && !empty($status->cNumOS), 'Status nao possui codigo_status definido.');
        } catch (\Exception $e) {
            $this->fail($e->getMessage());
        }
        
        return $status->nCodOS;
    }

    /**
     * @depends testInsert
     * @param $nCodOs
     */
    public function testValidarOS($nCodOs)
    {
        try {
            $service = new Omie\Core\OrdemServicoFaturamento($this->app);
            $request = new \Omie\Base\Servicos\OsValidarRequest();
            $request->nCodOS = $nCodOs;
            $response = $service->validar($request);
            $this->assertEquals('Ordem de Serviço validada com sucesso!', $response->cDescStatus);
        } catch (\Exception $e) {
            $this->fail($e->getMessage());
        }
    }

    /**
     * @depends testInsert
     * @param $nCodOs
     */
    public function testFaturarOs($nCodOs)
    {
        try {
            $service = new Omie\Core\OrdemServicoFaturamento($this->app);
            $request = new \Omie\Base\Servicos\OsFaturarRequest();
            $request->nCodOS = $nCodOs;
            $response = $service->faturar($request);
            $this->assertEquals('Faturamento realizado com sucesso.', $response->cDescStatus);
        } catch (\Exception $e) {
            $this->fail($e->getMessage());
        }
    }

    /**
     * @depends testInsert
     * @param $nCodOs
     */
    public function testCancelarOS($nCodOs)
    {
        try {
            $service = new Omie\Core\OrdemServicoFaturamento($this->app);
            $request = new \Omie\Base\Servicos\OsCancelarRequest();
            $request->nCodOS = $nCodOs;
            $response = $service->cancelar($request);
            $this->assertEquals('Ordem de Serviço cancelada com sucesso!', $response->cDescStatus);
        } catch (\Exception $e) {
            $this->fail($e->getMessage());
        }
    }

    /**                                            
     * Get new cliente to test OS
     * 
     * @return \Omie\Base\Clientes\ClientesCadastro
     */
    protected function getCliente(): \Omie\Base\Clientes\ClientesCadastro
    {
        $nomeTurista = 'Nome ' . rand(1, 1000);
        
        $cliente = new Omie\Base\Clientes\ClientesCadastro();
        $cliente->codigo_cliente_integracao = rand(100, 1100); // codigo do cliente na base do ifriend
        $cliente->razao_social = $nomeTurista;
        $cliente->nome_fantasia = $nomeTurista;
        $cliente->cnpj_cpf = (time() % 2 == 0) ? RandomGenerators::cpf() : RandomGenerators::cnpj();

        // address
        $cliente->endereco = 'Rua Alvarenga';
        $cliente->endereco_numero = '40';
        $cliente->complemento = 'casa';
        $cliente->bairro = 'Aarão Reis';
        $cliente->cep = '31814500';
        $cliente->cidade = ''; // codigo da cidade conforme cCod do metodo PesquisarCidades /api/v1/geral/cidades/
        $cliente->estado = 'MG'; // sigla do estado, EX para estrangeiro
        $cliente->codigo_pais = ''; // Utilize a tag 'cCodigo' do método 'ListarPaises' da API /api/v1/geral/paises/

        // phones
        $phone = RandomGenerators::phone();
        $cliente->telefone1_ddd = $phone['ddd']; // opcional
        $cliente->telefone1_numero = $phone['number']; // opcional
        $cliente->telefone2_ddd = ''; // opcional
        $cliente->telefone2_numero = ''; // opcional

        // email
        $cliente->email = RandomGenerators::emails(1);

        // para estrangeiros NIF
        $cliente->nif = ''; // somente para estrangeiro pessoa juridica
        $tag = new \Omie\Base\Tags();
        $tag->tag = 'Viajante';
        $cliente->tags = array($tag);

        try {
            $customerService = new Omie\Core\Cliente($this->app);
            $status = $customerService->insert($cliente);
            $this->assertTrue(isset($status->codigo_status), 'Status nao possui codigo_status definido.');
        } catch (\Exception $e) {
            return null;
        }
        
        $cliente->codigo_cliente_omie = $status->codigo_cliente_omie;
        $cliente->codigo_cliente_integracao = $status->codigo_cliente_integracao;
        
        return $cliente;
    }
}