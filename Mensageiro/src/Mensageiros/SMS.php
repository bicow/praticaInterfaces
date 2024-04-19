<?php

namespace Mensageiros;

// Classe SMS que implementa a interface Mensageiro
class SMS implements Mensageiro {
    public function enviar() {
        echo "Enviando mensagem por SMS...\n";
    }
}