<?php
include "../Controller/UtilisateurC.php";
session_start();
$idutilisateur = $_GET['idutilisateur'];
$error = "";
// create user
$utilisateur = null;
$utilisateurc = new utilisateurC();
$utilisateur1 = $utilisateurc->recupererUtilisateur($idutilisateur);
foreach ($utilisateur1 as $row) {
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
    <title>Votre Compte</title>

  </head>

  <body>
    <?php include_once('navbar1.php'); ?>
    <div class="container">
      <div class="panel-heading">
        <h4>Profile</h4>
      </div>

      <div class="panel-body">

        <div class="box box-info">

          <div class="box-body">
            <div class="col-sm-5">
              <div align="center"> <img alt="User Pic" src="<?php echo $row['pdp'] ?>" id="profile-image1" class="img-circle img-responsive">
                <!--Upload Image Js And Css-->
              </div>
              <br>
              <!-- /input-group -->
            </div>


            <div class="clearfix"></div>
            <div class="dropdown"> <?PHP echo $row['accesstype']; ?></div>
            <h4 style="color:#00b1b1;"><?php echo $row['nom']; ?> </h4></span>
            <hr style="margin:5px 0 5px 0;">


            <div class="col-sm-5 col-xs-6 tital ">Nom:</div>
            <div class="col-sm-7 col-xs-6 "><?php echo $row['nom']; ?></div>
            <div class="clearfix"></div>
            <div class="bot-border"></div>

            <div class="clearfix"></div>
            <div class="bot-border"></div>

            <div class="col-sm-5 col-xs-6 tital ">Prenom:</div>
            <div class="col-sm-7"> <?php echo $row['prenom']; ?></div>
            <div class="clearfix"></div>
            <div class="bot-border"></div>

            <div class="col-sm-5 col-xs-6 tital ">Date de naissance:</div>
            <div class="col-sm-7"><?PHP echo $row['datedenais']; ?></div>

            <div class="clearfix"></div>
            <div class="bot-border"></div>

            <div class="col-sm-5 col-xs-6 tital ">Ville:</div>
            <div class="col-sm-7"><?PHP echo $row['ville']; ?></div>

            <div class="clearfix"></div>
            <div class="bot-border"></div>

            <div class="col-sm-5 col-xs-6 tital ">Telephone </div>
            <div class="col-sm-7"><?PHP echo $row['tel']; ?></div>

            <div class="col-sm-5 col-xs-6 tital"><a href="modifierUtilisateur.php?idutilisateur=<?PHP echo $row['idutilisateur']; ?>" class="btn btn-sm btn-circle full-width-sm">Modifier</a></div>
            <div class="col-sm-7"><a href="supprimerUtilisateur.php?idutilisateur=<?PHP echo $row['idutilisateur']; ?>" class="btn btn-sm btn-circle full-width-sm">Supprimer</a></div>


            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>


      </div>
    </div>
    </div>
    <script>
      $(function() {
        $('#profile-image1').on('click', function() {
          $('#profile-image-upload').click();
        });
      });
    </script>









    </div>
    </div>
    <?php include_once('footer.php'); ?>
  </body>

  </html>
<?php
}
?>