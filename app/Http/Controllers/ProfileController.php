<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Profile as Profile;
use App\Models\Address as Address;
use App\Models\User as User;
use App\Models\SpecialNeed as SpecialNeed;


class ProfileController extends Controller{

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
        $profiles = Profile::all();
        return view('profile.index')->with('profiles', $profiles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $specialneeds = SpecialNeed::all();
        return view('profile/create')->with('specialneeds', $specialneeds);
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
        $profile->adm = $request->adm;
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
            $address->profile_id = $profile->id;
            $address->save();

            //Necessidades Especiais
            if(($request->ness) == 2){
                return redirect('home')->with('message', 'Usuário Adicionado!'); 
            }else{
                $dados = [];

                $selected_special_needs = $request->special_need_id;

                foreach ($selected_special_needs as $ssn) {

                    if (array_key_exists('id', $ssn)) {
                        $dados[$ssn['id']] = ['observacao' => $ssn['observacao'], 
                                              'permanente' => $ssn['permanente']];

                    }
                }

                $profile->specialNeeds()->sync($dados);

                //retorno com mensagm de sucesso ou error
                return redirect('home')->with('message', 'Usuário Adicionado!');
            }
        } else {
            return redirect('home')->with('message', 'Algo deu Errado!');
            
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){        
        $profile = Profile::find($id);
        return view('profile.show',compact('profile','id'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    

    public function edit($id){
        $profile = Profile::find($id);        
        $specialneeds = SpecialNeed::all();
        $ob = $profile->specialneeds->observacao;
        return view('profile.edit')->with('ob', $ob)->with('specialneeds',$specialneeds);
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
        $profile = Profile::find($id);        
        $profile->adm = $request->adm;
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

        if ($profile->save()) {
            //Atribuição do form para o model Address
            $address = Address::find($id);
            $address->rua = $request->rua;
            $address->numero = $request->numero;
            $address->cep = $request->cep;
            $address->bairro = $request->bairro;
            $address->complemento = $request->complemento;
            $address->tipo = $request->tipo;
            $address->cidade = $request->cidade;
            $address->estado = $request->estado;
            $address->pais = $request->pais;
            $address->save();

            //Necessidades Especiais
            if(($request->ness) == 2){
                return redirect('home')->with('message', 'Usuário Alterado!'); 
            }else{
                $dados = [];

                $selected_special_needs = $request->special_need_id;

                foreach ($selected_special_needs as $ssn) {

                    if (array_key_exists('id', $ssn)) {
                        $dados[$ssn['id']] = ['observacao' => $ssn['observacao'], 
                                              'permanente' => $ssn['permanente']];

                    }
                }

                $profile->specialNeeds()->sync($dados);

                //retorno com mensagm de sucesso ou error
                return redirect('home')->with('message', 'Usuário Alterado!');
            }    
        }else {
            return redirect('home')->with('message', 'Algum problema aconteceu!');
        }
    }  
}