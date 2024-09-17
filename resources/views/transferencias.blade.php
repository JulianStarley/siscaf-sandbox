@extends('layouts.app-layout')

@section('header')
    <!-- Header content here -->
    header
@endsection

@section('content')
    <!-- Content area here -->
    content
    <div class="container">
        <div class="row">
            <div class="col-8 offset-2">
                <form>
                    <div class="mb-3 form-group">
                        <label for="remetente" class="form-label">Remetente:</label>
                        <select id="remetente" name="remetente" class="form-select">
                            @for ($i = 1; $i <= 5; $i++)
                                <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                        </select>
                    </div>
                    <div class="mb-3 form-group">
                        <label for="destinatario" class="form-label">Destinatário:</label>
                        <select id="destinatario" name="destinatario" class="form-select">
                            @for ($i = 1; $i <= 5; $i++)
                                <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                        </select>
                    </div>
                    <div class="mb-3 form-group">
                        <label for="numero_transferencia" class="form-label">Número de Transferência:</label>
                        <input type="text" id="numero_transferencia" name="numero_transferencia" class="form-control" disabled>
                    </div>
                    <div class="mb-3 form-group">
                        <label for="quantidade" class="form-label">Quantidade:</label>
                        <input type="number" id="quantidade" name="quantidade" class="form-control">
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

