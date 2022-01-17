<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;
//use Cviebrock\EloquentSluggable\Services\SlugService;

class AlunosController extends Controller
{

    /**
     * Criando segurança que impede usuários de editar/cadastrar sem estar logado
     *
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('alunos.index')
            ->with('alunos', Aluno::orderBy('updated_at', 'DESC')->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('alunos.create');
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
            'aluno_nome' => 'sometimes',
            'aluno_sobrenome' => 'sometimes',
            'aluno_pai' => 'sometimes',
            'aluno_mae' => 'sometimes',
            'aluno_nascimento' => 'sometimes',
            'aluno_descricao1' => 'sometimes',
            'aluno_descricao2' => 'sometimes',
            'aluno_telefone' => 'sometimes',
            'aluno_email' => 'sometimes',
            'aluno_genero' => 'sometimes',
            'aluno_deficiencia' => 'sometimes',
            'aluno_alimentacao' => 'sometimes',
            'aluno_anam_alimentacao' => 'sometimes',
            'aluno_anam_independencia' => 'sometimes',
            'aluno_anam_infos' => 'sometimes',
            'aluno_anam_psicomotor' => 'sometimes',
            'aluno_anam_linguagem' => 'sometimes',
            'aluno_anam_familia' => 'sometimes',
            'aluno_anam_comportamento' => 'sometimes',
            'image' => 'sometimes|mimes: jpg,png,jpg|max:5048'
        ]);

        //nomeando o arquivo de imagem e salvando no server
        if ($request->hasFile('image')) {
                $newImageName = uniqid() . '-' . $request->aluno_nome . '.' .
                $request->image->extension();

                $request->image->move(public_path('images'), $newImageName);
        }
        else{
            $newImageName = null;
        }


        Aluno::create([
            'aluno_nome' => $request->input('aluno_nome'),
            'aluno_sobrenome' => $request->input('aluno_sobrenome'),
            'aluno_pai' => $request->input('aluno_pai'),
            'aluno_mae' => $request->input('aluno_mae'),
            'aluno_nascimento' => $request->input('aluno_nascimento'),
            'aluno_descricao1' => $request->input('aluno_descricao1'),
            'aluno_descricao2' => $request->input('aluno_descricao2'),
            'aluno_telefone' => $request -> input('aluno_telefone'),
            'aluno_email' => $request->input('aluno_email'),
            'aluno_genero' => $request->input('aluno_genero'),
            'aluno_deficiencia' => $request -> input ('aluno_deficiencia'),
            'aluno_alimentacao' => $request -> input ('aluno_alimentacao'),

            'aluno_anam_alimentacao' => $request -> input ('aluno_anam_alimentacao'),
            'aluno_anam_independencia' => $request -> input ('aluno_anam_independencia'),
            'aluno_anam_infos' => $request -> input ('aluno_anam_infos'),
            'aluno_anam_psicomotor' => $request -> input ('aluno_anam_psicomotor'),
            'aluno_anam_comportamento' => $request -> input ('aluno_anam_comportamento'),
            'aluno_anam_linguagem' => $request -> input ('aluno_anam_linguagem'),
            'aluno_anam_familia' => $request -> input ('aluno_anam_familia'),

            //'slug' =>  SlugService::createSlug(Aluno::class, 'slug', $request->title),
            'image_path' => $newImageName,
            'user_id' => auth()->user()->id
        ]);

        return redirect( '/alunos')->with('message', 'Aluno cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('alunos.show')
            ->with('aluno', Aluno::where('id', $id)->first());
    }

    /*
    * UTILIZANDO SLUG PARA CRIAR LINKS COM BASE NO TÍTULO
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     *
    public function show($slug)
    {
        return view('alunos.show')
            ->with('aluno', Aluno::where('slug', $slug)->first());

    }
    **/

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('alunos.edit')
            ->with('aluno', Aluno::where('id', $id)->first());
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
            'aluno_nome' => 'sometimes',
            'aluno_sobrenome' => 'sometimes',
            'aluno_pai' => 'sometimes',
            'aluno_mae' => 'sometimes',
            'aluno_nascimento' => 'sometimes',
            'aluno_descricao1' => 'sometimes',
            'aluno_descricao2' => 'sometimes',
            'aluno_telefone' => 'sometimes',
            'aluno_deficiencia' => 'sometimes',
            'aluno_email' => 'sometimes',
            'aluno_genero' => 'sometimes',
            'aluno_alimentacao' => 'sometimes',
            'aluno_anam_alimentacao' => 'sometimes',
            'aluno_anam_independencia' => 'sometimes',
            'aluno_anam_infos' => 'sometimes',
            'aluno_anam_psicomotor' => 'sometimes',
            'aluno_anam_linguagem' => 'sometimes',
            'aluno_anam_familia' => 'sometimes',
            'aluno_anam_comportamento' => 'sometimes',
        ]);

        Aluno::where('id', $id)
            ->update([
                'aluno_nome' => $request->input('aluno_nome'),
                'aluno_sobrenome' => $request->input('aluno_sobrenome'),
                'aluno_pai' => $request->input('aluno_pai'),
                'aluno_mae' => $request->input('aluno_mae'),
                'aluno_nascimento' => $request->input('aluno_nascimento'),
                'aluno_descricao1' => $request->input('aluno_descricao1'),
                'aluno_descricao2' => $request->input('aluno_descricao2'),
                'aluno_telefone' => $request -> input('aluno_telefone'),
                'aluno_email' => $request->input('aluno_email'),
                'aluno_genero' => $request->input('aluno_genero'),
                'aluno_deficiencia' => $request->input('aluno_deficiencia'),
                'aluno_alimentacao' => $request -> input ('aluno_alimentacao'),
                'aluno_anam_alimentacao' => $request -> input ('aluno_anam_alimentacao'),
                'aluno_anam_independencia' => $request -> input ('aluno_anam_independencia'),
                'aluno_anam_infos' => $request -> input ('aluno_anam_infos'),
                'aluno_anam_psicomotor' => $request -> input ('aluno_anam_psicomotor'),
                'aluno_anam_comportamento' => $request -> input ('aluno_anam_comportamento'),
                'aluno_anam_linguagem' => $request -> input ('aluno_anam_linguagem'),
                'aluno_anam_familia' => $request -> input ('aluno_anam_familia'),
               // 'slug' =>  SlugService::createSlug(Aluno::class, 'slug', $request->aluno_nome),
                'user_id' => auth()->user()->id
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
        $aluno = Aluno::where('id', $id);
        $aluno->delete();

        return redirect('/alunos')
        ->with('message', 'O aluno foi apagado do sistema');
    }
}
