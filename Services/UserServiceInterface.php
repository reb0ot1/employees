<?php
namespace Employees\Services;

use Employees\Models\Binding\Users\UserProfileEditBindingModel;
use Employees\Models\DB\User;

interface UserServiceInterface
{
    public function login($username, $password) : bool;

    public function register($username, $password) : bool;

    public function findOne($id) : User;

    public function edit(UserProfileEditBindingModel $model) : bool;
}