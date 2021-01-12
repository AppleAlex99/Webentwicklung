<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\PersonenModel;
use Config\Services;

class Login extends BaseController
{
    public function __construct(){
        $this->PersonenModel = new PersonenModel();
        $this->_session = Services::session();
    }

    public function index()
    {
        $session = \Config\Services::session();
        if (isset($_POST['email']) && isset($_POST['passwort'])){
            if ($this->PersonenModel->login() != NULL){
                $passwort = $this->PersonenModel->login()['passwort'];
                if (password_verify($_POST['passwort'], $passwort)){
                    $this->session->set('loggedin', TRUE);

                    return redirect()->to(base_url(). '/ToDos');
                }
            }
        }
        echo view('templates/header.php');
        echo view('Login');
        echo view('templates/footer');
    }

    public function logout(){
        $this->session->destroy();
        return redirect()->to(base_url() . '/login');
    }
}