<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Assinatura;
use Illuminate\Http\Request;

class AssinaturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $assinaturas = Assinatura::paginate(25);
        return response()->json($assinaturas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $form)
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $form)
    {
        $assinatura = Assinatura::create($form->all());

        if(!$assinatura){
            return response()->json(['code'=>'500','msg' => "Erro na criação da assinatura"]);
        }

        return response()->json($assinatura);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $assinatura = Assinatura::find($id);

        if($assinatura){
            return response()->json($assinatura, 500);
        }

        return response()->json($assinatura);
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
    function update(request $form, $id){
        $assinatura = Assinatura::find($id);

        if(!$assinatura){
            return response()->json(['code'=>'500','msg' => "Assinatura inexistente"]);
        }

        $assinatura->update($form->all());
        
        return response()->json($form->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    function destroy($id){
        $assinatura = Assinatura::find($id);

        if(!$assinatura){
            return response()->json(['code'=>'500','msg' => "Assinatura inexistente"]);
        }

        $assinatura->delete();

        return response()->json(['code'=>'200','msg'=>"Assinatura deletado com sucesso!"]);
    }
}
