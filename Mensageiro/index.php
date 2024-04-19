<?php

// Carrega o autoloader do Composer
require __DIR__ . '/vendor/autoload.php';

// Função que aceita um objeto Mensageiro e invoca seu método enviar()
function enviarMensagem(Mensageiros\Mensageiro $mensagem) {
    $mensagem->enviar();
}

// Demonstração de polimorfismo
$email = new Mensageiros\Email();
$sms = new Mensageiros\SMS();
$whatsapp = new Mensageiros\Whatsapp();

enviarMensagem($email); // Enviando mensagem por e-mail...
enviarMensagem($sms);   // Enviando mensagem por SMS...
enviarMensagem($whatsapp); // Enviando mensagem por Whatsapp...

?>
