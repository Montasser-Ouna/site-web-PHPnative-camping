 <?php 
   include "../Model/Utilisateur.php";
    include "../Controller/UtilisateurC.php";
   $idutilisateur=$_GET['idutilisateur'];
   $userc =new UtilisateurC(); 
   $userc->supprimerUtilisateur($idutilisateur);
   
   ?>
   <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
         
      <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
       <script src="themekit/scripts/jquery.min.js"></script>
    <script src="themekit/scripts/main.js"></script>
    <link rel="stylesheet" href="themekit/css/bootstrap-grid.css">
    <link rel="stylesheet" href="themekit/css/style.css">
    <link rel="stylesheet" href="themekit/css/glide.css">
    <link rel="stylesheet" href="themekit/css/magnific-popup.css">
    <link rel="stylesheet" href="themekit/css/content-box.css">
    <link rel="stylesheet" href="themekit/css/contact-form.css">
    <link rel="stylesheet" href="themekit/css/media-box.css">
    <link rel="stylesheet" href="skin.css">
    <link rel="icon" href="media/favicon.png">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
    <title>DELETE ACCOUNT</title> 

</head>
    <body>
        <?php include_once('navbar.php'); ?>

        <div class="container">
           <hr class="space-lg" />
                <hr class="space-sm" />
             <div class="row">
                    <div class="title">
                        <h1  class="text-lg text-uppercase text-blue">Votre compte a été supprimé</h1>
                      </div>
                    </div>
        </div>
        <?php include_once('footer.php'); ?>
    </body>
</html>