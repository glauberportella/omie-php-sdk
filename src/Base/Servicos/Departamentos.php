<?php

namespace Omie\Base\Servicos;


/**
 * Lista de distribuição por departamentos
 *
 * @pw_element string $cCodDepto ID do Departamento.<BR>Preenchimento Obrigatório.<BR><BR>Informação localizada na Aba "Departamentos" do Pedido de Venda.<BR><BR>Utilize a tag 'codigo' do método 'ListarDepatartamentos' da API<BR>http://app.omie.com.br/api/v1/geral/departamentos/<BR>para obter essa informação.
 * @pw_element decimal $nPerc Percentual de Rateio.<BR>Preenchimento Obrigatório.<BR><BR>Informação localizada na Aba "Departamentos" do Pedido de Venda.<BR>
 * @pw_element decimal $nValor Valor do Rateio.<BR>Preenchimento Obrigatório.<BR><BR>Informação localizada na Aba "Departamentos" do Pedido de Venda.<BR>
 * @pw_element string $nValorFixo Indica que o valor foi fixado na distribuição do rateio.<BR>Preenchimento Obrigatório.<BR><BR>Informar "S" ou "N".<BR><BR>Informação localizada na Aba "Departamentos" do Pedido de Venda.<BR>
 * @pw_complex Departamentos
 */
class Departamentos {
    /**
     * ID do Departamento.<BR>Preenchimento Obrigatório.<BR><BR>Informação localizada na Aba "Departamentos" do Pedido de Venda.<BR><BR>Utilize a tag 'codigo' do método 'ListarDepatartamentos' da API<BR>http://app.omie.com.br/api/v1/geral/departamentos/<BR>para obter essa informação.
     *
     * @var string
     */
    public $cCodDepto;
    /**
     * Percentual de Rateio.<BR>Preenchimento Obrigatório.<BR><BR>Informação localizada na Aba "Departamentos" do Pedido de Venda.<BR>
     *
     * @var decimal
     */
    public $nPerc;
    /**
     * Valor do Rateio.<BR>Preenchimento Obrigatório.<BR><BR>Informação localizada na Aba "Departamentos" do Pedido de Venda.<BR>
     *
     * @var decimal
     */
    public $nValor;
    /**
     * Indica que o valor foi fixado na distribuição do rateio.<BR>Preenchimento Obrigatório.<BR><BR>Informar "S" ou "N".<BR><BR>Informação localizada na Aba "Departamentos" do Pedido de Venda.<BR>
     *
     * @var string
     */
    public $nValorFixo;
}