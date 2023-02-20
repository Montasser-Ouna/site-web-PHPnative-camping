 <?php 
   include "../Model/Utilisateur.php";
    include "../Controller/UtilisateurC.php";
   $idutilisateur=$_GET['idutilisateur'];
   $userc =new UtilisateurC(); 
   $userc->supprimerUtilisateur($idutilisateur);
  header('Location:users.php');
   ?>
   