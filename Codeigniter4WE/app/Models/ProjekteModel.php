<?php namespace App\Models;

use CodeIgniter\Model;


class ProjekteModel extends Model
{
    public function getData(){
        $result = $this->db->query('SELECT * FROM projekte order by ID');
        return $result->getResultArray();
    }
}