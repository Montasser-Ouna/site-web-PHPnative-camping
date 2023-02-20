
<?php
    require_once "../Controller/ClubcampingC.php";
$error = "";
    // create user

    $Clubcampingc=new ClubcampingC();
    $Clubcamping1=$Clubcampingc->afficherClubcampings();
    
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <title>Page Title -club List</title>
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
     <?php include_once('navbar.php'); ?>
<div class="panel active fade-in" style="animation-duration: 500ms; transition-timing-function: ease; transition-delay: 0ms;">
      <div class="container">
           <hr class="space-lg" />
                <hr class="space-sm" />
             <div class="row">
                    <div class="title">
                        <h1  class="text-lg text-uppercase text-blue"> Clubs List</h1>
                      </div>
                    </div>
        </div>
                                <ul class="text-list text-list-image">
                                   <?php foreach ($Clubcamping1 as $row)  
                                     {
                                    ?>

                                    <li>
                                        <img src="<?php echo $row['logoclub'] ?>" alt="">
                                        <div class="content">
                                            <h3><a href="showclubuser.php?idClubcamping=<?php echo$row['idClubcamping']?>"><?php echo $row['nomclub'] ?></a> </h3>
                                            <br>
                                            <b><?php echo $row['nomres'] ?></b>
                                            <br>
                                            <p><?php echo $row['description'] ?></p>
                                            <br>
                                        </div>
                                    </li>
                                <?php }?>
                                </ul>
                            </div>
                            <?php include_once('footer.php'); ?>


</body>
</html>