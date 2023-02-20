

<?php
    include "../Model/Utilisateur.php";
    include "../Controller/UtilisateurC.php";
  
    $error = "";
    // create user
    $user = null;

    // create an instance of the controller
    $UtilisateurC = new UtilisateurC();
  
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
              $longueurkey=15;
    
        $key="";
        for($i=1;$i<$longueurkey;$i++)
    {
            $key .=mt_rand(0,9);
    }
    echo $key;

            $user->setKeyconfirmation($key);
            $UtilisateurC->ajouterUtilisateur($user);

           $l=$UtilisateurC->lastid();

            header('Location:showuser.php');
  }
         else
            $error = "Missing information";
    }


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
        <script>

    function verif() {
         var r=true;
         var regex = /^[0-9]+$/;
         var cmotdepasse=document.getElementById("cmotdepasse").value;
         var motdepasse=document.getElementById("motdepasse").value;
         var choix= document.getElementById("choix").value;
         var ville= document.getElementById("ville").value;
         var tel=document.getElementById("tel").value;
         if((motdepasse!=cmotdepasse)||(length.cmotdepasse==0))
         {
         document.getElementById("val").textContent="mot de passe erroné";
         r= false;
         }
         if(ville==="0")
         {
            
         alert("Veuillez indiquer votre ville");
        r=false;
       
        } 
        //Regex for Valid Characters i.e.  Numbers.
        var regex = /^[0-9]+$/
         
        

        //Validate TextBox value against the Regex.
        var v = regex.test(document.getElementById("nom").value);
        //var b=regex.test(document.getElementById("prenom").value);
        if (v) {
          
          document.getElementById("val1").textContent="Le nom ne doit pas contenir seulement des lettres alphanumériques.";
           r=false;
             }
             if(tel.length!==8)
             {
    document.getElementById("val3").textContent="Numéro de téléphone erroné"; 
            r=false;
             }
             if(choix="")
             {
    document.getElementById("val4").textContent="veuillez précisez le type d'accés"; 
            r=false;
             }
             /*if (b) {
          
          document.getElementById("val2").textContent="Le prenom ne doit pas contenir seulement des lettres alphanumériques.";
           r=false;
             }*/
        return r;
    }
    </script>
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
                                        <form action="" onsubmit="return verif()" method="POST">
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputFirstName">Nom</label>
                                                    
                                                        <input class="form-control py-4" id="nom" name="nom" type="text" placeholder="Enter first name" required />    
                                                        <p id="val1"></p>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputLastName">Prenom</label>
                                                        <input class="form-control py-4" id="inputLastName"name="prenom" type="text" placeholder="Enter last name" />
                                                        <p id="val2"></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Email</label>
                                                <input class="form-control py-4" id="email" type="email" name="email"aria-describedby="emailHelp" placeholder="Enter email address" pattern=".+@gmail.com" />
                                            </div>
                                            
                                             <div class="form-group">                                       
                                              <label class="small mb-1" for="date">Date de naissance:</label>
                                             <input  class="form-control py-4" type="date" id="datedenais" name="datedenais">
                                            </div>
    
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputPassword">Mot de passe</label>
                                                        <input class="form-control py-4" id="motdepasse" type="password" name="motdepasse" placeholder="Enter password" />
                                                          <p id="val"></p>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputConfirmPassword">Confirmer Mot de passe</label>
                                                        <input class="form-control py-4" id="cmotdepasse" type="password" name="cmotdepasse" placeholder="Confirm password"  />
                                                    </div>
                                                </div>
                                            </div>
                                             <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                        <label class="small mb-1" for="inputConfirmPassword">Ville</label>
                                                        <select name="ville" class="input-select" id="ville"  >
                                                    <option value="0">Selectionner une ville:</option>
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
                                                        <input class="form-control py-4" id="tel" name="tel" type="telephone" placeholder="216+" />
                                                        <p id="val3"></p>
                                                    </div>
                                                </div>
                                            </div>
                                                <label class="small mb-1">Type d'accès</label>
                                                <br>
                                                <div class="form-check form-check-inline">
                                               <input class="form-check-input" type="radio" id="choix" name="choix" value="User">
                                               <label class="form-check-label" for="inlineCheckbox1">User</label>
                                               <input class="form-check-input" type="radio" id="choix" name="choix" value="respensable du club">
                                               <p id="val4"></p>
                                             <label class="form-check-label" for="inlineCheckbox2">respensable d'un club de camping</label>
                                              
                                          </div>
                                            </div>
                                            <div class="form-group mt-4 mb-0">
                                              
                                       <input class="btn btn-primary btn-block" type="submit" value="créer compte"> 
                                            </div>
                                       </form> 
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="login.php">Vous avez deja un compte? Go to login</a></div>
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

    </body>
</html>