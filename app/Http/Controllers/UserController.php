<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interfaces\UserInterface;

class UserController extends Controller
{
    private $repo;

    public function __construct(UserInterface $repo)
    {
        $this->repo = $repo;
    }

    public function index()
    {
        echo view('pages.user.index');
    }

    public function signup()
    {
        echo view('pages.user.signup');
    }

    public function account()
    {
        echo view('pages.user.account');
    }

    public function login(Request $request) {
        $validated = $request->validate([
            'email'     => 'required|email',
            'password'  => 'required',
        ]);
        $res = $this->repo->login($validated);
        if($res['code'] === 200) {
            $user = $res['user'];
            if($user->hasRole(['admin'])){
                return redirect('/admin');
            } elseif($user->hasRole(['owner'])){
                return redirect('/owner');
            } elseif($user->hasRole(['customer'])){
                return redirect('/');
            }
        } else {
            return redirect()->back()->withErrors([$res['message']])->withInput();
        }
    }
}
