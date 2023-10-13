<?php
class Competence
{
    private int $id_competences;
    private string $reference_competences;
    private string $intitule_competences;
    private $objectifsOperationnels;

    public function __construct(int $id_competences, string $reference_competences, string $intitule_competences)
    {
        $this->id_competences = $id_competences;
        $this->reference_competences = $reference_competences;
        $this->intitule_competences = $intitule_competences;
    }

    public function getIdCompetences(): int
    {
        return $this->id_competences;
    }

    public function getReferenceCompetences(): string
    {
        return $this->reference_competences;
    }

    public function getIntituleCompetences(): string
    {
        return $this->intitule_competences;
    }

    public function setIdCompetences(int $id_competences): void
    {
        $this->id_competences = $id_competences;
    }

    public function setReferenceCompetences(string $reference_competences): void
    {
        $this->reference_competences = $reference_competences;
    }

    public function setIntituleCompetences(string $intitule_competences): void
    {
        $this->intitule_competences = $intitule_competences;
    }

    public function getObjectifsOperationnels()
    {
        return $this->objectifsOperationnels;
    }

    public function setObjectifsOperationnels($objectifs)
    {
        $this->objectifsOperationnels = $objectifs;
    }
}
?>