<?php

namespace App\Business\V1;

use App\Business\V1\Business;

class Methods
{
    use Business;

    public function show(int $idMetodo)
    {
        return $this->repository->show($idMetodo);
    }
}