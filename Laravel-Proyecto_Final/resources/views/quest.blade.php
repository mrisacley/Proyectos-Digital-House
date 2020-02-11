@extends('layouts.plantilla')
@section('title',"¡A responder!")
@section('titulo')
    <h1>Geografía</h1>
    <img class="img"src="img/geo.png" alt="imagen sobre pregunta"> 
@endsection
@section('main')
    
    <div>
        <section class="preguntas">
            <form action=".php" method="POST">
                <article class="group">
                    <div class="pregunta">
                        <label for="oscarsfem">1. ¿Cuál es la capital de Eslovaquia?</label>
                    </div>
                    <div class="respuestas">
                        <label for="Zagreb"><input type="radio" name="capEslov" id="Zagreb" value="Zagreb">Zagreb</label>
                        <label for="Bucarest"><input type="radio" name="capEslov" id="Bucarest" value="Bucarest">Bucarest</label>
                        <label for="Budapest"><input type="radio" name="capEslov" id="Budapest" value="Budapest">Budapest</label>
                        <label for="Bratislava"><input type="radio" name="capEslov" id="Bratislava" value="Bratislava">Bratislava</label>
                    </div>
                </article>
                <article class="boton">
                    <button type="submit" class="btn btn-outline-dark">Enviar</button>
                </article>
            </form>
        </section>  
    </div>

@endsection