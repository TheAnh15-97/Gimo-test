<?php

namespace App\Services\Authentication;

use App\Models\User;
use App\Services\Authentication\Interfaces\Authenticatible;
use App\Services\Request\RequestInterface;

class Auth
{
    protected $request;

    protected static $authed;

    protected static $user;

    public function __construct(RequestInterface $request)
    {
        $this->request = $request;

        $this->findAuthUser();
    }

    public function isAuthed(): bool
    {
        return true === self::$authed;
    }

    public function findAuthUser()
    {
        $token = $this->request->getBearerToken();

        if (! $token) {
            self::$authed = false;
        } else {
            $this->findUserByToken($token);
        }
    }

    public function findUserByToken(string $token)
    {
        $user = (new User())->findByToken($token);

        if (! $user) {
            self::$authed = false;
        } else {
            self::$authed = true;
            self::$user = $user;
        }
    }

    /**
     * @return Authenticatible
     */
    public function getUser()
    {
        return self::$user;
    }
}