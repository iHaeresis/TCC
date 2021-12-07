<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Escola;

class EscolasController extends Controller
{
     /**
     * Criando segurança que impede usuários de editar/cadastrar sem estar logado
     *
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']] );
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('escolas.index')
            ->with('escolas', Escola::orderBy('id', 'DESC')
                        ->get()
                    );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('escolas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'escola_nome' => 'required',
            'escola_cep' => 'required',
            'escola_rua' => 'required',
            'escola_numero' => 'required',
            'escola_bairro' => 'required',
            'escola_telefone' => 'required',
            'escola_email' => 'required'
        ]);

        Escola::create([
            'escola_nome' => $request->input('escola_nome'),
            'escola_cep' => $request -> input('escola_cep'),
            'escola_rua' => $request->input('escola_cep'),
            'escola_numero' => $request->input('escola_numero'),
            'escola_bairro' => $request->input('escola_bairro'),
            'escola_telefone' => $request->input('escola_telefone'),
            'escola_email' => $request->input('escola_email')

        ]);

        return redirect( '/escolas')->with('message', 'Escola cadastrada com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('escolas.show')
            ->with('escola', Escola::where('id', $id)->first());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('escolas.edit')
            ->with('escola', Escola::where('id', $id)->first());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'escola_nome' => 'required',
            'escola_cep' => 'required',
            'escola_rua' => 'required',
            'escola_numero' => 'required',
            'escola_bairro' => 'required',
            'escola_telefone' => 'required',
            'escola_email' => 'required'

        ]);

        Escola::where('id', $id)
            ->update([
                'escola_nome' => $request->input('escola_nome'),
                'escola_cep' => $request -> input('escola_cep'),
                'escola_rua' => $request->input('escola_cep'),
                'escola_numero' => $request->input('escola_numero'),
                'escola_bairro' => $request->input('escola_bairro'),
                'escola_telefone' => $request->input('escola_telefone'),
                'escola_email' => $request->input('escola_email')
            ]);

            return redirect('/alunos')
              ->with('message', 'Os dados foram atualizados');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $escola = Escola::where('id', $id);
        $escola->delete();

        return redirect('/escolas')
            ->with('message', 'A escola foi apagada do sistema');
    }
}
