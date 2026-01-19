<?php

    require_once __DIR__ . "/../interfaces/metododepago.php";
    require_once __DIR__ . "/../interfaces/notificable.php";

    class bizum implements metododepago, notificable{

        public function pagar(float $cantidad):void{
            echo "conectando con el banco... Cobrando $cantidad euros de la tarjeta <br>";
        }

        public function notificacion(string $mensaje):void{
            echo "enviando SMS de confirmación... $mensaje <br>";
        }
    }