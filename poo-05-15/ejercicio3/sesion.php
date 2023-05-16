<?php

require_once 'usuario.php';

class Session{

    private $usuario;

    public function __construct($usuario){
        $this->usuario = $usuario;
    }

    public function validarUsuario(){
        if (
            ($this->usuario->getUserName() == 'andres' or $this->usuario->getEmail() == 'guzman') 
            && $this->usuario->getPassword() == '123456'
            ) {
            return true;
        }
        return false;
    }

    public function iniciarSesion(){
        if ($this->validarUsuario()) {
            header('Location: home.php');
        }else {
            echo
            '
                <script>
                alert("Error al iniciar sesion");
                </script>
            ';
        }
    }

}

?>