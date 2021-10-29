<?php

namespace App\Models;

use App\Services\Authentication\Interfaces\Authenticatible;
use App\Services\Model\ModelAbstract as Model;

class User extends Model implements Authenticatible
{
    protected function getTable(): string
    {
        return 'users';
    }

    public function findByToken(string $token)
    {
        $result = $this->db->findByColumnValue(
            $this->getTable(),
            'api_token',
            $token
        );

        if (! $result) {
            return null;
        }

        $this->setAttributes($result);

        return $this;
    }

    public function getId(): int
    {
        return $this->getAttribute('id');
    }

    public function getApiKey(): string
    {
        return $this->getAttribute('api_token');
    }
}