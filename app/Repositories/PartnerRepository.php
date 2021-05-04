<?php

namespace App\Repositories;

use App\Interfaces\PartnerInterface;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\Partner;
use App\Repositories\Repository;
use Auth;
use Exception;

class PartnerRepository extends Repository implements PartnerInterface{

    public function __construct(Partner $model)
    {
        parent::__construct($model);
    }

}