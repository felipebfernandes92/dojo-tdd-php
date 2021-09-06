<?php

declare(strict_types=1);
namespace App\UseCase;

use App\Entity\Partida;

final class ExecutarPartida {
    public function execute(Partida $partida): String {
        if ($partida->jogada1 === $partida->jogada2) {
            return "Empate";
        }

        if ($partida->jogada1 === "Pedra" && $partida->jogada2 === "Tesoura") {
            return $partida->jogador1->nome;
        }

        if ($partida->jogada1 === "Tesoura" && $partida->jogada2 === "Papel") {
            return $partida->jogador1->nome;
        }

        if ($partida->jogada1 === "Papel" && $partida->jogada2 === "Pedra") {
            return $partida->jogador1->nome;
        }
        
        return $partida->jogador2->nome;
    }
}