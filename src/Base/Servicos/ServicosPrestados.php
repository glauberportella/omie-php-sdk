<?php

namespace Omie\Base\Servicos;


/**
 * Lista de Serviços Prestados
 *
 * @pw_element integer $nCodServico Código Interno do Serviço conforme cadastrado na tabela de serviços.<BR><BR>O preenchimento desse campo é opcional.<BR><BR>Caso preenchido, irá assumir as informações do cadastro de serviço.<BR><BR>Se não for preenchido, assumirá os valores informados na API.<BR><BR>
 * @pw_element string $cCodIntServico Código de Integração do Serviço conforme cadastrado na tabela de serviços.<BR><BR>O preenchimento desse campo é opcional.<BR><BR>Caso preenchido, irá assumir as informações do cadastro de serviço.<BR><BR>Se não for preenchido, assumirá os valores informados na API.
 * @pw_element string $cTribServ Tipo de Tributação dos Serviços
 * @pw_element string $cCodServMun Código do Serviço Municipal
 * @pw_element string $cCodServLC116 Código do Serviço LC 116
 * @pw_element decimal $nQtde Quantidade
 * @pw_element decimal $nValUnit Valor Unitário
 * @pw_element string $cTpDesconto Tipo de Desconto.<BR><BR>Pode ser:<BR>P - Percentual<BR>V - Valor
 * @pw_element decimal $nValorDesconto Valor do Desconto.
 * @pw_element decimal $nAliqDesconto Aliquota do Desconto.
 * @pw_element decimal $nValorOutrasRetencoes Valor de Outras Retenções.<BR><BR>(Disponível apenas para cidades que oferecem esse recurso.)
 * @pw_element decimal $nValorAcrescimos Valor de Acréscimos e taxas.<BR><BR>(Disponível apenas para cidades que oferecem esse recurso.)
 * @pw_element string $cDescServ Descrição dos Serviços
 * @pw_element string $cRetemISS Retem ISS (S/N)
 * @pw_element string $cDadosAdicItem Dados adicionais do Item
 * @pw_element string $cNbs NBS - Nomenclatura Brasileira de Serviços
 * @pw_element impostos $impostos Impostos do Item&nbsp;
 * @pw_element string $cNaoGerarFinanceiro Não gerar conta a receber para este item.<BR><BR>Informar "S" ou "N".<BR>(Informe 'S' para ativar essa opção).<BR>
 * @pw_complex ServicosPrestados
 */
class ServicosPrestados {
    /**
     * Código Interno do Serviço conforme cadastrado na tabela de serviços.<BR><BR>O preenchimento desse campo é opcional.<BR><BR>Caso preenchido, irá assumir as informações do cadastro de serviço.<BR><BR>Se não for preenchido, assumirá os valores informados na API.<BR><BR>
     *
     * @var integer
     */
    public $nCodServico;
    /**
     * Código de Integração do Serviço conforme cadastrado na tabela de serviços.<BR><BR>O preenchimento desse campo é opcional.<BR><BR>Caso preenchido, irá assumir as informações do cadastro de serviço.<BR><BR>Se não for preenchido, assumirá os valores informados na API.
     *
     * @var string
     */
    public $cCodIntServico;
    /**
     * Tipo de Tributação dos Serviços
     *
     * @var string
     */
    public $cTribServ;
    /**
     * Código do Serviço Municipal
     *
     * @var string
     */
    public $cCodServMun;
    /**
     * Código do Serviço LC 116
     *
     * @var string
     */
    public $cCodServLC116;
    /**
     * Quantidade
     *
     * @var decimal
     */
    public $nQtde;
    /**
     * Valor Unitário
     *
     * @var decimal
     */
    public $nValUnit;
    /**
     * Tipo de Desconto.<BR><BR>Pode ser:<BR>P - Percentual<BR>V - Valor
     *
     * @var string
     */
    public $cTpDesconto;
    /**
     * Valor do Desconto.
     *
     * @var decimal
     */
    public $nValorDesconto;
    /**
     * Aliquota do Desconto.
     *
     * @var decimal
     */
    public $nAliqDesconto;
    /**
     * Valor de Outras Retenções.<BR><BR>(Disponível apenas para cidades que oferecem esse recurso.)
     *
     * @var decimal
     */
    public $nValorOutrasRetencoes;
    /**
     * Valor de Acréscimos e taxas.<BR><BR>(Disponível apenas para cidades que oferecem esse recurso.)
     *
     * @var decimal
     */
    public $nValorAcrescimos;
    /**
     * Descrição dos Serviços
     *
     * @var string
     */
    public $cDescServ;
    /**
     * Retem ISS (S/N)
     *
     * @var string
     */
    public $cRetemISS;
    /**
     * Dados adicionais do Item
     *
     * @var string
     */
    public $cDadosAdicItem;
    /**
     * NBS - Nomenclatura Brasileira de Serviços
     *
     * @var string
     */
    public $cNbs;
    /**
     * Impostos do Item&nbsp;
     *
     * @var impostos
     */
    public $impostos;
    /**
     * Não gerar conta a receber para este item.<BR><BR>Informar "S" ou "N".<BR>(Informe 'S' para ativar essa opção).<BR>
     *
     * @var string
     */
    public $cNaoGerarFinanceiro;
}