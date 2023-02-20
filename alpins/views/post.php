<?php
$pdo = new PDO('mysql:host=localhost;dbname=test', 'root', '');
session_start();
$id_session = session_id();

$likes = $pdo->prepare('SELECT id FROM likes_thread WHERE id_thread = ?');
$likes->execute(array($_GET['id']));
$likes = $likes->rowCount();

$dislikes = $pdo->prepare('SELECT id FROM dislikes_thread WHERE id_thread = ?');
$dislikes->execute(array($_GET['id']));
$dislikes = $dislikes->rowCount();






include "../Controller/forumC.php";
$error = "";
$thread = null;
$thread = new forumC();
$liste = $thread->afficherThread($_GET['id']);
include "../Model/comment.php";
include "../Controller/commentC.php";
$error = "";
$commentC = null;
$commentC = new commentC();
$liste2 = $commentC->afficherCom($_GET['id']);
if (
    isset($_POST["user"]) &&
    isset($_POST["id"]) &&
    isset($_POST["contents"])
) {
    if (
        !empty($_POST["user"]) &&
        !empty($_POST["id"]) &&
        !empty($_POST["contents"])
    ) {
        $comment = new comment(
            $_POST["user"],
            $_POST["id"],
            $_POST["contents"]
        );
        $commentC->ajouterCom($comment);
    } else
        $error = "Missing information";
}
?>
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Post | Alpins | Mountain And Trekking Template</title>
    <meta name="description" content="">
    <script src="themekit/scripts/jquery.min.js"></script>
    <script src="themekit/scripts/main.js"></script>
    <link rel="stylesheet" href="themekit/css/bootstrap-grid.css">
    <link rel="stylesheet" href="themekit/css/style.css">
    <link rel="stylesheet" href="themekit/css/glide.css">
    <link rel="stylesheet" href="themekit/css/magnific-popup.css">
    <link rel="stylesheet" href="themekit/css/content-box.css">
    <link rel="stylesheet" href="themekit/css/media-box.css">
    <link rel="stylesheet" href="themekit/css/contact-form.css">
    <link rel="stylesheet" href="themekit/css/social.css">
    <link rel="stylesheet" href="skin.css">
    <link rel="icon" href="media/favicon.png">
</head>

<body class="page-main">
    <?php include('navbar.php'); ?>
    <?php foreach ($liste as $row) { ?>
        <header class="header-base">
            <div class="container">
                <h1><?php echo $row['titre']; ?></h1>
                <h2>Ecrit par <?php echo $row['utilisateur']; ?> le : <?php echo $row['date']; ?></h2>
            </div>
        </header>
        <main>
            <section class="section-base ">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <img src="media/image-18.jpg" alt="" />
                            <h2><?php echo $row['contenu'];
                            } ?></h2>
                            <br>
                            <h3>Likes : <?= $likes ?></h3> <a href="like.php?t=1&id=<?php echo ($_GET['id']) ?>">Like</a>
                            <h3>Dislikes : <?= $dislikes ?></h3><a href="like.php?t=2&id=<?php echo ($_GET['id']) ?>">Dislike</a>
                            <hr class="space-sm" />
                            <h3>Commentaires</h3>
                            <hr class="space-sm" />

                            <?php foreach ($liste2 as $row) { ?>
                                <?php
                                $likes_comment = $pdo->prepare('SELECT id FROM likes_comment WHERE id_comment = ?');
                                $likes_comment->execute(array($row['ID']));
                                $likes_comment = $likes_comment->rowCount();

                                $dislikes_comment = $pdo->prepare('SELECT id FROM dislikes_comment WHERE id_comment = ?');
                                $dislikes_comment->execute(array($row['ID']));
                                $dislikes_comment = $dislikes_comment->rowCount();

                                ?>
                                <div class="menu-inner menu-inner-vertical menu-inner-image">
                                    <ul>
                                        <li>
                                            <a>
                                                <img src="media/square-1.jpg" alt="" />
                                                <span><?php echo $row['user'] . " a commenté le " . $row["date_comment"]; ?> </span>
                                                <?php echo $row['content']; ?>


                                            </a>

                                        </li>
                                        <p> </p>
                                        <a href="likecomment.php?thread=<?php echo $_GET['id']?>&t=1&id=<?php echo ($row['ID']) ?>"><img style="margin-top: 0px;" src="like.png" /><?php echo $likes_comment; ?> </a>
                                        <a href="likecomment.php?thread=<?php echo $_GET['id']?>&t=2&id=<?php echo ($row['ID']) ?>"><img style="margin-top: 0px;" src="dislike.png" /><?php echo $dislikes_comment; ?></a>

                                    </ul>

                                    <hr class="space-sm" />
                                </div>
                            <?php
                            }
                            ?>
                            <hr class="space-sm" />
                            <h3>Ecrire commentaire</h3>
                            <hr class="space-sm" />
                            <form class="form-box" name="form" id="form" action="" method="POST">
                                <div class="input-text-btn">
                                    <input class="input-text" name="user" id="user" type="text" placeholder="utilisateur" />
                                    <input class="input-text" name="contents" id="contents" type="text" placeholder="contenu" />
                                    <input type="hidden" value=<?php echo $_GET['id'] ?> name="id" id="id" type="text" />
                                    <input type="submit" value="Commenter" class="btn" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <?php include_once('footer.php'); ?>
</body>

</html>