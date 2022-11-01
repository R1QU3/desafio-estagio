<?php

namespace App\Http\Controllers;

use App\Models\CarrosMarca;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class CarrosMarcaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tableMarcas = CarrosMarca::paginate(10)->through(function($targetMarca) {
            return $targetMarca;
        });
        return Inertia::render('Crud/Marcas/Index', [
            "tableMarcas" => $tableMarcas,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('Crud/Marcas/Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate(['nome' => 'required|max:50']);
        CarrosMarca::create($request->all());
        return Redirect::route('marcas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CarrosMarca  $carrosMarca
     * @return \Illuminate\Http\Response
     */
    public function show(CarrosMarca $id)
    {
        $targetMarca = $id;
        return Inertia::render('Crud/Marcas/Show', [
            "targetMarca" => $targetMarca,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CarrosMarca  $carrosMarca
     * @return \Illuminate\Http\Response
     */
    public function edit(CarrosMarca $id)
    {
        $targetMarca = $id;
        return Inertia::render('Crud/Marcas/Edit', [
            "targetMarca" => $targetMarca,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CarrosMarca  $carrosMarca
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CarrosMarca $id)
    {
        $validated = $request->validate(['nome' => 'required|max:50']);
        $id->update($request->all());
        return Redirect::route('marcas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CarrosMarca  $carrosMarca
     * @return \Illuminate\Http\Response
     */
    public function destroy(CarrosMarca $id)
    {
        $id->delete();
        return Redirect::route('marcas.index');
    }
}
