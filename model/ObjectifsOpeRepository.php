<?php
require_once('config/Connectbdd.php');
require_once('ObjectifsOpe.php');

class ObjectifsOpeRepository extends Connect
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAllObjectifsOperationnels()
    {
        $objectifsOpe = [];

        $req_sel = $this->conn->prepare("SELECT * FROM objectifs_operationnels");
        $req_sel->execute();
        $res_sel = $req_sel->fetchAll(PDO::FETCH_ASSOC);

        foreach($res_sel as $objOpeData)
        {
            $objectifOpe = new ObjectifOpe(
                $objOpeData['id_objectifs_operationnels'],
                $objOpeData['reference_objectifs_operationnels'],
                $objOpeData['intitule_objectifs_operationnels']
            );
            $objectifsOpe[] = $objectifOpe;
        }
        return $objectifsOpe;
    }

    public function getObjectifOpeById(int $objectifOpeId)
    {
        $req_sel = $this->conn->prepare("SELECT* FROM objectifs_operationnels WHERE id_objectifs_operationnels = :id_objectifs_operationnels");
        $req_sel->bindParam(":id_objectifs_operationnels", $objectifOpeId, PDO::PARAM_INT);
        $req_sel->execute();
        $objectifOpeData = $req_sel->fetch(PDO::FETCH_ASSOC);

        if(!$objectifOpeData)
        {
            return null;
        }

        $objectifOpe = new ObjectifOpe(
            $objectifOpeData['id_objectifs_operationnels'],
            $objectifOpeData['reference_objectifs_operationnels'],
            $objectifOpeData['intitule_objectifs_operationnels']
        );
        return $objectifOpe;
    }

    public function getObjectifsPedagogiquesByObjectifOpeId($id_objectifs_operationnels)
    {
        $objectifsPeda = [];
        $req_sel = $this->conn->prepare("SELECT op.* FROM objectifs_pedagogiques op
                                        INNER JOIN objope_objpeda ooop ON op.id_objectifs_pedagogiques = ooop.id_objectifs_pedagogiques
                                        WHERE ooop.id_objectifs_operationnels = :id_objectifs_operationnels");
        $req_sel->bindParam(':id_objectifs_operationnels', $id_objectifs_operationnels, PDO::PARAM_INT);
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
}
?>