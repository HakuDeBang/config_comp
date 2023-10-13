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
                                <span class="block text-sm text-darktheme dark:text-lighttheme">NOM Prénom</span>
                                <span class="block text-sm text-darktheme dark:text-lighttheme">Adresse Email</span>
                                <span class="block text-sm text-darktheme/60 dark:text-lighttheme/60">Administrateur/Conseiller</span>
                            </a>
                        </div>
                        <ul>
                            <li><a href="index.php?action=Logout" class="block px-4 py-2 text-sm text-darktheme/90 dark:text-lighttheme/90">Déconnexion</a></li>
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
                <?php include 'ajouter.php'; ?>
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