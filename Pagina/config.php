<?php
//ProPayPal es vital para declarar si es demo o prueba las transacciones

//define('ProPayPal', 0); // El cero simboliza entorno de Prueba
//define('ProPayPal', 1); // El 1 simboliza entorno de producción

define('ProPayPal', 0);
if(ProPayPal){
define("PayPalClientId", "*********************");
define("PayPalSecret", "*********************");
define("PayPalBaseUrl", "https://demo.baulphp.com/paypal-php-integracion-con-ejemplo-completo/");
define("PayPalENV", "production");
} else {
define("PayPalClientId","AQYbqzIwDfRauX885pHoZ-PjBS_QAXaUUZAgaalUUs5u6Ry78wWLDbFO9zp_-uUFXDkxtpB32WL73MSn");
define("PayPalSecret", "EOoRC6odww0aSJINvxbZB4GM93d93xCw3Gqxw6zcO70zd7LU8jhUtrfRPefg9fr3EeJBWvMdqkEllYIa");
define("PayPalBaseUrl", "www.sandbox.paypal.com");
define("PayPalENV", "sandbox");
}
?>
?>