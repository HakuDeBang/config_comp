<!-- Titre récapitulatif des options sélectionnées -->
<h2 class="w-3/4 lg:w-10/12 text-center text-sm font-bold uppercase my-4 text-darktheme dark:text-lighttheme">Récapitulatif des options sélectionnées</h2>
<!-- Formulaire récapitulatif options sélectionnées -->
<form action="index.php?action=FormulaireConfigurateur" method="post" class="w-3/4 lg:w-10/12">
    <!-- Compétences -->
    <div class="mb-4 hidden" id="competencesTable">
        <h3 class="text-darktheme text-center lg:text-left text-xs md:text-sm lg:text-base uppercase font-bold underline underline-offset-2 dark:text-lighttheme mb-1">Compétences :</h3>
        <!-- Tableau Compétences -->
        <div class="relative overflow-x-auto mb-2 rounded-lg border-2 border-bleulogo shadow-md shadow-bleulogo/40 dark:border-bleuclair dark:shadow-bleuclair/40">
            <table class="w-full text-center">
                <thead class="bg-bleulogo text-xs md:text-sm lg:text-base text-lighttheme uppercase dark:bg-bleuclair dark:text-darktheme">
                    <tr>
                        <th scope="col" class="hidden">Id</th>
                        <th class="px-2 py-1.5 border-r-2 border-lighttheme/80 dark:border-darktheme/80">Intitulé</th>
                        <!-- <th class="px-2 py-1 border-r-2 border-lighttheme/80 dark:border-darktheme/80">Référence</th> -->
                        <th class="px-2 py-1.5">Option</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
    <!-- Objectifs Opérationnels -->
    <div class="mb-4">
        <h3 class="text-darktheme text-center lg:text-left text-xs md:text-sm lg:text-base uppercase font-bold underline underline-offset-2 dark:text-lighttheme mb-1">Objectifs Opérationnels :</h3>
        <!-- Tableau Objectifs Opérationnels -->
        <div class="relative overflow-x-auto mb-2 rounded-lg border-2 border-bleulogo shadow-md shadow-bleulogo/40 dark:border-bleuclair dark:shadow-bleuclair/40">
            <table class="w-full text-center hidden" id="objectifsOpeTable">
                <thead class="bg-bleulogo text-xs md:text-sm lg:text-base text-lighttheme uppercase dark:bg-bleuclair dark:text-darktheme">
                    <tr>
                        <th scope="col" class="hidden">Id</th>
                        <th class="px-2 py-1.5 border-r-2 border-lighttheme/80 dark:border-darktheme/80">Intitulé</th>
                        <!-- <th class="px-2 py-1 border-r-2 border-lighttheme/80 dark:border-darktheme/80">Référence</th> -->
                        <th class="px-2 py-1.5">Option</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-lighttheme dark:bg-darktheme">
                        <th class="px-2 py-px text-xs md:text-sm lg:text-base text-darktheme border-r-2 border-darktheme/80 dark:text-lighttheme dark:border-bleuclair/80">
                            Objectif Opérationnel 1
                        </th>
                        <td class="px-2 py-px">
                            <button class="bg-rougelogo text-lighttheme rounded-md border-2 border-rougelogo py-px px-px">
                                <svg class="w-3 h-3 lg:w-4 lg:h-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" width="24px" height="24px">
                                    <g id="Filled"><path d="M19,20V7H5v13c0,1.1,0.9,2,2,2h10C18.1,22,19,21.1,19,20z"/>
                                        <rect x="4" y="3" width="16" height="2"/><polygon points="17,5 14,2 10,2 7,5 "/>
                                    </g>
                                </svg>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- Objectifs Pédagogiques -->
    <div class="mb-4">
        <h3 class="text-darktheme text-center lg:text-left text-xs md:text-sm lg:text-base uppercase font-bold underline underline-offset-2 dark:text-lighttheme mb-1">Objectifs Pédagogiques :</h3>
        <!-- Tableau Objectifs Pédagogiques -->
        <div class="relative overflow-x-auto mb-2 rounded-lg border-2 border-bleulogo shadow-md shadow-bleulogo/40 dark:border-bleuclair dark:shadow-bleuclair/40">
            <table class="w-full text-center hidden" id="objectifsPedaTable">
                <thead class="bg-bleulogo text-xs md:text-sm lg:text-base text-lighttheme uppercase dark:bg-bleuclair dark:text-darktheme">
                    <tr>
                        <th scope="col" class="hidden">Id</th>
                        <th class="px-2 py-1.5 border-r-2 border-lighttheme/80 dark:border-darktheme/80">Intitulé</th>
                        <!-- <th class="px-2 py-1 border-r-2 border-lighttheme/80 dark:border-darktheme/80">Référence</th> -->
                        <th class="px-2 py-1.5">Option</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-lighttheme dark:bg-darktheme">
                        <th class="px-2 py-px text-xs md:text-sm lg:text-base text-darktheme border-r-2 border-darktheme/80 dark:text-lighttheme dark:border-bleuclair/80">
                            Objectif Pédagogique 1
                        </th>
                        <td class="px-2 py-px">
                            <button class="bg-rougelogo text-lighttheme rounded-md border-2 border-rougelogo py-px px-px">
                                <svg class="w-3 h-3 lg:w-4 lg:h-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" width="24px" height="24px">
                                    <g id="Filled"><path d="M19,20V7H5v13c0,1.1,0.9,2,2,2h10C18.1,22,19,21.1,19,20z"/>
                                        <rect x="4" y="3" width="16" height="2"/><polygon points="17,5 14,2 10,2 7,5 "/>
                                    </g>
                                </svg>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- Button valider le formulaire -->
    <div class="flex items-center justify-end">
        <button type="submit" name="submit_config" class="bg-bleulogo text-lighttheme px-1 py-0.5 rounded-md border-2 border-bleulogo uppercase text-xs md:text-sm lg:text-base dark:bg-bleuclair dark:border-bleuclair dark:text-darktheme">Créer la fiche diplôme</button>
    </div>
</form>