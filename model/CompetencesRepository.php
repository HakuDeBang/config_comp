<?php
require_once 'config/Connectbdd.php';
require_once 'Competences.php';

class CompetencesRepository extends Connect
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAllCompetences()
    {
        $competences = [];

        $req_sel = $this->conn->prepare("SELECT * FROM competences");
        $req_sel->execute();
        $res_sel = $req_sel->fetchAll(PDO::FETCH_ASSOC);
        
        foreach($res_sel as $compsData)
        {
            $competence = new Competence(
                $compsData['id_competences'],
                $compsData['intitule_competences']
            );
            $competences[] = $competence;
        }
        return $competences;
    }

    public function getCompetenceByid(int $competenceId)
    {
        $req_sel = $this->conn->prepare("SELECT * FROM competences WHERE id_competences = :id");
        $req_sel->bindParam(":id", $competenceId, PDO::PARAM_INT);
        $req_sel->execute();
        $compsData = $req_sel->fetch(PDO::FETCH_ASSOC);

        if(!$compsData)
        {
            // Si la compétence n'est pas trouvée, on retourne null ou une erreur
            return null;
        }

        // On crée un nouvel objet competences et on le retourne
        $competence = new Competence(
            $compsData['id_competences'],
            $compsData['intitule_competences']
        );

        return $competence;
    }

    public function getObjectifsOperationnelsByCompetenceId($id_competences)
    {
        $objectifsOpe = [];
        $req_sel = $this->conn->prepare("SELECT oo.* FROM objectifs_operationnels oo
                                        INNER JOIN classer cl ON oo.id_objectifs_operationnels = cl.id_objectifs_operationnels
                                        WHERE cl.id_competences = :id_competences");
        $req_sel->bindParam(':id_competences', $id_competences, PDO::PARAM_INT);
        $req_sel->execute();
        $res_sel = $req_sel->fetchAll(PDO::FETCH_ASSOC);
        // var_dump($res_sel);
        
        foreach($res_sel as $objOpeData)
        {
            $objectifOpe = new ObjectifOpe(
                $objOpeData['id_objectifs_operationnels'],
                $objOpeData['intitule_objectifs_operationnels']
            );
            // var_dump($objectifOpe);
            $objectifsOpe[] = $objectifOpe;
            
        }
        return $objectifsOpe;
    }
}
?>