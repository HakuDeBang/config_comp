<!-- Titre des résultats de recherche -->
<h2 class="w-3/4 lg:w-10/12 font-bold uppercase underline underline-offset-4 decoration-2 text-center text-sm lg:text-base text-bleulogo mb-4 dark:text-lighttheme dark:decoration-bleuclair">Liste des formations :</h2>
<!-- Résultat en accordéon -->
<div class="w-3/4 lg:w-10/12 space-y-4 border-b-2 border-bleulogo pb-4 dark:border-bleuclair">
    <!-- Accordéon Compétence -->
    <?php foreach($competencesData as $competences){ ?>
    <div id="accordion-collapse-comp-<?= $competences->getIdCompetences();?>" data-accordion="collapse" class="flex flex-col justify-center">
        <!-- Titre accordéon Compétence -->
        <h2 id="accordion-collapse-heading-comp-<?= $competences->getIdCompetences();?>" class="font-medium">
            <!-- Button titre Compétence / Button ajout au formulaire -->
            <div class="flex flex-row justify-between items-center">
                <!-- Button Titre -->
                <button class="!bg-bleulogo flex flex-row items-center py-0.5 px-1.5 lg:py-1 lg:px-2 rounded-lg !text-lighttheme border-2 border-bleulogo dark:!bg-bleuclair dark:border-bleuclair dark:!text-darktheme basis-4/5" data-accordion-target="#accordion-collapse-body-comp-<?= $competences->getIdCompetences();?>" aria-expanded="false" aria-controls="accordion-collapse-body-comp-<?= $competences->getIdCompetences();?>">
                    <svg data-accordion-icon class="w-5 h-5 shrink-0 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="text-sm lg:text-base"><?= $competences->getIntituleCompetences();?></span>
                </button>
                <!-- Button ajout au formulaire -->
                <button data-comp-id="<?= $competences->getIdCompetences();?>" data-competence-id="<?= $competences->getIdCompetences();?>" onclick="showCompetencesTables(this)" class="bg-bleulogo text-lighttheme rounded-full border-2 border-bleulogo py-0.5 px-0.5 dark:text-darktheme dark:bg-bleuclair dark:border-bleuclair">
                    <svg class="w-5 h-5 lg:w-6 lg:h-6" fill="currentColor" width="800px" height="800px" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9,17h6v6a1,1,0,0,0,2,0V17h6a1,1,0,0,0,0-2H17V9a1,1,0,0,0-2,0v6H9a1,1,0,0,0,0,2Z">
                    </svg>
                </button>
            </div>
        </h2>
        <!-- Corps accordéon Compétence -->
        <div id="accordion-collapse-body-comp-<?= $competences->getIdCompetences();?>" class="hidden" aria-labelledby="accordion-collapse-heading-comp-<?= $competences->getIdCompetences();?>">
            <?php
            $objectifsOpeData = $competencesRepository->getObjectifsOperationnelsByCompetenceId($competences->getIdCompetences());
            foreach($objectifsOpeData as $objOpe){
            ?>
            <div class="flex flex-row justify-between items-center my-2 lg:my-3">
                <!-- Titre corps Compétence > Objectifs Opérationnel -->
                <div class="basis-3/4">
                    <p class="ml-4 text-darktheme text-xs lg:text-sm xl:text-base dark:text-lighttheme">
                        <span class="border-l-2 border-bleulogo mr-2 dark:border-bleuclair"></span>
                        <?= $objOpe->getIntituleObjectifOpe();?>
                    </p>
                </div>
                <!-- Button sélectionner Objectif Opérationnel / Button modal Objectif Opérationnel -->
                <div class="flex flex-row basis-6 space-x-1 lg:space-x-2">
                    <!-- Button sélectionner Objectif Opérationnel -->
                    <button data-id="btn_validate_objope_<?= $objOpe->getIdObjectifOpe();?>" class="bg-valider text-lighttheme rounded-md border-2 border-valider dark:border-valider">
                        <svg class="w-3 h-3 lg:w-4 lg:h-4 xl:w-5 xl:h-5" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24px" height="24px">
                            <path d="M 19.28125 5.28125 L 9 15.5625 L 4.71875 11.28125 L 3.28125 12.71875 L 8.28125 17.71875 L 9 18.40625 L 9.71875 17.71875 L 20.71875 6.71875 Z" />
                        </svg>
                    </button>
                    <!-- Button modal Objectif Opérationnel -->
                    <button data-modal-target="modal-objectif-ope-<?= $objOpe->getIdObjectifOpe();?>" data-modal-toggle="modal-objectif-ope-<?= $objOpe->getIdObjectifOpe();?>" class="block text-lighttheme rounded-md bg-bleulogo border-2 border-bleulogo dark:bg-bleuclair dark:border-bleuclair dark:text-darktheme" type="button">
                        <svg class="w-3 h-3 lg:w-4 lg:h-4 xl:w-5 xl:h-5" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" width="24px" height="24px">
                            <path d="M 12 2 C 10.343 2 9 3.343 9 5 C 9 6.657 10.343 8 12 8 C 13.657 8 15 6.657 15 5 C 15 3.343 13.657 2 12 2 z M 9 10 A 1.0001 1.0001 0 1 0 9 12 L 10 12 L 10 20 L 9 20 A 1.0001 1.0001 0 1 0 9 22 L 15 22 A 1.0001 1.0001 0 1 0 15 20 L 14 20 L 14 11 C 14 10.448 13.552 10 13 10 L 11 10 L 9 10 z" />
                        </svg>
                    </button>
                </div>
                <!-- Modal Objectif Opérationnel -->
                <div id="modal-objectif-ope-<?= $objOpe->getIdObjectifOpe();?>" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto h-[calc(100%-1rem)] max-h-full">
                    <div class="relative w-3/4 max-w-md lg:max-w-xl 2xl:max-w-3xl max-h-full">
                        <div class="relative bg-lighttheme rounded-lg shadow-md shadow-darktheme/60 dark:bg-darktheme dark:shadow-bleuclair/60">
                            <!-- Modal header -->
                            <div class="flex items-center justify-between p-3 border-b border-bleulogo dark:border-bleuclair">
                                <h3 class="text-sm lg:text-base xl:text-lg font-semibold text-darktheme dark:text-lighttheme"><?= $objOpe->getIntituleObjectifOpe();?></h3>
                                <button type="button" class="text-darktheme bg-transparent rounded-lg text-base p-1.5 ml-auto inline-flex items-center dark:text-lighttheme" data-modal-hide="modal-objectif-ope-<?= $objOpe->getIdObjectifOpe();?>">
                                    <svg aria-hidden="true" class="w-4 h-4 lg:w-5 lg:h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                            </div>
                            <!-- Modal body -->
                            <form action="" method="post" class="p-3 space-y-3 overflow-y-auto max-h-64">
                                <?php
                                $objectifsPedaData = $objectifsOpeRepository->getObjectifsPedagogiquesByObjectifOpeId($objOpe->getIdObjectifOpe());
                                foreach($objectifsPedaData as $objPeda){
                                ?>
                                <div class="flex flex-row justify-between items-center">
                                    <!-- Titre modal Objectif Opérationnel > Objectif Pédagogique -->
                                    <div class="basis-3/4">
                                        <p id="objectif-peda-<?= $objPeda->getIdObjectifPeda();?>" class="ml-2 text-xs lg:text-sm xl:text-base leading-relaxed text-darktheme/80 dark:text-lighttheme/80">
                                            <span class="border-l-2 border-bleulogo mr-2 dark:border-bleuclair"></span>
                                            <?= $objPeda->getIntituleObjectifPeda();?>
                                        </p>
                                    </div>
                                    <!-- Button sélectionner Objectif Pédagogique -->
                                    <button data-id="btn_validate_objpeda_<?= $objPeda->getIdObjectifPeda();?>" class="bg-valider text-lighttheme rounded-md border-2 border-valider mx-1.5 dark:border-valider">
                                        <svg class="w-3 h-3 lg:w-4 lg:h-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24px" height="24px">
                                            <path d="M 19.28125 5.28125 L 9 15.5625 L 4.71875 11.28125 L 3.28125 12.71875 L 8.28125 17.71875 L 9 18.40625 L 9.71875 17.71875 L 20.71875 6.71875 Z" />
                                        </svg>
                                    </button>
                                </div>
                                <?php } ?>
                            </form>
                            <!-- Modal footer -->
                            <div class="flex justify-end items-center p-3 border-t border-bleulogo dark:border-bleuclair">
                                <button data-modal-hide="modal-objectif-ope-<?= $objOpe->getIdObjectifOpe();?>" type="button" class="bg-rougelogo text-lighttheme text-xs lg:text-sm xl:text-base font-medium px-1 py-0.5 rounded-md border-2 border-rougelogo">Annuler</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
    <?php } ?>
</div>