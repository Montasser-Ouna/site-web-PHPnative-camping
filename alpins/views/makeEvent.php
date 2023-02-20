<?php
/**
********************************************
makeEvent.php
-------------
_____________________

Author: Guimdo Lioguy
Date: 10/12/2020
_____________________
-------------------------------------------
;gère un évènement bien défini ainsi que tous les interactions avec les utilisateurs

;Manage a well-defined event as well as interactions with users
-------------------------------------------
********************************************
*/

require_once('../controller/eventC.php');

$eventC = new EventC;

if(isset($_GET['idEvent']))
{
    if(!empty($_GET['idEvent']))
    {
        $data = $eventC->findEvent((int) $_GET['idEvent']);
        $rows = $data->fetch();
    }
    else
        header('Location: showEvents-front.php');
}
else
    header('Location: showEvents-front.php');

session_start();


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Events | Alpins | Mountain And Trekking Template</title>
    <meta name="description" content="">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script src="../my-ressources/datatables/media/js/jquery.dataTables.min.js"></script>

    
    <!-- Lien vers fichiers . css et .js -->
    <?php include_once('link.php'); ?>
    
</head>
<body class="page-main" >

    <!-- barre de navigation -->
    <?php include_once('navbar.php'); ?>

    <header class="header-slider">
        <div class="background-slider">
            <div class="active" style="background-image:url(<?php echo $rows['eventPhoto']; ?>)"></div>
        </div>
        <div class="container">
            <h1><?php echo $rows['eventName']; ?></h1>
            <h2>Author: <?php echo $rows['eventAuthor']; ?></h2>
            <ol class="breadcrumb bg-transparent">
                <li><a href="index-2.html">Home</a></li>
                <li><a href="#">Pages</a></li>
                <li><a href="#">Events</a></li>
            </ol>
        </div>
    </header>

    <main >
        <section class="section-base " >            
            <div class="container">
                <div class="row justify-content-between">  
                </div>
                <div class="row">
                    <div id="txtHint" class="col-lg-9">                     
                        <div class="grid-list gap-60 events-list" data-columns="1" data-gap="60">
                            <div class="panel">
                                <div class="tab-box" data-tab-anima="fade-in">
                                    <ul class="tab-nav">
                                        <li class="active"><a href="#">Materiels</a></li>
                                        <li><a href="#">Timeline event</a></li>
                                        <li><a href="#">Comment</a></li>
                                    </ul>
                                    <div class="active panel">
                                        <table class="table table-grid table-border table-6-md">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="icon-box icon-box-top align-center">
                                                            <i class="im-icon-sign"></i>
                                                            <div class="caption">
                                                                <h3>Experienced team</h3>
                                                                <p>We always lived inside our amazing nature</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="icon-box icon-box-top align-center">
                                                            <i class="im-icq"></i>
                                                            <div class="caption">
                                                                <h3>Easy joining</h3>
                                                                <p>Contact us and in 2 minutes you're booked</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="icon-box icon-box-top align-center">
                                                            <i class="im-landscape"></i>
                                                            <div class="caption">
                                                                <h3>Expert hikers</h3>
                                                                <p>Our mountans teached us everything we know</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="icon-box icon-box-top align-center">
                                                            <i class="im-forest"></i>
                                                            <div class="caption">
                                                                <h3>Secret locations</h3>
                                                                <p>Discover hidden natural places with our tours</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="icon-box icon-box-top align-center">
                                                            <i class="im-flag-4"></i>
                                                            <div class="caption">
                                                                <h3>Europe locations</h3>
                                                                <p>We provide trips on varous europe countries</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="icon-box icon-box-top align-center">
                                                            <i class="im-map2"></i>
                                                            <div class="caption">
                                                                <h3>Visit us</h3>
                                                                <p>We are in the north of italy near the mountains</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="icon-box icon-box-top align-center">
                                                            <i class="im-globe"></i>
                                                            <div class="caption">
                                                                <h3>United States</h3>
                                                                <p>Once a year join us to the other part of the world</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="icon-box icon-box-top align-center">
                                                            <i class="im-rainbow-2"></i>
                                                            <div class="caption">
                                                                <h3>Great waterfall</h3>
                                                                <p>Our excursions will bring you to great waterfalls</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="panel">
                                        <div class="timeline">
                                            <div>
                                                <div class="badge"><p>2021</p><span>11 March 2021</span></div>
                                                <div class="panel">
                                                    <h3 class="timeline-title">Mussum ipsum cacilds</h3>
                                                    <p>
                                                        Lorem ipsum dolor sit amet consectetur adipiscing elitsed do eiusmod tempor incididunt utlabore et dolore magna aliqua.
                                                        Utenim ad minim veniam quis nostrud exercitation ullamco labor ommodo consequat.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="inverted">
                                                <div class="badge"><p>2019</p><span>25 April 2019</span></div>
                                                <div class="panel">
                                                    <h3 class="timeline-title">Mussum ipsum cacilds</h3>
                                                    <p>
                                                        Lorem ipsum dolor sit amet consectetur adipiscing elitsed do eiusmod tempor incididunt utlabore et dolore magna aliqua.
                                                        Utenim ad minim veniam quis nostrud exercitation ullamco labor ommodo consequat.
                                                    </p>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="badge"><p>2002</p><span>08 January 2002</span></div>
                                                <div class="panel">
                                                    <h3 class="timeline-title">Mussum ipsum cacilds</h3>
                                                    <p>
                                                        Lorem ipsum dolor sit amet consectetur adipiscing elitsed do eiusmod tempor incididunt utlabore et dolore magna aliqua.
                                                        Utenim ad minim veniam quis nostrud exercitation ullamco labor ommodo consequat.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        Lorem ipsum dolor sitamet consectetur adipisicing elito sed do eiusmod tempor incididunt
                                        ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                        nisi ut aliquip ex ea coSed ut perspiciatis unde omnis iste natus error sit voluptatemo.
                                        Lorem ipsum dolor sit amet.  no sea takimata sanctus est Lorem ipsum dolor sit amet seduis nostrud exercitation
                                        diam ad minim veniam, quis nostrud exercitation voluptua.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 bg-light">
                        <h5 class="align-center"><strong><u>Members Who Participate</u></strong></h5>                        
                    </div>
                </div>        
            </div>
        </section> 
    </main>

    <!-- footer de la page -->
    <?php include_once('footer.php'); ?>
</body>
</html>