<?php

namespace App\Repositories;

use App\Interfaces\CategoryInterface;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Repositories\Repository;
use Auth;
use Exception;

class CategoryRepository extends Repository implements CategoryInterface{

    public function __construct(Category $model)
    {
        parent::__construct($model);
    }

}