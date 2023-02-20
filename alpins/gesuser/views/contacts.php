<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from templates.themekit.dev/alpins/contacts.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Nov 2020 06:15:49 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contacts | Alpins | Mountain And Trekking Template</title>
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
    <link rel="stylesheet" href="skin.css">
    <link rel="icon" href="media/favicon.png">
</head>
<body class="page-main">
    
    <!-- barre de navigation -->
    <?php include_once('navbar.php'); ?>

    <main>
        <section class="section-base">
            <div class="container">
                <div class="google-map" data-marker="media/marker.png" data-coords="46.01049736894874,11.22314543457037"></div>   
                <hr class="space" />
                <div class="row">
                    <div class="col-lg-8">
                        <div class="title">
                            <h2>Write us</h2>
                            <p>Contact us from here</p>
                        </div>
                        <form action="https://templates.themekit.dev/alpins/themekit/scripts/contact-form/contact-form.php" class="form-box form-ajax" method="post" data-email="example@domain.com">
                            <div class="row">
                                <div class="col-lg-6">
                                    <p>Name</p>
                                    <input id="name" name="name" placeholder="Name" type="text" class="input-text" required>
                                </div>
                                <div class="col-lg-6">
                                    <p>Email</p>
                                    <input id="email" name="email" placeholder="Email" type="email" class="input-text" required>
                                </div>
                            </div>
                            <p>Messagge</p>
                            <textarea id="messagge" name="messagge" class="input-textarea" placeholder="Write something ..." required></textarea>
                            <div class="form-checkbox">
                                <input type="checkbox" id="check" name="check" value="check" required>
                                <label for="check">You accept the terms of service and the privacy policy</label>
                            </div>
                            <button class="btn btn-sm" type="submit">Send messagge</button>
                            <div class="success-box">
                                <div class="alert alert-success">Congratulations. Your message has been sent successfully</div>
                            </div>
                            <div class="error-box">
                                <div class="alert alert-warning">Error, please retry. Your message has not been sent</div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-4">
                        <div class="title">
                            <h2>Contacts</h2>
                            <p>Information</p>
                        </div>
                        <ul class="text-list text-list-line">
                            <li><b>Address</b><hr /><p>Pellegrino, Veneto, Italy</p></li>
                            <li><b>Web</b><hr /><p>domain.com</p></li>
                            <li><b>Email</b><hr /><p>info@domain.com</p></li>
                            <li><b>Phone</b><hr /><p>(02) 123 456 789999</p></li>
                            <li><b>Skype</b><hr /><p>example.name</p></li>       
                        </ul> 
                        <hr class="space-sm" />
                        <div class="icon-links icon-social icon-links-grid social-colors-hover">
                            <a class="facebook"><i class="icon-facebook"></i></a>
                            <a class="twitter"><i class="icon-twitter"></i></a>
                            <a class="instagram"><i class="icon-instagram"></i></a>
                            <a class="google"><i class="icon-google"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    
    <!-- footer de la page -->
    <?php include_once('footer.php'); ?>
    
</body>

<!-- Mirrored from templates.themekit.dev/alpins/contacts.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Nov 2020 06:15:49 GMT -->
</html>