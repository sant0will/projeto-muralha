<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile as Profile;
use App\Models\Address as Address;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('profile/index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profile/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $profile = new Profile([
          'nome' => 'required',
          'data_nascimento'  => 'required',
          'rg' => 'required',
          'emissor_rg' => 'required',
          'cpf' => 'required',
          'sexo' => 'required',
          'nome_pai' => 'required',
          'nome_mae' => 'required',
          'passaporte' => 'required',
          'naturalidade' => 'required',
          'telfone' => 'required',
          'celular' => 'required',
          'escolaridade' => 'required',
          ]);

         $address = new Address([
            'rua' => 'required',
            'numero' => 'required',
            'cep' => 'required',
            'bairro' => 'required',
            'complemento' => 'required',
            'tipo' => 'required',
            'cidade' => 'required',
            'estado' => 'required',
            'pais' => 'required',
          ]);


        $profile->address()->save($address);

        return redirect('profile.create')->with('message', 'Usuário Adicionado!');
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
        //
    }
}
