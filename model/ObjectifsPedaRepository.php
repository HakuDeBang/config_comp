<?php
require_once('config/Connectbdd.php');
require_once('ObjectifsPeda.php');

class ObjectifsPedaRepository extends Connect
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAllObjectifsPedagogiques()
    {
        $objectifsPeda = [];

        $req_sel = $this->conn->prepare("SELECT * FROM objectifs_pedagogiques");
        $req_sel->execute();
        $res_sel = $req_sel->fetchAll(PDO::FETCH_ASSOC);
        
        foreach($res_sel as $objPedaData)
        {
            $objectifPeda = new ObjectifPeda(
                $objPedaData['id_objectifs_pedagogiques'],
                $objPedaData['reference_objectifs_pedagogiques'],
                $objPedaData['intitule_objectifs_pedagogiques']
            );
            $objectifsPeda[] = $objectifPeda;
        }
        return $objectifsPeda;
    }

    public function getObjectifPedaById(int $objectifPedaId)
    {
        $req_sel = $this->conn->prepare("SELECT* FROM objectifs_pedagogiques WHERE id_objectifs_pedagogiques = :id_objectifs_pedagogiques");
        $req_sel->bindParam(":id_objectifs_pedagogiques", $objectifPedaId, PDO::PARAM_INT);
        $req_sel->execute();
        $objectifPedaData = $req_sel->fetch(PDO::FETCH_ASSOC);

        if(!$objectifPedaData)
        {
            return null;
        }

        $objectifPeda = new ObjectifPeda(
            $objectifPedaData['id_objectifs_pedagogiques'],
            $objectifPedaData['reference_objectifs_pedagogiques'],
            $objectifPedaData['intitule_objectifs_pedagogiques']
        );
        return $objectifPeda;
    }
}
?>