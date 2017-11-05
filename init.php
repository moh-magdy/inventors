<?php
/*
=================================================================================
======================/interface/ Import and export page ========================
=================================================================================
*/  


//for contact
include 'Admin/contact.php';

//Routes
$lang       =   "includes/languages/";
$func       =   "includes/functions/";
$tpl        =   "includes/templates/";
$css        =   "layout/css/";
$js         =   "layout/js/";

//Include The Important Files
include     $lang   .   "en.php";
//include     $lang   .   "ar.php";
include     $func   .   "function.php";


if(!isset($noNavar)) { include  $tpl . "navbar.php";}
/*if(!isset($noHeader)) { include  $tpl . "header.php";}*/
