<?php

require_once __DIR__ . '/../../Utils/RandomGenerators.php';

final class FornecedorIntegrationTest extends PHPUnit\Framework\TestCase
{
    private $app;

    public function setUp(): void
    {
        $this->app = new \Omie\Core\App(API_KEY, API_SECRET);
    }

    public function testInserirFornecedorEstrangeiro()
    {
        $nomeGuia = 'PayPal';
        
        $fornecedor = new Omie\Base\Clientes\ClientesCadastro();
        $fornecedor->codigo_cliente_integracao = 'paypal'; // codigo do cliente na base do ifriend
        $fornecedor->razao_social = $nomeGuia;
        $fornecedor->nome_fantasia = $nomeGuia;
        $fornecedor->cnpj_cpf = 'Estrangeiro';

        // address
        // $fornecedor->endereco = '';
        // $fornecedor->endereco_numero = '';
        // $fornecedor->complemento = '';
        // $fornecedor->bairro = '';
        // $fornecedor->cep = '';

        // get city code from api
        // $cityService = new \Omie\Base\Cidades\CidadesCadastroJsonClient($this->app);
        // $cityListReq = new \Omie\Base\Cidades\CidListarRequest();
        // $cityListReq->filtrar_por_cidade = 'São José';
        // $cityResponse = new \Omie\Base\Cidades\CidListarResponse();
        // try {
        //     $cityResponse = $cityService->PesquisarCidades($cityListReq);
        // } catch (\Exception $e) {
        //     $this->fail($e->getMessage());
        // }

        // if ($cityResponse->total_de_registros > 0) {
        //     // we get the first only
        //     $fornecedor->cidade = $cityResponse->lista_cidades[0]->cCod; // codigo da cidade conforme cCod do metodo PesquisarCidades /api/v1/geral/cidades/
        // }
        
        $fornecedor->estado = 'EX'; // sigla do estado, EX para estrangeiro
        
        // get country code
        $countryService = new \Omie\Base\Paises\PaisesCadastroJsonClient($this->app);
        $countryListReq = new \Omie\Base\Paises\PaisListarRequest();
        $countryListReq->filtrar_por_descricao = 'Estados Unidos';
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

        // $phone = RandomGenerators::phone();
        // $fornecedor->telefone1_ddd = $phone['ddd']; // opcional
        // $fornecedor->telefone1_numero = $phone['number']; // opcional
        // $fornecedor->telefone2_ddd = ''; // opcional
        // $fornecedor->telefone2_numero = ''; // opcional

        // // email
        // $fornecedor->email = RandomGenerators::emails(1);

        // para estrangeiros NIF
        // $fornecedor->nif = ''; // somente para estrangeiro pessoa juridica
        
        $tag = new \Omie\Base\Tags();
        $tag->tag = 'Gateway de Pagamento';
        $fornecedor->tags = array($tag);

        try {
            $supplierService = new Omie\Core\Fornecedor($this->app);
            $status = $supplierService->upsert($fornecedor);
            $this->assertTrue(isset($status->codigo_status), 'Status nao possui codigo_status definido.');
        } catch (\Exception $e) {
            $this->fail($e->getMessage());
        }
    }

    public function testInserirFornecedor()
    {
        /**
         * Nome/Razao
         * CNPJ/CPF se for estrangeiro informar 'Estrangeiro'
         * Endereço:
         *    Estado = Exterior (EX)
         * E-mail obrigatorio
         * Telefone nao obrigatorio
         * Tag: Fornecedor
         */
        $nomeGuia = 'Nome do iFriend ' . rand(1, 1000);
        
        $fornecedor = new Omie\Base\Clientes\ClientesCadastro();
        $fornecedor->codigo_cliente_integracao = rand(100, 1100); // codigo do cliente na base do ifriend
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
        $tag->tag = 'Fornecedor';
        $fornecedor->tags = array($tag);


        try {
            $supplierService = new Omie\Core\Fornecedor($this->app);
            $status = $supplierService->upsert($fornecedor);
            $this->assertTrue(isset($status->codigo_status), 'Status nao possui codigo_status definido.');
        } catch (\Exception $e) {
            $this->fail($e->getMessage());
        }
    }
}