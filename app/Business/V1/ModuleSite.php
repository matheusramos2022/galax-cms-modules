<?php

namespace App\Business\V1;

use App\Business\V1\Business;
use App\Business\V1\Module;
use Illuminate\Http\Client\Request;
use App\Business\V1\Methods;
use App\Exceptions\ModulosSiteException;

class ModuleSite
{
    use Business;

    public function index()
    {
        return $this->repository->index();
    }

    public function show(Request $request)
    {
        return $this->repository->show($request);
    }

    public function create(Request $request)
    {
        $moduleSiteToInsert = $request->only('id_funcionalidade', 'id_metodo', 'nome_pagina', 'email_pagina');
        $this->validatePageName($moduleSiteToInsert->nome_pagina);
        $this->createModule($moduleSiteToInsert->nome_pagina, $moduleSiteToInsert->id_metodo);
        return $this->repository->create($moduleSiteToInsert);
    }

    private function createModule(string $nomePagina, int $idMetodo)
    {
        $metodo = (new Methods)->show($idMetodo);
        return (new Module)->createModule($nomePagina, $metodo);
    }

    private function validatePageName(string $nomePag)
    {
        $this->getModulePorNomePlural($nomePag);
    }

    private function getModulePorNomePlural(string $nomePag) : void
    {   
        if ($this->repository->getModulePorNomePlural($nomePag)){
            throw new ModulosSiteException('Nome de página já existe');
        }
    }

    public function delete($request)
    {   
        return $this->repository->delete($request);
    }

}