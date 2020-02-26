<?php

class OmieUtils
{
    public static function getCodigoContaCorrente($contaCorrenteDesc, \Omie\Core\App $app)
    {
        $contaCorrenteService = new \Omie\Base\ContaCorrente\ContaCorrenteCadastroJsonClient($app);
        $request = new \Omie\Base\ContaCorrente\FinContaCorrenteResumoRequest();

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

    public static function getCodigoCategoria($categoriaDesc, \Omie\Core\App $app)
    {
        $categoriaService = new \Omie\Base\Categoria\CategoriasCadastroJsonClient($app);
        $request = new \Omie\Base\Categoria\CategoriaListRequest();

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