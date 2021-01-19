<?php namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
    public function login($email){
        $this->mitglieder = $this->db->table('mitglieder');
        $this->mitglieder->select('Passwort');
        $this->mitglieder->where('mitglieder.Email', $email);
        $result = $this->mitglieder->get();

        return $result->getRowArray();
    }
}