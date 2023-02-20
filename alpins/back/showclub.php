<?php
    include "../Controller/ClubcampingC.php";
    session_start();
     $idClubcamping=$_GET['idClubcamping'];
     $_SESSION['clubID'] = $idClubcamping;
$error ="";
    // create user
    $Clubcamping = null;
    $Clubcampingc=new ClubcampingC();
   $Clubcamping1=  $Clubcampingc->recupererClubcamping($idClubcamping);
foreach ($Clubcamping1 as $row)  
{
  $_SESSION['nomClub'] = $row['nomclub'];
  $_SESSION['nomUser'] = $row['nomres'];
  $_SESSION['contactClub'] = $row['contact'];
  $_SESSION['userID'] = (int)$row['iduser'];
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
    
   <section class="section-image section-full-width-right light ken-burn-center" data-parallax="scroll" data-image-src="https://camp-mars.com/themes/default/assets/img/imagehome/15.jpg">
            
       
    <div class="container">
           <hr class="space-lg" />
                <hr class="space-sm" />
             <div class="row">
                    <div class="title">
                        <h1  class="text-lg text-uppercase text-blue">Votre Club</h1>
                      </div>
                    </div>
        </div>
  
   <div class="panel-body">
       
    <div class="box box-info">
        
            <div class="box-body">
                     <div class="col-sm-5">
                     <div  align="center"> <img alt="User Pic" src="<?php echo $row['logoclub']?>" id="profile-image1" width="150" height="60" class="img-circle img-responsive" > 
           
              
   
                
                
                     
                     
                     </div>
              
              <br>
    
              <!-- /input-group -->
            </div>
    
              
<div class="col-sm-5 col-xs-6 tital " >Nom Club:</div><div class="col-sm-7 col-xs-6 "><h2  class="text-lg text-uppercase text-green"><?php echo $row['nomclub'];?></h2></div>
<span class="Reassurance-img"><a href="promotions.php">
              <img class=" lazyloaded" data-src="https://img.yellohvillage.fr/var/plain_site/storage/images/site_marchand/footer/dossier_element_de_reassurance/bonne_nouvelle_les_frais_de_dossier_sont_offerts/1934947-8-fre-FR/bonne_nouvelle_les_frais_de_dossier_sont_offerts.png" src="https://img.yellohvillage.fr/var/plain_site/storage/images/site_marchand/footer/dossier_element_de_reassurance/bonne_nouvelle_les_frais_de_dossier_sont_offerts/1934947-8-fre-FR/bonne_nouvelle_les_frais_de_dossier_sont_offerts.png">Ajouter offres
            </a>
          </span>
          <span class="Reassurance-img"><a href="../back/addEvent.php">
              <img class=" lazyloaded" data-src="https://cdn4.iconfinder.com/data/icons/pr-marketing-color-filled/5000/PR-marketing-icon-set-color-3-512.png" src="https://cdn4.iconfinder.com/data/icons/pr-marketing-color-filled/5000/PR-marketing-icon-set-color-3-512.png" width="90" height="90">Ajouter evenement
            </a>
          </span>
          <br>
          <div class="col-sm-5 col-xs-6 tital" >Description:</div><div class="col-sm-7 col-xs-6 "><?php echo $row['description'];?></div>
     <div class="clearfix"></div>
<div class="bot-border"></div>

  <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " >Nom respensable :</div><div class="col-sm-7"> <?php echo $row['nomres'];?></div>
  <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " >Contact Club:</div><div class="col-sm-7"><?PHP echo $row['contact']; ?></div>

  <div class="clearfix"></div>
<div class="bot-border"></div>
<div class="col-sm-5 col-xs-6 tital " >membres du club:</div><div class="col-sm-7"><?PHP echo $row['nbmembres']; ?></div>
  <div class="clearfix"></div>
<div class="bot-border"></div>
<div class="col-sm-5 col-xs-6 tital " >Site du club:</div><div class="col-sm-7"><a href="<?PHP echo $row['siteclub']; ?>"><?PHP echo $row['siteclub']; ?></a></div>

 <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital" ><a href="modifierClubcamping.php?idClubcamping=<?PHP echo $row['idClubcamping']; ?>" class="btn btn-sm btn-circle full-width-sm">Modifier</a></div>
<div class="col-sm-7"><a href="supprimerClubcamping.php?idClubcamping=<?PHP echo $row['idClubcamping']; ?>" class="btn btn-sm btn-circle full-width-sm">Supprimer</a></div>


            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
       
            
    </div> 
    </div>
</div> 
 </section> 
    <script>
              $(function() {
    $('#profile-image1').on('click', function() {
        $('#profile-image-upload').click();
    });
});       
              </script> 
       
       
       
       
       
       
       
       
       
   </div>
</div>
           <div class="card-footer text-center">
                                        <div class="tital"><a href="showu.php?idutilisateur=<?PHP echo $row['iduser']; ?>">Veuillez consulter votre profil</a></div>
                                    </div>
                                     <div class="card-footer text-center">
                                    <div class="tital"><a href="deconnexion.php?idutilisateur=<?PHP echo $row['iduser']; ?>">Veuillez déconnecter</a></div>
                                    </div>
<?php } ?>
<?php include_once('footer.php'); ?>
    </body>
</html>
