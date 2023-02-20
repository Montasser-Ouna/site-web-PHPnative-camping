<?php
include "../Model/Utilisateur.php";
include "../controller/UtilisateurC.php";
$idutilisateur=$_GET['idutilisateur'];
    
if(isset($_POST['mailform'])) 
        {
        if (!empty($_POST['mailform']))
        
         {
         	
$userC = new UtilisateurC();
 $user1= $userC->recupererUtilisateur($idutilisateur);
 



$header="MIME-Version: 1.0\r\n";
$header.='From:"CAMPING-FEVER.com"<Campwithus@gmail.com>'."\n";
$header.='Content-Type:text/html; charset="uft-8"'."\n";
$header.='Content-Transfer-Encoding: 8bit';
foreach ($user1 as $row) {
$user=new Utilisateur(           
               $row["nom"],
                $row["prenom"], 
                $row["email"], $row["datedenais"],$row["keyconfirmation"],$row["keyconfirmation"],$row["ville"], $row["tel"],$row["accesstype"] 
            );
$user->setIdutilisateur($idutilisateur);
$userC->modifierUtilisateur($user);
$message='
<html>
 
	<body>
		<div align="center">
		 
		 <h1>Vous trouerz le nouveau mot de passe ci dessous</h1>
			  <img class="logo-default scroll-hide" src="https://image.freepik.com/vecteurs-libre/hipster-camping-logo-vecteur_7888-134.jpg"/>
        
			<br />
			J\'ai envoyé ce mail avec PHP !
			<h2>Password: '.$row['keyconfirmation'].'</h2>
			
			<a href="http://localhost/projet_site-web_group3/alpins/gesuser/views/Confirmation.php?idutilisateur=53"> Cliquez ici pour confirmer votre compte : </a>
			<br />
		</div>
	</body>
</html>
';

mail("".$row['email'], "Hello camper here is your key(new password) !", $message, $header);
}
 }
       
        else
            $error = "Missing information";
     }
?>
<!DOCTYPE html>
<html>
<head><meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <title>Page Title -permission:Club administrator</title>
        <script src="themekit/scripts/jquery.min.js"></script>
    <script src="themekit/scripts/main.js"></script>
     <link rel="stylesheet" href="themekit/css/bootstrap-grid.css">
        <link href="css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="themekit/css/style.css">
    <link rel="stylesheet" href="themekit/css/glide.css">
    <link rel="stylesheet" href="themekit/css/magnific-popup.css">
    <link rel="stylesheet" href="themekit/css/content-box.css">
    <link rel="stylesheet" href="themekit/css/contact-form.css">
    <link rel="stylesheet" href="themekit/css/media-box.css">
    <link rel="stylesheet" href="skin.css">
    <link rel="icon" href="media/favicon.png"></head>

<body>
	<!-- <?php include_once('navbar.php'); ?>-->
	  <div class="container">
           <hr class="space-lg" />
                <hr class="space-sm" />
             <div class="row">
                    <div class="title">
                        <h1  class="text-lg text-uppercase text-blue">Veuillez recevoir votre nouveau mot de passe </h1>
                      </div>
                    </div>
        </div>
<form method="POST" action="">
	<div class="form-group mt-4 mb-0">                                       
<input class="btn btn-primary btn-block" type="submit" value="Recevoir votre nouveau mot de passe !" name="mailform"/>
</div>
</form>
 <?php include_once('footer.php'); ?>
</body>
</html>
