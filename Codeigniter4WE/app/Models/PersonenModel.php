<?php namespace App\Models;

use CodeIgniter\Model;
use Config\Database;


class PersonenModel extends Model
{

    public function getData(){
        $result = $this->db->query('SELECT * FROM mitglieder order by ID');
        return $result->getResultArray();
    }

    public function login(){
        $this->personen = $this->db->table('mitglieder');
        $this->personen->select('Passwort');
        $this->personen->where('mitglieder.Email', $_POST['email']);
        $result = $this->personen->get();

        return $result->getRowArray();
    }

    public function getPersonen($person_id = NULL) {
        $this->personen = $this->db->table('mitglieder');
        $this->personen->select('*');
        if ($person_id != NULL)
            $this->personen->where(id, $person_id);
        $result = $this->personen->get();
        if ($person_id != NULL)
            return $result->getRowArray();
        else
            return $result->getResultArray();
    }

    public function createPerson($personBenutzername, $personEmail, $personPasswort) {
        $this->personen->insert(array('Benutzername' => $personBenutzername,
            'Email' => $personEmail,
            'Passwort' => $personPasswort));
    }

    public function updatePerson($personId,$personBenutzername, $personEmail, $personPasswort) {
        $this->personen->where('mitglieder.ID', $personId);
        $this->personen->update(array('Benutzername' => $personBenutzername,
            'Email' => $personEmail,
            'Passwort' => $personPasswort));
    }

    public function deletePerson($personId = null) {
        $this->personen->where('ID', $personId);
        $this->personen->delete();
    }
}