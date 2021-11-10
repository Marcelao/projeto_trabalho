@extends('layouts.app')

@section('content')
<div class="main-card mb-3 card">
    <div class="card-body"><h5 class="card-title">{{ __('Novo Cadastro') }}</h5>
        <form action="{{ route('salvar') }}" class="form-horizontal" method="post">
            {{ csrf_field() }}
            <div class="position-relative form-group">
                <label class="">Nome</label>
                <input name="Nome" id="Nome" placeholder="Digite o Nome" type="text" class="form-control">
            </div>
            <div class="position-relative form-group">
                <label class="">Data</label>
                <input name="data" id="data" placeholder="Digite uma Data" type="date" class="form-control">
            </div>
            <div class="position-relative form-group">
                <label class="">Valor</label>
                <input name="valor" id="valor" placeholder="Digite um Valor com ponto" type="money_format" class="form-control">
            </div>

            <button class="mt-1 btn btn-primary">Cadastrar</button>
        </form>
    </div>
</div>
@endsection
