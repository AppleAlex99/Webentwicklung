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
        $data['projekte'] = $mymodel->getData();

        echo view('templates/header.php');
        echo view('Projekte', $data);
        echo view('templates/footer');

    }
    public function createPro($projektName, $projektBeschreibung){
        $this->projekteModel->createProjekte($projektName, $projektBeschreibung);
    }

    public function projektBearb($projektName, $projektBeschreibung){
        $this->projekteModel->updateProjekte($projektName, $projektBeschreibung);
    }

    public function projektLoes($projektID){
        $this->projekteModel->deleteProjekt($projektID);
    }

}