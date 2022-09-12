@extends('layouts.app')

@section('title', 'Editar')

@section('content')

    <div class="container">
        <div class="row">


            <div class="col-md-6 mt-5 mb-5">
                <h1>Edite os jogos</h1>
            </div>

            <div class="col-md-6 mt-5 mb-5 text-end">
                <a class="btn btn-success" href="{{ route('jogos-index') }}">Listagem de jogos</a>
            </div>

            <div class="row">

                @if ($errors->any())
                    <p>
                        @foreach ($errors->all() as $error)
                            <p class="text-danger">{{ $error }}</p>
                        @endforeach
                    </p>
                @endif

            </div>


            <form action="{{ route('jogos-update', ['id' => $jogos->id]) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>Nome: </label>
                    <input type="text" name="nome" class="form-control mb-3" placeholder="Nome"
                        value="{{ $jogos['nome'] }}">
                    <label>Categoria: </label>
                    <input type="text" name="categoria" class="form-control mb-3" placeholder="Categoria"
                        value="{{ $jogos['categoria'] }}">
                    <label>Ano Criação: </label>
                    <input type="number" name="ano_criacao" class="form-control mb-3" placeholder="Ano criação"
                        value="{{ $jogos['ano_criacao'] }}">
                    <label>Valor: </label>
                    <input type="number" name="valor" class="form-control mb-3" placeholder="Valor"
                        value="{{ $jogos['valor'] }}">
                    <button class="btn btn-primary" type="submit">Editar</button>
                </div>

            </form>

        </div>
    </div>

@endsection
