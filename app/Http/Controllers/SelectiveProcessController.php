<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course as Course;
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
        return view('selectiveprocess/create')->with('courses', $courses);
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
            $cotas = SelectiveProcess::find(1);
            $selectiveprocess = SelectiveProcess::find($selectiveprocess->id);
            $quotaselectiveprocess = new QuotaSelectiveProcess();
            $courseselectiveprocess = new CourseSelectiveProcess();
            $courseselectiveprocess->vagas=$request->vagas;
            $quotaselectiveprocess->vagas=$request->vagas_cotas;
            $courseselectiveprocess->processo_seletivo_id=$selectiveprocess->id;
            $quotaselectiveprocess->processo_seletivo_id=$selectiveprocess->id;
            $courseselectiveprocess->curso_id=$request->cursos;
            $quotaselectiveprocess->cota_id=$cotas->id;

            if($quotaselectiveprocess->save() && $courseselectiveprocess->save()){
                return redirect('home')->with('message', 'Processo Seletivo Adicionado!');
            }else{
                return redirect('home')->with('message', 'Algo deu errado!');
            }

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
