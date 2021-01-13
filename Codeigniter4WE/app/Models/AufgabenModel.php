<?php namespace App\Models;

use CodeIgniter\Model;


class AufgabenModel extends Model
{
    public function getAufgaben(){
        $result = $this->db->query('SELECT * FROM aufgaben order by ID');
        return $result->getResultArray();
    }
}