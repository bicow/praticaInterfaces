<?php

namespace Personagens;

class Guerreiro implements Personagem {
    public function atacar() {
        echo "Guerreiro: Ataque físico usando espada\n";
    }
    public function defender() {
        echo "Guerreiro: Defesa usando o escudo\n\n";
    }
}
