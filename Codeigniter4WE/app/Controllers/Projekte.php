<?php namespace App\Controllers;

use App\Models\PersonenModel;
use CodeIgniter\Controller;
use App\Models\ProjekteModel;

class Projekte extends BaseController
{
    public function __construct() {
        // make model accessible within this class
        $this->projekteModel = new ProjekteModel();
    }

    public function index(){

        $mymodel = new ProjekteModel();
        $data['projekte'] = $mymodel->getProjekte();

        echo view('templates/header.php');
        echo view('Projekte', $data);
        echo view('templates/footer');

    }
    public function createPro(){
        $this->projekteModel->createProjekte();
    }

    public function projektBearb(){
        $this->projekteModel->updateProjekte();
    }

    public function projektLoes($projektID){
        $this->projekteModel->deleteProjekt($projektID);
    }

}