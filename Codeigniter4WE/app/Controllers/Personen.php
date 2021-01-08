<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\PersonenModel;
use Psr\Log\NullLogger;


class Personen extends BaseController
{
    /*
    public function __construct(){
        if (session()->get('loggedin') == NULL){
            header('Location: '.base_url() . '/Webentwicklung/Codeigniter4WE/public/Personen');
            exit();
        }
    }
    */

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
}
