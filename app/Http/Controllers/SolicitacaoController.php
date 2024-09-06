<?php

namespace App\Http\Controllers;
use App\Models\Unidades;
use App\Models\Farmaceuticos;
use App\Models\Medicamentos;
use Illuminate\Http\Request;
use App\Models\Solicitacoes;
use App\Http\Controllers\SolicitacaoItemController;
use App\Models\Solicitacoes_itens;
use GrahamCampbell\ResultType\Success;

class SolicitacaoController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $solicitacoes = Solicitacoes::all();
        return view('solicitacoes.index', compact('solicitacoes'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Solicitacoes $solicitacoes)
    {

        return view('solicitacoes.show', compact('solicitacoes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $unidades = Unidades::all();
        $farmaceuticos = Farmaceuticos::all();
        $medicamentos = Medicamentos::all();
        $solicitacoes = new Solicitacoes();
        $ultimoNumeroSolicitacao = Solicitacoes::max('numero_solicitacao');
        $proximoNumeroSolicitacao = $ultimoNumeroSolicitacao + 1;
        $solicitacao_itens = Solicitacoes_itens::all();
        return view('solicitacoes.create', compact('solicitacoes','unidades', 'farmaceuticos', 'medicamentos', 'proximoNumeroSolicitacao', 'solicitacao_itens'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $solicitacoes = Solicitacoes::create([]);

        $itens = [];
        foreach ($request->input('medicamento_id') as $key => $medicamento_id){
        $itens[] = new Solicitacoes_itens([
        $solicitacoes->fill($request->all())
        ]);
        $solicitacoes->save();
        $solicitacaoItemController = new SolicitacaoItemController();
        $solicitacaoItemController->createItems($request, $solicitacoes);
        return redirect()->route('solicitacoes.index', $solicitacoes)->with('sucess', 'Solicitação criada com sucesso!');
        }
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $solicitacao = Solicitacoes::find($id);
        $unidades = Unidades::all();
        $farmaceuticos = Farmaceuticos::all();
        $medicamentos = Medicamentos::all();
        return view('solicitacoes.edit', compact('solicitacao', 'unidades', 'farmaceuticos', 'medicamentos'));
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
        $solicitacao = Solicitacoes::find($id);
        $solicitacao->unidade_id = $request->input('unidade_id');
        $solicitacao->farmaceutico_id = $request->input('farmaceutico_id');
        $solicitacao->medicamento_id = $request->input('medicamento_id');
        $solicitacao->data_solicitacao = $request->input('data_solicitacao');
        $solicitacao->numero_solicitacao = $request->input('numero_solicitacao');
        $solicitacao->estado_solicitacao = $request->input('estado_solicitacao');
        $solicitacao->observacao = $request->input('observacao');
        $solicitacao->save();
        return redirect()->route('solicitacoes.index')->with('Success', 'Solicitação atualizada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $solicitacao = Solicitacoes::find($id);
        $solicitacao->delete();
        return redirect()->route('solicitacoes.index');
    }
}
