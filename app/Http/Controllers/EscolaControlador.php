<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Escola;

class EscolaControlador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $escolas = Escola::all();
        return view('escolas', compact('escolas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('novaescola');
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
            'nameScool' => 'required',
            'address' => 'required',
        ];

        $mensagens = [
            'nameScool.required' => 'Ops você esqueceu de preencher o nome da escola',
            'address.required' => 'Ops você esqueceu de preencher o endereço',
        ];

        $request->validate($regras, $mensagens);
           
        $escola = new Escola();
        $escola->nameScool = $request->input('nameScool');
        $escola->address = $request->input('address');
        $escola->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
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

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Escola $id)
    {
        $id->delete();
        return redirect('/listaescola');
    }

    /*private function getIndex($id, $nameScool, $address){
        $ids = array_column($nameScool, 'id');
        $index = array_search($id, $ids);
        return $index;

    }*/
}
