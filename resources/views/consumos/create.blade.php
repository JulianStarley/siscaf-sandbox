@extends('layouts.app-layout')

@section('sidebar')

@endsection

@section('header')

@endsection

@section('content')

    <h1>Criar novo consumo</h1>

    <form action="{{ route('consumos.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="unidade_id">Unidade:</label>
            <select name="unidade_id" id="unidade_id" class="form-control">
                @foreach($unidades as $unidade)
                @if(isset($unidade) && $unidade instanceof \App\Models\Unidade)
                    <option value="{{ $unidade->id }}">{{ $unidade->nome }}</option>
                @endif
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="data">Data:</label>
            <input type="date" name="data" id="data" class="form-control">
        </div>

        <div class="form-group">
            <label for="user_id">Usuário:</label>
            <select name="user_id" id="user_id" class="form-control">
                @foreach($users as $user)
                @if(isset($user) && $user instanceof \App\Models\User)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endif
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="consumos_itens">Itens do consumo:</label>
            <table id="consumos_itens_table">
                <tr>
                    <th>Medicamento</th>
                    <th>Quantidade</th>
                    <th>Valor unitário</th>
                    <th>Valor total</th>
                    <th>Ações</th>
                </tr>
                @for($i = 0; $i < 5; $i++) <!-- assume 5 items for now, adjust as needed -->
                <tr>
                    <td>
                        <select name="consumos_itens[{{ $i }}][medicamento_id]" id="consumos_itens_{{ $i }}_medicamento_id" class="form-control">
                            @foreach($medicamentos as $medicamento)
                            @if(isset($medicamento) && $medicamento instanceof \App\Models\Medicamento)
                                <option value="{{ $medicamento->id }}">{{ $medicamento->nome }}</option>
                            @endif
                            @endforeach
                        </select>
                    </td>
                    <td>
                        <input type="number" name="consumos_itens[{{ $i }}][quantidade]" id="consumos_itens_{{ $i }}_quantidade" class="form-control">
                    </td>
                    <td>
                        <input type="number" name="consumos_itens[{{ $i }}][valor_unitario]" id="consumos_itens_{{ $i }}_valor_unitario" class="form-control">
                    </td>
                    <td>
                        <input type="number" name="consumos_itens[{{ $i }}][valor_total]" id="consumos_itens_{{ $i }}_valor_total" class="form-control" readonly>
                    </td>
                    <td>
                        <button type="button" class="btn btn-danger" onclick="removeItem({{ $i }})">Remover</button>
                    </td>
                </tr>
                @endfor
            </table>
            <button type="button" class="btn btn-primary" onclick="addItem()">Adicionar item</button>
        </div>


        <button type="submit" class="btn btn-primary">Criar</button>
    </form>
    <script>
        let itemCount = 5; // initial item count

        function addItem() {
            const table = document.getElementById('consumos_itens_table');
            const newRow = table.insertRow(-1);
            newRow.innerHTML = `
                <td>
                    <select name="consumos_itens[${itemCount}][medicamento_id]" id="consumos_itens_${itemCount}_medicamento_id" class="form-control">
                        @foreach($medicamentos as $medicamento)
                        @if(isset($medicamento) && $medicamento instanceof \App\Models\Medicamento)
                            <option value="{{ $medicamento->id }}">{{ $medicamento->nome }}</option>
                        @endif
                        @endforeach
                    </select>
                </td>
                <td>
                    <input type="number" name="consumos_itens[${itemCount}][quantidade]" id="consumos_itens_${itemCount}_quantidade"
                                        class="form-control">
                </td>
                <td>
                    <input type="number" name="consumos_itens[${itemCount}][valor_unitario]" id="consumos_itens_${itemCount}_valor_unitario" class="form-control">
                </td>
                <td>
                    <input type="number" name="consumos_itens[${itemCount}][valor_total]" id="consumos_itens_${itemCount}_valor_total" class="form-control" readonly>
                </td>
                <td>
                    <button type="button" class="btn btn-danger" onclick="removeItem(${itemCount})">Remover</button>
                </td>
            `;
            itemCount++;
        }

        function removeItem(index) {
            const table = document.getElementById('consumos_itens_table');
            table.deleteRow(index + 1);
        }
    </script>
@endsection
