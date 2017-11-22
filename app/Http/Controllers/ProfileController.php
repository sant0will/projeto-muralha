<?php

namespace App\Http\Controllers;

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

        $profile = new Profile($request->all(), [
          'nome' => 'required',
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
          'escolaridade' => 'required'
          ]);

        $user = Auth::user();

        $profile->user = $user;



        $user->profiles()->save($profile);

        $address = new Address($request->all(),[
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

        $user->address = $address;

        $post = App\Post::find(1);

        $post->comments()->save($comment);

        $profile->address()->save($address);


        $profile->save();

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
