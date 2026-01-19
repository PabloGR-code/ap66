<?php

    interface notificable{
        public function notificable(string $mensaje): void {
            echo "Enviando SMS de confirmacion ... Bizum de $cantidad euros aceptado";
        }
    }