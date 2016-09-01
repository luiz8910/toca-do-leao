<?php

namespace Excel\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Excel\Repositories\stockRepository;
use Excel\Models\Stock;
use Excel\Validators\StockValidator;

/**
 * Class StockRepositoryEloquent
 * @package namespace Excel\Repositories;
 */
class StockRepositoryEloquent extends BaseRepository implements StockRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Stock::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
