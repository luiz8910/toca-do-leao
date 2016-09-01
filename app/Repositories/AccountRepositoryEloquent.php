<?php

namespace Excel\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Excel\Repositories\accountRepository;
use Excel\Models\Account;
use Excel\Validators\AccountValidator;

/**
 * Class AccountRepositoryEloquent
 * @package namespace Excel\Repositories;
 */
class AccountRepositoryEloquent extends BaseRepository implements AccountRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Account::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
