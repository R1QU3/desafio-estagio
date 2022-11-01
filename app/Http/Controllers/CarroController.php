<?php

namespace App\Http\Controllers;

use App\Models\Carro;
use App\Models\CarrosMarca;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class CarroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carros = Carro::paginate(10)->through(function($carro) {
            return [
                'id' => $carro->id,
                'nome' => $carro->nome,
                'marca' => $carro->CarroMarca,
                'motorizacao' => $carro->motorizacao,
                'potencia' => $carro->potencia,
                'cambio' => $carro->cambio,
                'direcao' => $carro->direcao,
                'ano' => $carro->ano,
                'hora' => $carro->valor_hora,
                'gasolina' => $carro->gasolina,
                'alcool' => $carro->alcool,
                'eletrico' => $carro->eletrico,
                'disel' => $carro->disel,
            ];
        });
        return Inertia::render('Crud/Carros/Index', [
            "tableCarros" => $carros,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $allMarcas = CarrosMarca::all();
        return Inertia::render('Crud/Carros/Create', [
            "allMarcas" => $allMarcas,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            "nome" => "required|max:50",
            "motorizacao" => "required|max:3",
            "potencia" => "required|max:4",
            "cambio" => "required|max:50",
            "direcao" => "required|max:20",
            "ano" => "required|max:4",
            "gasolina" => "required|boolean",
            "alcool" => "required|boolean",
            "eletrico" => "required|boolean",
            "disel" => "required|boolean",
        ]);
        Carro::create($request->all());
        return Redirect::route('carros.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Carro  $carro
     * @return \Illuminate\Http\Response
     */
    public function show(Carro $id)
    {
        $id->CarroMarca;
        return Inertia::render('Crud/Carros/Show', [
            "targetCarro" => $id,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Carro  $carro
     * @return \Illuminate\Http\Response
     */
    public function edit(Carro $id)
    {
        $target = $id;
        $allMarcas = CarrosMarca::all();
        return Inertia::render('Crud/Carros/Edit', [
            "targetCarro" => $target,
            "allMarcas" => $allMarcas,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Carro  $carro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Carro $id)
    {
        $validate = $request->validate([
            "nome" => "required|max:50",
            "motorizacao" => "required|max:3",
            "potencia" => "required|max:4",
            "cambio" => "required|max:50",
            "direcao" => "required|max:20",
            "ano" => "required|max:4",
            "gasolina" => "required|boolean",
            "alcool" => "required|boolean",
            "eletrico" => "required|boolean",
            "disel" => "required|boolean",
        ]);
        $id->update($request->all());
        return Redirect::route('carros.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Carro  $carro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Carro $carro)
    {
        //
    }
}
