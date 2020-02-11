@extends('layouts.plantilla')
@section('title',"Modificar Preguntas")
@section('main')
    <div class="agreg">
        <section class="agreg">    
            <h2>Modificar</h2>
            <article class="agreg">
                    <form action=""method="POST">
                        <label for="">Pregunta</label>
                        <input type="text" name="pregunta" value="" class="ancho">
                        <label for="">Opcion Correcta</label>
                        <input type="text" value="" name="opcion_correcta" class="ancho">
                        <label for="">Opcion 1</label>
                        <input type="text" value="" class="ancho" name="opcion2">
                        <label for="">Opcion 2</label>
                        <input type="text" value="" class="ancho"name="opcion3">
                        <label for="">Opcion 3</label>
                        <input type="text" value="" class="ancho" name="opcion4">
                        <div class="buttom">
                            <input type="submit" value="Modificar" class="guardar">
                            <input class="guardar"value="Regresar" onclick="history.back()" type="button">
                        </div>
                    </form>
            </article>
        </section>
    </div>
@endsection