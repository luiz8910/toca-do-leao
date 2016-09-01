<?php

namespace Excel\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Excel\Repositories\pay-boxRepository;
use Excel\Models\PayBox;
use Excel\Validators\PayBoxValidator;

/**
 * Class PayBoxRepositoryEloquent
 * @package namespace Excel\Repositories;
 */
class PayBoxRepositoryEloquent extends BaseRepository implements PayBoxRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return PayBox::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
