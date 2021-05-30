<?php

namespace App\Repositories;

use App\Interfaces\UserInterface;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Repositories\Repository;
use Auth;
use Exception;

class UserRepository extends Repository implements UserInterface{

    public function __construct(User $model)
    {
        parent::__construct($model);
    }

    public function login(Array $req) {
        try {
            $arr = [
                'code'      => 401,
                'message'   => 'Invalid Credentials',
            ];
            $user = User::where('email', $req['email'])->first();
            if($user) {
                if (Auth::Attempt($req)) {
                    $user = Auth::user();
                    $arr = [
                        'code'      => 200,
                        'message'   => 'User logged in',
                        'user'      => $user,
                    ];
                } else {
                    $arr = [
                        'code'      => 403,
                        'message'   => 'Username or password is incorrect',
                    ];
                }
            } else {
                $arr = [
                    'code'      => 403,
                    'message'   => 'User does not exist.',
                ];
            }

        } catch (\Exception $e) {
            $arr = [
                'code'      => 500,
                'message'   => 'Error logging in',
                'error'     => $e->getMessage()
            ];
        }
        return $arr;
    }

}
