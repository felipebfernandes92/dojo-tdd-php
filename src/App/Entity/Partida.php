<?php

declare(strict_types=1);
namespace App\Entity;

final class Partida {
    public Jogador $jogador1;
    public Jogador $jogador2;
    public string $jogada1;
    public string $jogada2;

    public function __construct($jogador1, $jogador2, $jogada1, $jogada2)
    {
        $this->jogador1 = $jogador1;
        $this->jogador2 = $jogador2;
        $this->jogada1 = $jogada1;
        $this->jogada2 = $jogada2;
    }
}