<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PolicyController extends Controller
{
    private $repo;

    public function __construct()
    {
    }

    public function index() {
        return view('pages.policy.index');
    }

    public function backup() {
        $file = "generated/database.sql";
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="'.basename($file).'"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($file));
        readfile($file);
        echo 'Backup Successfully downloaded!';
        exit;
    }

}
