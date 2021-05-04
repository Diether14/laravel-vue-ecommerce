<?php

namespace App\Repositories;

use App\Interfaces\ProductInterface;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Repositories\Repository;
use Auth;
use Exception;

class ProductRepository extends Repository implements ProductInterface{

    public function __construct(Product $model)
    {
        parent::__construct($model);
    }

}