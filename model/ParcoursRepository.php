<?php
require_once 'config/Connectbdd.php';
require_once 'Parcours.php';

class ParcoursRepository extends Connect
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAllParcours()
    {
        $parcours = [];

        $req_sel = $this->conn->prepare("SELECT* FROM parcours");
        $req_sel->execute();
        $res_sel = $req_sel->fetchAll(PDO::FETCH_ASSOC);

        foreach($res_sel as $parcData)
        {
            $parcour = new Parcours(
                $parcData['id_parcours'],
                $parcData['intitule_parcours'],
                $parcData['reference_parcours'],
                $parcData['code_rncp_parcours'],
                $parcData['lien_france_comp_parcours']
            );
            $parcours[] = $parcour;
        }
        return $parcours;
    }

    public function getParcoursById(int $parcoursId)
    {
        $req_sel = $this->conn->prepare("SELECT * FROM parcours WHERE id_parcours = :id_parcours");
        $req_sel->bindParam(":id_parcours", $parcoursId, PDO::PARAM_INT);
        $req_sel->execute();
        $parcData = $req_sel->fetch(PDO::FETCH_ASSOC);

        if(!$parcData)
        {
            return null;
        }

        $parcours = new Parcours(
            $parcData['id_parcours'],
            $parcData['intitule_parcours'],
            $parcData['reference_parcours'],
            $parcData['code_rncp_parcours'],
            $parcData['lien_france_comp_parcours']
        );
        return $parcours;
    }

    public function getCompetencesByParcoursId($id_parcours)
    {
        $competences = [];

        $req_sel = $this->conn->prepare("SELECT comp.* FROM competences comp
                                        INNER JOIN parcours_competences pc ON comp.id_competences = pc.id_competences
                                        WHERE pc.id_parcours = :id_parcours");
        $req_sel->bindParam(':id_parcours', $id_parcours, PDO::PARAM_INT);
        $req_sel->execute();
        $res_sel = $req_sel->fetchAll(PDO::FETCH_ASSOC);

        foreach($res_sel as $compsData)
        {
            $comps = new Competence(
                $compsData['id_competences'],
                $compsData['reference_competences'],
                $compsData['intitule_competences']
            );
            $competences[] = $comps;
        }
        return $competences;
    }
}
?>