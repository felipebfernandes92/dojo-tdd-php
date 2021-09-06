<?php

declare(strict_types=1);

use App\Entity\Jogador;
use App\Entity\Partida;
use App\UseCase\ExecutarPartida;
use PHPUnit\Framework\TestCase;

final class executarPartidaTest extends TestCase {
    public function testIsEmpate(): void {
        $jogador1 = new Jogador("Felipe");
        $jogador2 = new Jogador("Zero");
        $partida = new Partida($jogador1, $jogador2, "Pedra", "Pedra");

        $executarPartida = new ExecutarPartida();
        $this->assertEquals($executarPartida->execute($partida), "Empate");
    }

    public function testPedraGanhaTesoura(): void {
        $jogador1 = new Jogador("Felipe");
        $jogador2 = new Jogador("Zero");
        $partida = new Partida($jogador1, $jogador2, "Pedra", "Tesoura");

        $executarPartida = new ExecutarPartida();
        $this->assertEquals($executarPartida->execute($partida), "Felipe");
    }

    public function testTesouraGanhaPapel(): void {
        $jogador1 = new Jogador("Felipe");
        $jogador2 = new Jogador("Zero");
        $partida = new Partida($jogador1, $jogador2, "Tesoura", "Papel");

        $executarPartida = new ExecutarPartida();
        $this->assertEquals($executarPartida->execute($partida), "Felipe");
    }

    public function testPapelGanhaPedra(): void {
        $jogador1 = new Jogador("Felipe");
        $jogador2 = new Jogador("Zero");
        $partida = new Partida($jogador1, $jogador2, "Pedra", "Papel");

        $executarPartida = new ExecutarPartida();
        $this->assertEquals($executarPartida->execute($partida), "Zero");
    }
}