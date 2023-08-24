// On attends que le DOM soit chargé
document.addEventListener("DOMContentLoaded", function () {
    // Création du formulaire
    const form = document.createElement('form');
    form.action = 'index.php?action=FormulaireConfigurateur';
    form.method = 'post';
    form.classList.add('w-3/4', 'lg:w-10/12');

    // Créations des tableaux Compétences, Obejctifs Opérationnels et Objectifs Pédagogiques
    const sections = ['Compétences', 'Objectifs Opérationnels', 'Objectifs Pédagogiques'];

    sections.forEach(sectionTitle => {
        const sectionDiv = document.createElement('div');
        sectionDiv.classList.add('mb-4');
        sectionDiv.id = sectionTitle.toLowerCase().replace(/\s+/g, '-');

        const sectionHeading = document.createElement('h3');
        sectionHeading.classList.add('text-darktheme', 'text-center', 'lg:text-left', 'text-xs', 'md:text-sm', 'lg:text-base', 'uppercase', 'font-bold', 'underline', 'underline-offset-2', 'dark:text-lighttheme', 'mb-1');
        sectionHeading.textContent = sectionTitle + ' :';

        const tableDiv = document.createElement('div');
        tableDiv.id = sectionTitle.toLowerCase().replace(/\s+/g, '-') + '-table';
        tableDiv.classList.add('relative', 'overflow-x-auto', 'mb-2', 'rounded-lg', 'border-2', 'border-bleulogo', 'shadow-md', 'shadow-bleulogo/40', 'dark:border-bleuclair', 'dark:shadow-bleuclair/40');

        const table = document.createElement('table');
        table.classList.add('w-full', 'text-center');
        table.id = 'selected-items-container';

        tableDiv.appendChild(table);
        sectionDiv.appendChild(sectionHeading);
        sectionDiv.appendChild(tableDiv);
        form.appendChild(sectionDiv);
    });

    // Création du bouton de validation du formulaire
    const buttonDiv = document.createElement('div');
    buttonDiv.classList.add('flex', 'items-center', 'justify-end');

    const submitButton = document.createElement('button');
    submitButton.type = 'submit';
    submitButton.name = 'submit_config';
    submitButton.classList.add('bg-bleulogo', 'text-lighttheme', 'px-1', 'py-0.5', 'rounded-md', 'border-2', 'border-bleulogo', 'uppercase', 'text-xs', 'md:text-sm', 'lg:text-base', 'dark:bg-bleuclair', 'dark:border-bleuclair', 'dark:text-darktheme');
    submitButton.textContent = 'Créer la fiche programme';

    buttonDiv.appendChild(submitButton);
    form.appendChild(buttonDiv);

    // Ajout du formulaire au document
    document.body.appendChild(form);
});