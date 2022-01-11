<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Analises;
use Illuminate\Http\Request;

class AnalisesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $analises = Analises::paginate(20);

        return response()->json($analises);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $analise = Analises::create($request->all());

        if(!$analise){
            return response()->json("Não foi possível inserir uma nova análise",500);
        }

        return response()->json($analise);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $analise = Analises::find($id);

        if(!$analise){
            return response()->json("Análise não existe", 500);
        }

        return response()->json($analise);
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
        $analise = Analises::find($id);

        if(!$analise){
            return response()->json("Análise não existe", 500);
        }

        $analise->update($request->all());

        return $analise;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $analise = Analises::find($id);

        if(!$analise){
            return response()->json("Análise não existe", 500);
        }

        $analise->delete();

        return response()->json("Análise deletada");
    }
}
