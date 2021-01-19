<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\PersonenModel;
use Psr\Log\NullLogger;


class Personen extends BaseController
{
    public function __construct() {
        // make model accessible within this class
        $this->personenModel = new PersonenModel();
    }

    public function index()
    {
        $mymodel = new PersonenModel();
        $data['mitglieder'] = $mymodel->getPersonen();

        echo view('templates/header.php');
        echo view('Personen', $data);
        echo view('templates/footer');
    }

    public function sessionPruefen()
    {
        if (!$this->session->get('loggedin')) {
            return redirect()->to(base_url() . '/Webentwicklung');
        } else {
            echo view('templates/header');
            echo view('Personen');
            echo view('templates/footer');
        }
    }

    public function crPerson()
    {
        $this->personenModel->createPerson($_POST['nutzername'], $_POST['emailadr'], $_POST['passwort2']);
        return redirect()->to(base_url('/Webentwicklung/Codeigniter4WE/public/'));
    }


    public function bearbPerson($personId)
    {
        $this->personenModel->updatePerson($personId);
        return redirect()->to(base_url('/Webentwicklung/Codeigniter4WE/public/'));
    }



    public function deletePerson() {
        $this->personenModel->deletePerson($_POST['idLöschen']);
        return redirect()->to(base_url('/Webentwicklung/Codeigniter4WE/public/Personen'));
    }
}
