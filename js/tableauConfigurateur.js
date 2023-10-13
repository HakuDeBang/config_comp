// On attends que le DOM soit chargé    
document.addEventListener("DOMContentLoaded", function () {
    function createTable(title) {
        const table = document.createElement('table');
        table.className = 'w-full';

        const thead = document.createElement('thead');
        thead.className = 'bg-bleulogo text-xs md:text-sm lg:text-base text-lighttheme uppercase dark:bg-bleuclair dark:text-darktheme';
        const theadRow = document.createElement('tr');

        const thHidden = document.createElement('th');
        thHidden.scope = 'col';
        thHidden.className = 'hidden';
        theadRow.appendChild(thHidden);

        const thReference = document.createElement('th');
        thReference.scope = 'col';
        thReference.className = 'px-2 py-1.5 border-r-2 border-lighttheme/80 dark:border-darktheme/80';
        thReference.textContent = 'Référence';
        theadRow.appendChild(thReference);

        const thIntitule = document.createElement('th');
        thIntitule.scope = 'col';
        thIntitule.className = 'px-2 py-1.5 border-r-2 border-lighttheme/80 dark:border-darktheme/80';
        thIntitule.textContent = 'Intitulé';
        theadRow.appendChild(thIntitule);

        const thOption = document.createElement('th');
        thOption.scope = 'col';
        thOption.className = 'px-2 py-1.5';
        thOption.textContent = 'Option';
        theadRow.appendChild(thOption);

        thead.appendChild(theadRow);
        table.appendChild(thead);

        const tbody = document.createElement('tbody');
        table.appendChild(tbody);

        return table;
    }

    const competencesTable = createTable('Compétences');
    const objectifsOpeTable = createTable('Objectifs Opérationnels');
    const objectifsPedaTable = createTable('Objectifs Pédagogiques');

    const selectedCompetencesContainer = document.getElementById('selected-competences-container');
    selectedCompetencesContainer.appendChild(competencesTable);
    const selectedObjOpeContainer = document.getElementById('selected-obj-ope-container');
    selectedObjOpeContainer.appendChild(objectifsOpeTable);
    const selectedObjPedaContainer = document.getElementById('selected-obj-peda-container');
    selectedObjPedaContainer.appendChild(objectifsPedaTable);

    function addSelectedItem(reference, label, id, table) {

        const tbody = table.querySelector('tbody');
        const newRow = tbody.insertRow();
        newRow.id = `row-${id}`;

        const thCellReference = newRow.insertCell(0);
        thCellReference.className = 'px-2 py-2 text-center lg:text-left text-xs md:text-sm lg:text-base text-darktheme border-r-2 border-b border-darktheme/80 dark:text-lighttheme dark:border-bleuclair/60';
        thCellReference.textContent = reference;

        const thCellLabel = newRow.insertCell(1);
        thCellLabel.className = 'px-2 py-2 text-center lg:text-left text-xs md:text-sm lg:text-base text-darktheme border-r-2 border-b border-darktheme/80 dark:text-lighttheme dark:border-bleuclair/60';
        thCellLabel.textContent = label;

        const tdCell = newRow.insertCell(2);
        tdCell.className = 'px-2 py-2 border-b border-darktheme/80 dark:border-bleuclair/80';
        const deleteButton = document.createElement('button');
        deleteButton.className = 'bg-rougelogo text-lighttheme rounded-md border-2 border-rougelogo py-px px-px';
        deleteButton.innerHTML = `
            <svg class="w-3 h-3 lg:w-4 lg:h-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" width="24px" height="24px">
                <g id="Filled"><path d="M19,20V7H5v13c0,1.1,0.9,2,2,2h10C18.1,22,19,21.1,19,20z"/>
                    <rect x="4" y="3" width="16" height="2"/><polygon points="17,5 14,2 10,2 7,5 "/>
                </g>
            </svg>
        `;
        deleteButton.addEventListener('click', (event) => {
            event.preventDefault();
            const row = event.currentTarget.closest('tr');
            if (row) {
                tbody.deleteRow(row);
                const selectButton = document.querySelector(`[data-id="${id}"]`);
                if (selectButton) {
                    selectButton.classList.remove('hidden');
                }
            }
        });
        tdCell.appendChild(deleteButton);

        const selectButton = document.querySelector(`[data-id="${id}"]`);
        if (selectButton) {
            selectButton.classList.add('hidden');
        }
    }

    function handleSelection(event, table) {
        const target = event.currentTarget;
        // console.log(target);
        const reference = target.getAttribute('data-reference');
        // console.log(reference);
        const label = target.getAttribute('data-label');
        // console.log(label);
        const id = target.getAttribute('data-id');
        // console.log(id);
        const parentId = target.getAttribute('data-parent-id');
        // console.log(parentId);
        const targetType = target.getAttribute('data-target');
        // console.log(targetType);
        
        if (table === competencesTable && targetType === 'competencesData') {
            addSelectedItem(reference, label, id, table);
        } else if (table === objectifsOpeTable && targetType === 'objectifsOpeData') {
            const parentReference = document.querySelector(`[data-id="${parentId}"]`).getAttribute('data-reference');
            addSelectedItem(`${parentReference} => ${reference}`, `${label}`, id, table);
        } else if (table === objectifsPedaTable && targetType === 'objectifsPedaData') {
            const parentReference = document.querySelector(`[data-id="${parentId}"]`).getAttribute('data-reference');
            const grandParentId = document.querySelector(`[data-id="${parentId}"]`).getAttribute('data-parent-id');
            const grandParentReference = document.querySelector(`[data-id="${grandParentId}"]`).getAttribute('data-reference');
            addSelectedItem(`${grandParentReference} => ${parentReference} => ${reference}`, `${label}`, id, table);
        }
    }

    const selectionButtons = document.querySelectorAll('[data-target]');
    selectionButtons.forEach(button => {
        button.addEventListener('click', (event) => {
            const target = event.currentTarget;
            const targetType = target.getAttribute('data-target');

            if (targetType === 'competencesData') {
                handleSelection(event, competencesTable);
            } else if (targetType === 'objectifsOpeData') {
                handleSelection(event, objectifsOpeTable);
            } else if (targetType === 'objectifsPedaData') {
                handleSelection(event, objectifsPedaTable);
            }
        });
    });

    function createTableContainer(title, table) {
        const tableContainerDiv = document.createElement('div');
        tableContainerDiv.className = 'mb-4';
        tableContainerDiv.id = `${title.toLowerCase()}Table`;

        const tableDiv = document.createElement('div');
        tableDiv.id = `${title.toLowerCase()}TableDiv`;
        tableDiv.className = 'relative overflow-x-auto mb-2 rounded-lg border-2 border-bleulogo shadow-md shadow-bleulogo/40 dark:border-bleuclair dark:shadow-bleuclair/40';

        const tableTitle = document.createElement('h3');
        tableTitle.className ='text-darktheme text-center lg:text-left text-xs md:text-sm lg:text-base uppercase font-bold underline underline-offset-2 dark:text-lighttheme mb-1';
        tableTitle.textContent = `${title} :`;

        tableDiv.appendChild(tableTitle);
        tableDiv.appendChild(table);

        tableContainerDiv.appendChild(tableDiv);

        return tableContainerDiv;
    }
});