<?php
class Metalico extends Pago implements MetodoPago,PagoMetalico{
    function __construct($dinero){
        parent::__construct($dinero);
    }
    public function procesarPago(){
    echo "Enviando SMS de confirmación... Bizum de $this->dinero €
    aceptado.<br>";
    $this -> finalizarPago();
    }
    public function finalizarPago(){
        echo "El pago ha sido realizado con exito mediante Metalico";
    }
}