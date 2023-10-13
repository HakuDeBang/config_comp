<?php
class ObjectifPeda
{
    private int $id_objectifs_pedagogiques;
    private string $reference_objectifs_pedagogiques;
    private string $intitule_objectifs_pedagogiques;

    public function __construct(int $id_objectifs_pedagogiques, string $reference_objectifs_pedagogiques, string $intitule_objectifs_pedagogiques)
    {
        $this->id_objectifs_pedagogiques = $id_objectifs_pedagogiques;
        $this->reference_objectifs_pedagogiques = $reference_objectifs_pedagogiques;
        $this->intitule_objectifs_pedagogiques = $intitule_objectifs_pedagogiques;
    }

    public function getIdObjectifPeda(): int
    {
        return $this->id_objectifs_pedagogiques;
    }

    public function getReferenceObjectifPeda(): string
    {
        return $this->reference_objectifs_pedagogiques;
    }

    public function getIntituleObjectifPeda(): string
    {
        return $this->intitule_objectifs_pedagogiques;
    }

    public function setIdObjectifPeda(int $id_objectifs_pedagogiques): void
    {
        $this->id_objectifs_pedagogiques = $id_objectifs_pedagogiques;
    }

    public function setReferenceObjectifPeda(string $reference_objectifs_pedagogiques): void
    {
        $this->reference_objectifs_pedagogiques = $reference_objectifs_pedagogiques;
    }

    public function setIntituleObjectifPeda(string $intitule_objectifs_pedagogiques): void
    {
        $this->intitule_objectifs_pedagogiques = $intitule_objectifs_pedagogiques;
    }
}
?>