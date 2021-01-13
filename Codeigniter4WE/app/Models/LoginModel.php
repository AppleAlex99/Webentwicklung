<?php namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
    public function login(){
        $this->mitglieder = $this->db->table('mitglieder');
        $this->mitglieder->select('Passwort');
        $this->mitglieder->where('mitglieder.Email', $_POST['email']);
        $result = $this->mitglieder->get();

        return $result->getRowArray();
    }
}