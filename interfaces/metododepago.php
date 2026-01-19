<?php

interface metododepago {
    public function metododepago(float $cantidad): void{
        echo "Conectando con el banco ... Cobrando $cantidad euros de la tarjeta";
    }
}