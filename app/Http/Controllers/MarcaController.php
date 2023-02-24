<?php

namespace App\Http\Controllers;

use App\Http\Resources\MarcaResource;
use App\Models\Marca;
use Illuminate\Http\Request;

class MarcaController extends Controller
{
    public function index()
    {
        return MarcaResource::collection(Marca::all());
    }
}
