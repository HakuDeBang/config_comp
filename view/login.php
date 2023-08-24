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
    </head>
    <body class="bg-[url('../img/industrie.jpg')] bg-cover bg-blend-darken h-screen">
        <!-------------------- ------ -------------------->
        <!-------------------- NAVBAR -------------------->
        <!-------------------- ------ -------------------->
        <nav class="fixed top-0 z-50 w-full">
            <div class="flex items-center justify-between p-2">
                <!-- Logo -->
                <a href="#" class="flex">
                    <img class="w-8 md:w-12 lg:w-16" src="img/logouimm.png" alt="Logo UIMM Champagne-Ardenne">
                </a>
            </div>
        </nav>
        <section class="flex justify-center h-full">
            <div class="flex flex-col items-center justify-center px-6 py-8 w-3/4 mx-auto">
                <div class="w-full border-2 border-lighttheme rounded-md">
                    <form action="index.php?action=Login" method="post" class="py-3 px-2 backdrop-blur space-y-12">
                        <div class="flex flex-col items-center justify-center w-full">
                            <label for="email" class="block mb-2 text-xl text-lighttheme font-medium underline underline-offset-4 decoration-2 decoration-lighttheme">Adresse Email</label>
                            <input type="email" id="email" name="email_utilisateurs" placeholder="exemple@gmail.com" class="bg-transparent text-lighttheme border-0 border-b-2 focus:ring-0 placeholder:text-lighttheme/60" required>
                        </div>
                        <div class="flex flex-col items-center justify-center w-full">
                            <label for="password" class="block mb-2 text-xl text-lighttheme font-medium underline underline-offset-4 decoration-2 decoration-lighttheme">Mot de passe</label>
                            <input type="password" id="password" name="mdp_utilisateurs" placeholder="123456" class="bg-transparent text-lighttheme border-0 border-b-2 focus:ring-0 placeholder:text-lighttheme/60" required>
                        </div>
                        <button type="submit" name="submit" class="bg-bleulogo flex justify-center items-center mx-auto w-96 rounded-md text-lighttheme px-2 py-1">Se connecter</button>
                    </form>
                </div>
            </div>
        </section>
        <script src="node_modules/flowbite/dist/flowbite.min.js"></script>
    </body>
</html>