<?php

namespace App\Services\Authentication\Interfaces;

interface Authenticatible
{
    public function findByToken(string $token);

    public function getId(): int;

    public function getApiKey(): string;
}