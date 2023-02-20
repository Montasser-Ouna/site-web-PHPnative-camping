<?PHP
require_once "../controller/PromotionC.php";
require_once "../model/Promotion.php";
require_once "../config.php";

session_start();
$id_session = session_id();
$PromotionC = new PromotionC();
$listePromotion = $PromotionC->afficherPromotions();
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from templates.themekit.dev/alpins/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Nov 2020 06:15:26 GMT -->

<head>
<meta charset="UTF-8">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home | 1 | Alpins | Les Plus Beaux Campings à Tunisie</title>
    <meta name="description" content="">
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
</head>

<body class="page-main">

    <!-- barre de navigation -->
    <?php include('navbar.php'); ?>
    <main>


        <section class="section-base">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <ul class="slider controls-right">
                            <li>
                                <div class="cnt-box cnt-box-info" data-href="treks-single.html">
                                    <?PHP foreach ($listePromotion as $row) { ?>
                                        <div class="extra-field"><del>
                                                <h2><?PHP echo $row['prixact']; ?>DT </h2>
                                            </del>
                                            <h2><?PHP echo $row['prix']; ?>DT </h2>
                                        </div>

                                        <td role="cell"><img id="<?php echo $row['id']; ?>" style="height:340px  ;width:340px ;" onClick="Preview_clic(this.id)" src="../image/<?php echo $row['image']; ?>" /></td>
                                        <div class="caption">
                                            <div class="cnt-info" >
                                                <div><span><?PHP echo $row['dateD']; ?></span><span>allez</span></div>
                                                <div><span> <?PHP echo $row['dateF']; ?></span><span>retour</span></div>
                                            </div>
                                            <h2> <?PHP echo $row['localisation']; ?> </h2>
                                            <p><?PHP echo $row['description']; ?></p>
                                            <?php if (isset($_SESSION['userID'])) { ?>
                                                <H2>Votez :</H2>
                                                <a type="button" class='btn btn-warning btn-sm' href='faible.php?iduser=<?php echo $_SESSION['userID']; ?>&idpro=<?php echo $row['id']; ?>'> faible </a>
                                                <a type="button" class='btn btn-primary btn-sm' href='bien.php?iduser=<?php echo $_SESSION['userID']; ?>&idpro=<?php echo $row['id']; ?>'> moyen </a>
                                                <a type="button" class='btn btn-primary btn-sm' href='excellent.php?iduser=<?php echo $_SESSION['userID']; ?>&idpro=<?php echo $row['id']; ?>'> excellent </a>

                                            <?php } ?>
                                            <br><br><br><br><br>
                                        <?PHP } ?>

                                        </div>
                                </div>
                            </li>


                        </ul>
                    </div>

                    <div class="col-lg-4">
                        <hr class="space-sm visible-sm" />
                        <div class="title">
                            <h2>Derniers voyages</h2>
                            <p>Explorez le monde inexploré</p>
                        </div>
                        <p>
                            Faites votre choix parmi des dizaines de campings en Tunisie
                        </p>
                        <a href="contacts.php" class="btn btn-circle btn-xs">Contactez nous </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-base section-color">
            <div class="container">
                <div class="title align-center align-left-md">
                    <h2>À propos de nous</h2>
                    <p>Nous vivons pour la nature</p>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <p>
                            La Galite est un archipel d’îles rocheuses d’origine volcanique situé au nord de la Tunisie. La Galite est également l’archipel et le point le plus septentrional de la Tunisie
                        </p>
                    </div>
                    <div class="col-lg-3 no-margin-md">
                        <p>
                            Dans nos campings tout confort, vous trouverez tout ce dont vous avez besoin : des hébergements économiques, des installations de qualité, le tout dans un cadre agréable. Faites de vos séjours en groupe un événement mémorable !
                        </p>
                        <hr class="space-sm" />
                        <a href="about.html" class="btn-text">Read more</a>
                    </div>
                    <div class="col-lg-6">
                        <ul class="accordion-list" data-open="1">
                            <li>
                                <a href="#">Nos endroits de camping en tunisie</a>
                                <div class="content">
                                    <p>
                                        Il y a tant de choses à découvrir dans chaque région de la Tunisie : des paysages contrastés, un littoral long de 1250 km parsemé d’îles et d’archipels
                                    </p>
                                </div>
                            </li>
                            <li>
                                <a href="#">À propos de nos randonnées et voyages</a>
                                <div class="content">
                                    <p>
                                        Si vous êtes à la quête d’un agréable endroit pour accéder à une véritable escapade verte au cœur de la nature,
                                        et si vous êtes aventuriers et passionnés par le dépaysement et le camping
                                    </p>
                                </div>
                            </li>
                            <li>
                                <a href="#">À propos de notre équipe et de nos invités</a>
                                <div class="content">
                                    <p>
                                        Tous les types de groupes peuvent séjourner sur un camping : séminaires, team buildings,
                                        réunions de famille ou encore des sorties scolaires de plusieurs jours
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-slider alpins-slider light section-full-width-left" data-slider-parallax="true" data-interval="0">
            <div class="background-slider">
                <div class="active" style="background-image:url(media/hd-3.jpg)"></div>
                <div style="background-image:url(media/hd-4.jpg)"></div>
                <div style="background-image:url(media/hd-5.jpg)"></div>
                <div style="background-image:url(media/hd-6.jpg)"></div>
                <div style="background-image:url(media/hd-7.jpg)"></div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="slider" data-options="type:slider,nav:true,arrows:true,perView:3,perViewLg:2,perViewSm:1,gap:30,controls:out">
                            <li>
                                <a href="treks-single.html" class="media-box media-box-reveal" data-anima="scale" data-trigger="hover">
                                    <img class="anima" src="media/long-4.jpg" alt="">
                                    <div class="caption">
                                        <h2>Ksar Hallouf</h2>

                                        <h3>Médenine,Sud Tunisien</h3>
                                        <p>
                                            le camping a Ksar hallouf vous garantir une expérience digne et Laissez-vous découvrir la magie de la beauté du sud tunisien
                                        </p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="treks-single.html" class="media-box media-box-reveal" data-anima="scale" data-trigger="hover">
                                    <img class="anima" src="media/long-1.jpg" alt="">
                                    <div class="caption">
                                        <h2>Barrage el Masri</h2>

                                        <h3>Grombalia,Nabeul</h3>
                                        <p>
                                            Avec la vue des montagne et de lac turquoise cette endroit est très désirable pour le camping
                                        </p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="treks-single.html" class="media-box media-box-reveal" data-anima="scale" data-trigger="hover">
                                    <img class="anima" src="media/long-7.jpg" alt="">
                                    <div class="caption">
                                        <h2> La Galite</h2>

                                        <h3>Tabarka</h3>
                                        <p>
                                            La Galite est un archipel d’îles rocheuses d’origine volcanique situé au nord de la Tunisie
                                        </p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="treks-single.html" class="media-box media-box-reveal" data-anima="scale" data-trigger="hover">
                                    <img class="anima" src="media/long-2.jpg" alt="">
                                    <div class="caption">
                                        <h2>Cap Hmem</h2>

                                        <h3>Bizerte</h3>
                                        <p>
                                            Cap Hmem, c’est à 25 km au nord de bizerte centre, un endroit paradisiaque vierge avec merveilleuses falaises
                                        </p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="treks-single.html" class="media-box media-box-reveal" data-anima="scale" data-trigger="hover">
                                    <img class="anima" src="media/long-6.jpg" alt="">
                                    <div class="caption">
                                        <h2>Parc national de Bouhedma</h2>

                                        <h3>Mezzouna,Sidi Bouzid</h3>
                                        <p>
                                            Le parc couvrent totalement de 16448 hectares qui représentent la deuxième plus large parc national au tunisien
                                        </p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6" data-anima="fade-left" data-time="2000">
                        <h1 class="text-lg text-uppercase text-black">Les treks de notre équipe</h1>
                        <p>

                        </p>
                        <a href="treks.html" class="btn btn-sm btn-circle">Tous les treks</a> <a href="team.html" class="btn btn-sm btn-circle btn-border">L'équipe</a>
                        <hr class="space hidden-md" />
                    </div>
                </div>
            </div>
        </section>
        <section class="section-base">
            <div class="container">
                <div class="title align-center">
                    <h2>Top service</h2>
                    <p>Nous offrons la meilleure expérience</p>
                </div>
                <table class="table table-grid table-border table-6-md">
                    <tbody>
                        <tr>
                            <td>
                                <div class="icon-box icon-box-top align-center">
                                    <i class="im-foot-2"></i>
                                    <div class="caption">
                                        <h3>Équipe expérimentée</h3>
                                        <p>Nous avons toujours vécu dans notre nature incroyable</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="icon-box icon-box-top align-center">
                                    <i class="im-icq"></i>
                                    <div class="caption">
                                        <h3>Assemblage facile</h3>
                                        <p>Contactez-nous et en 2 minutes vous êtes réservé</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="icon-box icon-box-top align-center">
                                    <i class="im-landscape"></i>
                                    <div class="caption">
                                        <h3>Randonneurs experts</h3>
                                        <p>Nos voyages nous ont appris tout ce que nous savons</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="icon-box icon-box-top align-center">
                                    <i class="im-forest"></i>
                                    <div class="caption">
                                        <h3>Lieux secrets</h3>
                                        <p>Découvrez des lieux naturels cachés avec nos circuits</p>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="icon-box icon-box-top align-center">
                                    <i class="im-flag-4"></i>
                                    <div class="caption">
                                        <h3>emplacements sud</h3>
                                        <p>Nous proposons des voyages dans le désert</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="icon-box icon-box-top align-center">
                                    <i class="im-map2"></i>
                                    <div class="caption">
                                        <h3>Rendez nous visite</h3>
                                        <p>Nous sommes dans toute la Tunisie près de la nature</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="icon-box icon-box-top align-center">
                                    <i class="im-globe"></i>
                                    <div class="caption">
                                        <h3>Tour de tunis </h3>
                                        <p>Une fois par an, rejoignez-nous pour le grand voyage</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="icon-box icon-box-top align-center">
                                    <i class="im-rainbow-2"></i>
                                    <div class="caption">
                                        <h3>Belles îles</h3>
                                        <p>Nos excursions vous mèneront vers de belles îles</p>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
        <section class="section-base section-color">
            <div class="container">
                <div class="title align-center">
                    <h2>Newsletter</h2>
                    <p>Abonnez-vous maintenant à notre newsletter</p>
                </div>
                <form data-anima="fade-in" data-time="1000" action="https://templates.themekit.dev/alpins/HTWF/scripts/php/contact-form.php" class="form-box form-ajax form-inline align-center" method="post" data-email="example@domain.com">
                    <div class="row">
                        <div class="col-lg-4">
                            <input id="name" name="name" placeholder="nom" type="text" class="input-text" required>
                        </div>
                        <div class="col-lg-4">
                            <input id="email" name="email" placeholder="Email" type="email" class="input-text" required>
                        </div>
                        <div class="col-lg-4">
                            <button class="btn btn-sm" type="submit">abonner</button>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-checkbox">
                                <input type="checkbox" id="check" name="check" value="check" required>
                                <label for="check">En cliquant sur abonner, vous acceptez les conditions d'utilisation et la politique de confidentialité</label>
                            </div>
                        </div>
                    </div>
                    <div class="success-box">
                        <div class="alert alert-success">Toutes nos félicitations. Vous êtes désormais abonné!</div>
                    </div>
                    <div class="error-box">
                        <div class="alert alert-warning">Erreur, veuillez réessayer. Votre message n'a pas été envoyé</div>
                    </div>
                </form>
            </div>
        </section>

    </main>
    <!-- footer de la page -->
    <?php include_once('footer.php'); ?>

</body>

<!-- Mirrored from templates.themekit.dev/alpins/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Nov 2020 06:15:26 GMT -->

</html>