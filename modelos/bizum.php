<?php

    require_once "/../interfaces/metododepago.php";
    require_once "/../interfaces/notificable.php";

    class bizum implements metododepago, notificable{

        public function pagar(float $cantidad):void{
            echo "conectando con el banco... Cobrando $cantidad euros de la tarjeta <br>";
        }

        public function enviarnotificacion(string $mensaje):void{
            echo "enviando SMS de confirmación... $mensaje <br>";
        }
    }