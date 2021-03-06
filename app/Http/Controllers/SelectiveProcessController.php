<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course as Course;
use App\Models\Quota as Quota;
use App\Models\SelectiveProcess as SelectiveProcess;
use App\Models\QuotaSelectiveProcess as QuotaSelectiveProcess;
use App\Models\CourseSelectiveProcess as CourseSelectiveProcess;

class SelectiveProcessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $selectiveprocess = SelectiveProcess::all();
        return view('selectiveprocess/index')->with('selectiveprocess', $selectiveprocess);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Course::all();
        $quotas = Quota::all();
        return view('selectiveprocess/create')->with('courses', $courses)->with('quotas', $quotas);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $selectiveprocess = new SelectiveProcess();
        $selectiveprocess->nome=$request->nome;
        $selectiveprocess->descricao=$request->descricao;
        $selectiveprocess->data_inicio=$request->data_inicio;
        $selectiveprocess->data_fim=$request->data_fim;
        $selectiveprocess->ativo=1;

        if($selectiveprocess->save()){
                $dados1 = [];
                $selected_curso = $request->curso_id;

                foreach ($selected_curso as $sc) {

                    if (array_key_exists('id', $sc)) {
                        $dados1[$sc['id']] = ['vagas' => $sc['vagas']];

                    }
                }

                $selectiveprocess->courses()->sync($dados1);

                $dados2 = [];
                $selected_cota = $request->quota_id;

                foreach ($selected_cota as $sct) {

                    if (array_key_exists('id', $sct)) {
                        $dados2[$sct['id']] = ['vagas' => $sct['vagas']];

                    }
                }

                $selectiveprocess->quotas()->sync($dados2);
                return redirect('home')->with('message', 'Processo Seletivo Adicionado!');
            }else{
                return redirect('home')->with('message', 'Algo deu errado!');
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
        
        $sp = SelectiveProcess::find($id);        
        return view('selectiveprocess.show',compact('sp','id'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $courses = Course::all();

        $quotas = Quota::all();
        $sp = SelectiveProcess::find($id);
        return view('selectiveprocess.edit',compact('sp','id'))->with('courses', $courses)->with('quotas', $quotas);
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
        $selectiveprocess = SelectiveProcess::find($id);
        $selectiveprocess->nome=$request->nome;
        $selectiveprocess->descricao=$request->descricao;
        $selectiveprocess->data_inicio=$request->data_inicio;
        $selectiveprocess->data_fim=$request->data_fim;
        $selectiveprocess->ativo=$request->ativacao;

        if($selectiveprocess->save()){
                $dados1 = [];
                $selected_curso = $request->curso_id;

                foreach ($selected_curso as $sc) {

                    if (array_key_exists('id', $sc)) {
                        $dados1[$sc['id']] = ['vagas' => $sc['vagas']];

                    }
                }

                $selectiveprocess->courses()->sync($dados1);

                $dados2 = [];
                $selected_cota = $request->quota_id;

                foreach ($selected_cota as $sct) {

                    if (array_key_exists('id', $sct)) {
                        $dados2[$sct['id']] = ['vagas' => $sct['vagas']];

                    }
                }

                $selectiveprocess->quotas()->sync($dados2);
                return redirect('home')->with('message', 'Processo Seletivo Atualizado!');
            }else{
                return redirect('home')->with('message', 'Algo deu errado!');
            }

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
