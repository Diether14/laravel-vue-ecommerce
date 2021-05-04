<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interfaces\PartnerInterface;

class PartnerController extends Controller
{
    private $repo;
    
    public function __construct(PartnerInterface $repo)
    {
        $this->repo = $repo;
    }
    
    public function getAll() {
        $res = $this->repo->getAll();
        return response(json_encode($res), $res['code']);
    }
}
