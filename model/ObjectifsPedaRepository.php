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
                $objPedaData['intitule_objectifs_pedagogiques']
            );
            $objectifsPeda[] = $objectifPeda;
        }
        return $objectifsPeda;
    }
}
?>