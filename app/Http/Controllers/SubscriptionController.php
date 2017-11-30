<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exemption as Exemption;
use App\Models\Subscription as Subscription;

class SubscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/subscription/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $isencao = new Exemption;
        $inscricao = new Subscription;
        
        $isencao->motivo=$request->motivo;
        $isencao->motivo=2;
        $isencao->save();

        $inscricao->data_inscricao=date();
        $inscricao->data_pagamento=date();
        $inscricao->data_pagamento=2;

        if($cota->save()){
            return redirect('quota')->with('message', 'Cota Cadastrado com sucesso!');
        }else{
            return redirect('quota')->with('message', 'Algo deu errado!');
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
