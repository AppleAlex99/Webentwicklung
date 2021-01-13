<?php namespace App\Controllers;

use App\Models\PersonenModel;
use CodeIgniter\Controller;
use App\Models\AufgabenModel;

class Aufgaben extends BaseController
{

    public function __construct() {
        // make model accessible within this class
        $this->aufgabenModel = new AufgabenModel();
    }

    public function index()
    {
        $mymodel = new AufgabenModel();
        $data['aufgaben'] = $mymodel->getAufgaben();

        echo view('templates/header.php');
        echo view('Aufgaben', $data);
        echo view('templates/footer');
    }


    public function aufgabenTable(){
        $mymodel = new AufgabenModel();
        $data['aufgaben'] = $mymodel->getAufgaben();

        echo view('Aufgaben', $data);
    }
}