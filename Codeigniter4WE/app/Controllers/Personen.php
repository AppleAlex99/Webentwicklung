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

    private function setPerson($personId) {
        // Person aktualisieren
        if($personId != null) {
            $this->personenModel->updatePerson($personId);
        }
        // Person erstellen
        else {
            $this->personenModel->createPerson();
        }
    }

    private function deletePerson($personId) {
        $this->personenModel->deletePerson($personId);
    }
}
