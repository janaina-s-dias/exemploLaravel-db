<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aluno;
use App\Curso;

class AlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alunos = Aluno::all(); //obtem todos os alunos cadastrados
        return view('aluno.index')->with('alunos',$alunos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $curso = Curso::pluck('sigla','id');
        return view('aluno.create')->with('curso',$curso);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
                'nome' => 'required|max:100',
                'endereco' => 'required|max:100',
                'dataNascimento' => 'required',
                'curso_id' => 'required',
            ]);
        Aluno::create($request->all());
        return redirect('aluno');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $aluno = Aluno::find($id);
        $curso = Curso::pluck('sigla','id');
        return view("aluno.edit")->with('aluno',$aluno)->with('curso',$curso);
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
        $this->validate($request,[
                'nome' => 'required|max:100',
                'endereco' => 'required|max:100',
                'dataNascimento' => 'required',
                'curso_id' => 'required',
            ]);
        $aluno = Aluno::find($id);
        $aluno->update($request->all());
        return redirect('aluno');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Aluno::find($id)->delete();
        return redirect('aluno');
    }
}
