<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=srms;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Error : '.$e->getMessage());
}
