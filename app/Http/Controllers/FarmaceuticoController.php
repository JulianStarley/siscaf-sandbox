<?php

namespace App\Http\Controllers;

use App\Models\Farmaceuticos;
use Illuminate\Http\Request;

class FarmaceuticoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $farmaceuticos =  Farmaceuticos::all();
        return view('farmaceuticos.index', compact('farmaceuticos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('farmaceuticos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $farmaceuticos = new Farmaceuticos();


        $farmaceuticos->crf = $request->input('crf');
        $farmaceuticos->observacao = $request->input('observacao');
        $farmaceuticos->ativo = $request->input('ativo');
        $farmaceuticos->save();

        return  redirect()->route('farmaceuticos.index')->with('sucess, Farmaceutico cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $farmaceuticos = Farmaceuticos::find($id);
        return view('farmaceuticos.show', compact('farmaceuticos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $farmaceuticos = Farmaceuticos::find($id);
        return view('farmaceuticos.show', compact('farmaceuticos'));
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
        $farmaceuticos = Farmaceuticos::find($id);
        $farmaceuticos->pessoas_id = $request->input('pessoas_id');
        $farmaceuticos->crf = $request->input('crf');
        $farmaceuticos->observacao = $request->input('observacao');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $farmaceuticos = Farmaceuticos::find($id);
            if($farmaceuticos){
                $farmaceuticos->delete();

                return redirect()->route('farmaceuticos.index')->with('sucess, farmaceuticoo excluido com sucesso');

            }else{

                return redirect()->route('farmaceuticos.index')->with('error, farmaceutico não encontrado');
            }

    }
}
