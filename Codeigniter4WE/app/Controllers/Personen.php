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
        $data['mitglieder'] = $mymodel->getData();

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

    private function setPerson($personId = null, $personBenutzername, $personEmail, $personPasswort) {
        // Person aktualisieren
        if($personId != null) {
            $this->personenModel->updatePerson($personId, $personBenutzername, $personEmail, $personPasswort);
        }
        // Person erstellen
        else {
            $this->personenModel->createPerson($personBenutzername, $personEmail, $personPasswort);
        }
    }

    private function deletePerson($personId) {
        $this->personenModel->deletePerson($personId);
    }
}
