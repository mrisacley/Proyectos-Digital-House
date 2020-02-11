@extends('layouts.plantilla')
@section('title',"Home")
@section('titulo')
    <h1>BIENVENIDO!</h1>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Labore deserunt, laborum nesciunt adipisci cupiditate alias eius nihil consectetur. Vel asperiores recusandae placeat, aliquid sunt quae quibusdam quo a perferendis alias?</p>    
@endsection
@section('main')
    <div id="nobroken">
        <section id="nobroken"class="categorias">
            <article class="titulo">
                <h2>Categorías</h2>
            </article>
            <article class="categoria" id="especial">
                <ul>
                    <li><a href="Geo.php">Geografía</a></li>
                    <li><a href="music.php">Música</a></li>
                    <li><a href="cine.php">Cine</a></li>
                    <li><a href="depo.php">Deportes</a></li>
                    <li><a href="history.html">Historia</a></li>
                </ul>
            </article>
            <article class="boton">
                <a class="btn btn-outline-dark" href="#" role="button">Ver más</a>
            </article>
        </section>
        <section class="ranking">
            <article class="titulo">
                <img src="{{asset('img/podium.png')}}" width="30" height="30" alt="">
                <h2>Ranking </h2>
            </article>
            <article class="posiciones">
                <ol>
                    <li><img src="{{asset('img\1puesto.png')}}" alt=""><a href="/perfil">Usuario 1</a></li>
                    <li><img src="{{asset('img\2puesto.png')}}" alt=""><a href="/perfil">Usuario 2</a></li>
                    <li><img src="{{asset('img\3puesto.png ')}}" alt=""><a href="/perfil">Usuario 3</a></li>
                    <li><img src="{{asset('img\laurel.png')}}" alt=""><a href="/perfil">Usuario 4</a></li>
                    <li><img src="{{asset('img\laurel.png')}}" alt=""><a href="/perfil">Usuario 5</a></li>
                </ol>
            </article>
            <article class="boton">
                <a class="btn btn-outline-dark" href="/ranking" role="button">Ver más</a>
            </article>
        </section>
    </div>  
@endsection