<?php namespace App\Models;

use CodeIgniter\Model;
use Config\Database;


class PersonenModel extends Model
{

    public function getPersonen(){
        $result = $this->db->query('SELECT * FROM mitglieder order by ID');
        return $result->getResultArray();
    }

    public function createPerson() {
        $this->mitglieder = $this->db->table('mitglieder');
        $this->mitglieder->insert(array('Nutzername' => $_POST['nutzername'],
            'Email' => $_POST['email'],
            'Passwort' => password_hash($_POST['passwort'], PASSWORD_DEFAULT, ["cost" => 10])));
    }

    public function updatePerson($personId = null) {
        $this->mitglieder = $this->db->table('mitglieder');
        $this->mitglieder->where('mitglieder.ID', $personId);
        $this->mitglieder->update(array('Benutzername' => $_POST['benutzername'],
            'Email' => $_POST['email'],
            'Passwort' => $_POST['passwort']));
    }

    public function deletePerson($personId = null) {
        $this->mitglieder = $this->db->table('mitglieder');
        $this->mitglieder->where('ID', $personId);
        $this->mitglieder->delete();
    }
}