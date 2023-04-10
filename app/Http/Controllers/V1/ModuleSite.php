<?php

namespace App\Http\Controllers\V1;

use App\Facades\Auth\DataBaseFacade;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Client\Request;

class ModuleSite extends Controller
{
    public function index()
    {
        return $this->business->index();
    }

    public function show(Request $request)
    {
        return $this->business->show($request);
    }

    public function create(Request $request)
    {
        return $this->business->create($request);
    }

    public function delete(Request $request)
    {
        return $this->business->delete($request);
    }
}