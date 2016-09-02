<?php

namespace TocaLeao\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Customer extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
        'name', 'cpf', 'rg', 'dateBirth', 'barCode', 'planB', 'currentBalance'
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

}
