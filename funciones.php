<?php

// VALIDACION
function validarRegis($array){
    $errores = [];
    if (isset($array["usr"])){
        if (empty($array["usr"])) {
           $errores["usr"] = "*Por favor llene este campo";
        } elseif (strlen($array["usr"]) < 2) {
            $errores["usr"] = "*El Nombre de usuario debe tener al menos 2 caracteres";
        };
    };
    if (isset($array["email"])){
        if (empty($array["email"])){
            $errores["email"] = "*Por favor llene este campo";
        } elseif (!filter_var($array["email"], FILTER_VALIDATE_EMAIL)){
            $errores["email"] = "*El email ingresado no es correcto";
        };
    };
    if (isset($array["pass"])){
        if (empty($array["pass"])){
            $errores["pass"] = "*Por favor llene este campo";
        } elseif (strlen($array["pass"]) < 8) {
            $errores["pass"] = "*La contraseña debe tener al menos 8 caracteres";
        };
    };
    if (isset($array["repass"])){
        if (empty($array["repass"])){
            $errores["repass"] = "*Por favor llene este campo";
        } elseif ($array["pass"] != $array["repass"]){
            $errores["repass"] = "*Las contraseñas deben coincidir";
        }
    }
    if(isset($array["nick"])){
        if (empty($array["nick"])) {
            $errores["nick"] = "*Por favor llene este campo";
        }
    }
    return $errores;
};

// PERSISTENCIA
function persistencia($arrayE, $posicion){
    if (isset($arrayE[$posicion])){
        return "";
    } else {
        if (isset($_POST[$posicion])) {
            return $_POST[$posicion];
        }
    };
};

// COOKIE
function crearCookie($array,$user){
    if (isset($array["recordar"]) && $array["recordar"] == "on"){
        setcookie("userEmail", $user["email"], time() + 60*60*24);
        setcookie("userPass", $user["pass"], time() + 60*60*24);
        //setcookie("userNick", $user["nombre"], time() + 60*60*24);
    };
}

// SESION
function usuarioLogeado(){
    if($_SESSION){
    $users = file_get_contents("usuario.json");
    $users = explode(PHP_EOL, $users);
    array_pop($users);
    foreach($users as $user){
      $usuario = json_decode($user, true);
      if($_SESSION["userMail"] == $usuario["email"]){
        return $usuario;
      }
    }
  }
}
?>
