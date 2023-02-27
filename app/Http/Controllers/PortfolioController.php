<?php

namespace App\Http\Controllers;
use App\Models\Projeto;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    //
    public function index()
    {
        $projetos = Projeto::paginate();

        return view('welcome', compact('projetos'));
    }
}
