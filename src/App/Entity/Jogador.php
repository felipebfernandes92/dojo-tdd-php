<?php

declare(strict_types=1);
namespace App\Entity;

final class Jogador {
    public string $nome;

    public function __construct(string $nome)
    {
        $this->nome = $nome;
    }
}