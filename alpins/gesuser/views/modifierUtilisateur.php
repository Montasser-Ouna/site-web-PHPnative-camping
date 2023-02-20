<?php
include "../Model/Utilisateur.php";
include "../controller/UtilisateurC.php";
$error = "";
$idutilisateur=$_GET['idutilisateur'];
    // create user
    $user = null;
    $userC = new UtilisateurC();
    $user1= $userC->recupererUtilisateur($idutilisateur);
    // create an instance of the controller Mohamed Ali mohamed.ali@esprit.tn med med
   
   
   if (
        isset($_POST["nom"]) &&       
        isset($_POST["prenom"]) &&
        isset($_POST["email"])&&
        isset($_POST["datedenais"])&&
        isset($_POST["motdepasse"])&&
        isset($_POST["cmotdepasse"])&&
        isset($_POST["ville"])&&
        isset($_POST["tel"])&&
        isset($_POST["choix"])
    ) {
        if (
            !empty($_POST["nom"]) && 
            !empty($_POST["prenom"]) && 
            !empty($_POST["email"])&& 
            !empty($_POST["datedenais"]) && 
            !empty($_POST["motdepasse"]) && 
            !empty($_POST["cmotdepasse"]) && 
            !empty($_POST["ville"])  && 
            !empty($_POST["tel"]) && 
            !empty($_POST["choix"]) 
        ) {
            $user = new Utilisateur(           
               $_POST["nom"],
                $_POST["prenom"], 
                $_POST["email"], $_POST["datedenais"],$_POST["motdepasse"],$_POST["cmotdepasse"],$_POST["ville"], $_POST["tel"],$_POST["choix"] 
            );
             $user->setIdutilisateur($idutilisateur);
            $userC->modifierUtilisateur($user);
            header('Location:showuser.php');
        }
        else
            $error = "Missing information";
    }

    
?>
<?php
foreach ($user1 as $row)  
{
?>
<!DOCTYPE html>
<html lang="en">
    <head>
       <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <title>Page Title - Compte user</title>
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
    <body class="bg-primary">
       <?php include_once('navbar.php'); ?>
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">créer compte</h3></div>
                                    <div class="card-body">
                                        <form action="" method="POST">
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputFirstName">Nom</label>
                                                        <input class="form-control py-4" id="inputFirstName" name="nom" type="text" placeholder="Enter first name" value=" <?php echo $row['nom'];?>" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputLastName">Prenom</label>
                                                        <input class="form-control py-4" id="inputLastName"name="prenom" type="text" placeholder="Enter last name" value=" <?php echo $row['prenom'];?>" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Email</label>
                                                <input class="form-control py-4" id="inputEmailAddress" type="email" name="email"aria-describedby="emailHelp" placeholder="Enter email address" value=" <?php echo $row['email'];?>" />
                                            </div>
                                            
                                             <div class="form-group">                                       
                                              <label class="small mb-1" for="date">Date de naissance:</label>
                                             <input  class="form-control py-4" type="date" id="datenais" name="datedenais" value=" <?php echo $row['datedenais'];?>">
                                            </div>
    
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputPassword">Mot de passe</label>
                                                        <input class="form-control py-4" id="inputPassword" type="password" name="motdepasse" placeholder="Enter password" value=" <?php echo $row['motdepasse'];?>" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputConfirmPassword">Confirmer Mot de passe</label>
                                                        <input class="form-control py-4" id="inputConfirmPassword" type="password" name="cmotdepasse" placeholder="Confirm password" value=" <?php echo $row['cmotdepasse'];?>" />
                                                    </div>
                                                </div>
                                            </div>
                                             <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                        <label class="small mb-1" for="inputConfirmPassword">Ville</label>
                                                        <select name="ville" class="input-select"  >
                                                    <option value="0" > <?php echo $row['ville'];?></option>
                                                    <option value="tunis">tunis</option>
                                                    <option value="sfax">sfax</option>
                                                    <option value="3">Citroen</option>
                                                     <option value="4">Ford</option>
                                                     <option value="5">Honda</option>
                                                    <option value="6">Jaguar</option>
                                                     <option value="7">Land Rover</option>
                                                  <option value="8">Mercedes</option>
                                                 <option value="9">Mini</option>
                                                 <option value="10">Nissan</option>
                                                    <option value="11">Toyota</option>
                                                    <option value="12">Volvo</option>
                                                  </select>
                                                    </div>
                                                     </div>
                                            
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputConfirmPassword">téléphone</label>
                                                        <input class="form-control py-4" id="inputtel" name="tel" type="telephone" placeholder="216+" value=" <?php echo $row['tel'];?>" />
                                                    </div>
                                                </div>
                                            </div>
                                                <label class="small mb-1">Type d'accès</label>
                                                <br>
                                                <div class="form-check form-check-inline">
                                               <input class="form-check-input" type="radio" id="inlineCheckbox1" name="choix" value="User">
                                               <label class="form-check-label" for="inlineCheckbox1">User</label>
                                               <input class="form-check-input" type="radio" id="inlineCheckbox2" name="choix" value="respensable du club">
                                               
                                             <label class="form-check-label" for="inlineCheckbox2">respensable d'un club de camping</label>
                                              
                                          </div>
                                            </div>
                                            <div class="form-group mt-4 mb-0">
                                               <!-- if(<?php echo $user['choix'];?> =="user")
                                                href="projet_site-web-group3/alpins/index.php?idutilisateur=<?PHP echo $user['idutilisateur']; ?>""
                                                else 
                                                href=""-->
                                       <input class="btn btn-primary btn-block" type="submit" value="modifier compte"> 
                                            </div>
                                       </form> 
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Camping fever</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
<?php
}
?>