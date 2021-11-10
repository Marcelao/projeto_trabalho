@extends('layouts.app')

@section('content')
<div class="main-card mb-3 card">
    <div class="card-body"><h5 class="card-title">{{ __('Alterar Cadastro') }}</h5>
        @foreach($altera_cadastro as $key => $lista)
            <form action="{{ route('atualizar', ['id' => $lista['id_cadastro']] ) }}" class="form-horizontal" method="post">
                {{ csrf_field() }}
                <div class="position-relative form-group">
                    <label class="">Nome</label>
                    <input name="Nome" id="Nome" value="{{ $lista['Nome'] }}" placeholder="Digite o Nome" type="text" class="form-control">
                </div>
                <div class="position-relative form-group">
                    <label class="">Data</label>
                    <input name="data" id="data" value="{{ $lista['Data'] }}" placeholder="Digite uma Data" type="date" class="form-control">
                </div>
                <div class="position-relative form-group">
                    <label class="">Valor</label>
                    <input name="valor" id="valor" value="{{ number_format($lista['Valor'], 2, '.', '.')}}" placeholder="Digite um Valor com ponto" type="money_format" class="form-control">
                </div>

                <button class="mt-1 btn btn-primary">Alterar </button>
                <a href="{{ route('home') }}" class="active btn btn-focus">Cancelar</a>
            </form>
        @endforeach
    </div>
</div>
@endsection
