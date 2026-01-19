<?php

    require_once "modelos/bizum.php";

    $bizum=new bizum();

    echo $bizum->pagar(50) . "<br>";
    echo $bizum->notificacion("bizum aceptado correctamente");