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

    public function register(Array $req, $roles = ['3']){
        DB::beginTransaction();
        try {
            $user = User::create([
                'name'              => $req['name'],
                'email'             => $req['email'],
                'password'          => Hash::make($req['password']),
            ]);

            $rolesSuccess = $this->flushRoles($user, $roles);
            if($rolesSuccess['code'] == 500) {
                throw new \Exception($rolesSuccess['e']);
            }

            $arr = [
                'code'      => 201,
                'message'   => 'User registered',
                'user'      => $user
            ];
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            $arr = [
                'code'      => 500,
                'message'   => 'Error registering user',
                'e'         => $e->getMessage()
            ];
        }

        return $arr;
    }

    public function flushRoles(User $user, Array $roles) {
        DB::beginTransaction();
        try {
            foreach ($roles as $i => $role) {
                $user->roles()->attach($role, ['model_type' => 'App\Models\User']);
            }

            $arr = [
                'code'      => 201,
                'message'   => 'roles flushed',
            ];
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            $arr = [
                'code'      => 500,
                'message'   => 'Error flushing roles',
                'e'         => $e->getMessage()
            ];
        }

        return $arr;

    }

}
