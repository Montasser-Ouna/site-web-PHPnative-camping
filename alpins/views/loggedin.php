<?PHP
include "../Controller/UtilisateurC.php";
session_start();
echo count($_SESSION);
 $idutilisateur=$_GET['idutilisateur'];
 $_SESSION['userID'] = $idutilisateur;
$utilisateurc=new utilisateurC();
   $utilisateur1=$utilisateurc->recupererUtilisateur($idutilisateur);
foreach ($utilisateur1 as $row)
{
    $_SESSION['name'] = $row['nom'];
      
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
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
    <link rel="icon" href="media/favicon.png">
</head>

<body>
	<?php include_once('navbar.php'); ?>
	  <div class="container">
           <hr class="space-lg" />
                <hr class="space-sm" />
             <div class="row">
                    <div class="title">
                        <h1  class="text-lg text-uppercase text-blue">You logged in !</h1>
                      </div>
                    </div>
        </div>
      </div>
    </div>
    <div class="card-footer text-center">
      <div class="small"><a href="showu.php?idutilisateur=<?PHP echo $row['idutilisateur']; ?>">Veuillez consulter votre profil</a></div>
    </div>
    <div class="card-footer text-center">
      <div class="small"><a href="deconnexion.php?idutilisateur=<?PHP echo $row['idutilisateur']; ?>">Veuillez déconnecter</a></div>
    </div>
    <?php include_once('footer.php'); ?>
  <?php } ?>
  </body>

  </html>