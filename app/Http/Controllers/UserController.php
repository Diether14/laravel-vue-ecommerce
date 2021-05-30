<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interfaces\UserInterface;
use Auth;

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

    public function showSignUpPage()
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

    public function signup(Request $request) {
        $validated = $request->validate([
            'name'      => 'required',
            'email'     => 'required|email|unique:users,email',
            'password'  => 'required|confirmed|min:8',
        ]);
        $res = $this->repo->register($validated);
        if($res['code'] === 201) {
            Auth::login($res['user']);
            return redirect('/');
        } else {
            return redirect()->back()->withErrors([$res['e']])->withInput();
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
