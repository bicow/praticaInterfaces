<?php

namespace Mensageiros;

// Classe Whats que implementa a interface Mensageiro
class Whatsapp implements Mensageiro {
    public function enviar() {
        echo "Enviando mensagem por Whatsapp...\n";
    }
}