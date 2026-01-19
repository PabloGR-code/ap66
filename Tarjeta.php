<?php
class Tarjeta extends Pago implements MetodoPago,PagoElectronico {
    function __construct($dinero){
        parent::__construct($dinero);
    }
    public function finalizarPago(){
        echo "El pago ha sido realizado con exito mediante un dispositivo Electronico";
    }
    public function procesarPago(){
        echo "Conectando con el banco... Cobrando $this->dinero € de la
        tarjeta.<br>";
        $this -> finalizarPago();
    }

}