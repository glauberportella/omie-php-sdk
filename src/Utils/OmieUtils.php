<?php

namespace Omie\Utils;

use Omie\Base\Categoria\CategoriaListRequest;
use Omie\Base\Categoria\CategoriasCadastroJsonClient;
use Omie\Base\ContaCorrente\ContaCorrenteCadastroJsonClient;
use Omie\Base\ContaCorrente\FinContaCorrenteResumoRequest;
use Omie\Core\App;

class OmieUtils
{
    public static function getCodigoContaCorrente($contaCorrenteDesc, App $app)
    {
        $contaCorrenteService = new ContaCorrenteCadastroJsonClient($app);
        $request = new FinContaCorrenteResumoRequest();

        $p = 1;
        do {
            $request->registros_por_pagina = 100;
            $request->pagina = $p;
            $response = $contaCorrenteService->ListarResumoContasCorrentes($request);
            $totalPaginas = $response->total_de_paginas;
            foreach ($response->conta_corrente_lista as $contaCorrente) {
                if ($contaCorrente->descricao = $contaCorrenteDesc) {
                    return $contaCorrente->nCodCC;
                }
            }
            $p++;
        } while ($p <= $totalPaginas);

        return false;

    }

    public static function getCodigoCategoria($categoriaDesc, App $app)
    {
        $categoriaService = new CategoriasCadastroJsonClient($app);
        $request = new CategoriaListRequest();

        $p = 1;
        do {
            $request->registros_por_pagina = 100;
            $request->pagina = $p;
            $response = $categoriaService->ListarCategorias($request);
            $totalPaginas = $response->total_de_paginas;
            foreach ($response->categoria_cadastro as $categoria_cadastro) {
                if ($categoria_cadastro->descricao == $categoriaDesc) {
                    return $categoria_cadastro->codigo;
                }
            }
            $p++;
        } while ($p <= $totalPaginas);

        return false;
    }
}