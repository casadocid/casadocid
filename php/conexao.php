<?php

$SERVIDOR = "localhost";
$USUARIO = "root";
$SENHA = "";
$BASE = "login";

$mysqli = new mysqli($SERVIDOR, $USUARIO, $SENHA, $BASE);
if ($mysqli->connect_errno) {
    echo "Falha ao conectar: (" . $mysqli->connect_errno . ") " .$mysqli->connect_error;
}
?>