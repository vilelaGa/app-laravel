<?php

namespace App\Http\Controllers;

use App\Models\Jogo;
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
}
