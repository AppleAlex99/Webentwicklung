<?php namespace App\Models;

use CodeIgniter\Model;


class ReiterModel extends Model
{
    public function getData(){
        $result = $this->db->query('SELECT * FROM reiter order by ID');
        return $result->getResultArray();
    }
}