<?php

namespace TocaLeao\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use TocaLeao\Repositories\customerRepository;
use TocaLeao\Models\Customer;
use TocaLeao\Validators\CustomerValidator;

/**
 * Class CustomerRepositoryEloquent
 * @package namespace Excel\Repositories;
 */
class CustomerRepositoryEloquent extends BaseRepository implements CustomerRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Customer::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
