<?php

namespace TocaLeao\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Product extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
        'product_id', 'name', 'code', 'value', 'qtde'
    ];

    public function customers()
    {
        return $this->hasMany(Customer::class);
    }

}
