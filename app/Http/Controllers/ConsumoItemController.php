<?php

namespace App\Http\Controllers;

use App\Models\Consumos;
use App\Models\Consumos_itens;
use Illuminate\Http\Request;

class ConsumoItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $consumos_itens = Consumos_itens::all();
       return view('consumos_itens.index', compact('consumos_itens'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('consumos_itens.create');
    }

    public function createItems(Request $request, Consumos $consumos){
        //cria uma nova instancia de consumo itens e a relação de codigo entre consumos e consumos itens

        foreach($request->input('itens') as $item){
            $consumoItem = new Consumos_itens();
            $consumoItem->consumo_id = $consumos->id;
            $consumoItem->fill($item);
            $consumoItem->save();

        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $consumoItem = new Consumos_itens();
        $consumoItem->medicamento_id = $request->input('medicamento_id');
        $consumoItem->consumo_id = $request->input('consumo_id');
        $consumoItem->quantidade = $request->input('quantidade');
        $consumoItem->user_id = $request->input('user_id');
        $consumoItem->save();
        return redirect()->route('consumo_itens.index')->with('success', 'consumo realizado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $consumoItem = Consumos_itens::find($id);
        return view('consumo_itens.show', compact('consumoItem'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $consumoItem = Consumos_itens::find($id);
        return view ('consumos_itens.edit', compact('consumos'));
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
        $consumoItem = Consumos_itens::find($id);
        $consumoItem->medicamento_id = $request->input('medicamento_id');
        $consumoItem->consumo_id = $request->input('consumo_id');
        $consumoItem->quantidade = $request->input('quantidade');
        $consumoItem->user_id = $request->input('user_id');
        $consumoItem->save();
        return redirect()->route('consumo_itens.index')->with('success', 'consumo atualizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $consumoItem = Consumos_itens::find($id);
        $consumoItem->delete();
        return redirect()->route('consumo_itens.index')->with('success', 'consumo excluido com sucesso');
    }
}
