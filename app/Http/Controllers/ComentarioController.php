<?php

namespace App\Http\Controllers;

use App\Models\Comentario;
use Illuminate\Http\Request;

class ComentarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Carrega todos os dados da tabela comentarios e envia para a view "dizai"
        $comentarios = Comentario::orderBy('id', 'DESC')->get(); //carrega os dados na variavel 
        // var_dump($comentarios);  var_dump testar variavel 
        return view('dizai',['comentarios' =>$comentarios]); //carrega a view com os dados da variavel


    }

    
    public function store(Request $request)
    {
        //Instancia a tabela comentario
        $comentario = new Comentario;
        $comentario->codinome = $request->codinome;
        $comentario->espirito = $request->espirito;
        $comentario->comentario = $request->comentario;

        $comentario->save();
        return redirect('/');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comentario  $comentario
     * @return \Illuminate\Http\Response
     */
}