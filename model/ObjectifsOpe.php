<?php
class ObjectifOpe
{
    private int $id_objectifs_operationnels;
    private string $reference_objectifs_operationnels;
    private string $intitule_objectifs_operationnels;
    private $objectifsPedagogiques;

    public function __construct(int $id_objectifs_operationnels, string $reference_objectifs_operationnels, string $intitule_objectifs_operationnels)
    {
        $this->id_objectifs_operationnels = $id_objectifs_operationnels;
        $this->reference_objectifs_operationnels = $reference_objectifs_operationnels;
        $this->intitule_objectifs_operationnels = $intitule_objectifs_operationnels;
    }

    public function getIdObjectifOpe(): int
    {
        return $this->id_objectifs_operationnels;
    }

    public function getReferenceObjectifOpe(): string
    {
        return $this->reference_objectifs_operationnels;
    }

    public function getIntituleObjectifOpe(): string
    {
        return $this->intitule_objectifs_operationnels;
    }

    public function setIdObjectifOpe(int $id_objectifs_operationnels): void
    {
        $this->id_objectifs_operationnels = $id_objectifs_operationnels;
    }

    public function setReferenceObjectifOpe(string $reference_objectifs_operationnels): void
    {
        $this->reference_objectifs_operationnels = $reference_objectifs_operationnels;
    }

    public function setIntituleObjectifOpe(string $intitule_objectifs_operationnels): void
    {
        $this->intitule_objectifs_operationnels = $intitule_objectifs_operationnels;
    }

    public function getObjectifsPedagogiques()
    {
        return $this->objectifsPedagogiques;
    }

    public function setObjectifsPedagogiques($objectifsPeda)
    {
        $this->objectifsPedagogiques = $objectifsPeda;
    }
}
?>