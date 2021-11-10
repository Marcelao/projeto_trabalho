@extends('layouts.app')

@section('content')
<div class="main-card mb-3 card">
    <div class="card-header">{{ __('Cadastro de Usuário') }}
        <div class="btn-actions-pane-right">
            <div role="group" class="btn-group-sm btn-group">
                <a href="{{ route('cadastro') }}" class="active btn btn-focus">Cadastro</a>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <table class="align-middle mb-0 table table-borderless table-striped table-hover">
            <thead>
                <tr>
                    <th class="text-center">#</th>
                    <th>Nome</th>
                    <th class="text-center">Data</th>
                    <th class="text-center">Valor</th>
                    <th class="text-center"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($detalhe_lista as $lista)
                    <tr>
                        <td class="text-center text-muted">#{{$lista['id_cadastro']}}</td>
                        <td>
                            <div class="widget-content p-0">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left flex2">
                                        <div class="widget-heading">{{$lista['nome']}}</div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="text-center">{{ date_format(date_create_from_format('Y-m-d', $lista['data']), 'd/m/Y')  }}</td>
                        <td class="text-center">
                            <div class="badge badge-warning">{{ number_format($lista['valor'], 2, ',', '.') }}</div>
                        </td>
                        <td class="text-center">
                            <a href="{{ route('excluir') }}" class="active btn btn-focus">Excluir</a>
                            <a href="{{ route('alterar' , ['numero' => $lista['id_cadastro']]) }}" class="active btn btn-focus">Alterar</a>
                            {{ csrf_field() }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
