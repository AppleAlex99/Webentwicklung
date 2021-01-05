<?php namespace App\Controllers;


use App\Models\PersonenModel;
use CodeIgniter\Controller;
use App\Models\ToDosModel;

class ToDos extends BaseController
{
    public function index(){


        $data['todos'] = array(
            0 => array(
                'id' => 0,
                'bezeichnung' => 'ToDo',
                'wert0' => 'Übung bearbeiten',
                'wert1' => 'Webenwicklung machen',
                'wert2' => 'Vorlesung DBS anhören',
            ),

            1 => array(
                'id' => 1,
                'bezeichnung' => 'Erledigt',
                'wert0' => 'Studienprojekt Lastenheft',
                'wert1' => 'Studienprojekt Lösungsskizze',
                'wert2' => 'Studienprojekt Zwischenpräsentation',
                'wert3' => 'Studienprojekt Zwischenpbericht',
            ),
            2 => array(
                'id' => 2,
                'bezeichnung' => 'Verschoben',
                'wert0' => 'schlafen',
                'wert1' => 'PS5-Vorbestellung',
            ),
        );
        echo view('templates/header.php');
        echo view('index', $data);
        echo view('templates/footer');

    }

    public function todosTable(){
        $mymodel = new PersonenModel();
        $data['todos'] = $mymodel->getData();

        echo view('ToDos', $data);
    }
}