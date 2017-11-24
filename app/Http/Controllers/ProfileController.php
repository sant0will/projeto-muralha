<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Profile as Profile;
use App\Models\Address as Address;
use App\Models\User as User;


class ProfileController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

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

        //Atribuição do form para o model Profile
        $profile = new Profile();
        $profile->nome = $request->nome;
        $profile->data_nascimento = $request->data_nascimento;
        $profile->rg = $request->rg;
        $profile->emissor_rg = $request->emissor_rg;
        $profile->cpf = $request->cpf;
        $profile->sexo = $request->sexo;
        $profile->nome_pai = $request->nome_pai;
        $profile->nome_mae = $request->nome_mae;
        $profile->passaporte = $request->passaporte;
        $profile->naturalidade = $request->naturalidade;
        $profile->telefone = $request->telefone;
        $profile->celular = $request->celular;
        $profile->escolaridade = $request->escolaridade;

        // Vinculando perfil ao usuário logado
        $user = Auth::user();
        $profile->user_id = $user->id;

        if ($profile->save()) {
            //Atribuição do form para o model Address
            $address = new Address();
            $address->rua = $request->rua;
            $address->numero = $request->numero;
            $address->cep = $request->cep;
            $address->bairro = $request->bairro;
            $address->complemento = $request->complemento;
            $address->tipo = $request->tipo;
            $address->cidade = $request->cidade;
            $address->estado = $request->estado;
            $address->pais = $request->pais;

            // Vinculando perfil ao endereço logado
            $profile = Profile::find($profile->id);
            $address->profile_id = $profile->id;
            $address->save();

            return redirect('profile/create')->with('message', 'Usuário Adicionado!');

        } else {
            return redirect('profile/create')->with('message', 'Algum problema aconteceu!');
        }   
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
