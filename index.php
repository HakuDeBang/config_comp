<?php
session_start();
require_once 'controller/homeController.php';
if(isset($_GET['action']) && $_GET['action'] !== '' && !isset($_GET['admin']))
{
    switch($_GET['action'])
    {
        case 'Homepage':
            homepage();
            break;
        case 'Login':
            login();
            break;
        default:
            loginForm();
            break;
    }
}
else
{
    if(isset($_GET["admin"]) && (!empty($_SESSION) && $_SESSION('id_role')) == 1)
    {
        require 'admin.php';
    }
    else
    {
        loginForm();
    }
}

?>