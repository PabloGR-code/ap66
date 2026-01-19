<?php
class Bizum extends Pago implements MetodoPago,PagoElectronico {
    function __construct($dinero){
        parent::__construct($dinero);
    }
    public function procesarPago(){
    echo "Enviando SMS de confirmación... Bizum de $this->dinero €
    aceptado.<br>";
    $this -> finalizarPago();
    }
    public function finalizarPago(){
        echo "El pago ha sido realizado con exito mediante un dispositivo Electronico";
    }
}