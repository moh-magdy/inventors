<?php

/*
=================================================================================
================================ /Backstage/ contant page =======================
=================================================================================
*/

$dsn    =   'mysql:host=localhost;dbname=';
$user   =   'root';
$pass   =   '';
$option   =   array(
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
);

try {

    $contant    =   new PDO($dsn, $user, $pass, $option);
    $contant->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
   
}

catch (PDOException $e) {

    echo 'Failed to connect to the database';

}
