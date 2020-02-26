<?php

namespace Omie\Base\Servicos;


/**
 * Impostos do Item
 *
 * @pw_element string $cFixarISS Considerar a alíquota de ISS informada (S/N)?
 * @pw_element decimal $nAliqISS Alíquota de ISS
 * @pw_element decimal $nBaseISS Base de ISS
 * @pw_element decimal $nTotDeducao Valor Total de Deduções do Item.
 * @pw_element decimal $nValorISS Valor do ISS<BR><BR>(Calculado automaticamente, não tem efeito se informado na inclusão/alteração).
 * @pw_element string $cFixarIRRF Considerar a alíquota de IRRF informada (S/N)?
 * @pw_element decimal $nAliqIRRF Alíquota de IRRF
 * @pw_element decimal $nValorIRRF Valor do IRRF<BR><BR>(Calculado automaticamente, não tem efeito se informado na inclusão/alteração).
 * @pw_element string $cRetemIRRF Retém IRRF  (S/N)
 * @pw_element string $cFixarPIS Considerar a alíquota de PIS informado (S/N)?
 * @pw_element decimal $nAliqPIS Alíquota de PIS
 * @pw_element decimal $nValorPIS Valor do PIS<BR><BR>(Calculado automaticamente, não tem efeito se informado na inclusão/alteração).
 * @pw_element string $cRetemPIS Retém PIS  (S/N)
 * @pw_element string $cFixarCOFINS Considerar a alíquota de COFINS Confirmada (S/N)?
 * @pw_element decimal $nAliqCOFINS Alíquota de COFINS
 * @pw_element decimal $nValorCOFINS Valor do COFINS<BR><BR>(Calculado automaticamente, não tem efeito se informado na inclusão/alteração).
 * @pw_element string $cRetemCOFINS Retém COFINS  (S/N)
 * @pw_element string $cFixarCSLL Considerar a alíquota de CSLL Confirmada (S/N)?
 * @pw_element decimal $nAliqCSLL Alíquota de CSLL
 * @pw_element decimal $nValorCSLL Valor de CSLL<BR><BR>(Calculado automaticamente, não tem efeito se informado na inclusão/alteração).
 * @pw_element string $cRetemCSLL Retém CSLL  (S/N)
 * @pw_element string $cFixarINSS Considerar a alíquota de INSS Confirmada (S/N)?
 * @pw_element decimal $nAliqINSS Alíquota de INSS
 * @pw_element decimal $nValorINSS Valor de INSS<BR><BR>(Calculado automaticamente, não tem efeito se informado na inclusão/alteração).
 * @pw_element string $cRetemINSS Retém INSS  (S/N)
 * @pw_element decimal $nAliqRedBaseINSS Percentual de Redução da Base de Cálculo do INSS
 * @pw_complex impostos
 */
class Impostos {
    /**
     * Considerar a alíquota de ISS informada (S/N)?
     *
     * @var string
     */
    public $cFixarISS;
    /**
     * Alíquota de ISS
     *
     * @var decimal
     */
    public $nAliqISS;
    /**
     * Base de ISS
     *
     * @var decimal
     */
    public $nBaseISS;
    /**
     * Valor Total de Deduções do Item.
     *
     * @var decimal
     */
    public $nTotDeducao;
    /**
     * Valor do ISS<BR><BR>(Calculado automaticamente, não tem efeito se informado na inclusão/alteração).
     *
     * @var decimal
     */
    public $nValorISS;
    /**
     * Considerar a alíquota de IRRF informada (S/N)?
     *
     * @var string
     */
    public $cFixarIRRF;
    /**
     * Alíquota de IRRF
     *
     * @var decimal
     */
    public $nAliqIRRF;
    /**
     * Valor do IRRF<BR><BR>(Calculado automaticamente, não tem efeito se informado na inclusão/alteração).
     *
     * @var decimal
     */
    public $nValorIRRF;
    /**
     * Retém IRRF  (S/N)
     *
     * @var string
     */
    public $cRetemIRRF;
    /**
     * Considerar a alíquota de PIS informado (S/N)?
     *
     * @var string
     */
    public $cFixarPIS;
    /**
     * Alíquota de PIS
     *
     * @var decimal
     */
    public $nAliqPIS;
    /**
     * Valor do PIS<BR><BR>(Calculado automaticamente, não tem efeito se informado na inclusão/alteração).
     *
     * @var decimal
     */
    public $nValorPIS;
    /**
     * Retém PIS  (S/N)
     *
     * @var string
     */
    public $cRetemPIS;
    /**
     * Considerar a alíquota de COFINS Confirmada (S/N)?
     *
     * @var string
     */
    public $cFixarCOFINS;
    /**
     * Alíquota de COFINS
     *
     * @var decimal
     */
    public $nAliqCOFINS;
    /**
     * Valor do COFINS<BR><BR>(Calculado automaticamente, não tem efeito se informado na inclusão/alteração).
     *
     * @var decimal
     */
    public $nValorCOFINS;
    /**
     * Retém COFINS  (S/N)
     *
     * @var string
     */
    public $cRetemCOFINS;
    /**
     * Considerar a alíquota de CSLL Confirmada (S/N)?
     *
     * @var string
     */
    public $cFixarCSLL;
    /**
     * Alíquota de CSLL
     *
     * @var decimal
     */
    public $nAliqCSLL;
    /**
     * Valor de CSLL<BR><BR>(Calculado automaticamente, não tem efeito se informado na inclusão/alteração).
     *
     * @var decimal
     */
    public $nValorCSLL;
    /**
     * Retém CSLL  (S/N)
     *
     * @var string
     */
    public $cRetemCSLL;
    /**
     * Considerar a alíquota de INSS Confirmada (S/N)?
     *
     * @var string
     */
    public $cFixarINSS;
    /**
     * Alíquota de INSS
     *
     * @var decimal
     */
    public $nAliqINSS;
    /**
     * Valor de INSS<BR><BR>(Calculado automaticamente, não tem efeito se informado na inclusão/alteração).
     *
     * @var decimal
     */
    public $nValorINSS;
    /**
     * Retém INSS  (S/N)
     *
     * @var string
     */
    public $cRetemINSS;
    /**
     * Percentual de Redução da Base de Cálculo do INSS
     *
     * @var decimal
     */
    public $nAliqRedBaseINSS;
}