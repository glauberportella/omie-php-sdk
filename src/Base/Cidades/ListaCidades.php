<?php
namespace Omie\Base\Cidades;

/**
 * Cadastro de Cidades
 *
 * @pw_element string $cCod Código da Cidade
 * @pw_element string $cNome Nome da Cidade
 * @pw_element string $cUF UF da cidade
 * @pw_element string $nCodIBGE Código IBGE da Cidade
 * @pw_element integer $nCodSIAFI Código SIAFI da Cidade
 * @pw_complex lista_cidades
 */
class ListaCidades
{
    /**
     * Código da Cidade
     *
     * @var string
     */
    public $cCod;
    /**
     * Nome da Cidade
     *
     * @var string
     */
    public $cNome;
    /**
     * UF da cidade
     *
     * @var string
     */
    public $cUF;
    /**
     * Código IBGE da Cidade
     *
     * @var string
     */
    public $nCodIBGE;
    /**
     * Código SIAFI da Cidade
     *
     * @var integer
     */
    public $nCodSIAFI;
}