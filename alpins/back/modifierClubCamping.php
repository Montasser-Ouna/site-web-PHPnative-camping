<?php
    include "../Model/Clubcamping.php";
    include "../Controller/ClubcampingC.php";
    session_start();
     $idClubcamping=$_GET['idClubcamping'];
    $error = "";
    // create user
    $user = null;

    // create an instance of the controller
    $ClubcampingC = new ClubcampingC();
   $club1=$ClubcampingC->recupererClubcamping($idClubcamping);
    if (
        isset($_POST["nomclub"]) &&       
        isset($_POST["logoclub"]) &&
        isset($_POST["nomres"])&&
        isset($_POST["contact"])&&
        isset($_POST["nbmembres"])&&
        isset($_POST["siteclub"])&&
        isset($_POST["description"])
    ) {
        if (
            !empty($_POST["nomclub"]) && 
            !empty($_POST["logoclub"]) && 
            !empty($_POST["nomres"])&& 
            !empty($_POST["contact"]) && 
            !empty($_POST["nbmembres"]) && 
            !empty($_POST["siteclub"])&&
            !empty($_POST["description"]) 
        ) {
            $user = new Clubcamping(           
               $_POST["nomclub"],
                $_POST["logoclub"], 
                $_POST["nomres"], $_POST["contact"],$_POST["nbmembres"],$_POST["siteclub"],$_POST["description"] 
            );
            $user->setIdClubcamping($idClubcamping);
            $ClubcampingC->modifierClubcamping($user);
           
            
             header('Location:showclub.php?idClubcamping='.$idClubcamping);
            
        

  }
         else
            $error = "Missing information";
    }
foreach ($club1 as $row) {

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
    <?php include_once('navbar1.php'); ?>
      <div class="container">
           <hr class="space-lg" />
                <hr class="space-sm" />
             <div class="row">
                    <div class="title">
                        <div class="container" style="margin-top: 0px; opacity: 1;">
            <h1>Espace respensable du club</h1>
            <h2>Camping experts</h2>
        </div>
                      </div>
                    </div>
        </div>
    <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Ajouter des informations devotre club de camping à notre site camping fever</h3></div>
                                    <div class="card-body">
                                        <form action="" method="POST">
                    <div class="form-group">
                      <label for="validationValidInput1">Nom du club</label>
                      <input type="text" class="form-control is-valid" id="validationValidInput1" placeholder="Placeholder" name="nomclub" value="<?php echo $row['nomclub']?>">
                    </div>

                    <div class="form-group">
                      <label for="validationValidFileInput1">Valid file input</label>
                      <div class="custom-file">
                        <img alt="User Pic" src="<?php echo $row['logoclub']?>" id="profile-image1" class="img-circle img-responsive"> 
                        <input type="file" id="validationValidFileInput1" class="custom-file-input is-valid" name="logoclub">
                        <label class="form-control custom-file-label" for="validationValidFileInput1">Ajouter logo du club</label>
                      </div>
                    </div>
                     <div class="form-group">
                      <label for="validationValidTextarea1">Ajouter votre nom </label>
                     <input type="text" class="form-control is-valid" id="validationValidInput1" placeholder="Placeholder" name="nomres" value="<?php echo $row['nomres']?>">
                    </div>
                    <div class="form-group">
                      <label for="validationValidTextarea1">Contact</label>
                     <input type="tel" class="form-control is-valid" id="validationValidInput1" placeholder="Placeholder" name="contact" value="<?php echo $row['contact']?>">
                    </div>
                    <div class="form-group">
                      <label for="validationValidTextarea1">Nombre des membres du club</label>
                     <input type="number" class="form-control is-valid" id="validationValidInput1" placeholder="Placeholder" name="nbmembres" value="<?php echo $row['nbmembres']?>">
                    </div>
                     <div class="form-group">
                      <label for="validationValidTextarea1">Ajouter votre site officiel </label>
                     <input type="text" class="form-control is-valid" id="validationValidInput1" placeholder="Placeholder" name="siteclub" value="<?php echo $row['siteclub']?>">
                    </div>
                     <div class="form-group">
                      <label for="validationValidTextarea1">Description</label>
                     <textarea class="form-control is-valid" id="validationValidInput1" placeholder="Ajouter une description pour le profil de votre club" name="description"> </textarea>
                    </div>

                                <div class="form-group mt-4 mb-0">
                                              
                                       <input class="btn btn-primary btn-block" type="submit" value="Modifier information du club"> 
                                            </div>
                                       </form> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
<?php }?>
 <?php include_once('footer.php'); ?>
</body>
</html>
