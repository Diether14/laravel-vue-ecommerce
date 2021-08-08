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

    public function checkoutEmail() {
        $to = 'sisonkryshan@gmail.com';
        $subject = "The Good Mob - Order";

        $message = "
        <html>
        <head>
            <title>The Good Mob - Order</title>
        </head>
        <body>
            <table style='width: 100%;'>
            <thead>
                <tr>
                    <th style='padding: 50px; background: #3d3c3c; color: white;'>
                        <h1>Customer Order</h1>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style='padding: 100px;'>
                        <h1>You've received an order.</h1>
                        <br />
                        <br />
                        <a href='www.thegoodmobph.co/owner/transactions' target='_blank' style='background: #fa9e05; color: white; padding: 20px 40px;'>Check order</a>
                    </td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <th style='padding: 50px; background: #3d3c3c; color: white;'>&copy; 2021. The Good Mob PH.</th>
                </tr>
            </tfoot>
            </table>
        </body>
        </html>";

        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From: orders@thegoodmobph.co' . "\r\n";

        mail($to, $subject, $message, $headers);
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
