<?php

namespace TocaLeao\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use TocaLeao\Repositories\productRepository;
use TocaLeao\Models\Product;
use TocaLeao\Validators\ProductValidator;

/**
 * Class ProductRepositoryEloquent
 * @package namespace Excel\Repositories;
 */
class ProductRepositoryEloquent extends BaseRepository implements ProductRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Product::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
