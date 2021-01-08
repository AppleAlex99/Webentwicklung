<?php namespace App\Models;

use CodeIgniter\Model;


class PersonenModel extends Model
{
    public function getData(){
        $result = $this->db->query('SELECT * FROM mitglieder order by ID');
        return $result->getResultArray();
    }

    public function login(){
        $this->personen = $this->db->table('mitglieder');
        $this->personen->select('Passwort');
        $this->personen->where('personen.Email', $_POST['email']);
        $result = $this->personen->get();

        return $result->getRowArray();
    }
}