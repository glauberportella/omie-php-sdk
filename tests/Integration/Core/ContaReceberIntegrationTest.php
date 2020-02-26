<?php

require_once __DIR__ . '/../../Utils/RandomGenerators.php';

final class ContaRecebeerIntegrationTest extends PHPUnit\Framework\TestCase
{
    private $app;

    public function setUp(): void
    {
        $this->app = new \Omie\Core\App(API_KEY, API_SECRET);
    }
    
    public function testInsertClienteFixo()
    {
        $nomeTurista = 'Nome ' . rand(1, 1000);
            
        $cliente = new Omie\Base\Clientes\ClientesCadastro();
        $cliente->codigo_cliente_integracao = rand(1, 10000); // codigo do cliente na base do ifriend
        $cliente->razao_social = $nomeTurista;
        $cliente->nome_fantasia = $nomeTurista;
        $cliente->cnpj_cpf = (time() % 2 == 0) ? RandomGenerators::cpf() : RandomGenerators::cnpj();

        // address
        $cliente->endereco = 'Rua Teste';
        $cliente->endereco_numero = '910';
        $cliente->complemento = 'sala 1203';
        $cliente->bairro = 'Centro';
        $cliente->cep = '30180100';

        // get city code from api
        $cityService = new \Omie\Base\Cidades\CidadesCadastroJsonClient($this->app);
        $cityListReq = new \Omie\Base\Cidades\CidListarRequest();
        $cityListReq->filtrar_por_cidade = 'Belo Horizonte';
        $cityListReq->filtrar_por_uf = 'MG';
        $cityResponse = new \Omie\Base\Cidades\CidListarResponse();
        try {
            $cityResponse = $cityService->PesquisarCidades($cityListReq);
        } catch (\Exception $e) {
            $this->fail($e->getMessage());
        }

        if ($cityResponse->total_de_registros > 0) {
            // we get the first only
            $cliente->cidade = $cityResponse->lista_cidades[0]->cCod; // codigo da cidade conforme cCod do metodo PesquisarCidades /api/v1/geral/cidades/
        }

        $cliente->estado = 'MG'; // sigla do estado, EX para estrangeiro

        // get country code
        $countryService = new \Omie\Base\Paises\PaisesCadastroJsonClient($this->app);
        $countryListReq = new \Omie\Base\Paises\PaisListarRequest();
        $countryListReq->filtrar_por_descricao = 'Brasil';
        $countryResponse = new \Omie\Base\Paises\PaisListarResponse();
        try {
            $countryResponse = $countryService->ListarPaises($countryListReq);
        } catch (\Exception $e) {
            $this->fail($e->getMessage());
        }

        if (count($countryResponse->lista_paises) > 0) {
            // we get the first only
            // Utilize a tag 'cCodigo' do método 'ListarPaises' da API /api/v1/geral/paises/
            $cliente->codigo_pais = $countryResponse->lista_paises[0]->cCodigo;
        }

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
            $supplierService = new Omie\Core\Cliente($this->app);
            $status = $supplierService->insert($cliente);
            $this->assertTrue(isset($status->codigo_status), 'Status nao possui codigo_status definido.');
        } catch (\Exception $e) {
            $this->fail($e->getMessage());
        }
        
        return $status;
    }

    /**
     * Test insert conta pagar ifriend
     *
     * @depends testInsertClienteFixo
     */
    public function testInsert($insertStatus)
    {
        // fill Contas a pagar fields
        
        $contaReceber = new \Omie\Base\Lancamentos\ContaReceberCadastro();
        $contaReceber->codigo_lancamento_integracao = rand(1, 1000);
        
        $vencimento = date('d/m/Y', mktime(0, 0, 0, date('n') + 1, date('j') + 1, date('Y')));
        $codigoCategoria = OmieUtils::getCodigoCategoria(CONTA_RECEBER_CATEGORIA_PAGAMENTO_CLIENTE, $this->app);
        $this->assertNotFalse($codigoCategoria);
        
        $idContaCorrente = OmieUtils::getCodigoContaCorrente(CONTA_CORRENTE, $this->app);
        $this->assertNotFalse($idContaCorrente);
        
        // supplier
        $contaReceber->codigo_cliente_fornecedor = $insertStatus->codigo_cliente_omie;
        $contaReceber->codigo_cliente_fornecedor_integracao = $insertStatus->codigo_cliente_integracao;
        $contaReceber->codigo_lancamento_integracao = rand(1000, 5000);
        $contaReceber->data_vencimento = $vencimento;
        $contaReceber->data_previsao = $vencimento;
        $contaReceber->valor_documento = 28.00;
        
        if (false !== $codigoCategoria) {
            $contaReceber->codigo_categoria = $codigoCategoria;
        }
        
        if (false !== $idContaCorrente) {
            $contaReceber->id_conta_corrente = $idContaCorrente;
        }
        
        try {
            $service = new \Omie\Core\ContaReceber($this->app);
            $status = $service->insert($contaReceber);
            $this->assertTrue(isset($status->codigo_status), 'Status nao possui codigo_status definido.');
        } catch (\Exception $e) {
            $this->fail($e->getMessage());
        }
    }
    
}