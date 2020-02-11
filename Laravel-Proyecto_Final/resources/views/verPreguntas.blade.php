@extends('layouts.plantilla')
@section('title',"Tabla de Preguntas")
@section('main')
    <div class="arreglo">
        <section class="tabla">
            <form action="" method="get">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Seleccionar</th>
                            <th scope="col">ID</th>
                            <th scope="col">Pregunta</th>
                            <th scope="col">Opcion Correcta</th>
                            <th scope="col">Opcion 1</th>
                            <th scope="col">Opcion 2</th>
                            <th scope="col">Opcion 3</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="radio" name="id" value=""></td>
                            <th scope="row"></th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        <tr>
                    </tbody>
                </table>
                <div class="buttom">
                    <input type="hidden" name="categoria" value="">
                    <input type="submit" value="Borrar" class="guardar" formaction="confirmar.php">
                    <input class="guardar" value="Modificar" type="submit" formaction="/modificarPregunta">
                    <input class="guardar" value="Regresar" onclick="history.back()" type="button">
                </div>
            </form>
        </section>
    </div>
@endsection
