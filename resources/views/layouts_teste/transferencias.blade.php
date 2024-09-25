<!--tela do gestor-->
@extends('layouts.app-layout')

@section('header')
    <!-- Header content here -->
    header
@endsection
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('/') }}">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Listar Transferências</li>
@endsection
@section('content')
    <!-- Content area here -->
    content
    <div class="container">
        <div class="row">
            <div class="col-8">
                <form>
                    <div class="mb-3 form-group">
                        <label for="numero_transferencia" class="form-label">Número de Transferência:</label> <!--campo automático desabilitado após o carregamento da página, irá buscar, recuperar e preencher o campo baseado no banco de dados-->
                        <input type="text" id="numero_transferencia" name="numero_transferencia" class="form-control" disabled>
                    </div>
                    <div class="mb-3 form-group">
                        <label for="remetente" class="form-label">Remetente:</label>
                        <select id="remetente" name="remetente" class="form-select">
                            <option selected> Escolha quem pede (acesso gestor) <!-- o sistema vai recuperar o nome da unidade após logado e a opção será preenchida automaticamente e será desativado, prevenção de erros-->
                            @for ($i = 1; $i <= 5; $i++)
                                <option value="{{ $i }}">Unidade {{ $i }}</option>
                            @endfor
                        </select>
                    </div>
                    <div class="mb-3 form-group">
                        <label for="destinatario" class="form-label">Destinatário:</label>
                        <select id="destinatario" name="destinatario" class="form-select">
                            <option selected> Escolha para onde será destinado</option>
                            @for ($i = 1; $i <= 5; $i++)
                                <option value="{{ $i }}"> Unidade recebedora {{ $i }}</option>
                            @endfor
                        </select>
                    </div>
                    <div class="mb-3 form-group">
                        <label for="medicamento" class="form-label">Medicamento:</label>
                        <select class="form-control"  id="id_medicamento" name="medicamento" aria-label="medicamento">
                            <option selected>Escolha o medicamento</option>
                            <option>Med1</option>
                            <option>Med2</option>
                            <option>Med3</option>
                            <option>Med4</option>
                            <option>Med5</option>
                        </select>
                    </div>
                    <div class="mb-3 form-group">
                        <label for="quantidade" class="form-label">Quantidade:</label>
                        <input type="number" id="id_quantidade" name="quantidade" class="form-control">
                    </div>
                    <div class="mb-3 form-group">
                        <button type="reset" class="btn btn-secondary me-2">Limpar</button>
                        <button type="submit" class="btn btn-primary">Concluir</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    <!-- Footer content here -->
    footer
@endsection

