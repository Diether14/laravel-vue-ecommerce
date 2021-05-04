<?php

namespace App\Repositories;

use App\Interfaces\NewsletterInterface;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\Newsletter;
use App\Repositories\Repository;
use Auth;
use Exception;

class NewsletterRepository extends Repository implements NewsletterInterface{

    public function __construct(Newsletter $model)
    {
        parent::__construct($model);
    }

}