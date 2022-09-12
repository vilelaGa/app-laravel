<?php

namespace App\Http\Controllers;

use App\Models\Jogo;
use App\Http\Requests\StoreUpdateJogo;
use Facade\FlareClient\Http\Response;
use Illuminate\Contracts\Queue\Job;
use Illuminate\Http\Request;

class jogosController extends Controller
{
    public function index($nome = null)
    {
        $jogos = Jogo::all();
        // dd($jogos);
        return view('jogos.index', ['jogos' => $jogos]);
    }

    public function create()
    {
        return view('jogos.create');
    }

    public function store(StoreUpdateJogo $request)
    {
        // dd($request);
        Jogo::create($request->all());
        return redirect()->route('jogos-index');
    }

    public function edit($id)
    {
        $jogos = Jogo::where('id', $id)->first();

        if (!empty($jogos)) {
            return view('jogos.edit', ['jogos' => $jogos]);
        } else {
            return redirect()->route('jogos-index');
        }
    }

    public function update(StoreUpdateJogo $request, $id)
    {
        // dd($id);

        $data = [
            'nome' => $request->nome,
            'categoria' => $request->categoria,
            'ano_criacao' => $request->ano_criacao,
            'valor' => $request->valor,
        ];

        Jogo::where('id', $id)->update($data);

        return redirect()->route('jogos-index');
    }

    public function destroy($id)
    {
        // dd($id);
        Jogo::where('id', $id)->delete();
        return redirect()->route('jogos-index');
    }
}
