<?php

session_start();
$id_session = session_id();
include "../Controller/forumC.php";
$error = "";
// create user
$thread = null;
$thread = new forumC();
$liste = $thread->afficherThreads();

?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from templates.themekit.dev/alpins/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Nov 2020 06:15:49 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog | Alpins | Mountain And Trekking Template</title>
    <meta name="description" content="">
    <script src="themekit/scripts/jquery.min.js"></script>
    <script src="themekit/scripts/main.js"></script>
    <link rel="stylesheet" href="themekit/css/bootstrap-grid.css">
    <link rel="stylesheet" href="themekit/css/style.css">
    <link rel="stylesheet" href="themekit/css/glide.css">
    <link rel="stylesheet" href="themekit/css/content-box.css">
    <link rel="stylesheet" href="themekit/css/social.css">
    <link rel="stylesheet" href="skin.css">
    <link rel="icon" href="media/favicon.png">
</head>

<body class="page-main">
    <?php include_once('navbar.php'); ?>
    <header class="header-image ken-burn-center light" data-parallax="true" data-natural-height="1080" data-natural-width="1920" data-bleed="0" data-image-src="media/hd-10.jpg" data-offset="0">
        <div class="container">
            <h1>LE FORUM</h1>
            <h2>Bienvenue dans notre forum</h2>
        </div>
    </header>
    <main>
        <section class="section-base section-color">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="grid-list" data-columns="1">
                            <div class="grid-box">
                                <?php foreach ($liste as $row) { ?>
                                    <div class="grid-item">
                                        <div class="cnt-box cnt-box-blog-side boxed" data-href="post<?php echo "?id=" . $row['ID']  ?>">
                                            <a href="post<?php echo "?id=" . $row['ID'] ?> " class="img-box">
                                                <div class="blog-date">
                                                    <span>
                                                        <?php
                                                        $date = new DateTime($row['date']);
                                                        echo date_format($date, 'd'); ?>
                                                    </span>
                                                    <span> <?php
                                                            $date = new DateTime($row['date']);
                                                            echo date_format($date, 'M Y'); ?></span>
                                                </div>
                                                <img src="media/image-3.jpg" alt="" />
                                            </a>
                                            <div class="caption">
                                                <h2><?php echo "ID:".$row['ID']." ".$row['titre']; ?></h2>
                                                <ul class="icon-list icon-list-horizontal">
                                                    <li><i class="icon-calendar"></i><a href="#"> <?php echo $row['date']; ?></a></li>
                                                    <li><i class="icon-user"></i><a href="#">
                                                            <?php echo $row['utilisateur']; ?></a></li>
                                                </ul>
                                                <p>
                                                    <?php echo $row['contenu']; ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="list-pagination">
                                <ul class="pagination" data-page-items="4" data-options="scrollTop:true"></ul>
                            </div>
                        </div>
                    </div>
                    <div class="menu-inner menu-inner-vertical">
                        <ul>
                            <li>
                                <a href="ajouterThread.php">
                                    Ecrire un nouveau post
                                </a>
                            </li>
                            <li>
                                <a href="modifierThread.php">
                                    Modifier un post
                                </a>
                            </li>
                            <li>
                                <a href="Supprimerthread.php">
                                    Supprimer un post
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include_once('footer.php'); ?>
</body>

</html>