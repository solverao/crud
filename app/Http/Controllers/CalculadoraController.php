<?php

namespace App\Http\Controllers;

use App\Models\Calculadora;
use App\Models\User;
use Brick\Math\Internal\Calculator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CalculadoraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $calculadora = Calculadora::paginate(5);
        return view('calculadora.index',compact('calculadora'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $operadores = Calculadora::operadoresArray();
        return view('calculadora.create',compact('operadores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        $user->calculadora()->create([
            'valor1'=>$request->valor1,
            'valor2'=>$request->valor2,
            'operadores'=>$request->operadores,
        ]);
        return redirect()->route('calculadora.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Calculadora  $calculadora
     * @return \Illuminate\Http\Response
     */
    public function show(Calculadora $calculadora)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Calculadora  $calculadora
     * @return \Illuminate\Http\Response
     */
    public function edit(Calculadora $calculadora)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Calculadora  $calculadora
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Calculadora $calculadora)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Calculadora  $calculadora
     * @return \Illuminate\Http\Response
     */
    public function destroy(Calculadora $calculadora)
    {
        //
    }
}
