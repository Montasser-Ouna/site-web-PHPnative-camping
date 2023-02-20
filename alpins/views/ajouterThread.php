<?php
session_start();
include "../Model/forum.php";
include "../Controller/forumC.php";
$error = "";
$forumC = null;
$forumC = new forumC();

if (
    isset($_POST["user"]) &&
    isset($_POST["title"]) &&
    isset($_POST["contents"])
) {
    if (
        !empty($_POST["user"]) &&
        !empty($_POST["title"]) &&
        !empty($_POST["contents"])
    ) {
        $thread = new forum(
            $_POST["user"],
            $_POST["title"],
            $_POST["contents"]

        );
        $forumC->ajouterThread($thread);
        header('Location:forum.php');
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
    <title>Ajouter Thread</title>
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
    <br><br><br><br>
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header">
                            <h3 class="text-center font-weight-light my-4">Ajouter Thread</h3>
                        </div>
                        <div class="card-body">
                            <form name="f" action="" method="POST">
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="small mb-1" for="inputFirstName">Nom d'utilisateur</label>
                                            <?php
                                            if (isset($_SESSION['name'])) {
                                            ?>
                                                <input readonly class="form-control py-4" id="user" value="<?php echo $_SESSION['name']; ?>" name=" user" for="user" type="text" />
                                        </div>
                                    <?php
                                            } else {
                                    ?>
                                        <input readonly class="form-control py-4" id="user" value="<?php echo "Veuiller vous connecter"; ?>" name=" user" for="user" type="text" />
                                    </div><?php } ?>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="small mb-1" for="inputLastName">Titre</label>
                                        <input class="form-control py-4" id="title" name="title" for="title" type="text" placeholder="Titre de post" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="small mb-1" for="inputEmailAddress">Contenu</label>
                                        <input class="form-control py-4" id="contents" name="contents" for="contents" type="text" placeholder="Contenu du post" />
                                    </div>
                                </div>
                        </div>
                        <div class="form-group mt-4 mb-0">
                            <input class="btn btn-primary btn-block" type="submit" value="Poster le thread sur le forum" onclick="test()">
                        </div>
                        </form>
                    </div>
                </div>
        </div>
        </main>
    </div>
    <?php include_once('footer.php'); ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>

</html>