<div class="p-4" id="configurateur" role="tabpanel" aria-labelledby="configurateur-tab">
    <div class="mt-12 md:mt-16 lg:mt-20">
        <div class="flex flex-col justify-center items-center">
            <!-- Titre Configurateur -->
            <h2 class="w-3/4 lg:w-10/12 text-center font-bold uppercase mb-4 text-sm lg:text-base 2xl:text-lg text-darktheme dark:text-lighttheme">Choisissez parmis les options ci-dessous ou effectuez une recherche par mots-clefs</h2>
            <!-- Formulaire de recherche -->
            <form action="" method="post" class="w-3/4 lg:w-10/12 mb-4">
                <div class="flex flex-col lg:flex-row">
                    <!-- Dropdown Categorie button -->
                    <button id="dropdownCategorie" data-dropdown-toggle="dropdownRadioCategories" type="button" class="bg-lighttheme text-bleulogo font-medium rounded-lg text-sm px-2 py-0.5 text-center inline-flex items-center justify-center border-2 border-bleulogo lg:border-r lg:rounded-r-none dark:bg-darktheme dark:border-bleuclair dark:text-bleuclair">
                        Catégories
                        <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                        </svg>
                    </button>
                    <!-- Dropdown Categorie menu -->
                    <div id="dropdownRadioCategories" class="z-10 hidden w-48 bg-lighttheme rounded-lg border-2 border-bleulogo shadow-md shadow-bleulogo/50 dark:bg-darktheme dark:border-bleuclair/60 dark:shadow-bleuclair/75">
                        <ul class="px-2 py-0.5 space-y-2 text-xs text-bleulogo dark:text-bleuclair" aria-labelledby="dropdownCategorie">
                            <!-- <li>
                                <div class="flex items-center">
                                    <input id="radioFormations" type="radio" value="" name="radioCategories" class="peer/radioFormations w-3 h-3 text-valider bg-lighttheme border-bleulogo focus:ring-0 dark:bg-darktheme dark:text-bleuclair dark:border-bleuclair dark:focus:ring-offset-0">
                                    <label for="radioFormations" class="ml-2 text-sm font-medium peer-checked/radioFormations:text-valider peer-checked/radioFormations:dark:text-lighttheme">Formations</label>
                                </div>
                            </li> -->
                            <!-- <li>
                                <div class="flex items-center">
                                    <input id="radioParcours" type="radio" value="" name="radioCategories" class="peer/radioParcours w-3 h-3 text-valider bg-lighttheme border-bleulogo focus:ring-0 dark:bg-darktheme dark:text-bleuclair dark:border-bleuclair dark:focus:ring-offset-0">
                                    <label for="radioParcours" class="ml-2 text-sm font-medium peer-checked/radioParcours:text-valider peer-checked/radioParcours:dark:text-lighttheme">Parcours</label>
                                </div>
                            </li> -->
                            <!-- <li>
                                <div class="flex items-center">
                                    <input id="radioBlocCompetences" type="radio" value="" name="radioCategories" class="peer/radioBlocCompetences w-3 h-3 text-valider bg-lighttheme border-bleulogo focus:ring-0 dark:bg-darktheme dark:text-bleuclair dark:border-bleuclair dark:focus:ring-offset-0">
                                    <label for="radioBlocCompetences" class="ml-2 text-sm font-medium peer-checked/radioBlocCompetences:text-valider peer-checked/radioBlocCompetences:dark:text-lighttheme">Bloc de compétences</label>
                                </div>
                            </li> -->
                            <li>
                                <div class="flex items-center">
                                    <input id="radioCompetences" type="radio" value="" name="radioCategories" class="peer/radioCompetences w-3 h-3 text-valider bg-lighttheme border-bleulogo focus:ring-0 dark:bg-darktheme dark:text-bleuclair dark:border-bleuclair dark:focus:ring-offset-0">
                                    <label for="radioCompetences" class="ml-2 text-sm font-medium peer-checked/radioCompetences:text-valider peer-checked/radioCompetences:dark:text-lighttheme">Compétences</label>
                                </div>
                            </li>
                            <li>
                                <div class="flex items-center"> 
                                    <input id="radioObjectifsOpe" type="radio" value="" name="radioCategories" class="peer/radioObjectifsOpe w-3 h-3 text-valider bg-lighttheme border-bleulogo focus:ring-0 dark:bg-darktheme dark:text-bleuclair dark:border-bleuclair dark:focus:ring-offset-0">
                                    <label for="radioObjectifsOpe" class="ml-2 text-sm font-medium peer-checked/radioObjectifsOpe:text-valider peer-checked/radioObjectifsOpe:dark:text-lighttheme">Objectifs Opérationnels</label>
                                </div>
                            </li>
                            <li>
                                <div class="flex items-center">
                                    <input id="radioObjectifsPeda" type="radio" value="" name="radioCategories" class="peer/radioObjectifsPeda w-3 h-3 text-valider bg-lighttheme border-bleulogo focus:ring-0 dark:bg-darktheme dark:text-bleuclair dark:border-bleuclair dark:focus:ring-offset-0">
                                    <label for="radioObjectifsPeda" class="ml-2 text-sm font-medium peer-checked/radioObjectifsPeda:text-valider peer-checked/radioObjectifsPeda:dark:text-lighttheme">Objectifs Pédagogiques</label>
                                </div>
                            </li>
                            <!-- <li>
                                <div class="flex items-center">
                                    <input id="radioActivites" type="radio" value="" name="radioCategories" class="peer/radioActivites w-3 h-3 text-valider bg-lighttheme border-bleulogo focus:ring-0 dark:bg-darktheme dark:text-bleuclair dark:border-bleuclair dark:focus:ring-offset-0">
                                    <label for="radioActivites" class="ml-2 text-sm font-medium peer-checked/radioActivites:text-valider peer-checked/radioActivites:dark:text-lighttheme">Activités</label>
                                </div>
                            </li> -->
                        </ul>
                    </div>
                    <div class="relative w-full">
                        <input type="search" id="search-dropdown" name="search-dropdown" class="block py-0.5 lg:py-2 w-full mt-2 lg:mt-0 z-20 text-sm text-darktheme placeholder:text-bleulogo/80 bg-lighttheme rounded-lg border-2 border-bleulogo lg:border-l lg:rounded-l-none dark:bg-darktheme dark:border-bleuclair dark:text-lighttheme dark:placeholder:text-bleuclair/80" placeholder="Recherche par mots-clefs">
                        <button type="submit" name="submit" class="absolute top-0 right-0 py-1.5 px-2 text-xs lg:text-sm mt-2 md:mt-1.5 lg:mt-1 font-medium text-bleulogo dark:text-bleuclair">
                            <svg aria-hidden="true" class="w-4 h-4 lg:w-5 lg:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                            <span class="sr-only">Rechercher</span>
                        </button>
                    </div>
                </div>
            </form>

            <!-- Accordéon Configurateur -->
            <?php include 'configurateur_accordeon.php'; ?>
            
            <!-- Tableau Configurateur -->
            <?php include 'configurateur_tableau.php'; ?>
        </div>
    </div>
</div>