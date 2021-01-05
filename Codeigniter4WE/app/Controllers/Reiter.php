<?php namespace App\Controllers;


use App\Models\PersonenModel;
use CodeIgniter\Controller;
use App\Models\ReiterModel;

class Reiter extends BaseController
{
    public function index(){
        echo view('templates/header.php');
        echo view('Reiter');
        echo view('templates/footer');

    }

}