<?php

namespace App\Http\Controllers;

use App\Models\Pessoa;
use App\Models\TipoPessoa;
use Illuminate\Http\Request;

class PessoaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
    $per_page = $request->input('per_page', 100);
    $pessoas = Pessoa::paginate($per_page);

    return view('pessoas.index', compact('pessoas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pessoas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pessoa = new Pessoa();
        $pessoa->nome = $request->input('nome');
        $pessoa->cpf = $request->input('cpf');
        $pessoa->telefone = $request->input('telefone');
        $pessoa->observacao = $request->input('observacao');
        $pessoa->tipo_pessoa = $request->input('tipo_pessoa');
        $pessoa->save();
        return redirect()->route('pessoas.index')->with('success', 'Pessoa criada com sucesso!');
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
        $pessoa = Pessoa::find($id);
        $tipoPessoas = TipoPessoa::all();
        return view('pessoas.edit', compact('pessoa', 'tipoPessoas'));
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
        $pessoa = Pessoa::find($id);
        $pessoa->nome = $request->input('nome');
        $pessoa->cpf = $request->input('cpf');
        $pessoa->telefone = $request->input('telefone');
        $pessoa->observacao = $request->input('observacao');
        $pessoa->tipo_pessoa_id = $request->input('tipo_pessoa_id');
        $pessoa->save();
        return redirect()->route('pessoas.index')->with('success', 'Pessoa atualizada com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $pessoa = Pessoa::find($id);
        $pessoa->delete();
        return redirect()->route('pessoas.index')->with('success', 'Pessoa excluída com sucesso');
    }

    public function search(Request $request)
    {
    $search = $request->input('search');
    $pessoas = Pessoa::where('nome', 'like', '%' . $search . '%')
        ->orWhere('cpf', 'like', '%' . $search . '%')
        ->orWhere('telefone', 'like', '%' . $search . '%')
        ->orWhere('tipo_pessoa', 'like', '%' . $search . '%')
        ->get();
    return response()->json($pessoas);
    }
}
