<?php

namespace App\Middlewares;

use App\Exceptions\UnauthenticatedException;
use App\Services\Authentication\Auth;
use App\Services\Request\RequestInterface;

class Authenticated
{
    /**
     * @param RequestInterface $request
     * @throws UnauthenticatedException
     */
    public function handle(RequestInterface $request)
    {
        if (! $request->getUser()) {
            throw new UnauthenticatedException();
        }
    }
}