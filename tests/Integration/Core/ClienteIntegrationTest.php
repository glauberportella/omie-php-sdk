<?php

require_once __DIR__ . '/../../Utils/RandomGenerators.php';

final class ClienteIntegrationTest extends PHPUnit\Framework\TestCase
{
    private $app;

    public function setUp(): void
    {
        $this->app = new \Omie\Core\App(API_KEY, API_SECRET);
    }
    
    public function testInserirCliente()
    {
        /**
         * Nome/Razao
         * CNPJ/CPF se for estrangeiro informar 'Estrangeiro'
         * Endereço:
         *    Estado = Exterior (EX)
         * E-mail obrigatorio
         * Telefone nao obrigatorio
         * Tag: Cliente
         */
        $nomeTurista = 'Nome do Turista ' . rand(1, 1000);
        
        $clienteCadastro = new Omie\Base\Clientes\ClientesCadastro();
        $clienteCadastro->codigo_cliente_integracao = rand(100, 1100); // codigo do cliente na base do ifriend
        $clienteCadastro->razao_social = $nomeTurista;
        $clienteCadastro->nome_fantasia = $nomeTurista;
        $clienteCadastro->cnpj_cpf = (time() % 2 == 0) ? RandomGenerators::cpf() : RandomGenerators::cnpj();
        
        // address
        $clienteCadastro->endereco = 'Rua Alvarenga';
        $clienteCadastro->endereco_numero = '40';
        $clienteCadastro->complemento = 'casa';
        $clienteCadastro->bairro = 'Aarão Reis';
        $clienteCadastro->cep = '31814500';
        $clienteCadastro->cidade = ''; // codigo da cidade conforme cCod do metodo PesquisarCidades /api/v1/geral/cidades/
        $clienteCadastro->estado = 'MG'; // sigla do estado, EX para estrangeiro
        $clienteCadastro->codigo_pais = ''; // Utilize a tag 'cCodigo' do método 'ListarPaises' da API /api/v1/geral/paises/
        
        // phones
        $phone = RandomGenerators::phone();
        $clienteCadastro->telefone1_ddd = $phone['ddd']; // opcional
        $clienteCadastro->telefone1_numero = $phone['number']; // opcional
        $clienteCadastro->telefone2_ddd = ''; // opcional
        $clienteCadastro->telefone2_numero = ''; // opcional
        
        // email
        $clienteCadastro->email = RandomGenerators::emails(1);
        
        // para estrangeiros NIF
        $clienteCadastro->nif = ''; // somente para estrangeiro pessoa juridica
        $tag = new \Omie\Base\Tags();
        $tag->tag = 'Viajante';
        $clienteCadastro->tags = array($tag);
        
        try {
            $customerService = new Omie\Core\Cliente($this->app);
            $status = $customerService->upsert($clienteCadastro);
            $this->assertTrue(isset($status->codigo_status), 'Status nao possui codigo_status definido.');
        } catch (\Exception $e) {
            $this->fail($e->getMessage());
        }
    }
}