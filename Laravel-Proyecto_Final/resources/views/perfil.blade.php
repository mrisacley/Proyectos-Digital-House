@extends('layouts.plantilla')
@section('title',"Perfil")
@section('main')
    <div class="pref">
        <section class="profile">
            <article class="profpic">
                <a href="/profedit"><img alt="imagen de perfil" src="{{asset('img\uppic.png')}}"  width="210px" height="210px"></a>
            </article>
            <article class="profinfo">
                <a href="/profedit">Editar Perfil</a>
                <p class="campos">Nick:</p>
                <p class="campos">Nombre Público: </p>
                <p class="campos"></p>
                <p class="campos">País:</p>
                <p class="campos">Usuario desde: 01/01/19</p>
             <p class="campos">Ranking actual: #0</p>
                <p class="campos">Mejor Ranking: #0</p>
                <ul>
                    <li>
                        <img src="img/good.png" alt="">
                        <p>00</p>
                    </li>
                    <li>
                        <img src="img/wrong.png" alt="">
                        <p>00</p>
                    </li>
                    <li>
                        <img src="img/timeout.png" alt="">
                        <p>00</p>
                    </li>
                </ul>
                <p class="campos">Tiempo Jugado: 00:00</p>
                <img class="separador" src="img/linea.png" alt="" width="200px" height="10px">
                <form action="/sugerir">
                    <button type="submit" name="button">Sugerir Pregunta</button>
                </form>
                <img class="separador" src="img/linea.png" alt="" width="200px" height="10px">
                <form class="" action="/abm" method="get">
                    <button type="submit" name="button">Administrar</button>
                </form>
                </article>
            </section>
        <section class="perfeed">
            <article class="feed">
                <div>Ejemplo_Posicion_Actividad Reciente</div>
                <div>Ejemplo_Posicion_Comunidad</div>
                <div>Ejemplo_Posicion_Logros</div>
                <!-- <ul>
            <li>
                Actividad reciente
            </li>
            <li>Comunidad</li>
            <li>Logros</li>
            </ul> -->
            </article>
        </section>
    </div>
@endsection
