<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\LoginModel;

class Login extends BaseController
{
    public function index()
    {
        echo view('Login');
    }
}