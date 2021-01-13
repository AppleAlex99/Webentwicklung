<?php namespace App\Models;

use CodeIgniter\Model;


class ProjekteModel extends Model
{
    public function getData(){
        $result = $this->db->query('SELECT * FROM projekte order by ID');
        return $result->getResultArray();
    }

    public function createProject($projektName, $beschreibung, $erstellerID)
    {
        $this->_projects->insert([
            "Name" => $projektName,
            "Beschreibung" => $beschreibung,
            "creator_id" => $erstellerID
        ]);
    }

    public function deleteProjekt($projektID)
    {
        $this->projekte->where('ID', $projektID);
        $this->projekte->delete();
    }

    public function updateProjekt($projectID, $projectName, $description)
    {
        $this->_projects->where($_POST['projektID'], $projectID);
        $this->_projects->update([
            "projekt_name" => $projectName,
            "description" => $description
        ]);
    }
}