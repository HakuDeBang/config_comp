<?php
class Utilisateur
{
    private int $id_utilisateurs;
    private string $prenom_utilisateurs;
    private string $nom_utilisateurs;
    private string $email_utilisateurs;
    private string $mdp_utilisateurs;
    private int $id_roles;

    public function __construct(int $id_utilisateurs, string $prenom_utilisateurs, string $nom_utilisateurs, string $email_utilisateurs, string $mdp_utilisateurs, int $id_roles)
    {
        $this->id_utilisateurs = $id_utilisateurs;
        $this->prenom_utilisateurs = $prenom_utilisateurs;
        $this->nom_utilisateurs = $nom_utilisateurs;
        $this->email_utilisateurs = $email_utilisateurs;
        $this->mdp_utilisateurs = $mdp_utilisateurs;
        $this->id_roles = $id_roles;
    }

    public function getIdUtilisateurs(): int
    {
        return $this->id_utilisateurs;
    }

    public function getPrenomUtilisateurs(): string
    {
        return $this->prenom_utilisateurs;
    }

    public function getNomUtilisateurs(): string
    {
        return $this->nom_utilisateurs;
    }

    public function getEmailUtilisateurs(): string
    {
        return $this->email_utilisateurs;
    }

    public function getIMdpUtilisateurs(): string
    {
        return $this->mdp_utilisateurs;
    }

    public function getIdRoles(): int
    {
        return $this->id_roles;
    }

    public function setIdUtilisateurs(int $id_utilisateurs): void
    {
        $this->id_utilisateurs = $id_utilisateurs;
    }

    public function setPrenomUtilisateurs(string $prenom_utilisateurs): void
    {
        $this->prenom_utilisateurs = $prenom_utilisateurs;
    }

    public function setNomUtilisateurs(string $nom_utilisateurs): void
    {
        $this->nom_utilisateurs = $nom_utilisateurs;
    }

    public function setEmailUtilisateurs(string $email_utilisateurs): void
    {
        $this->email_utilisateurs = $email_utilisateurs;
    }

    public function setIMdpUtilisateurs(string $mdp_utilisateurs): void
    {
        $this->mdp_utilisateurs = $mdp_utilisateurs;
    }

    public function setIdRoles(int $id_roles): void
    {
        $this->id_roles = $id_roles;
    }
}
?>