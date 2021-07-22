<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Aluno;

class AlunoControlador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alunos = Aluno::all();
        return view('alunos', compact('alunos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('novoaluno');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $regras = [
            'name' => 'required | min:3',
            'birth' => 'required | min:2',
            'phone' => 'required | min:12',
            'email' => 'required | email',
            'gender' => 'required | min:8 | max:9'
        ];

        $mensagens = [
            'name.required' => 'Ops você esqueceu de preencher o nome do aluno',
            'birth.required' => 'Ops você esqueceu de preencher a data de aniversário do aluno',
            'phone.required' => 'Ops você esqueceu de preencher o número de telefone do aluno',
            'email.required' => 'Ops você esqueceu de preencher o E-mail do aluno',
            'gender.required' => 'Ops você esqueceu de preencher o gênero do aluno',
        ];

        $request->validate($regras, $mensagens);
           
        $aluno = new Aluno();
        $aluno->name = $request->input('name');
        $aluno->phone = $request->input('phone');
        $aluno->email = $request->input('email');
        $aluno->birth = $request->input('birth');
        $aluno->gender = $request->input('gender');
        $aluno->save();
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $id->delete();
        return redirect('/listaaluno');
    }
}
