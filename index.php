<?php

    require_once "modelos/bizum.php";

    $bizum=new bizum();

    echo $bizum->pagar(50) . "<br>";
    echo $bizum->notificar("bizum aceptado correctamente");