<?php
include  "../Model/noter.php";
include  "../Controller/noterC.php";
session_start();
$noteC= new noteC();

$iduser=$_GET['iduser'];
$id=$_GET['idpro'];
$exist=$noteC->existe($id,$iduser);
 if($exist==0)
 {
	$noteC->ajouternote2($iduser ,$id);
 	$count = $noteC->countt2($id);
 	if($count != 0)
 	{
		$nb=$noteC->sommenote($id)/$count;
		$noteC->updatenote($id , $nb);
	}
 }
 header('Location:http://localhost/PG3/alpins/views/promotions.php');

?>