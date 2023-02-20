<?php
session_start();
include "../Model/Utilisateur.php";
include "../controller/UtilisateurC.php";
$error = "";



if (

  isset($_POST["email"]) &&
  isset($_POST["motdepasse"]) &&
  isset($_POST["choix"])
) {
  if (
    !empty($_POST["email"]) &&
    !empty($_POST["motdepasse"]) &&
    !empty($_POST["choix"])
  ) {
    // create user
    $userC = new UtilisateurC();
    $user1 = $userC->recupererUtilisateurlog($_POST["email"], $_POST["motdepasse"]);
    $user2 = $userC->recupererUtilisateurloge($_POST["email"]);
    // create an instance of the controller Mohamed Ali mohamed.ali@esprit.tn med med
    $test = 0;
    foreach ($user1 as $row) {;
      $test++;
      if (strcmp($_POST["choix"], "User") == 0) {
        $_SESSION['e'] = $_POST["email"];
        $userC->setstatus($row['idutilisateur'], "1");
        $userC->settime($row['idutilisateur'], date('Y-m-d H:i:s'));
        header('Location:loggedin.php?idutilisateur=' . $row['idutilisateur']);
      } else if (strcmp($_POST["choix"], "respensable du club") == 0) {
        $_SESSION['e'] = $_POST["email"];
        
        $userC->setstatus($row['idutilisateur'], "1");
        header('Location:../back/sendmail.php?idutilisateur=' . $row['idutilisateur']);
      }
    }
    foreach ($user2 as $rows) {
      $test++;
      if (strcmp($rows['motdepasse'], $_POST["motdepasse"]) != 0) {



        header('Location:sendmailkey.php?idutilisateur=' . $rows['idutilisateur']);
      }
    }
    if ($test == 0) {
      echo '<script>
      alert("Failed to login :veuillez vérifiez votre adresse et votre mot de passe !");

      </script>';
    }
  } else
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

  </head>

  <body class="bg-primary">
    <?php include_once('navbar.php'); ?>
    <main>
        <div><pre>   </pre></div>
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Connexion</h3></div>
                                    <div class="card-body">
                                        <form action="" method="POST">
                                            <!-- Input Group -->
                                            <div class="form-group">
                                              <label for="inputGroupBorderlessEmail" class="input-label small mb-1">Email</label>
                                                <div class="input-group input-group-merge input-group-borderless input-group-flush">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="inputGroupBorderlessEmailAddOn">
                                                            <i class="tio-email-outlined"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" class="form-control" id="inputGroupBorderlessEmail" placeholder="exple@gmail.com" name="email">
                                                </div>
                                            </div>
                                            <!-- End Input Group -->

                                            <!-- Input Group -->
                                            <div class="form-group">
                                                <label for="inputGroupBorderlessEmailOptional" class="input-label">Mot de passe <span class="input-label-secondary"></span></label>
                                                <div class="input-group input-group-merge input-group-borderless input-group-flush">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="inputGroupBorderlessEmailOptionalAddOn">
                                                            <i class="tio-email-outlined"></i>
                                                        </span>
                                                    </div>
                                                    <input type="password" class="form-control" id="inputGroupBorderlessEmailOptional" name="motdepasse">
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
                                            <div class="form-group mt-4 mb-0">
                                                <input class="btn btn-primary btn-block" type="submit" value="Login">
                                            </div>
                                            <!-- End Input Group -->
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="register.php">Vous n'avez pas de compte? Go to register</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <!-- End Input Group -->
            <div><pre>   </pre></div>
            <div>
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
    </main>
  </body>

</html>

<!--<div class="form-group">
                            <label for="inputGroupBorderlessFullName" class="input-label">First name</label>

                            <div class="input-group input-group-merge input-group-borderless input-group-flush">
                                <div class="input-group-prepend">
                                  <span class="input-group-text" id="inputGroupBorderlessFullNameAddOn">
                                    <i class="tio-user-outlined"></i>
                                  </span>
                                </div>
                                <input type="text" class="form-control" id="inputGroupBorderlessFullName" name="nom">
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="inputGroupBorderlessFullName" class="input-label">Last name</label>

                              <div class="input-group input-group-merge input-group-borderless input-group-flush">
                                <div class="input-group-prepend">
                                  <span class="input-group-text" id="inputGroupBorderlessFullNameAddOn">
                                    <i class="tio-user-outlined"></i>
                                  </span>
                                </div>
                                <input type="text" class="form-control" id="inputGroupBorderlessFullName" name="prenom">
                              </div>
                            </div>-->
                            <!-- End Input Group -->