<?php 
    function validar_admin($usuario, $senha){
        if($usuario == "admin@test" && $senha == "1234"){
            return true;
        } else {
            return false;
        }
    }

    function autenticar() {
        session_start();
        if (!isset($_SESSION['admin'])) {
            header('Location: login.php');
            exit();
        }
    }

    function validar_convidado($usuario, $senha){
        if($usuario == "convidado@test" && $senha == "1234"){
            return true;
        } else {
            return false;
        }
    }
    
    function autenticar_convidado() {
        session_start();
        if (!isset($_SESSION['convidado'])) {
            header('Location: login.php');
            exit();
        }
    }
?>