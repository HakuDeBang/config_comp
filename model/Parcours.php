<?php
class Parcours
{
    private int $id_parcours;
    private string $intitule_parcours;
    private string $reference_parcours;
    private string $code_rncp_parcours;
    private string $lien_france_comp_parcours;

    public function __construct (int $id_parcours, string $intitule_parcours, string $reference_parcours, string $code_rncp_parcours, string $lien_france_comp_parcours)
    {
        $this->id_parcours = $id_parcours;
        $this->intitule_parcours = $intitule_parcours;
        $this->reference_parcours = $reference_parcours;
        $this->code_rncp_parcours = $code_rncp_parcours;
        $this->lien_france_comp_parcours = $lien_france_comp_parcours;
    }

    public function getIdParcours(): int
    {
        return $this->id_parcours;
    }

    public function getIntituleParcours(): string
    {
        return $this->intitule_parcours;
    }

    public function getReferenceParcours(): string
    {
        return $this->reference_parcours;
    }

    public function getCodeRncpParcours(): string
    {
        return $this->code_rncp_parcours;
    }

    public function getLienFranceCompParcours(): string
    {
        return $this->lien_france_comp_parcours;
    }

    public function setIdParcours(int $id_parcours): void
    {
        $this->id_parcours = $id_parcours;
    }

    public function setIntituleParcours(string $intitule_parcours): void
    {
        $this->intitule_parcours = $intitule_parcours;
    }

    public function setReferenceParcours(string $reference_parcours): void
    {
        $this->reference_parcours = $reference_parcours;
    }

    public function setCodeRncpParcours(string $code_rncp_parcours): void
    {
        $this->code_rncp_parcours = $code_rncp_parcours;
    }

    public function setLienFranceCompParcours(string $lien_france_comp_parcours): void
    {
        $this->lien_france_comp_parcours = $lien_france_comp_parcours;
    }
}

?>