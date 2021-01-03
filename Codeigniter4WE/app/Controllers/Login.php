<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\PersonenModel;

class Login extends BaseController
{
    public function __construct(){
        $this->PersonenModel = new PersonenModel();
    }

    public function index()
    {
        if (isset($_POST['email']) && isset($_POST['passwort'])){
            if ($this->PersonenModel->login() != NULL){
                $passwort = $this->PersonenModel->login()['passwort'];
                if (password_verify($_POST['passwort'], $passwort)){
                    $this->session->set('loggedin', TRUE);
                    //
                    //
                    return redirect()->to(base_url() . '/Personen');
                }
            }
        }
        echo view('Login');
    }
}