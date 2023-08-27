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
        default:
            homepage();
            break;
    }
}
else
{
    if(isset($_GET["admin"]) && (!empty($_SESSION) && isset($_SESSION['id_roles']) && $_SESSION('id_role')) == 1)
    {
        require 'admin.php';
    }
    else
    {
        homepage();
    }
}
?>