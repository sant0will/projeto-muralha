<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Exemption as Exemption;
use App\Models\Subscription as Subscription;
use App\Models\Course as Course;
use App\Models\Quota as Quota;
use App\Models\Profile as Profile;
use App\Models\SelectiveProcess as SelectiveProcess;
use App\Models\QuotaSelectiveProcess as QuotaSelectiveProcess;
use App\Models\CourseSelectiveProcess as CourseSelectiveProcess;

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
        $selectiveprocess = SelectiveProcess::all();
        $courses = Course::all();
        $quotas = Quota::all();
        return view('subscription/create')->with('courses', $courses)->with('quotas', $quotas)->with('selectiveprocess', $selectiveprocess);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $inscricao = new Subscription;

        //Atribuição das Datas
        $inscricao->data_inscricao=date("Y-m-d");
        $inscricao->data_pagamento=date("Y-m-d");
        $inscricao->pago=0;

        //Atribuição do curso e cota
        $selected_curso = $request->curso_id;
        $selected_quota = $request->quota_id;

        foreach ($selected_curso as $sc){
            if (array_key_exists('id', $sc)){
               $c_id = $sc['id'];
           }
       }

       foreach ($selected_quota as $sq) {
        if (array_key_exists('id', $sq)) {
           $q_id = $sq['id'];
       }
   }
   $inscricao->cota_id = $q_id;
   $inscricao->curso_id = $c_id;

        //Atribuição do Processo Seletivo
   $inscricao->processo_seletivo_id = $request->selectiveprocess;
   $inscricao->profile_id = Auth::user()->profile->id;

   if($inscricao->save() && $request->isencao == 1){
            //Atribuição da isenção
    $isencao = new Exemption;
    $isencao->motivo=$request->motivo;
    $isencao->inscricao_id=$inscricao->id;
    $isencao->save();

            //retorno com mensagm de sucesso ou error
    return redirect('home')->with('message', 'Inscrição Realizada com Sucesso!');
}
else {
    return redirect('home')->with('message', 'Algo deu Errado!');
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
        $inscricoes = Subscription::all();
        $profile = Profile::find($id);
        $selectiveprocess = SelectiveProcess::all();
        $courses = Course::all();
        $quotas = Quota::all();
        $isencao = Exemption::all();
        foreach ($inscricoes as $inscricao) {
            if($inscricao->profile_id == $id){
                return view('subscription/show')->with('inscricao',$inscricao)
                                                ->with('profile', $profile)
                                                ->with('selectiveprocess', $selectiveprocess)
                                                ->with('courses', $courses)
                                                ->with('quotas', $quotas)
                                                ->with('isencao', $isencao);
            }
        }
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
