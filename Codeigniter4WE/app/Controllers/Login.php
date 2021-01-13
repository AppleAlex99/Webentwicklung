<?php namespace App\Controllers;

use App\Models\LoginModel;
use Config\Services;

class Login extends BaseController
{
    public function __construct(){
        $this->loginModel = new LoginModel();
        $this->session = Services::session();
    }

    public function index()
    {
        if (isset($_POST['email']) && isset($_POST['passwort'])){
            if ($this->loginModel->login() != NULL){
                $passwort = $this->loginModel->login()['passwort'];
                if (password_verify($_POST['passwort'], $passwort)) {
                    $this->session->set('loggedin', TRUE);
                }
                return redirect()->to(base_url(). '/ToDos/index');
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

    //if ($this->validation->run($_POST, 'personLogin')){


    //            else{
    //                $data['personen'] = $_POST;
    //
    //                $data['error'] = $this->validation->getErrors();
    //                echo view('login/index');
    //            }
}