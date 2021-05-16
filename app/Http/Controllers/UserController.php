<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    private $repo;
    
    public function __construct()
    {
    }

    public function index()
    {
        echo view('pages.user.index');
    }

    public function signup()
    {
        echo view('pages.user.signup');
    }
}
