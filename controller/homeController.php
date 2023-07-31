<?php
require_once 'model/CompetencesRepository.php';
require_once 'model/ObjectifsOpeRepository.php';
require_once 'model/ObjectifsPedaRepository.php';
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
?>