<?php
namespace Omie\Base\Paises;

/**
 * Lista de Paises.
 *
 * @pw_element string $cCodigo Código da Estado (IBGE).
 * @pw_element string $cDescricao Descrição do País.
 * @pw_complex lista_paises
 */
class ListaPaises {
    /**
     * Código da Estado (IBGE).
     *
     * @var string
     */
    public $cCodigo;
    /**
     * Descrição do País.
     *
     * @var string
     */
    public $cDescricao;
}