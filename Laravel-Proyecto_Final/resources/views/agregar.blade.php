@extends('layouts.plantilla')
@section('title',"Agregar Pregunta")
@section('main')
    <div class="agreg">
        <section class="agreg">
            <h2>Agregar Pregunta</h2>
            <article class="agreg">
                <div class="asd">
                    <form action="" method="POST">
                        @csrf
                        <label for="">Puntuacion</label><input type="text" name="puntuacion" class="ancho">
                            @error('puntuacion')
                                <small id="emailHelp" class="form-text font-weight-bold font-italic">{{$message}}</small> 
                            @enderror 
                        <label for="">Pregunta</label><input type="text" name="pregunta" class="ancho">
                            @error('pregunta')
                                <small id="emailHelp" class="form-text font-weight-bold font-italic text-danger">{{$message}}</small> 
                            @enderror
                        <label for="">Opcion Correcta</label><input type="text" name="opcion_correcta"class="ancho">

                        <label for="">Opcion 1</label><input type="text" name="opcion2"class="ancho">
                        
                        <label for="">Opcion 2</label><input type="text" name="opcion3"class="ancho">
                        
                        <label for="">Opcion 3</label><input type="text" name="opcion4"class="ancho">
                        
                        <div class="buttom">
                            <input class="guardar"value="Guardar"type="submit">
                            <input class="guardar"value="Regresar" onclick="history.back()" type="button">
                        </div>
                    </form>
                </div> 
            </article>
        </section>
    </div>
@endsection