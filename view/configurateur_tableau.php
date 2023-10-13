<!-- Titre récapitulatif des options sélectionnées -->
<h2 class="w-3/4 lg:w-10/12 text-center font-bold uppercase my-4 text-sm lg:text-base 2xl:text-lg text-darktheme dark:text-lighttheme">Récapitulatif des options sélectionnées</h2>
<!-- Formulaire récapitulatif options sélectionnées -->
<form action="index.php?action=FormulaireConfigurateur" id="formRecapConfig" method="post" class="w-3/4 lg:w-10/12">
    <div class="mb-4" id="competencesTable">
        <h3 class="text-darktheme text-center lg:text-left text-xs md:text-sm lg:text-base uppercase font-bold underline underline-offset-2 dark:text-lighttheme mb-1">Compétences :</h3>
        <div class="relative overflow-x-auto mb-2 rounded-lg border-2 border-bleulogo shadow-md shadow-bleulogo/40 dark:border-bleuclair dark:shadow-bleuclair/40">
            <table class="w-full text-center" id="selected-competences-container">
                
            </table>
        </div>
    </div>
    <div class="mb-4" id="objectifsOpeTable">
        <h3 class="text-darktheme text-center lg:text-left text-xs md:text-sm lg:text-base uppercase font-bold underline underline-offset-2 dark:text-lighttheme mb-1">Objectifs Opérationnels :</h3>
        <div class="relative overflow-x-auto mb-2 rounded-lg border-2 border-bleulogo shadow-md shadow-bleulogo/40 dark:border-bleuclair dark:shadow-bleuclair/40">
            <table class="w-full text-center" id="selected-obj-ope-container">
                
            </table>
        </div>
    </div>
    <div class="mb-4" id="objectifsPedaTable">
        <h3 class="text-darktheme text-center lg:text-left text-xs md:text-sm lg:text-base uppercase font-bold underline underline-offset-2 dark:text-lighttheme mb-1">Objectifs Pédagogiques :</h3>
        <div class="relative overflow-x-auto mb-2 rounded-lg border-2 border-bleulogo shadow-md shadow-bleulogo/40 dark:border-bleuclair dark:shadow-bleuclair/40">
            <table class="w-full text-center" id="selected-obj-peda-container">
                
            </table>
        </div>
    </div>
    <div class="flex items-center justify-end">
        <button type="submit" name="submit_config" class="bg-bleulogo text-lighttheme px-1 py-0.5 rounded-md border-2 border-bleulogo uppercase text-xs md:text-sm lg:text-base dark:bg-bleuclair dark:border-bleuclair dark:text-darktheme">Créer la fiche programme</button>
    </div>
</form>