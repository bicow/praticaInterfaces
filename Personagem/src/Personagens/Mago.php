<?php

namespace Personagens;

class Mago implements Personagem {
    public function atacar() {
        echo "Mago: Ataque à distância usando feitiço\n";
    }
    public function defender() {
        echo "Mago: Defesa usando feitiço de barreira\n\n";
    }
}