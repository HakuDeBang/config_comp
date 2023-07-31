<?php

class Connect
{
    public $conn;

    public function __construct()
    {
        $host = "localhost";
        $dbname = "configurateur_competences";
        $uname = "root";
        $pass = "";

        try
        {
            $this->conn = new PDO("mysql:host=$host;dbname=$dbname", $uname, $pass);
            // On défini le mode d'erreur de PDO sur Exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo '<p class="text-darktheme dark:text-lighttheme">Connexion à la BDD réussie !</p>';
        }
        // On capture les exceptions si une exception est lancée et on affiche les informations relatives à celle-ci
        catch(PDOException $e)
        {
            echo "Connexion échouée : " . $e->getMessage();
        }
    }
}

?>