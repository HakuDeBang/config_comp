<?php
require_once 'config/Connectbdd.php';
require_once 'Competences.php';

class CompetencesRepository extends Connect
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * READ
     */
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

    // On récupère les Objectifs Opérationnels liés à une Compétence par son ID
    public function getObjectifsOperationnelsByCompetenceId($id_competences)
    {
        // On assigne un tableau vide dans la variable $objectifsOpe
        $objectifsOpe = [];
        /**
         * Requête préparée permettant de sélectionner tout les objectifs opérationnels de la table Objectifs Opérationnels
         * Jointure interne avec la table Classer où les id_objectifs_opérationnels sont les mêmes dans les 2 tables
         * Comparaison de l'id_competences entre la table Classer et l'id_competences de la table Compétences, récupéré dans la requête précedente
         */
        $req_sel = $this->conn->prepare("SELECT oo.* FROM objectifs_operationnels oo
                                        INNER JOIN classer cl ON oo.id_objectifs_operationnels = cl.id_objectifs_operationnels
                                        WHERE cl.id_competences = :id_competences");
        /**
         * bindParam permet d'éviter les problèmes de sécurités liées aux injections SQL
         * Permet de lier la variable $id_competences, au paramètre :id_competences dans la requête
         * Utilisation de PARAM_INT pour indiquer que la valeur est un entier
         */
        $req_sel->bindParam(':id_competences', $id_competences, PDO::PARAM_INT);
        // Execution de la requête
        $req_sel->execute();
        // On récupère les résultats de la requête sous forme de tableau associatif
        $res_sel = $req_sel->fetchAll(PDO::FETCH_ASSOC);
        
        // On parcourt chaque ligne de résultats et on crée des instances d'ObjectifOpe
        foreach($res_sel as $objOpeData)
        {
            // On crée un nouvel Objectif Opérationnel avec les données de la BDD
            $objectifOpe = new ObjectifOpe(
                $objOpeData['id_objectifs_operationnels'],
                $objOpeData['intitule_objectifs_operationnels']
            );
            // On ajoute l'Objectif Opérationnel au tableau
            $objectifsOpe[] = $objectifOpe;
        }
        // On retourne le tableau d'Objectifs Opérationnels liés à la Compétence
        return $objectifsOpe;
    }

    /**
     * CREATE
     */
    public function addCompetences(Competence $competence)
    {
        // Requête préparée pour ajouter une nouvelle compétences dans la table Compétences
        $req_ins = $this->conn->prepare("INSERT INTO competences (intitule_competences) VALUES (?)");
        // Execution de la requête en utilisant le getter getIntituleCompetences()
        $req_ins->execute([$competence->getIntituleCompetences()]);
        // Récupération du dernier ID ajouté
        $competenceId = $this->conn->lastInsertId();
        // Retourne l'ID de la dernière compétence ajoutée
        return $competenceId;
    }

    /**
     * UPDATE
     */
    public function updCompetences(Competence $competence)
    {
        // Requête préparée pour mettre à jour une compétences dans la table Compétences
        $req_upd = $this->conn->prepare("UPDATE competences SET intitule_competences = ? WHERE id_competences = ?");
        // Execution de la requête qui permet de modifier l'intitulé d'une compétence, par rapport à son ID
        $req_upd->execute([$competence->getIntituleCompetences(), $competence->getIdCompetences()]);
    }

    /**
     * DELETE
     */
    public function delCompetences(int $id_competences)
    {
        // Requête préparée pour supprimer le lien dans la table Classer entre Compétences et Objectifs Opérationnels
        $req_del_lien = $this->conn->prepare("DELETE FROM classer WHERE id_competences = ?");
        // Execution de la requête supprimant l'ID de la compétence dans la table de relation Classer
        $req_del_lien->execute([$id_competences]);

        // Requête préparée pour supprimer la compétences de la table Compétences
        $req_del_comp = $this->conn->prepare("DELETE FROM competences WHERE id_competences = ?");
        // Execution de la requête supprimant la compétence de la table Compétences
        $req_del_comp->execute([$id_competences]);
    }

    /**
     * LIER OBJECTIFS OPE A COMPETENCES
     */
    public function addObjectifOpeToCompetence($id_competences, $id_objectifs_operationnels)
    {
        // Requête préparée pour faire le lien en les ID des compétences et des objectifs opérationnels
        $req_ins = $this->conn->prepare("INSERT INTO classer (id_competences, id_objectifs_operationnels) VALUES (?, ?)");
        // Execution de la requête insérant les id_competences et id_objectifs_operationnels dans la table Classer
        $req_ins->execute([$id_competences, $id_objectifs_operationnels]);
    }
}
?>