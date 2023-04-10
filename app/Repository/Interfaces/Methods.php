<?php

namespace App\Repository\Interfaces;

use Illuminate\Database\Eloquent\Collection;

interface Methods
{
    public function index(): Collection;

    public function show(int $id): Collection;
}