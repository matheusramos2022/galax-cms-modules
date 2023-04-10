<?php

namespace App\Business\V1;

use App\Business\V1\Business;

class Functionality
{
    use Business;

    public function show(int $id)
    {
        return $this->repository->show($id);
    }
}