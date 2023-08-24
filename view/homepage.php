<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
        <link rel="manifest" href="img/favicon/site.webmanifest">
        <title>Configurateur de Compétences</title>
        <link rel="stylesheet" href="dist/tailwind.css">
        <script>
            if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                document.documentElement.classList.add('dark');
            } else {
                document.documentElement.classList.remove('dark')
            }
        </script>
    </head>
    <body class="bg-lighttheme dark:bg-darktheme">
        <!-------------------- ------ -------------------->
        <!-------------------- NAVBAR -------------------->
        <!-------------------- ------ -------------------->
        <nav class="fixed top-0 z-50 w-full bg-lighttheme border-b-2 border-bleulogo/75 shadow-md shadow-bleulogo/60 dark:bg-darktheme dark:border-bleuclair/75 dark:shadow-bleuclair/60">
            <div class="flex items-center justify-between p-2">
                <!-- Logo -->
                <a href="#" class="flex">
                    <img class="w-8 md:w-12 lg:w-16" src="img/logouimm.png" alt="Logo UIMM Champagne-Ardenne">
                </a>
                <!-- Page title -->
                <h1 class="text-bleulogo font-bold text-center uppercase text-lg md:text-2xl lg:text-3xl xl:text-4xl dark:text-bleuclair">Configurateur de compétences</h1>
                <!-- User menu / Toggle theme -->
                <div class="flex flex-row items-center justify-between">
                    <!-- User menu toggle -->
                    <button class="flex text-sm rounded-full p-1 order-2" type="button" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="menu-user-dropdown" data-dropdown-placement="bottom">
                        <span class="sr-only">Open user menu</span>
                        <img class="w-6 h-6 md:w-8 md:h-8 rounded-full" src="img/user.png" alt="User avatar">
                    </button>
                    <!-- User menu -->
                    <div class="z-50 hidden my-4 text-base list-none bg-lighttheme divide-y divide-darktheme/40 rounded-lg shadow-md shadow-bleulogo/60 dark:bg-darktheme dark:divide-lighttheme/40 dark:shadow-lighttheme/60" id="menu-user-dropdown">
                        <div class="px-4 py-3">
                            <a href="#">
                                <span class="block text-sm text-darktheme dark:text-lighttheme">Connexion</span>
                                <span class="block text-sm text-darktheme dark:text-lighttheme">MIELOT Richard</span>
                                <span class="block text-sm text-darktheme/60 dark:text-lighttheme/60">Administrateur</span>
                            </a>
                        </div>
                        <ul>
                            <li><a href="#" class="block px-4 py-2 text-sm text-darktheme/90 dark:text-lighttheme/90">Configurateur de compétences</a></li>
                            <li><a href="#" class="block px-4 py-2 text-sm text-darktheme/90 dark:text-lighttheme/90">Tableau de bord</a></li>
                            <li><a href="#" class="block px-4 py-2 text-sm text-darktheme/90 dark:text-lighttheme/90">Déconnexion</a></li>
                        </ul>
                    </div>
                    <!-- Toggle theme mode -->
                    <button id="theme-toggle" type="button" class="rounded-lg text-sm text-darktheme dark:text-lighttheme p-1 order-1">
                        <svg id="theme-toggle-dark-icon" class="hidden h-6 w-6 md:w-8 md:h-8" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                        </svg>
                        <svg id="theme-toggle-light-icon" class="hidden h-6 w-6 md:w-8 md:h-8" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <!-- Sidebar toggle -->
                    <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center text-sm text-darktheme rounded-lg lg:hidden dark:text-lighttheme p-1 order-3">
                        <span class="sr-only">Open Sidebar</span>
                        <svg class="w-5 h-5 md:w-7 md:h-7" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                        </svg>
                    </button>
                </div>
            </div>
        </nav>

        <!-------------------- ------- -------------------->
        <!-------------------- SIDEBAR -------------------->
        <!-------------------- ------- -------------------->
        <aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-44 h-screen pt-14 md:pt-20 mt-2 md:mt-4 lg:mt-8 transition-transform -translate-x-full lg:translate-x-0 bg-lighttheme border-r-2 border-bleulogo dark:bg-darktheme dark:border-bleuclair">
            <div class="h-full px-3 pb-4 overflow-y-auto bg-lighttheme dark:bg-darktheme">
                <ul class="space-y-4 lg:space-y-6 font-medium" id="tabAdmin" data-tabs-toggle="tabAdminContent" role="tablist">
                    <li role="presentation">
                        <button id="configurateur-tab" data-tabs-target="#configurateur" role="tab" aria-controls="configurateur" aria-selected="false" type="button" class="active flex items-center group">
                            <svg class="w-4 h-4 md:w-6 md:h-6 text-bleulogo dark:text-lighttheme" fill="currentColor" width="800px" height="800px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14,2H6C4.9,2,4,2.9,4,4v16c0,1.1,0.9,2,2,2h12c1.1,0,2-0.9,2-2V8L14,2z M16,18H8v-2h8V18z M16,14H8v-2h8V14z M13,9V3.5 L18.5,9H13z" />
                            </svg>
                            <span class="ml-3 text-sm md:text-base lg:text-lg text-bleulogo dark:text-lighttheme">Configurateur</span>
                        </button>
                    </li>
                    <li role="presentation">
                        <a href="#" id="ajouter-tab" data-tabs-target="#ajouter" role="tab" aria-controls="ajouter" aria-selected="false" type="button" class="flex items-center group">
                            <svg class="w-4 h-4 md:w-6 md:h-6 text-bleulogo dark:text-lighttheme" fill="currentColor" width="800px" height="800px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12,2C6.477,2,2,6.477,2,12s4.477,10,10,10s10-4.477,10-10S17.523,2,12,2z M17,13h-4v4h-2v-4H7v-2h4V7h2v4h4V13z" />
                            </svg>
                            <span class="ml-3 text-sm md:text-base lg:text-lg text-bleulogo dark:text-lighttheme">Ajouter</span>
                        </a>
                    </li>
                    <!-- <li role="presentation">
                        <a href="#" id="modifier-tab" data-tabs-target="#modifier" role="tab" aria-controls="modifier" aria-selected="false" type="button" class="flex items-center group">
                            <svg class="w-4 h-4 md:w-6 md:h-6 text-bleulogo dark:text-lighttheme" fill="currentColor" width="800px" height="800px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M 18.414062 2 C 18.158188 2 17.902031 2.0974687 17.707031 2.2929688 L 16 4 L 20 8 L 21.707031 6.2929688 C 22.098031 5.9019687 22.098031 5.2689063 21.707031 4.8789062 L 19.121094 2.2929688 C 18.925594 2.0974687 18.669937 2 18.414062 2 z M 14.5 5.5 L 3 17 L 3 21 L 7 21 L 18.5 9.5 L 14.5 5.5 z" />
                            </svg>
                            <span class="ml-3 text-sm md:text-base text-bleulogo dark:text-lighttheme">Modifier</span>
                        </a>
                    </li> -->
                    <!-- <li role="presentation">
                            <a href="#" id="supprimer-tab" data-tabs-target="#supprimer" role="tab" aria-controls="supprimer" aria-selected="false" type="button" class="flex items-center group">
                                <svg class="w-4 h-4 md:w-6 md:h-6 text-bleulogo dark:text-lighttheme" fill="currentColor" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" width="24px" height="24px">
                                    <g id="Filled"><path d="M19,20V7H5v13c0,1.1,0.9,2,2,2h10C18.1,22,19,21.1,19,20z"/>
                                        <rect x="4" y="3" width="16" height="2"/><polygon points="17,5 14,2 10,2 7,5 "/>
                                    </g>
                                </svg>
                                <span class="ml-3 text-sm md:text-base text-bleulogo dark:text-lighttheme">Supprimer</span>
                            </a>
                        </li> -->
                </ul>
            </div>
        </aside>

        <!-------------------- ---- -------------------->
        <!-------------------- TABS -------------------->
        <!-------------------- ---- -------------------->
        <div class="lg:ml-44">
            <div id="tabAdminContent">

                <!-- Configurateur -->
                <?php include 'configurateur.php'; ?>

                <!-- Ajouter -->
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
                            <div class="w-3/4 lg:w-10/12 border-b-2 border-bleulogo pb-4 dark:border-bleuclair">
                                <!-- Domaine métier, Diplôme, Lieux, Parcours -->
                                <div class="w-full">
                                    <div id="accordion-collapse-formation-parcours" data-accordion="collapse" class="flex flex-col justify-center mb-4">
                                        <!-- Titre accordéon Formations - Parcours -->
                                        <h2 id="accordion-collapse-heading-formations-parcours" class="font-medium">
                                            <div class="flex flex-row justify-between items-center">
                                                <button class="!bg-bleulogo flex flex-row items-center py-0.5 px-1.5 lg:py-1 lg:px-2 rounded-lg !text-lighttheme border-2 border-bleulogo dark:!bg-bleuclair dark:border-bleuclair dark:!text-darktheme w-full" data-accordion-target="#accordion-collapse-body-formations-parcours" aria-expanded="false" aria-controls="accordion-collapse-body-formations-parcours">
                                                    <svg data-accordion-icon class="w-5 h-5 shrink-0 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                                    </svg>
                                                    <span class="text-sm lg:text-base uppercase">Formations & Parcours</span>
                                                </button>
                                            </div>
                                        </h2>
                                        <!-- Corps accordéon Formations - Parcours -->
                                        <div id="accordion-collapse-body-formations-parcours" class="hidden" aria-labelledby="accordion-collapse-heading-formations-parcours">
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
                                        </div>
                                    </div>
                                </div>

                                <!-- Bloc de Compétences -->
                                <div class="w-full">
                                    <div id="accordion-collapse-bloc-competences" data-accordion="collapse" class="flex flex-col justify-center mb-4">
                                        <!-- Titre accordéon Bloc de Compétences -->
                                        <h2 id="accordion-collapse-heading-bloc-competences" class="font-medium">
                                            <div class="flex flex-row justify-between items-center">
                                                <button class="!bg-bleulogo flex flex-row items-center py-0.5 px-1.5 lg:py-1 lg:px-2 rounded-lg !text-lighttheme border-2 border-bleulogo dark:!bg-bleuclair dark:border-bleuclair dark:!text-darktheme w-full" data-accordion-target="#accordion-collapse-body-bloc-competences" aria-expanded="false" aria-controls="accordion-collapse-body-bloc-competences">
                                                    <svg data-accordion-icon class="w-5 h-5 shrink-0 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                                    </svg>
                                                    <span class="text-sm lg:text-base uppercase">Bloc de Compétences</span>
                                                </button>
                                            </div>
                                        </h2>
                                        <!-- Corps accordéon Bloc de Compétences -->
                                        <div id="accordion-collapse-body-bloc-competences" class="hidden" aria-labelledby="accordion-collapse-heading-bloc-competences">
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
                                        </div>
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
                                            <!-- <form id="formCompetences" action="" method="post" class="flex flex-col mt-3 space-y-3 lg:space-y-0 lg:flex-none lg:grid lg:grid-cols-2 lg:items-center">
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
                                                </form> -->
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
                                            <!-- <form id="formObjectifsOpe" action="" method="post" class="flex flex-col mt-3 space-y-3 lg:space-y-0 lg:flex-none lg:grid lg:grid-cols-2 lg:items-center">
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
                                                </form> -->
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
                                            <!-- <form id="formObjectifsPeda" action="" method="post" class="flex flex-col mt-3 space-y-3 lg:space-y-0 lg:flex-none lg:grid lg:grid-cols-2 lg:items-center">
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
                                                </form> -->
                                        </div>
                                    </div>
                                </div>

                                <!-- Activités -->
                                <div class="w-full">
                                    <div id="accordion-collapse-activites" data-accordion="collapse" class="flex flex-col justify-center">
                                        <!-- Titre accordéon Activités -->
                                        <h2 id="accordion-collapse-heading-activites" class="font-medium">
                                            <div class="flex flex-row justify-between items-center">
                                                <button class="!bg-bleulogo flex flex-row items-center py-0.5 px-1.5 lg:py-1 lg:px-2 rounded-lg !text-lighttheme border-2 border-bleulogo dark:!bg-bleuclair dark:border-bleuclair dark:!text-darktheme w-full" data-accordion-target="#accordion-collapse-body-activites" aria-expanded="false" aria-controls="accordion-collapse-body-activites">
                                                    <svg data-accordion-icon class="w-5 h-5 shrink-0 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                                    </svg>
                                                    <span class="text-sm lg:text-base uppercase">Activités</span>
                                                </button>
                                            </div>
                                        </h2>
                                        <!-- Corps accordéon Activités -->
                                        <div id="accordion-collapse-body-activites" class="hidden" aria-labelledby="accordion-collapse-heading-activites">
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
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Titre Données Ajoutées -->
                            <h2 class="w-3/4 lg:w-10/12 text-center font-bold uppercase my-4 text-sm lg:text-base 2xl:text-lg text-darktheme dark:text-lighttheme">Récapitulatif des nouvelles données</h2>
                            <!-- Formulaire récapitulatif nouvelles données -->
                            <form action="" method="post" class="w-3/4 lg:w-10/12">
                                <!-- Formations -->
                                <!-- <div class="mb-4">
                                    <h3 class="text-darktheme text-center lg:text-left text-xs md:text-sm lg:text-base uppercase font-bold underline underline-offset-2 dark:text-lighttheme mb-1">Formations :</h3> -->
                                    <!-- Tableau Formations -->
                                    <!-- <div class="relative overflow-x-auto mb-2 rounded-lg border-2 border-bleulogo shadow-md shadow-bleulogo/40 dark:border-bleuclair dark:shadow-bleuclair/40">
                                            <table class="w-full text-center">
                                                <thead class="bg-bleulogo text-xs md:text-sm lg:text-base text-lighttheme uppercase dark:bg-bleuclair dark:text-darktheme">
                                                    <tr>
                                                        <th scope="col" class="px-2 py-1.5 border-r-2 border-lighttheme/80 dark:border-darktheme/80">Intitulé</th> -->
                                    <!-- <th class="px-2 py-1 border-r-2 border-lighttheme/80 dark:border-darktheme/80">Référence</th> -->
                                    <!-- <th class="px-2 py-1.5">Option</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="bg-lighttheme dark:bg-darktheme">
                                                        <th class="px-2 py-px text-xs md:text-sm lg:text-base text-darktheme border-r-2 border-darktheme/80 dark:text-lighttheme dark:border-bleuclair/80">
                                                            Formations 1
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
                                        </div> -->
                                <!-- </div> -->

                                <!-- Parcours -->
                                <!-- <div class="mb-4">
                                    <h3 class="text-darktheme text-center lg:text-left text-xs md:text-sm lg:text-base uppercase font-bold underline underline-offset-2 dark:text-lighttheme mb-1">Parcours :</h3> -->
                                    <!-- Tableau Parcours -->
                                    <!-- <div class="relative overflow-x-auto mb-2 rounded-lg border-2 border-bleulogo shadow-md shadow-bleulogo/40 dark:border-bleuclair dark:shadow-bleuclair/40">
                                            <table class="w-full text-center">
                                                <thead class="bg-bleulogo text-xs md:text-sm lg:text-base text-lighttheme uppercase dark:bg-bleuclair dark:text-darktheme">
                                                    <tr>
                                                        <th scope="col" class="px-2 py-1.5 border-r-2 border-lighttheme/80 dark:border-darktheme/80">Intitulé</th> -->
                                    <!-- <th class="px-2 py-1 border-r-2 border-lighttheme/80 dark:border-darktheme/80">Référence</th> -->
                                    <!-- <th class="px-2 py-1.5">Option</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="bg-lighttheme dark:bg-darktheme">
                                                        <th class="px-2 py-px text-xs md:text-sm lg:text-base text-darktheme border-r-2 border-darktheme/80 dark:text-lighttheme dark:border-bleuclair/80">
                                                            Parcours 1
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
                                        </div> -->
                                <!-- </div> -->

                                <!-- Bloc de Compétences -->
                                <!-- <div class="mb-4">
                                    <h3 class="text-darktheme text-center lg:text-left text-xs md:text-sm lg:text-base uppercase font-bold underline underline-offset-2 dark:text-lighttheme mb-1">Bloc de Compétences :</h3> -->
                                    <!-- Tableau Bloc de Compétences -->
                                    <!-- <div class="relative overflow-x-auto mb-2 rounded-lg border-2 border-bleulogo shadow-md shadow-bleulogo/40 dark:border-bleuclair dark:shadow-bleuclair/40">
                                            <table class="w-full text-center">
                                                <thead class="bg-bleulogo text-xs md:text-sm lg:text-base text-lighttheme uppercase dark:bg-bleuclair dark:text-darktheme">
                                                    <tr>
                                                        <th scope="col" class="px-2 py-1.5 border-r-2 border-lighttheme/80 dark:border-darktheme/80">Intitulé</th> -->
                                    <!-- <th class="px-2 py-1 border-r-2 border-lighttheme/80 dark:border-darktheme/80">Référence</th> -->
                                    <!-- <th class="px-2 py-1.5">Option</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="bg-lighttheme dark:bg-darktheme">
                                                        <th class="px-2 py-px text-xs md:text-sm lg:text-base text-darktheme border-r-2 border-darktheme/80 dark:text-lighttheme dark:border-bleuclair/80">
                                                            Bloc de Compétences 1
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
                                        </div> -->
                                <!-- </div> -->

                                <!-- Compétences -->
                                <div class="mb-4">
                                    <h3 class="text-darktheme text-center lg:text-left text-xs md:text-sm lg:text-base uppercase font-bold underline underline-offset-2 dark:text-lighttheme mb-1">Compétences :</h3>
                                    <!-- Tableau Compétences -->
                                    <div class="relative overflow-x-auto mb-2 rounded-lg border-2 border-bleulogo shadow-md shadow-bleulogo/40 dark:border-bleuclair dark:shadow-bleuclair/40">
                                        <table class="w-full text-center">
                                            <thead class="bg-bleulogo text-xs md:text-sm lg:text-base text-lighttheme uppercase dark:bg-bleuclair dark:text-darktheme">
                                                <tr>
                                                    <th scope="col" class="px-2 py-1.5 border-r-2 border-lighttheme/80 dark:border-darktheme/80">Intitulé</th>
                                                    <!-- <th class="px-2 py-1 border-r-2 border-lighttheme/80 dark:border-darktheme/80">Référence</th> -->
                                                    <th class="px-2 py-1.5">Option</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="bg-lighttheme dark:bg-darktheme">
                                                    <th class="px-2 py-px text-xs md:text-sm lg:text-base text-darktheme border-r-2 border-darktheme/80 dark:text-lighttheme dark:border-bleuclair/80">
                                                        Compétence 1
                                                    </th>
                                                    <td class="px-2 py-px">
                                                        <button class="bg-rougelogo text-lighttheme rounded-md border-2 border-rougelogo py-px px-px">
                                                            <svg class="w-3 h-3 lg:w-4 lg:h-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" width="24px" height="24px">
                                                                <g id="Filled">
                                                                    <path d="M19,20V7H5v13c0,1.1,0.9,2,2,2h10C18.1,22,19,21.1,19,20z" />
                                                                    <rect x="4" y="3" width="16" height="2" />
                                                                    <polygon points="17,5 14,2 10,2 7,5 " />
                                                                </g>
                                                            </svg>
                                                        </button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <!-- Objectifs Opérationnels -->
                                <div class="mb-4">
                                    <h3 class="text-darktheme text-center lg:text-left text-xs md:text-sm lg:text-base uppercase font-bold underline underline-offset-2 dark:text-lighttheme mb-1">Objectifs Opérationnels :</h3>
                                    <!-- Tableau Objectifs Opérationnels -->
                                    <div class="relative overflow-x-auto mb-2 rounded-lg border-2 border-bleulogo shadow-md shadow-bleulogo/40 dark:border-bleuclair dark:shadow-bleuclair/40">
                                        <table class="w-full text-center">
                                            <thead class="bg-bleulogo text-xs md:text-sm lg:text-base text-lighttheme uppercase dark:bg-bleuclair dark:text-darktheme">
                                                <tr>
                                                    <th scope="col" class="px-2 py-1.5 border-r-2 border-lighttheme/80 dark:border-darktheme/80">Intitulé</th>
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
                                                                <g id="Filled">
                                                                    <path d="M19,20V7H5v13c0,1.1,0.9,2,2,2h10C18.1,22,19,21.1,19,20z" />
                                                                    <rect x="4" y="3" width="16" height="2" />
                                                                    <polygon points="17,5 14,2 10,2 7,5 " />
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
                                        <table class="w-full text-center">
                                            <thead class="bg-bleulogo text-xs md:text-sm lg:text-base text-lighttheme uppercase dark:bg-bleuclair dark:text-darktheme">
                                                <tr>
                                                    <th scope="col" class="px-2 py-1.5 border-r-2 border-lighttheme/80 dark:border-darktheme/80">Intitulé</th>
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
                                                                <g id="Filled">
                                                                    <path d="M19,20V7H5v13c0,1.1,0.9,2,2,2h10C18.1,22,19,21.1,19,20z" />
                                                                    <rect x="4" y="3" width="16" height="2" />
                                                                    <polygon points="17,5 14,2 10,2 7,5 " />
                                                                </g>
                                                            </svg>
                                                        </button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <!-- Activité -->
                                <!-- <div class="mb-4">
                                    <h3 class="text-darktheme text-center lg:text-left text-xs md:text-sm lg:text-base uppercase font-bold underline underline-offset-2 dark:text-lighttheme mb-1">ActivitéS :</h3> -->
                                    <!-- Tableau Activité -->
                                    <!-- <div class="relative overflow-x-auto mb-2 rounded-lg border-2 border-bleulogo shadow-md shadow-bleulogo/40 dark:border-bleuclair dark:shadow-bleuclair/40">
                                            <table class="w-full text-center">
                                                <thead class="bg-bleulogo text-xs md:text-sm lg:text-base text-lighttheme uppercase dark:bg-bleuclair dark:text-darktheme">
                                                    <tr>
                                                        <th scope="col" class="px-2 py-1.5 border-r-2 border-lighttheme/80 dark:border-darktheme/80">Intitulé</th> -->
                                    <!-- <th class="px-2 py-1 border-r-2 border-lighttheme/80 dark:border-darktheme/80">Référence</th> -->
                                    <!-- <th class="px-2 py-1.5">Option</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="bg-lighttheme dark:bg-darktheme">
                                                        <th class="px-2 py-px text-xs md:text-sm lg:text-base text-darktheme border-r-2 border-darktheme/80 dark:text-lighttheme dark:border-bleuclair/80">
                                                            Activité 1
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
                                        </div> -->
                                <!-- </div> -->
                                <!-- Button popup valider l'ajout -->
                                <div class="flex items-center justify-end">
                                    <button data-modal-target="ajout-popup-modal" data-modal-toggle="ajout-popup-modal" class="bg-valider text-lighttheme px-1 py-0.5 rounded-md border-2 border-valider uppercase text-xs md:text-sm lg:text-base" type="button">
                                        Valider
                                    </button>
                                    <!-- Modal de confirmation ajout -->
                                    <div id="ajout-popup-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                        <div class="relative w-full max-w-md max-h-full">
                                            <div class="relative bg-lighttheme rounded-lg shadow shadow-bleulogo dark:bg-darktheme dark:shadow-bleuclair">
                                                <button type="button" class="absolute top-3 right-2.5 text-darkmode bg-transparent rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center" data-modal-hide="ajout-popup-modal">
                                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                    </svg>
                                                    <span class="sr-only">Close modal</span>
                                                </button>
                                                <div class="p-6 text-center">
                                                    <h3 class="mb-5 text-lg font-normal text-bleulogo dark:text-bleuclair">
                                                        Vérifiez si toutes vos données sont saisies.<br>
                                                        Si oui, confirmez, sinon, annulez et reprenez où vous en étiez !!
                                                    </h3>
                                                    <button data-modal-hide="ajout-popup-modal" type="button" class="bg-rougelogo text-lighttheme text-xs lg:text-sm xl:text-base font-medium px-1 py-0.5 rounded-md border-2 border-rougelogo">Annuler</button>
                                                    <button data-modal-hide="ajout-popup-modal" type="submit" class="bg-valider text-lighttheme text-xs lg:text-sm xl:text-base font-medium px-1 py-0.5 rounded-md border-2 border-valider">Confirmer</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Modifier -->
                <div class="hidden p-4" id="modifier" role="tabpanel" aria-labelledby="modifier-tab">
                    <div class="mt-12 md:mt-16 lg:mt-20">
                        <div class="flex flex-col justify-center items-center">
                            <!-- Titre Modifier -->
                            <h2 class="w-3/4 lg:w-10/12 text-center font-bold uppercase mb-4 text-sm lg:text-base 2xl:text-lg text-darktheme dark:text-lighttheme">Modification des données</h2>
                            <!-- Tabs catégories de données -->
                            <div class="w-3/4 lg:w-10/12 mb-3">
                                <div class="relative overflow-x-auto rounded-lg">
                                    <div class="flex items-center justify-between pb-4">
                                        <div>
                                            <!-- Dropdown Categorie button -->
                                            <button id="dropdownModifierCategorie" data-dropdown-toggle="dropdownRadioModifierCategories" type="button" class="bg-lighttheme text-bleulogo font-medium rounded-lg text-sm px-2 py-1 text-center inline-flex items-center justify-center border-2 border-bleulogo dark:bg-darktheme dark:border-bleuclair dark:text-bleuclair">
                                                Catégories
                                                <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                                                </svg>
                                            </button>
                                            <!-- Dropdown Categorie menu -->
                                            <div id="dropdownRadioModifierCategories" class="z-10 hidden w-48 bg-lighttheme rounded-lg border-2 border-bleulogo shadow-md shadow-bleulogo/50 dark:bg-darktheme dark:border-bleuclair/60 dark:shadow-bleuclair/75" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="top" style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(522.5px, 3847.5px, 0px);">
                                                <ul class="px-2 py-0.5 space-y-2 text-xs text-bleulogo dark:text-bleuclair" aria-labelledby="dropdownModifierCategorie">
                                                    <li>
                                                        <div class="flex items-center">
                                                            <input id="radioModifierFormations" type="radio" value="" name="radioModifierCategories" class="peer/radioModifierFormations w-3 h-3 text-valider bg-lighttheme border-bleulogo focus:ring-0 dark:bg-darktheme dark:text-bleuclair dark:border-bleuclair dark:focus:ring-offset-0">
                                                            <label for="radioModifierFormations" class="ml-2 text-sm font-medium peer-checked/radioModifierFormations:text-valider peer-checked/radioModifierFormations:dark:text-lighttheme">Formations</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="flex items-center">
                                                            <input id="radioModifierParcours" type="radio" value="" name="radioModifierCategories" class="peer/radioModifierParcours w-3 h-3 text-valider bg-lighttheme border-bleulogo focus:ring-0 dark:bg-darktheme dark:text-bleuclair dark:border-bleuclair dark:focus:ring-offset-0">
                                                            <label for="radioModifierParcours" class="ml-2 text-sm font-medium peer-checked/radioModifierParcours:text-valider peer-checked/radioModifierParcours:dark:text-lighttheme">Parcours</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="flex items-center">
                                                            <input id="radioModifierBlocCompetences" type="radio" value="" name="radioModifierCategories" class="peer/radioModifierBlocCompetences w-3 h-3 text-valider bg-lighttheme border-bleulogo focus:ring-0 dark:bg-darktheme dark:text-bleuclair dark:border-bleuclair dark:focus:ring-offset-0">
                                                            <label for="radioModifierBlocCompetences" class="ml-2 text-sm font-medium peer-checked/radioModifierBlocCompetences:text-valider peer-checked/radioModifierBlocCompetences:dark:text-lighttheme">Bloc de compétences</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="flex items-center">
                                                            <input id="radioModifierCompetences" type="radio" value="" name="radioModifierCategories" class="peer/radioModifierCompetences w-3 h-3 text-valider bg-lighttheme border-bleulogo focus:ring-0 dark:bg-darktheme dark:text-bleuclair dark:border-bleuclair dark:focus:ring-offset-0">
                                                            <label for="radioModifierCompetences" class="ml-2 text-sm font-medium peer-checked/radioModifierCompetences:text-valider peer-checked/radioModifierCompetences:dark:text-lighttheme">Compétences</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="flex items-center">
                                                            <input id="radioModifierObjectifsOpe" type="radio" value="" name="radioModifierCategories" class="peer/radioModifierObjectifsOpe w-3 h-3 text-valider bg-lighttheme border-bleulogo focus:ring-0 dark:bg-darktheme dark:text-bleuclair dark:border-bleuclair dark:focus:ring-offset-0">
                                                            <label for="radioModifierObjectifsOpe" class="ml-2 text-sm font-medium peer-checked/radioModifierObjectifsOpe:text-valider peer-checked/radioModifierObjectifsOpe:dark:text-lighttheme">Objectifs Opérationnels</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="flex items-center">
                                                            <input id="radioModifierObjectifsPeda" type="radio" value="" name="radioModifierCategories" class="peer/radioModifierObjectifsPeda w-3 h-3 text-valider bg-lighttheme border-bleulogo focus:ring-0 dark:bg-darktheme dark:text-bleuclair dark:border-bleuclair dark:focus:ring-offset-0">
                                                            <label for="radioModifierObjectifsPeda" class="ml-2 text-sm font-medium peer-checked/radioModifierObjectifsPeda:text-valider peer-checked/radioModifierObjectifsPeda:dark:text-lighttheme">Objectifs Pédagogiques</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="flex items-center">
                                                            <input id="radioModifierActivites" type="radio" value="" name="radioModifierCategories" class="peer/radioModifierActivites w-3 h-3 text-valider bg-lighttheme border-bleulogo focus:ring-0 dark:bg-darktheme dark:text-bleuclair dark:border-bleuclair dark:focus:ring-offset-0">
                                                            <label for="radioModifierActivites" class="ml-2 text-sm font-medium peer-checked/radioModifierActivites:text-valider peer-checked/radioModifierActivites:dark:text-lighttheme">Activités</label>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <label for="table-search" class="sr-only">Rechercher</label>
                                        <div class="relative">
                                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                <svg class="w-5 h-5 text-bleulogo dark:text-bleuclair" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                                                </svg>
                                            </div>
                                            <input type="text" id="table-search" class="block p-1 pl-10 text-sm text-darktheme border-2 border-bleulogo rounded-lg w-80 bg-lighttheme dark:bg-darktheme dark:border-bleuclair dark:text-lighttheme" placeholder="Intitulé de la compétence, code RNCP...">
                                        </div>
                                    </div>
                                    <table class="w-full text-sm text-left text-darktheme dark:text-lighttheme">
                                        <thead class="text-xs text-lighttheme uppercase border-2 border-bleulogo dark:border-bleuclair dark:text-darktheme">
                                            <tr>
                                                <th scope="col" class="p-3">
                                                    <div class="flex items-center">
                                                        <input id="checkbox-all-search" type="checkbox" class="w-4 h-4 text-bleulogo bg-lighttheme/90 border-2 border-bleulogo rounded focus:ring-2 focus:ring-offset-0 dark:bg-darktheme/90 dark:text-bleuclair dark:border-bleuclair">
                                                    </div>
                                                </th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="js/tableauConfigurateur.js"></script>
        <script src="node_modules/flowbite/dist/flowbite.min.js"></script>
        <script>
            var themeToggleDarkIcon = document.getElementById("theme-toggle-dark-icon");
            var themeToggleLightIcon = document.getElementById("theme-toggle-light-icon");

            // Change the icons inside the button based on previous settings
            if (localStorage.getItem("color-theme") === "dark" || (!("color-theme" in localStorage) && window.matchMedia(
                    "(prefers-color-scheme: dark)").matches)) {
                themeToggleLightIcon.classList.remove("hidden");
            } else {
                themeToggleDarkIcon.classList.remove("hidden");
            }

            var themeToggleBtn = document.getElementById("theme-toggle");

            themeToggleBtn.addEventListener("click", function() {
                // toggle icons inside button
                themeToggleDarkIcon.classList.toggle("hidden");
                themeToggleLightIcon.classList.toggle("hidden");

                // if set via local storage previously
                if (localStorage.getItem("color-theme")) {
                    if (localStorage.getItem("color-theme") === "light") {
                        document.documentElement.classList.add("dark");
                        localStorage.setItem("color-theme", "dark");
                    } else {
                        document.documentElement.classList.remove("dark");
                        localStorage.setItem("color-theme", "light");
                    }

                    // if NOT set via local storage previously
                } else {
                    if (document.documentElement.classList.contains("dark")) {
                        document.documentElement.classList.remove("dark");
                        localStorage.setItem("color-theme", "light");
                    } else {
                        document.documentElement.classList.add("dark");
                        localStorage.setItem("color-theme", "dark");
                    }
                }
            });
        </script>
    </body>
</html>