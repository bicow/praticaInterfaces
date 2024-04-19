<?php

namespace Personagens;

class Arqueiro implements Personagem {
    public function atacar() {
        echo "Arqueiro: Ataque à distância usando arco e flecha\n";
    }
    public function defender() {
        echo "Arqueiro: Defesa usando o campo de combate\n\n";
    }
}