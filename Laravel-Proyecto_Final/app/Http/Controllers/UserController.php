<?php

namespace App\Http\Controllers;
use DB;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;
use App\Quiz;

class UserController extends Controller
{

    /* RESPONDER PREGUNTAS */

    public function responder(Request $req, Quiz $quiz)
    {
      $usuario = Auth::user();
      dd($req->respuesta);
      foreach ($quiz->all() as $pregunta){
        if($req->respuesta == $pregunta->opcion_correcta){
          $puntos = $usuario->correctas + 1;
          $puntaje = $usuario->puntaje + $pregunta->puntuacion;
          $usuario->update([
            'correctas' => $puntos,
            'puntaje' => $puntaje
          ]);
        } 
        elseif($req->respuesta != $pregunta->opcion_correcta)
        {
          $resta = $usuario->incorrectas + 1;
          $usuario->update([
            'incorrectas' => $resta
          ]);
        }
      }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


      #################/*Start Crear*/###########################
    public function crear (Request $req)
   {
      $user = new User;

      /* VALIDACION */

      $reglas = [
        'usuario' => 'required',
        'email' => 'required',
        'contraseña' => 'required|required_with:confirmar|same:confirmar',
        'confirmar' => 'required'
      ];
      $val = $this->validate ($req,$reglas);

      /* CHEQUEAR USUARIO EXISTENTE EN BBDD */

        //

      /* CREAR */

      $user->name = $req->usuario;
      $user->email = $req->email;
      $user->password = Hash::make($req->contraseña);
      // $user->fecha_de_creacion = date('d,m,y');
      $user->puntaje = 0;
      $user->rol = 'admin';
      $user->correctas = 0;
      $user->incorrectas = 0;
      $user->timeOut = 0;
      $user->avatar = 'uppic.png';
      $user->save();
    //  $session->user_id = $user->id;
    //  $session->save();

    return view('auth/login');/*,['user'=>$user]*/
     #################/*END Crear*/###########################
   }
     #################/*Start Login*/###########################
   public function login (Request $req){
    $user = new User;

    $reglas = [
      'usuario' => 'required',
      'contraseña' => 'required'
    ];

    $val = $this->validate($req,$reglas);
    $logError = "usuario o email incorrecto.";
    $login = User::where('usuario','=',$req->usuario)->first();
    if(!$login){
      return view('login',['message' => $logError]);
      //return response()->json['success'=>false,'message'=>'Usuario o email incorrecto']);
    }
    //   Hash::check($pw, $hashed);
    if(!Hash::check($req->contraseña,$login->password)){
      return view('login',['message'=> $logError]);
      //return response()->json['success'=>false,'message'=>'Usuario o email incorrecto']);
    }

    return view('perfil');
     #################/*END login*/###########################
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($name,User $user)
    {
      $user = User::where('name',$name)->get()->first();
      return view('perfil',['usuario'=>$user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
