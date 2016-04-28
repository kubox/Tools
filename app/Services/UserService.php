<?php

namespace App\Services;

use App\Repositories\UserRepositoryInterface;


/**
 * Class UserService
 * @package App\Services
 */
class UserService
{
    /** @var UserRepositoryInterface  */
    protected $user;

    /**
     * @param UserRepositoryInterface $user
     */
    public function __construct(UserRepositoryInterface $user)
    {
        $this->user = $user;
    }

    /**
     * @param array $params
     * @return \App\DataAccess\Eloquent\User
     */
    public function registerUser(array $params)
    {
        $user = $this->user->save($params);

        return $user;
    }
}