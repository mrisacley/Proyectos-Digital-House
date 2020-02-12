<?php

namespace App\Http\Controllers;

use App\Quiz;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $preguntas = Quiz::all();
        return view('verPreguntas', ['preguntas'=>$preguntas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('agregar');
    }


    public function message(){
        return [
            'puntuacion.required' => "Este campo es obligatorio",
            'pregunta.string' => "Debe tener caracteres validos"
        ];
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $quest = new Quiz;
       
        /* VALIDACION */
        
        $reglas = [
            'puntuacion' => 'numeric|required',
            'pregunta' => 'string|min:20',
            'opcion_correcta' => 'string|min:1',
            'opcion2' => 'string|min:1',
            'opcion3' => 'string|min:1',
            'opcion4' => 'string|min:1'
        ];

        $mensj = [
            "string" => 'Rellene el campo :attribute',
            "min" => 'Ingrese al menos :min caracter(es)'
        ];

        $validar = $this->validate($request,$reglas);

        /* GUARDAR */
        $quest->categoria_id = $_GET['categoria'];
        $quest->puntuacion = $request->puntuacion;
        $quest->pregunta = $request->pregunta;
        $quest->opcion_correcta = $request->opcion_correcta;
        $quest->opcion2 = $request->opcion2;
        $quest->opcion3 = $request->opcion3;
        $quest->opcion4 = $request->opcion4;
        $quest->save();
        return view('abm');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function show(Quiz $quiz)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function edit(Quiz $quiz)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Quiz $quiz)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quiz $quiz)
    {
        //
    }
}
