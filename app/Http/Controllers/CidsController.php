<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cid;

class CidsController extends Controller
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
        return view('cid.index')
            ->with('cid', Cid::orderBy('id', 'DESC')
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
        return view('cid.create');
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
            'cid_nome' => 'sometimes',
            'cid_codigo' => 'sometimes',
            'cid_descricao' => 'sometimes'
        ]);

        Cid::create([
            'cid_nome' => $request->input('cid_nome'),
            'cid_codigo' => $request -> input('cid_codigo'),
            'cid_descricao' => $request->input('cid_descricao')

        ]);

        return redirect( '/cid')
            ->with('message', 'CID cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('cid.show')
            ->with('cid', Cid::where('id', $id)->first());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('cid.edit')
            ->with('cid', Cid::where('id', $id)->first());
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
            'cid_nome' => 'sometimes',
            'cid_codigo' => 'sometimes',
            'cid_descricao' => 'sometimes'

        ]);

        Cid::where('id', $id)
            ->update([
                'cid_nome' => $request->input('cid_nome'),
                'cid_codigo' => $request -> input('cid_codigo'),
                'cid_descricao' => $request->input('cid_descricao')
            ]);

            return redirect('/cid')
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
        $cid = Cid::where('id', $id);
        $cid->delete();

        return redirect('/cid')
            ->with('message', 'O cid foi apagado do sistema');
    }
}
