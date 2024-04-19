<?php

namespace Mensageiros;

// Classe Email que implementa a interface Mensageiro
class Email implements Mensageiro {
    public function enviar() {
        echo "Enviando mensagem por e-mail...\n";
    }
}
