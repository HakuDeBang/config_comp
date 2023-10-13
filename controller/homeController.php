<?php
require_once 'model/CompetencesRepository.php';
require_once 'model/ObjectifsOpeRepository.php';
require_once 'model/ObjectifsPedaRepository.php';
require_once 'model/ParcoursRepository.php';
function homepage()
{
    // PARCOURS
    $parcoursRepository = new ParcoursRepository();
    $parcoursData = $parcoursRepository->getAllParcours();

    // COMPETENCES
    $competencesRepository = new CompetencesRepository();
    $competencesData = $competencesRepository->getAllCompetences();

    // OBJECTIFS OPERATIONNELS
    $objectifsOpeRepository = new ObjectifsOpeRepository();
    $objectifsOpeData = $objectifsOpeRepository->getAllObjectifsOperationnels();


    // OBJECTIFS PEDAGOGIQUES
    $objectifsPedaRepository = new ObjectifsPedaRepository();
    $objectifsPedaData = $objectifsPedaRepository->getAllObjectifsPedagogiques();

    require('view/homepage.php');
}
?>