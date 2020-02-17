<?php
namespace App\Http\Controllers;

use DB;
use App\User;
use App\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
   public function crear (Request $req)
   {
      $user = new User;
      $session = new Session;

      /* VALIDACION */

      $reglas = [
        'usuario' => 'required',
        'email' => 'required',
        'contraseña' => 'required|required_with:confirmar|same:confirmar',
        'confirmar' => 'required'
      ];

            /*   Ejemplo verificar contraseña
            $this->validate($request, [
            'name' => 'required|min:3|max:50',
            'email' => 'email',
            'vat_number' => 'max:13',
            'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:6'
            ]);
            */

      $val = $this->validate ($req,$reglas);

      /* CHEQUEAR USUARIO EXISTENTE EN BBDD */

        //

      /* CREAR */

      $user->usuario = $req->usuario;
      $user->email = $req->email;
      $user->password = Hash::make($req->contraseña);
      $user->fecha_de_creacion = date('d,m,y');
      $user->puntaje = 0;
      $user->save();
    //  $session->user_id = $user->id;
    //  $session->save();

      return view('welcome',['user'=>$user]);

   }

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
     }

     public function update(Request $req){
       /*
       public function show(Request $request, $id)
           {
               $value = $request->session()->get('key');
       */
       $id = $re->session()->get('user_id');
       $user = User::where('id',$id)-get();
       if($user){

       }
     }


    public function user(){
      $id = session()->get('user_id');
      $user = User::where('id',$id)->get();
      return view('profedit',['usuario'=> $user]);
    //   if(Session::has('user_id')){
    //   $sesion = Session::all();
    //   $usuario = User::where('id','=',$sesion->id_user);
    //   return view('welcome',['user'=>$usuario]);
    //  }
    //  return view('welcome',['user'=>'Invitado']);
    // }

}
}
?>
