<?php
    session_start();
    require_once "../objetos/manejadorBD.php";
    
    $manejador = new manejadorBD();
    $login = $_POST['login'];
    $pass = $_POST['password'];
    
    var_dump($login);
    //var_dump($pass);
    
    $res = $manejador->darUsuario($login, $pass);
    $usuario = pg_fetch_array($res);
    var_dump($usuario);
    if($usuario)
    {
        $_SESSION['login'] = $usuario['login'];
        $_SESSION['nombre'] = $usuario['nombre'];
        //$_SESSION['permisos'] = $usuario['permisos'];
        $_SESSION['id_usuario'] = $usuario['id_usuario'];
        header("Location: ../usuario.php");
    }else{
        header("Location: ../index.html");
    }
?>
