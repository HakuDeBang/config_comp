<?php
require_once 'config/Connectbdd.php';
require_once 'Utilisateurs.php';

class UtilisateurRepository extends Connect
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getUtilisateursByEmailAndMdp($email_utilisateurs, $mdp_utilisateurs)
    {
        $req_sel = $this->conn->prepare('SELECT * FROM utilisateurs WHERE email_utilisateurs = ? AND mdp_utilisateurs = ?');
        $req_sel->execute([$email_utilisateurs, $mdp_utilisateurs]);
        $utilisateursData = $req_sel->fetch(PDO::FETCH_ASSOC);
        // var_dump($utilisateursData);
        if($utilisateursData != false)
        {
            $user = new Utilisateur(
                $utilisateursData['id_utilisateurs'],
                $utilisateursData['prenom_utilisateurs'],
                $utilisateursData['nom_utilisateurs'],
                $utilisateursData['email_utilisateurs'],
                $utilisateursData['mdp_utilisateurs'],
                $utilisateursData['id_roles']
            );
            // var_dump($user);
        return $user;
        }
    }
}
?>