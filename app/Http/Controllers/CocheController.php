<?php

namespace App\Http\Controllers;

use App\Http\Resources\CocheResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

use App\Models\Coche;
use App\Models\Marca;
use League\CommonMark\Extension\CommonMark\Node\Inline\Code;

class CocheController extends Controller
{
    public function detalles(int $id)
    {
        $key = "detalle-" . $id;
        $coche = Cache::remember($key, 3600, function () use ($id) {
            return Coche::find($id);
        });
        return view('detalles', ['coches' => [$coche]]);
    }
    public function filtrar()
    {

        $query = Coche::query()->whereExists(function ($query) {
            $query->from('marcas')
                ->where('marcas.nombre', '=', request('busqueda'))
                ->whereColumn('marcas.id', '=', 'coches.marca_id');
        });

        $query->orWhere('modelo', '=', request('busqueda'));
        $coches = $query->with('marca')->simplePaginate(5);
        return view('listado', ['coches' => $coches]);
    }

    public function datosCoche()
    {
        return CocheResource::collection(Coche::latest()->paginate(10));
    }

    public function detallesCoche($id)
    {
        $coche = Coche::find($id);

        if ($coche) {
            return new CocheResource($coche);
        } else {
            return response()->json(['mensaje' => 'No encontrado'], 404);
        }
    }
}
// return CocheResource::collection(Coche::find($id));