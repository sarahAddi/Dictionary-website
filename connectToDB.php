<?php
try
{
$db = new PDO('mysql:host=localhost;dbname=db_dictionary', 'root', '',
               array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}

?>