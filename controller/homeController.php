<?php
require_once 'model/CompetencesRepository.php';
require_once 'model/ObjectifsOpeRepository.php';
require_once 'model/ObjectifsPedaRepository.php';
require_once 'model/UtilisateursRepository.php';
function homepage()
{
    // COMPETENCES
    $competencesRepository = new CompetencesRepository();
    $competencesData = $competencesRepository->getAllCompetences();

    // OBJECTIFS OPERATIONNELS
    $objectifsOpeRepository = new ObjectifsOpeRepository();

    // OBJECTIFS PEDAGOGIQUES
    $objectifsPedaRepository = new ObjectifsPedaRepository();

    require('view/homepage.php');
}

function loginForm()
{
    if(key_exists('id_roles', $_SESSION))
    {
        echo 'Aller à l\'admin';
    }
    else
    {
        require('view/login.php');
    }
}

function login()
{
    // A faire vite

    $utilisateursRepository = new UtilisateurRepository();
    $utilisateurData = $utilisateursRepository->getUtilisateursByEmailAndMdp($_POST['email_utilisateurs'], $_POST['mdp_utilisateurs']);
    // var_dump($utilisateurData);
    // exit();
    
    require('view/homepage.php');
}
?>