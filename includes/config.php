<?php
try{
$db=new PDO('mysql:host=localhost;dbname=bd_labo',"root","");
 $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
 $db->exec('SET NAMES utf8');
 }catch(PDOEXCEPTION $e){
 echo "Erreur".$e->getMessage();
 exit();
 }
 
 ?>