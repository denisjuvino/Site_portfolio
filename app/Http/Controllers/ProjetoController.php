<?php

namespace App\Http\Controllers;

use App\Models\Projeto;
use Illuminate\Http\Request;

/**
 * Class ProjetoController
 * @package App\Http\Controllers
 */
class ProjetoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $projetos = Projeto::paginate();

        return view('projeto.index', compact('projetos'))
            ->with('i', (request()->input('page', 1) - 1) * $projetos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $projeto = new Projeto();
        return view('projeto.create', compact('projeto'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Projeto::$rules);

        $projeto = Projeto::create($request->all());

        return redirect()->route('projetos.index')
            ->with('success', 'Projeto created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $projeto = Projeto::find($id);

        return view('projeto.show', compact('projeto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $projeto = Projeto::find($id);

        return view('projeto.edit', compact('projeto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Projeto $projeto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Projeto $projeto)
    {
        request()->validate(Projeto::$rules);

        $projeto->update($request->all());

        return redirect()->route('projetos.index')
            ->with('success', 'Projeto updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $projeto = Projeto::find($id)->delete();

        return redirect()->route('projetos.index')
            ->with('success', 'Projeto deleted successfully');
    }
}
