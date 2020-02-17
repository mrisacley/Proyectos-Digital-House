@extends('layouts.plantilla')
@section('title',"¡A responder!")
@section('titulo')
    <h1>{{$categoria->nombre}}</h1>
    <img class="img"src="\img\{{$categoria->imagen}}" alt="imagen sobre la categoria">
@endsection
@section('main')
    
    <div>
        <section class="preguntas">
                <form action=".php" method="POST">
                    @foreach ($categoria->preguntas as $pregunta)
                        <article class="group">
                            <div class="pregunta">
                                <label for="">{{$pregunta->pregunta}}</label>
                            </div>
                            <div class="respuestas">
                                <label for=""><input type="radio" name="opcion_correcta" value="{{$pregunta->opcion_correcta}}">{{$pregunta->opcion_correcta}}</label>
                                <label for=""><input type="radio" name="opcion2" value="{{$pregunta->opcion2}}">{{$pregunta->opcion2}}</label>
                                <label for=""><input type="radio" name="opcion3" value="{{$pregunta->opcion3}}">{{$pregunta->opcion3}}</label>
                                <label for=""><input type="radio" name="opcion4" value="{{$pregunta->opcion4}}">{{$pregunta->opcion4}}</label>
                            </div>
                        </article>
                    @endforeach
                    <article class="boton">
                        <button type="submit" class="btn btn-outline-dark">Enviar</button>
                    </article>
                </form>
        </section>  
    </div>

@endsection