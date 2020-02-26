<?php
namespace Omie\Base\Paises;

/**
 * Resposta da listagem de Paises.
 *
 * @pw_element lista_paisesArray $lista_paises Lista de Paises.
 * @pw_complex paisListarResponse
 */
class PaisListarResponse {
    /**
     * Lista de Paises.
     *
     * @var ListaPaises[]
     */
    public $lista_paises;
}