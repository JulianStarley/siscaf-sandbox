<?php

namespace App\Http\Controllers;

use App\Models\TipoPessoa;
use Illuminate\Http\Request;

class TipoPessoaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $per_page = $request->input('per_page', 100);
        $tipo_pessoas_OBJ = TipoPessoa::paginate($per_page);

    return view('tipo_pessoa.index', compact('tipo_pessoas_OBJ'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tipo_pessoa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tipo_pessoas_OBJ = new TipoPessoa();
        $tipo_pessoas_OBJ->tipo_pessoa = $request->input('tipo_pessoa');
        $tipo_pessoas_OBJ->save();
        return redirect()->route('tipo_pessoa.index')->with('success', 'Tipo criado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipo_pessoas_OBJ = TipoPessoa::find($id);
        return view('tipo_pessoa.edit', compact('tipo_pessoas_OBJ'));

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
        $tipo_pessoas_OBJ = TipoPessoa::find($id);
        $tipo_pessoas_OBJ->tipo_pessoa = $request->input('tipo_pessoa');
        $tipo_pessoas_OBJ->save();
        return redirect()->route('tipo_pessoa.index')->with('success', 'Tipo atualizado com sucesso!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tipo_pessoas_OBJ = TipoPessoa::find($id);
        $tipo_pessoas_OBJ->delete();
        return redirect()->route('tipo_pessoa.index')->with('success', 'Tipo excluído com sucesso!');
    }

    public function search(Request $request)
    {
    $search = $request->input('search');
    $tipo_pessoas_OBJ = TipoPessoa::where('nome', 'like', '%' . $search . '%')
        ->orWhere('cpf', 'like', '%' . $search . '%')
        ->orWhere('telefone', 'like', '%' . $search . '%')
        ->orWhere('tipo_pessoa', 'like', '%' . $search . '%')
        ->get();
    return response()->json($tipo_pessoas_OBJ);
    }

}
