<?php namespace App\Controllers;

use App\Models\PersonenModel;
use CodeIgniter\Controller;
use App\Models\ProjekteModel;

class Projekte extends BaseController
{
    public function index(){


        $data['projekte'] = array(
            0 => array(
                'id' => 0,
                'bezeichnung' => '-auswählen-',
                'beschreibung' => ''
            ),
            1 => array(
                'id' => 1,
                'bezeichnung' => 'Webentwicklung Vorlesung',
                'beschreibung' => 'Die aktuelle Vorlesung von WE anhören.'
            ),

            2 => array(
                'id' => 2,
                'bezeichnung' => 'Datenbanken Übung',
                'beschreibung' => 'Die aktuelle Übung von DBS bearbeiten.'
            ),

            3 => array(
                'id' => 3,
                'bezeichnung' => 'Datenbanken Vorlesung',
                'beschreibung' => 'Die aktuelle Vorlesung von DBS anören.'
            ),
            4 => array(
                'id' => 4,
                'bezeichnung' => 'Studienprojekt Zwischenbreicht schreiben',
                'beschreibung' => 'Für das aktuell laufende Studienprojekt einen sehr guten Zwischenbericht schreiben!'
            ),
            5 => array(
                'id' => 5,
                'bezeichnung' => 'Zwischenbericht strukturieren',
                'beschreibung' => 'Eine Struktur für den Zwischenbericht des Studienprojektes anlegen.'
            ),
            6 => array(
                'id' => 6,
                'bezeichnung' => 'Zwischenberichtstruktur an Herrn Kalenborn senden',
                'beschreibung' => 'Zwischenberichtstruktur an Herrn Kalenborn senden und absegnen lassen.'
            ),
        );


        echo view('Projekte', $data);
    }

    public function projekteTable(){
        $mymodel = new PersonenModel();
        $data['projekte'] = $mymodel->getData();

        echo view('Projekte', $data);
    }
}