<?php

if(!isset($_SESSION)) {
    session_start();
}

if(!isset($_SESSION['id'])) {
    die("Página indisponível <br><p><a href=\"index.php\">Entre em sua conta</a></p>" );
}

?>