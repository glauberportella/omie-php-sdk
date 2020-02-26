<?php

require_once __DIR__ . '/../../Utils/RandomGenerators.php';
require_once __DIR__ . '/../../Utils/OmieUtils.php';

final class ContaPagarIntegrationTest extends PHPUnit\Framework\TestCase
{
    private $app;

    public function setUp(): void
    {
        $this->app = new \Omie\Core\App(API_KEY, API_SECRET);
    }
    
    public function testInsertFornecedorFixo()
    {
        $nomeGuia = 'Nome ' . rand(1, 1000);
        
        $fornecedor = new Omie\Base\Clientes\ClientesCadastro();
        $fornecedor->codigo_cliente_integracao = rand(1, 10000); // codigo do cliente na base do ifriend
        $fornecedor->razao_social = $nomeGuia;
        $fornecedor->nome_fantasia = $nomeGuia;
        $fornecedor->cnpj_cpf = (time() % 2 == 0) ? RandomGenerators::cpf() : RandomGenerators::cnpj();

        // address
        $fornecedor->endereco = 'Rua Teste';
        $fornecedor->endereco_numero = '910';
        $fornecedor->complemento = 'sala 1203';
        $fornecedor->bairro = 'Centro';
        $fornecedor->cep = '30180100';

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
            $fornecedor->cidade = $cityResponse->lista_cidades[0]->cCod; // codigo da cidade conforme cCod do metodo PesquisarCidades /api/v1/geral/cidades/
        }

        $fornecedor->estado = 'MG'; // sigla do estado, EX para estrangeiro

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
            $fornecedor->codigo_pais = $countryResponse->lista_paises[0]->cCodigo;
        }

        // phones
        $phone = RandomGenerators::phone();
        $fornecedor->telefone1_ddd = $phone['ddd']; // opcional
        $fornecedor->telefone1_numero = $phone['number']; // opcional
        $fornecedor->telefone2_ddd = ''; // opcional
        $fornecedor->telefone2_numero = ''; // opcional

        // email
        $fornecedor->email = RandomGenerators::emails(1);

        // para estrangeiros NIF
        $fornecedor->nif = ''; // somente para estrangeiro pessoa juridica

        $tag = new \Omie\Base\Tags();
        $tag->tag = 'iFriend';
        $fornecedor->tags = array($tag);


        try {
            $supplierService = new Omie\Core\Fornecedor($this->app);
            $status = $supplierService->insert($fornecedor);
            $this->assertTrue(isset($status->codigo_status), 'Status nao possui codigo_status definido.');
        } catch (\Exception $e) {
            $this->fail($e->getMessage());
        }
        
        return $status;
    }

    /**
     * Test insert conta pagar ifriend
     *
     * @depends testInsertFornecedorFixo
     */
    public function testInsert($insertStatus)
    {
        // fill Contas a pagar fields
        
        $contaPagar = new \Omie\Base\Lancamentos\ContaPagarCadastro();
        $contaPagar->codigo_lancamento_integracao = rand(1, 1000);
        
        $vencimento = date('d/m/Y', mktime(0, 0, 0, date('n') + 1, date('j') + 1, date('Y')));
        $codigoCategoria = OmieUtils::getCodigoCategoria(CONTA_PAGAR_CATEGORIA_SAQUE, $this->app);
        $this->assertNotFalse($codigoCategoria);
        
        $idContaCorrente = OmieUtils::getCodigoContaCorrente(CONTA_CORRENTE, $this->app);
        $this->assertNotFalse($idContaCorrente);
        
        // supplier
        $contaPagar->codigo_cliente_fornecedor = $insertStatus->codigo_cliente_omie;
        //$contaPagar->codigo_cliente_fornecedor_integracao = $insertStatus->codigo_cliente_integracao;
        //$contaPagar->codigo_lancamento_integracao = rand(1000, 5000);
        $contaPagar->data_vencimento = $vencimento;
        $contaPagar->data_previsao = $vencimento;
        $contaPagar->valor_documento = 28.00;
        
        if (false !== $codigoCategoria) {
            $contaPagar->codigo_categoria = $codigoCategoria;
        }
        
        if (false !== $idContaCorrente) {
            $contaPagar->id_conta_corrente = $idContaCorrente;
        }
        
        try {
            $service = new \Omie\Core\ContaPagar($this->app);
            print_r($contaPagar);
            $status = $service->insert($contaPagar);
            $this->assertTrue(isset($status->codigo_status), 'Status nao possui codigo_status definido.');
        } catch (\Exception $e) {
            $this->fail($e->getMessage());
        }
    }
}