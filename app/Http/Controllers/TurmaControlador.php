<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Turma;

class TurmaControlador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $turmas = Turma::all();
        return view('turmas', compact('turmas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('novaturma');
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
            'year' => 'required',
            'level' => 'required',
            'serie' => 'required',
            'shift' => 'required',
        ];

        $mensagens = [
            'year.required' => 'Ops você esqueceu de preencher o ano',
            'level.required' => 'Ops você esqueceu de preencher o nível de ensino',
            'serie.required' => 'Ops você esqueceu de preencher a série',
            'shift.required' => 'Ops você esqueceu de preencher o Turno',
        ];

        $request->validate($regras, $mensagens);
           
        $turma = new Turma();
        $turma->year = $request->input('year');
        $turma->level = $request->input('level');
        $turma->serie = $request->input('serie');
        $turma->shift = $request->input('shift');
        $turma->save();
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
        return redirect('/listaturma');
    }
}
