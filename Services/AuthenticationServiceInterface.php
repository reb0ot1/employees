<?php

namespace Employees\Services;

interface AuthenticationServiceInterface
{
    public function isAuthenticated() : bool;

    public function logout();

    public function getUserId();
}