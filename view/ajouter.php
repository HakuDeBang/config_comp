<div class="hidden p-4" id="ajouter" role="tabpanel" aria-labelledby="ajouter-tab">
    <div class="mt-12 md:mt-16 lg:mt-20">
        <div class="flex flex-col justify-center items-center">
            <!-- Titre Ajouter -->
            <h2 class="w-3/4 lg:w-10/12 text-center font-bold uppercase mb-4 text-sm lg:text-base 2xl:text-lg text-darktheme dark:text-lighttheme">Intégration de nouvelles données dans la base</h2>
            <!-- Informations sur l'ajout -->
            <div class="w-3/4 lg:w-10/12 flex items-center p-2 mb-4 text-xs md:text-sm ld:text-base text-bleulogo rounded-lg border-2 border-bleulogo bg-darktheme/20 dark:bg-lighttheme/20 dark:text-bleuclair dark:border-bleuclair">
                <svg class="flex-shrink-0 inline w-4 h-4 xl:w-6 xl:h-6 mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                </svg>
                <span class="sr-only">Infos</span>
                <div>
                    <span class="font-semibold text-darktheme dark:text-lighttheme underline underline-offset-2">Information!</span> Chacune des données sera insérée de façon individuelle dans la base de données.<br>
                    Afin de les lier (ex: Compétence 1 -> Bloc De Compétences 3), vous devrez utiliser le formulaire dans la partie <span class="font-semibold text-darktheme dark:text-lighttheme underline underline-offset-2">MODIFIER</span>.
                </div>
            </div>
            <!-- Accordéon Ajout -->
            <?php include 'ajouter_accordeon.php'; ?>

            <!-- Tableau Ajout -->
            <?php include 'ajouter_tableau.php'; ?>
        </div>
    </div>
</div>