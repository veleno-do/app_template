<?php

namespace MyMVC\Core\Auth;

abstract class Auth
{
    const authGroupe = [
        "authentication"    => \MyMVC\Core\Auth\Middleware\Authentication::class,
        "authorization"     => \MyMVC\Core\Auth\Middleware\Authorization::class,
    ];
}
