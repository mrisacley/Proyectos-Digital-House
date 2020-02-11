@extends('layouts.plantilla')
@section('title','Ranking')
@section('titulo')
    <h1>Ranking</h1>
@endsection
@section('main')
    <div>
        <section class="tabla">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Usuario</th>
                        <th scope="col">Puntuación</th>
                        <th scope="col">Mejor categoría</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td> <a href="profile.php"> Usuario 1 </a></td>
                        <td>1000</td>
                        <td>Historia</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td><a href="profile.php">Usuario 2</a></td>
                        <td>890</td>
                        <td>Cine</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td><a href="profile.php">Usuario 3</a></td>
                        <td>780</td>
                        <td>Música</td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td><a href="profile.php">Usuario 4</a></td>
                        <td>670</td>
                        <td>Música</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td><a href="profile.php">Usuario 5</a></td>
                        <td>550</td>
                        <td>Geografía</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td><a href="profile.php">Usuario 6</a></td>
                        <td>340</td>
                        <td>Historia</td>
                    </tr>
                </tbody>
            </table>
        </section>
    </div>
@endsection