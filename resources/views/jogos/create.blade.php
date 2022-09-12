@extends('layouts.app')

@section('title', 'Create')

@section('content')

    <div class="container">
        <div class="row">


            <div class="col-md-6 mt-5 mb-5">
                <h1>Crie os jogos</h1>
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

            <form action="{{ route('jogos-store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <input type="text" name="nome" class="form-control mb-3" placeholder="Nome"
                        value="{{ old('nome') }}">
                    <input type="text" name="categoria" class="form-control mb-3" placeholder="Categoria"
                        value="{{ old('categoria') }}">
                    <input type="number" name="ano_criacao" class="form-control mb-3" placeholder="Ano criação"
                        value="{{ old('ano_criacao') }}">
                    <input type="number" name="valor" class="form-control mb-3" placeholder="Valor"
                        value="{{ old('valor') }}">
                    <button class="btn btn-primary" type="submit">Criar</button>
                </div>

            </form>

        </div>
    </div>

@endsection
