<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interfaces\ProductInterface;

class ProductController extends Controller
{
    private $repo;
    
    public function __construct(ProductInterface $repo)
    {
        $this->repo = $repo;
    }

    public function index()
    {
        echo view('landing-page.index');
    }
    
    public function getAll() {
        $res = $this->repo->getAll();
        return response(json_encode($res), $res['code']);
    }
}
