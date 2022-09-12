@extends('layouts.app')

@section('title', 'Listagem')

@section('content')

    <div class="container">
        <div class="row">

            <div class="col-md-6 mt-5 mb-5">
                <h1>Listagem de Jogos</h1>
            </div>

            <div class="col-md-6 mt-5 mb-5 text-end">
                <a class="btn btn-success" href="{{ route('jogos-create') }}">Novo jogo</a>
            </div>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Ano de criação</th>
                        <th scope="col">Valor</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Excluir</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($jogos as $jogo)
                        <tr>
                            <th scope="row">{{ $jogo->id }}</th>
                            <td>{{ $jogo->nome }}</td>
                            <td>{{ $jogo->categoria }}</td>
                            <td>{{ $jogo->ano_criacao }}</td>
                            <td>{{ 'R$ ' . $jogo->valor . ',00' }}</td>
                            <td><a href="{{ route('jogos-edit', ['id' => $jogo->id]) }}" class="btn btn-warning">Editar</a>
                            <td>
                                <form action="{{ route('jogos-destroy', ['id' => $jogo->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Excluir</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
