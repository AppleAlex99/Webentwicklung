<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\PersonenModel;


class Personen extends BaseController
{
    public function index()
    {
        $data['mitglieder'] = array(
            0 => array(
                'id' => 0,
                'name' => 'Axel Kalenborn',
                'email' => 'kalenborn@example.com',
                'projektID' => 1
            ),
            1 => array(
                'id' => 1,
                'name' => 'Elena',
                'email' => 'elena@example.com',
                'projektID' => 1
            ),
            2 => array(
                'id' => 2,
                'name' => 'Alexander Winzig',
                'email' => 's4alwinz@uni-trier.de',
                'projektID' => 2
            )
        );
#var_dump($mitglieder)

        $data['hw'] = 'Hello World';
        echo view('Personen', $data);
    }
}




?>