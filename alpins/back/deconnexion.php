<?php
 include "../Controller/UtilisateurC.php";

 session_start();
 $idutilisateur=$_SESSION['userID'];
 $utilisateurc=new utilisateurC();
session_destroy();
 $utilisateurc->setstatus($idutilisateur,"0");
echo'vous etes deconnecté';
echo '<div class="small"><a href="login.php">Veuillez se connecter</a></div>';
?>