<?php

namespace App\Repository\Interfaces;

use Illuminate\Database\Eloquent\Collection;

interface Functionality
{
    public function show(int $id): Collection;
}