<?php

//use manejadorBD;

require_once "../funciones/conexion.php";

class manejadorBD {

    function darUsuario($login, $passw) {
        echo "entrp";
        global $conexion;
        $sql = "SELECT * FROM usuario WHERE login='$login' and password='$passw'";
        $respuesta = pg_query($conexion, $sql);
        pg_close();
        return $respuesta;
    }

    /* function getUsuarioAdministrador($login,$passw)
      {
      global $conexion;
      $sql = "SELECT * FROM administrador WHERE login='$login'
      and password='$passw'";
      $respuesta = pg_query($conexion,$sql);
      pg_close();
      return $respuesta;
      }

      function getUsuarioInstructor($login,$passw)
      {
      global $conexion;
      $sql = "SELECT * FROM instructor WHERE login='$login'
      and password='$passw'";
      $respuesta = pg_query($conexion,$sql);
      pg_close();
      return $respuesta;
      }
      function getUsuarioAlumno($login,$passw)
      {
      global $conexion;
      $sql = "SELECT * FROM alumno WHERE login='$login'
      and password='$passw'";
      $respuesta = pg_query($conexion,$sql);
      pg_close();
      return $respuesta;
      } */
}
