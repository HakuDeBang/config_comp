<div class="w-3/4 lg:w-10/12 border-b-2 border-bleulogo pb-4 dark:border-bleuclair">
    <!-- Domaine métier, Diplôme, Lieux, Parcours -->
    <div class="w-full">
        <div id="accordion-collapse-formation-parcours" data-accordion="collapse" class="flex flex-col justify-center mb-4">
            <!-- Titre accordéon Formations - Parcours -->
            <!-- <h2 id="accordion-collapse-heading-formations-parcours" class="font-medium">
                <div class="flex flex-row justify-between items-center">
                    <button class="!bg-bleulogo flex flex-row items-center py-0.5 px-1.5 lg:py-1 lg:px-2 rounded-lg !text-lighttheme border-2 border-bleulogo dark:!bg-bleuclair dark:border-bleuclair dark:!text-darktheme w-full" data-accordion-target="#accordion-collapse-body-formations-parcours" aria-expanded="false" aria-controls="accordion-collapse-body-formations-parcours">
                        <svg data-accordion-icon class="w-5 h-5 shrink-0 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-sm lg:text-base uppercase">Formations & Parcours</span>
                    </button>
                </div>
            </h2> -->
            <!-- Corps accordéon Formations - Parcours -->
            <!-- <div id="accordion-collapse-body-formations-parcours" class="hidden" aria-labelledby="accordion-collapse-heading-formations-parcours"> -->
                <!-- Formulaire Formations -->
                <!-- <form id="formFormation" action="" method="post" class="flex flex-col my-3 pb-4 space-y-3 border-b-2 border-darktheme/30 lg:space-y-0 lg:flex-none lg:grid lg:grid-cols-2 lg:items-center dark:border-lighttheme/30">
                    <div class="flex flex-col space-y-1">
                        <p class="font-bold text-xs md:text-sm lg:text-base text-bleulogo dark:text-lighttheme">Choisissez une formation</p>
                        <button id="dropdownFormation" data-dropdown-toggle="checkboxFormation" type="button" class="flex flex-row items-center justify-between w-full lg:w-64 xl:w-72 2xl:w-96 border-2 border-bleulogo px-1 py-0.5 lg:px-1.5 lg:py-1 rounded-lg font-semibold text-xs md:text-sm lg:text-base text-bleulogo dark:text-lighttheme dark:border-bleuclair">
                            <span>Formations</span>
                            <svg data-accordion-icon class="w-5 h-5 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="flex flex-col space-y-1">
                        <label for="newFormation" class="font-bold text-xs md:text-sm lg:text-base text-bleulogo dark:text-lighttheme">Intitulé de la nouvelle formation</label>
                        <div class="flex items-center justify-between lg:justify-normal">
                            <input id="newFormation" type="text" class="bg-lighttheme border-2 border-bleulogo rounded-lg text-xs md:text-sm lg:text-base text-darktheme placeholder:text-darktheme/70 dark:text-lighttheme dark:placeholder:text-lighttheme/70 dark:bg-darktheme dark:border-bleuclair mr-2 p-1 w-full" placeholder="Ex : Formations multi-entreprises">
                            <button class="bg-valider text-lighttheme rounded-full border-2 border-valider py-0.5 px-0.5 lg:py-1 lg:px-1 uppercase ">
                                <svg class="w-3 h-3" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24px" height="24px">
                                    <path d="M 19.28125 5.28125 L 9 15.5625 L 4.71875 11.28125 L 3.28125 12.71875 L 8.28125 17.71875 L 9 18.40625 L 9.71875 17.71875 L 20.71875 6.71875 Z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </form> -->
                <!-- Formulaire Diplôme -->
                <!-- <form id="formDiplome" action="" method="post" class="flex flex-col my-3 pb-4 space-y-3 border-b-2 border-darktheme/30 lg:space-y-0 lg:flex-none lg:grid lg:grid-cols-2 lg:items-center dark:border-lighttheme/30">
                    <div class="flex flex-col space-y-1">
                        <p class="font-bold text-xs md:text-sm lg:text-base text-bleulogo dark:text-lighttheme">Choisissez un diplôme</p>
                        <button id="dropdownDiplome" data-dropdown-toggle="checkboxDiplome" type="button" class="flex flex-row items-center justify-between w-full lg:w-64 xl:w-72 2xl:w-96 border-2 border-bleulogo px-1 py-0.5 lg:px-1.5 lg:py-1 rounded-lg font-semibold text-xs md:text-sm lg:text-base text-bleulogo dark:text-lighttheme dark:border-bleuclair">
                            <span>Diplômes</span>
                            <svg data-accordion-icon class="w-5 h-5 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="flex flex-col space-y-1">
                        <label for="newDiplome" class="font-bold text-xs md:text-sm lg:text-base text-bleulogo dark:text-lighttheme">Intitulé du nouveau diplôme</label>
                        <div class="flex items-center justify-between lg:justify-normal">
                            <input id="newDiplome" type="text" class="bg-lighttheme border-2 border-bleulogo rounded-lg text-xs md:text-sm lg:text-base text-darktheme placeholder:text-darktheme/70 dark:text-lighttheme dark:placeholder:text-lighttheme/70 dark:bg-darktheme dark:border-bleuclair mr-2 p-1 w-full" placeholder="Ex : Formations multi-entreprises">
                            <button class="bg-valider text-lighttheme rounded-full border-2 border-valider py-0.5 px-0.5 lg:py-1 lg:px-1 uppercase ">
                                <svg class="w-3 h-3" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24px" height="24px">
                                    <path d="M 19.28125 5.28125 L 9 15.5625 L 4.71875 11.28125 L 3.28125 12.71875 L 8.28125 17.71875 L 9 18.40625 L 9.71875 17.71875 L 20.71875 6.71875 Z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </form> -->
                <!-- Formulaire Lieux -->
                <!-- <form id="formLieux" action="" method="post" class="flex flex-col my-3 pb-4 space-y-3 border-b-2 border-darktheme/30 lg:space-y-0 lg:flex-none lg:grid lg:grid-cols-2 lg:items-center dark:border-lighttheme/30">
                    <div class="flex flex-col space-y-1">
                        <p class="font-bold text-xs md:text-sm lg:text-base text-bleulogo dark:text-lighttheme">Choisissez un lieux</p>
                        <button id="dropdownLieux" data-dropdown-toggle="checkboxLieux" type="button" class="flex flex-row items-center justify-between w-full lg:w-64 xl:w-72 2xl:w-96 border-2 border-bleulogo px-1 py-0.5 lg:px-1.5 lg:py-1 rounded-lg font-semibold text-xs md:text-sm lg:text-base text-bleulogo dark:text-lighttheme dark:border-bleuclair">
                            <span>Lieux</span>
                            <svg data-accordion-icon class="w-5 h-5 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="flex flex-col space-y-1">
                        <label for="newLieux" class="font-bold text-xs md:text-sm lg:text-base text-bleulogo dark:text-lighttheme">Intitulé du nouveau lieux</label>
                        <div class="flex items-center justify-between lg:justify-normal">
                            <input id="newLieux" type="text" class="bg-lighttheme border-2 border-bleulogo rounded-lg text-xs md:text-sm lg:text-base text-darktheme placeholder:text-darktheme/70 dark:text-lighttheme dark:placeholder:text-lighttheme/70 dark:bg-darktheme dark:border-bleuclair mr-2 p-1 w-full" placeholder="Ex : Formations multi-entreprises">
                            <button class="bg-valider text-lighttheme rounded-full border-2 border-valider py-0.5 px-0.5 lg:py-1 lg:px-1 uppercase ">
                                <svg class="w-3 h-3" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24px" height="24px">
                                    <path d="M 19.28125 5.28125 L 9 15.5625 L 4.71875 11.28125 L 3.28125 12.71875 L 8.28125 17.71875 L 9 18.40625 L 9.71875 17.71875 L 20.71875 6.71875 Z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </form> -->
                <!-- Formulaire Parcours -->
                <!-- <form id="formParcours" action="" method="post" class="flex flex-col mt-3 space-y-3 lg:space-y-0 lg:flex-none lg:grid lg:grid-cols-2 lg:items-center dark:border-lighttheme/30">
                    <div class="flex flex-col space-y-1">
                        <p class="font-bold text-xs md:text-sm lg:text-base text-bleulogo dark:text-lighttheme">Choisissez un parcours</p>
                        <button id="dropdownParcours" data-dropdown-toggle="checkboxParcours" type="button" class="flex flex-row items-center justify-between w-full lg:w-64 xl:w-72 2xl:w-96 border-2 border-bleulogo px-1 py-0.5 lg:px-1.5 lg:py-1 rounded-lg font-semibold text-xs md:text-sm lg:text-base text-bleulogo dark:text-lighttheme dark:border-bleuclair">
                            <span>Parcours</span>
                            <svg data-accordion-icon class="w-5 h-5 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="flex flex-col space-y-1">
                        <label for="newParcours" class="font-bold text-xs md:text-sm lg:text-base text-bleulogo dark:text-lighttheme">Intitulé du nouveau parcours</label>
                        <div class="flex items-center justify-between lg:justify-normal">
                            <input id="newParcours" type="text" class="bg-lighttheme border-2 border-bleulogo rounded-lg text-xs md:text-sm lg:text-base text-darktheme placeholder:text-darktheme/70 dark:text-lighttheme dark:placeholder:text-lighttheme/70 dark:bg-darktheme dark:border-bleuclair mr-2 p-1 w-full" placeholder="Ex : Formations multi-entreprises">
                            <button class="bg-valider text-lighttheme rounded-full border-2 border-valider py-0.5 px-0.5 lg:py-1 lg:px-1 uppercase ">
                                <svg class="w-3 h-3" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24px" height="24px">
                                    <path d="M 19.28125 5.28125 L 9 15.5625 L 4.71875 11.28125 L 3.28125 12.71875 L 8.28125 17.71875 L 9 18.40625 L 9.71875 17.71875 L 20.71875 6.71875 Z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </form> -->
            <!-- </div> -->
        </div>
    </div>

    <!-- Bloc de Compétences -->
    <div class="w-full">
        <div id="accordion-collapse-bloc-competences" data-accordion="collapse" class="flex flex-col justify-center mb-4">
            <!-- Titre accordéon Bloc de Compétences -->
            <!-- <h2 id="accordion-collapse-heading-bloc-competences" class="font-medium">
                <div class="flex flex-row justify-between items-center">
                    <button class="!bg-bleulogo flex flex-row items-center py-0.5 px-1.5 lg:py-1 lg:px-2 rounded-lg !text-lighttheme border-2 border-bleulogo dark:!bg-bleuclair dark:border-bleuclair dark:!text-darktheme w-full" data-accordion-target="#accordion-collapse-body-bloc-competences" aria-expanded="false" aria-controls="accordion-collapse-body-bloc-competences">
                        <svg data-accordion-icon class="w-5 h-5 shrink-0 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-sm lg:text-base uppercase">Bloc de Compétences</span>
                    </button>
                </div>
            </h2> -->
            <!-- Corps accordéon Bloc de Compétences -->
            <!-- <div id="accordion-collapse-body-bloc-competences" class="hidden" aria-labelledby="accordion-collapse-heading-bloc-competences"> -->
                <!-- Formulaire Bloc de Compétences -->
                <!-- <form id="formBlocCompetences" action="" method="post" class="flex flex-col mt-3 space-y-3 lg:space-y-0 lg:flex-none lg:grid lg:grid-cols-2 lg:items-center">
                    <div class="flex flex-col space-y-1">
                        <p class="font-bold text-xs md:text-sm lg:text-base text-bleulogo dark:text-lighttheme">Choisissez une formation</p>
                        <button id="dropdownBlocCompetences" data-dropdown-toggle="checkboxBlocCompetences" type="button" class="flex flex-row items-center justify-between w-full lg:w-64 xl:w-72 2xl:w-96 border-2 border-bleulogo px-1 py-0.5 lg:px-1.5 lg:py-1 rounded-lg font-semibold text-xs md:text-sm lg:text-base text-bleulogo dark:text-lighttheme dark:border-bleuclair">
                            <span>Bloc De Compétences</span>
                            <svg data-accordion-icon class="w-5 h-5 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="flex flex-col space-y-1">
                        <label for="newBlocCompetences" class="font-bold text-xs md:text-sm lg:text-base text-bleulogo dark:text-lighttheme">Intitulé de la nouvelle formation</label>
                        <div class="flex items-center justify-between lg:justify-normal">
                            <input id="newBlocCompetences" type="text" class="bg-lighttheme border-2 border-bleulogo rounded-lg text-xs md:text-sm lg:text-base text-darktheme placeholder:text-darktheme/70 dark:text-lighttheme dark:placeholder:text-lighttheme/70 dark:bg-darktheme dark:border-bleuclair mr-2 p-1 w-full" placeholder="Ex : Formations multi-entreprises">
                            <button class="bg-valider text-lighttheme rounded-full border-2 border-valider py-0.5 px-0.5 lg:py-1 lg:px-1 uppercase ">
                                <svg class="w-3 h-3" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24px" height="24px">
                                    <path d="M 19.28125 5.28125 L 9 15.5625 L 4.71875 11.28125 L 3.28125 12.71875 L 8.28125 17.71875 L 9 18.40625 L 9.71875 17.71875 L 20.71875 6.71875 Z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </form> -->
            <!-- </div> -->
        </div>
    </div>

    <!-- Compétences -->
    <div class="w-full">
        <div id="accordion-collapse-competences" data-accordion="collapse" class="flex flex-col justify-center mb-4">
            <!-- Titre accordéon Compétences -->
            <h2 id="accordion-collapse-heading-competences" class="font-medium">
                <div class="flex flex-row justify-between items-center">
                    <button class="!bg-bleulogo flex flex-row items-center py-0.5 px-1.5 lg:py-1 lg:px-2 rounded-lg !text-lighttheme border-2 border-bleulogo dark:!bg-bleuclair dark:border-bleuclair dark:!text-darktheme w-full" data-accordion-target="#accordion-collapse-body-competences" aria-expanded="false" aria-controls="accordion-collapse-body-competences">
                        <svg data-accordion-icon class="w-5 h-5 shrink-0 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-sm lg:text-base uppercase">Compétences</span>
                    </button>
                </div>
            </h2>
            <!-- Corps accordéon Compétences -->
            <div id="accordion-collapse-body-competences" class="hidden" aria-labelledby="accordion-collapse-heading-competences">
                <!-- Formulaire Compétences -->
                <form id="formCompetences" action="" method="post" class="flex flex-col mt-3 space-y-3 lg:space-y-0 lg:flex-none lg:grid lg:grid-cols-2 lg:items-center">
                    <div class="flex flex-col space-y-1">
                        <p class="font-bold text-xs md:text-sm lg:text-base text-bleulogo dark:text-lighttheme">Choisissez une compétence</p>
                        <button id="dropdownCompetences" data-dropdown-toggle="checkboxCompetences" type="button" class="flex flex-row items-center justify-between w-full lg:w-64 xl:w-72 2xl:w-96 border-2 border-bleulogo px-1 py-0.5 lg:px-1.5 lg:py-1 rounded-lg font-semibold text-xs md:text-sm lg:text-base text-bleulogo dark:text-lighttheme dark:border-bleuclair">
                            <span>Compétences</span>
                            <svg data-accordion-icon class="w-5 h-5 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="flex flex-col space-y-1">
                        <label for="newCompetences" class="font-bold text-xs md:text-sm lg:text-base text-bleulogo dark:text-lighttheme">Intitulé de la nouvelle compétence</label>
                        <div class="flex items-center justify-between lg:justify-normal">
                            <input id="newCompetences" type="text" class="bg-lighttheme border-2 border-bleulogo rounded-lg text-xs md:text-sm lg:text-base text-darktheme placeholder:text-darktheme/70 dark:text-lighttheme dark:placeholder:text-lighttheme/70 dark:bg-darktheme dark:border-bleuclair mr-2 p-1 w-full" placeholder="Ex : Formations multi-entreprises">
                            <button class="bg-valider text-lighttheme rounded-full border-2 border-valider py-0.5 px-0.5 lg:py-1 lg:px-1 uppercase ">
                                <svg class="w-3 h-3" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24px" height="24px">
                                    <path d="M 19.28125 5.28125 L 9 15.5625 L 4.71875 11.28125 L 3.28125 12.71875 L 8.28125 17.71875 L 9 18.40625 L 9.71875 17.71875 L 20.71875 6.71875 Z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Objectifs Opérationnels -->
    <div class="w-full">
        <div id="accordion-collapse-objectif-ope" data-accordion="collapse" class="flex flex-col justify-center mb-4">
            <!-- Titre accordéon Objectifs Opérationnels -->
            <h2 id="accordion-collapse-heading-objectif-ope" class="font-medium">
                <div class="flex flex-row justify-between items-center">
                    <button class="!bg-bleulogo flex flex-row items-center py-0.5 px-1.5 lg:py-1 lg:px-2 rounded-lg !text-lighttheme border-2 border-bleulogo dark:!bg-bleuclair dark:border-bleuclair dark:!text-darktheme w-full" data-accordion-target="#accordion-collapse-body-objectif-ope" aria-expanded="false" aria-controls="accordion-collapse-body-objectif-ope">
                        <svg data-accordion-icon class="w-5 h-5 shrink-0 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-sm lg:text-base uppercase">Objectifs Opérationnels</span>
                    </button>
                </div>
            </h2>
            <!-- Corps accordéon Objectifs Opérationnels -->
            <div id="accordion-collapse-body-objectif-ope" class="hidden" aria-labelledby="accordion-collapse-heading-objectif-ope">
                <!-- Formulaire Objectifs Opérationnels -->
                <form id="formObjectifsOpe" action="" method="post" class="flex flex-col mt-3 space-y-3 lg:space-y-0 lg:flex-none lg:grid lg:grid-cols-2 lg:items-center">
                    <div class="flex flex-col space-y-1">
                        <p class="font-bold text-xs md:text-sm lg:text-base text-bleulogo dark:text-lighttheme">Choisissez un objectif opérationnel</p>
                        <button id="dropdownObjectifsOpe" data-dropdown-toggle="checkboxObjectifsOpe" type="button" class="flex flex-row items-center justify-between w-full lg:w-64 xl:w-72 2xl:w-96 border-2 border-bleulogo px-1 py-0.5 lg:px-1.5 lg:py-1 rounded-lg font-semibold text-xs md:text-sm lg:text-base text-bleulogo dark:text-lighttheme dark:border-bleuclair">
                            <span>Objectifs Opérationnels</span>
                            <svg data-accordion-icon class="w-5 h-5 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="flex flex-col space-y-1">
                        <label for="newObjectifsOpe" class="font-bold text-xs md:text-sm lg:text-base text-bleulogo dark:text-lighttheme">Intitulé du nouvel objectif opérationnel</label>
                        <div class="flex items-center justify-between lg:justify-normal">
                            <input id="newObjectifsOpe" type="text" class="bg-lighttheme border-2 border-bleulogo rounded-lg text-xs md:text-sm lg:text-base text-darktheme placeholder:text-darktheme/70 dark:text-lighttheme dark:placeholder:text-lighttheme/70 dark:bg-darktheme dark:border-bleuclair mr-2 p-1 w-full" placeholder="Ex : Formations multi-entreprises">
                            <button class="bg-valider text-lighttheme rounded-full border-2 border-valider py-0.5 px-0.5 lg:py-1 lg:px-1 uppercase ">
                                <svg class="w-3 h-3" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24px" height="24px">
                                    <path d="M 19.28125 5.28125 L 9 15.5625 L 4.71875 11.28125 L 3.28125 12.71875 L 8.28125 17.71875 L 9 18.40625 L 9.71875 17.71875 L 20.71875 6.71875 Z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Objectifs Pédagogiques -->
    <div class="w-full">
        <div id="accordion-collapse-objectifs-peda" data-accordion="collapse" class="flex flex-col justify-center mb-4">
            <!-- Titre accordéon Objectifs Pédagogiques -->
            <h2 id="accordion-collapse-heading-objectifs-peda" class="font-medium">
                <div class="flex flex-row justify-between items-center">
                    <button class="!bg-bleulogo flex flex-row items-center py-0.5 px-1.5 lg:py-1 lg:px-2 rounded-lg !text-lighttheme border-2 border-bleulogo dark:!bg-bleuclair dark:border-bleuclair dark:!text-darktheme w-full" data-accordion-target="#accordion-collapse-body-objectifs-peda" aria-expanded="false" aria-controls="accordion-collapse-body-objectifs-peda">
                        <svg data-accordion-icon class="w-5 h-5 shrink-0 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-sm lg:text-base uppercase">Objectifs Pédagogiques</span>
                    </button>
                </div>
            </h2>
            <!-- Corps accordéon Objectifs Pédagogiques -->
            <div id="accordion-collapse-body-objectifs-peda" class="hidden" aria-labelledby="accordion-collapse-heading-objectifs-peda">
                <!-- Formulaire Objectifs Pédagogiques -->
                <form id="formObjectifsPeda" action="" method="post" class="flex flex-col mt-3 space-y-3 lg:space-y-0 lg:flex-none lg:grid lg:grid-cols-2 lg:items-center">
                    <div class="flex flex-col space-y-1">
                        <p class="font-bold text-xs md:text-sm lg:text-base text-bleulogo dark:text-lighttheme">Choisissez un objectif pédagogique</p>
                        <button id="dropdownObjectifsPeda" data-dropdown-toggle="checkboxObjectifsPeda" type="button" class="flex flex-row items-center justify-between w-full lg:w-64 xl:w-72 2xl:w-96 border-2 border-bleulogo px-1 py-0.5 lg:px-1.5 lg:py-1 rounded-lg font-semibold text-xs md:text-sm lg:text-base text-bleulogo dark:text-lighttheme dark:border-bleuclair">
                            <span>Objectifs Pédagogiques</span>
                            <svg data-accordion-icon class="w-5 h-5 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="flex flex-col space-y-1">
                        <label for="newObjectifsPeda" class="font-bold text-xs md:text-sm lg:text-base text-bleulogo dark:text-lighttheme">Intitulé du nouvel objectif pédagogique</label>
                        <div class="flex items-center justify-between lg:justify-normal">
                            <input id="newObjectifsPeda" type="text" class="bg-lighttheme border-2 border-bleulogo rounded-lg text-xs md:text-sm lg:text-base text-darktheme placeholder:text-darktheme/70 dark:text-lighttheme dark:placeholder:text-lighttheme/70 dark:bg-darktheme dark:border-bleuclair mr-2 p-1 w-full" placeholder="Ex : Formations multi-entreprises">
                            <button class="bg-valider text-lighttheme rounded-full border-2 border-valider py-0.5 px-0.5 lg:py-1 lg:px-1 uppercase ">
                                <svg class="w-3 h-3" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24px" height="24px">
                                    <path d="M 19.28125 5.28125 L 9 15.5625 L 4.71875 11.28125 L 3.28125 12.71875 L 8.28125 17.71875 L 9 18.40625 L 9.71875 17.71875 L 20.71875 6.71875 Z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Activités -->
    <div class="w-full">
        <div id="accordion-collapse-activites" data-accordion="collapse" class="flex flex-col justify-center">
            <!-- Titre accordéon Activités -->
            <!-- <h2 id="accordion-collapse-heading-activites" class="font-medium">
                <div class="flex flex-row justify-between items-center">
                    <button class="!bg-bleulogo flex flex-row items-center py-0.5 px-1.5 lg:py-1 lg:px-2 rounded-lg !text-lighttheme border-2 border-bleulogo dark:!bg-bleuclair dark:border-bleuclair dark:!text-darktheme w-full" data-accordion-target="#accordion-collapse-body-activites" aria-expanded="false" aria-controls="accordion-collapse-body-activites">
                        <svg data-accordion-icon class="w-5 h-5 shrink-0 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-sm lg:text-base uppercase">Activités</span>
                    </button>
                </div>
            </h2> -->
            <!-- Corps accordéon Activités -->
            <!-- <div id="accordion-collapse-body-activites" class="hidden" aria-labelledby="accordion-collapse-heading-activites"> -->
                <!-- Formulaire Activités -->
                <!-- <form id="formActivites" action="" method="post" class="flex flex-col my-3 space-y-3 lg:space-y-0 lg:flex-none lg:grid lg:grid-cols-2 lg:items-center">
                    <div class="flex flex-col space-y-1">
                        <p class="font-bold text-xs md:text-sm lg:text-base text-bleulogo dark:text-lighttheme">Choisissez une activité</p>
                        <button id="dropdownActivites" data-dropdown-toggle="checkboxActivites" type="button" class="flex flex-row items-center justify-between w-full lg:w-64 xl:w-72 2xl:w-96 border-2 border-bleulogo px-1 py-0.5 lg:px-1.5 lg:py-1 rounded-lg font-semibold text-xs md:text-sm lg:text-base text-bleulogo dark:text-lighttheme dark:border-bleuclair">
                            <span>Activités</span>
                            <svg data-accordion-icon class="w-5 h-5 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="flex flex-col space-y-1">
                        <label for="newActivites" class="font-bold text-xs md:text-sm lg:text-base text-bleulogo dark:text-lighttheme">Intitulé de la nouvelle activité</label>
                        <div class="flex items-center justify-between lg:justify-normal">
                            <input id="newActivites" type="text" class="bg-lighttheme border-2 border-bleulogo rounded-lg text-xs md:text-sm lg:text-base text-darktheme placeholder:text-darktheme/70 dark:text-lighttheme dark:placeholder:text-lighttheme/70 dark:bg-darktheme dark:border-bleuclair mr-2 p-1 w-full" placeholder="Ex : Formations multi-entreprises">
                            <button class="bg-valider text-lighttheme rounded-full border-2 border-valider py-0.5 px-0.5 lg:py-1 lg:px-1 uppercase ">
                                <svg class="w-3 h-3" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24px" height="24px">
                                    <path d="M 19.28125 5.28125 L 9 15.5625 L 4.71875 11.28125 L 3.28125 12.71875 L 8.28125 17.71875 L 9 18.40625 L 9.71875 17.71875 L 20.71875 6.71875 Z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </form> -->
            <!-- </div> -->
        </div>
    </div>
</div>