<?php

namespace Omie\Base\Servicos;


/**
 * Permite que o parcelamento seja realizado de forma manual.
 *
 * @pw_element integer $nParcela Número da Parcela. <BR>Ex.: <BR>1 para indicar a parcela 1, <BR>2 para indicar a parcela 2.
 * @pw_element string $dDtVenc Data de Vencimento da parcela.<BR>Ex:<BR>01/02/2016
 * @pw_element decimal $nValor Valor da Parcela.<BR>Ex:<BR>100.23
 * @pw_element decimal $nPercentual Percentual do valor da parcela.<BR>Se não informado, o percentual será distribuido automaticamente.<BR>Ex:<BR>100.00
 * @pw_element integer $nDias Número de dias até o vencimento.<BR>O preenchimento deste campo não é obrigatório.<BR>Ex:<BR>28 para vencimento para 28 dias.
 * @pw_complex Parcelas
 */
class Parcelas {
    /**
     * Número da Parcela. <BR>Ex.: <BR>1 para indicar a parcela 1, <BR>2 para indicar a parcela 2.
     *
     * @var integer
     */
    public $nParcela;
    /**
     * Data de Vencimento da parcela.<BR>Ex:<BR>01/02/2016
     *
     * @var string
     */
    public $dDtVenc;
    /**
     * Valor da Parcela.<BR>Ex:<BR>100.23
     *
     * @var decimal
     */
    public $nValor;
    /**
     * Percentual do valor da parcela.<BR>Se não informado, o percentual será distribuido automaticamente.<BR>Ex:<BR>100.00
     *
     * @var decimal
     */
    public $nPercentual;
    /**
     * Número de dias até o vencimento.<BR>O preenchimento deste campo não é obrigatório.<BR>Ex:<BR>28 para vencimento para 28 dias.
     *
     * @var integer
     */
    public $nDias;
}