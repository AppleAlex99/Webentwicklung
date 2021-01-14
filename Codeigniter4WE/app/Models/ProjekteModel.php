<?php namespace App\Models;

use CodeIgniter\Model;


class ProjekteModel extends Model
{
    public function getProjekte(){
        $result = $this->db->query('SELECT * FROM projekte order by ID');
        return $result->getResultArray();
    }

    public function createProjekte()
    {
        $this->projekte = $this->db->table('projekte');
        $this->projekte->insert(array('Name' => $_POST['projektName'],
            'Beschreibung' => $_POST['projektBeschreibung'],
            'ErstellerID' => '1'));
    }

    public function updateProjekte($projectId = null)
    {
        $this->projekte = $this->db->table('projekte');
        $this->projekte->where($_POST['projektID'], $projectId);
        $this->projekte->update(array('Name' => $_POST['projektName'],
            'Beschreibung' => $_POST['projektBeschreibung'],
            'ErstellerID' => '1'));
    }


    public function deleteProjekt($projektId)
    {
        $this->projekte = $this->db->table('projekte');
        $this->projekte->where('ID', $projektId);
        $this->projekte->delete();
    }

}