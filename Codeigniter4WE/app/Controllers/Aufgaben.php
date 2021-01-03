<?php namespace App\Controllers;

use App\Models\PersonenModel;
use CodeIgniter\Controller;
use App\Models\AufgabenModel;

class Aufgaben extends BaseController
{
    public function index(){

        $data['aufgaben'] = array(
            0 => array(
                'id' => 0,
                'bezeichnung' => 'HTML-Datei',
                'beschreibung' => 'HTML-Datei erstellen',
                'reiter' => 'ToDo',
                'zustaendig' => 'Alexander Winzig'
            ),

            1 => array(
                'id' => 1,
                'bezeichnung' => 'CSS',
                'beschreibung' => 'CSS-Datei erstellen',
                'reiter' => 'ToDo',
                'zustaendig' => 'Alexander Winzig'
            ),
            2 => array(
                'id' => 2,
                'bezeichnung' => 'Datenbanksysteme',
                'beschreibung' => 'Datenbanksysteme Übung 4 bearbeiten',
                'reiter' => 'Must do',
                'zustaendig' => 'Alexander Winzig'
            ),
        );

        echo view('Aufgaben', $data);
    }

    public function aufgabenTable(){
        $mymodel = new PersonenModel();
        $data['aufgaben'] = $mymodel->getData();

        echo view('Aufgaben', $data);
    }
}