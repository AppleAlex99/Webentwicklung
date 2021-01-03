<?php namespace App\Controllers;


use CodeIgniter\Controller;
use App\Models\ReiterModel;

class Reiter extends BaseController
{
    public function index(){
        echo view('Reiter');
    }
}