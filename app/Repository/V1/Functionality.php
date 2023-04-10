<?php

namespace App\Repository\V1;

use App\Repository\Interfaces\Functionality as InterfaceFunctionality;
use Illuminate\Database\Eloquent\Collection;

class Functionality extends BaseRepository implements InterfaceFunctionality
{
    public function show(int $id): Collection
    {
        return $this->model->findById($id);
    }
}