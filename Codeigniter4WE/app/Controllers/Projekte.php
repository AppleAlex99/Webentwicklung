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
        $this->projekteModel->createProjekte($_POST['projektName'], $_POST['projektBeschreibung'], 2);
        return redirect()->to(base_url('/Webentwicklung/Codeigniter4WE/public/Projekte'));
    }

    public function projektBearb(){
        $this->projekteModel->updateProjekte();
        return redirect()->to(base_url('/Webentwicklung/Codeigniter4WE/public/Projekte'));
    }

    public function projektLoes(){
        $this->projekteModel->deleteProjekt($_POST['projektID']);
        return redirect()->to(base_url('/Webentwicklung/Codeigniter4WE/public/Projekte'));
    }

    public function projektAusw(){
        return redirect()->to(base_url('/Webentwicklung/Codeigniter4WE/public/ToDos'));
    }

}