<?php

require __DIR__ . '/vendor/autoload.php';

function atacarFuncao(Personagens\personagem $mensagem) {
    $mensagem->atacar();
}

function defenderFuncao(Personagens\personagem $mensagem1) {
    $mensagem1->defender();
}

$guerreiro = new Personagens\Guerreiro();
$mago = new Personagens\Mago();
$arqueiro = new Personagens\Arqueiro();

atacarFuncao($guerreiro);
defenderFuncao($guerreiro);

atacarFuncao($mago);
defenderFuncao($mago);

atacarFuncao($arqueiro);
defenderFuncao($arqueiro);

?>
