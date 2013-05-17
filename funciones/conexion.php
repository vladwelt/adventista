<?php
  $conexion = pg_connect("host=localhost
                          port=5432
                          user=postgres
                          password=postgres
                          dbname=adventista"
  ) or die("Error en conexion".pg_last_error());
  echo "conexion exitosa";
  ?>
