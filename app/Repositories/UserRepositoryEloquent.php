<?php

namespace TocaLeao\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use TocaLeao\Repositories\UserRepository;
use TocaLeao\Models\User;
use TocaLeao\Validators\UserValidator;

/**
 * Class UserRepositoryEloquent
 * @package namespace TocaLeao\Repositories;
 */
class UserRepositoryEloquent extends BaseRepository implements UserRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return User::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
