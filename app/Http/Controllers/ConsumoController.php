<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consumos;
use Symfony\Contracts\Service\Attribute\Required;

class ConsumoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consumos = Consumos::all();
        return view('consumos.index', compact('consumos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('consumos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validade([
            'unidade_id' => 'required',
            'data' =>  'required|date',
            'user_id' => 'required',
        ]);

        $consumo = new Consumos();
        $consumo->unidade_id = $request->input('unidade_id');
        $consumo->data = $request->input('data');
        $consumo->user_id = $request->input('user_id');
        $consumo->save();
        return redirect()->route('consumos.index')->with('success', 'Consumo efetuado com sucesso!');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $consumo = Consumos::find($id);
        return view('consumos.show', compact('consumo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $consumo = Consumos::find($id);
        return view('consumos.edit', compact('consumo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'unidade_id' => 'required',
            'data' => 'required|date',
            'user_id' => 'required',
        ]);

        $consumo = Consumos::find($id);
        $consumo->unidade_id = $request->input('unidade_id');
        $consumo->data = $request->input('data');
        $consumo->user_id = $request->input('user_id');
        $consumo->save();
        return redirect()->route('consumos.index')->with('success', 'Consumo atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $consumo = Consumos::find($id);
        $consumo->delete();
        return redirect()->route('consumos.index')->with('success', 'Consumo excluído com sucesso!');
    }
}
