<?php

namespace App\Services;

use App\Repositories\UserRepositoryInterface;
use Illuminate\Contracts\Auth\Access\Gate;
use Hash;


/**
 * Class UserService
 * @package App\Services
 */
class UserService
{
    /** @var UserRepositoryInterface  */
    protected $user;

    protected $gate;

    /**
     * @param UserRepositoryInterface $user
     * @param Gate $gate
     */
    public function __construct(
        UserRepositoryInterface $user,
        Gate $gate
    )
    {
        $this->user = $user;
        $this->gate = $gate;
    }

    /**
     * @param array $params
     *
     * @return \App\DataAccess\Eloquent\User
     */
    public function registerUser(array $params)
    {
        $params['admin'] = (isset($params['admin'])) ? 1 : 0 ;

        $user = $this->user->save($params);

        return $user;
    }

    /**
     * @param int $id
     *
     */
    public function getUser($id)
    {
        return $this->user->find($id);
    }

    /**
     * @param int $page
     * @param int $limit
     *
     */
    public function getPage($page = 1, $limit = 20)
    {
        return $this->user->byPage($page, $limit);
    }

    /*
     * @param int $id
     */
    public function destroyUser($id)
    {
        return $this->user->destroy($id);
    }

    /*
     * @param $id
     * @return bool
     */
    public function getUserAttributes($id)
    {
        return $this->gate->check('update', $this->getUser($id));
    }

    /*
     * @param string $input
     * @param int $id
     *
     * @return bool
     */
    public function checkPassword($input, $id)
    {
        $user = $this->getUser($id);

        if(!$user) {
            return false;
        }

        return Hash::check($input, $user['password']);
    }
}