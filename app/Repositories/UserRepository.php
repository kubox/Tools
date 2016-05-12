<?php

namespace App\Repositories;

use App\DataAccess\Eloquent\User;


class UserRepository implements UserRepositoryInterface
{
    /** @var User  */
    protected $eloquent;


    /**
     * @param User $eloquent
     */
    public function __construct(User $eloquent)
    {
        $this->eloquent = $eloquent;
    }

    /**
     * @param array $params
     *
     * @return User
     */
    public function save(array $params)
    {
        $attributes['id'] = (isset($params['id'])) ? $params['id'] : null;
        $result = $this->eloquent->updateOrCreate($attributes, $params);
        return $result;
    }

    /**
     * @param $id
     *
     * @return mixed
     */
    public function find($id)
    {
        $result = $this->eloquent->find($id);

        return $result;
    }

    /*
     * @return int
     */
    public function count()
    {
        $result = $this->eloquent->count();

        return $result;
    }

    /**
     * @param int $page
     * @param int $limit
     *
     */
    public function byPage($page = 1, $limit = 20)
    {
        return $this->eloquent->paginate($limit);
    }
}