<?php
require 'autoloader.php';

$pagoTarjeta = new Tarjeta(100);
$pagoTarjeta ->procesarPago();
?> <br><br><br>
<?php
$pagoBizum = new Bizum(50);
$pagoBizum ->procesarPago();
?> <br><br><br> <?php
$pagoMetalico = new Metalico(250);
$pagoMetalico ->procesarPago();