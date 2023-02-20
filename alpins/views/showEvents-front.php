<?php
/**
********************************************
showEvents-front.php
--------------------
_____________________

Author: Guimdo Lioguy
Date: 03/12/2020
_____________________
-------------------------------------------
;Afficher un évènement de la base de données pour les utilisateurs

;Show events from database to the Dashboard for users
-------------------------------------------
********************************************
*/

    require_once('../controller/eventC.php');
    session_start();
    $connect = mysqli_connect("localhost", "root", "", "test");
    $query = "SELECT eventPhoto FROM events
    ORDER BY RAND ( )
    LIMIT 1  ";
    $result = mysqli_query($connect, $query);
    $AD = mysqli_fetch_array($result)
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
<body class="page-main">
    <script type="text/javascript">
        function searchEvents() {
            try
            {
                let valueS = document.getElementById("sortEvent").selectedIndex;
                let valueO = document.getElementById("orderEvent").selectedIndex;
                document.getElementById("eventSearchText").value = "";
                $("#txtHint").load("rangeEvents.php?val="+valueS+"&ord="+valueO).fadeIn("slow");
            } catch {
              var xhttp;
              xhttp = new XMLHttpRequest();
              xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                  document.getElementById("txtHint").innerHTML = this.responseText;
                }
              };
                let valueS = document.getElementById("sortEvent").selectedIndex;
                let valueO = document.getElementById("orderEvent").selectedIndex;
                xhttp.open("GET", "rangeEvents.php?val="+valueS+"&ord="+valueO, true);
                xhttp.send();
            }
            $('#findEvent').click(function(e){
                let valueT = document.getElementById("eventSearchText").value;
                $("#txtHint").load("rangeEvents.php?search="+valueT);
            });
        }
    </script>
    <script>
        function eventDisplay(subs) {
            let valueS = document.getElementById("sortEvent").selectedIndex;
            let valueO = document.getElementById("orderEvent").selectedIndex;
            document.getElementById("eventSearchText").value = "";
            $("#txtHint").load("rangeEvents.php?val="+valueS+"&ord="+valueO+"&subs="+subs).fadeIn("slow");
        }
    </script>
    <!-- barre de navigation -->
    <?php include_once('navbar.php'); ?>


    <header class="header-slider">
        <div class="background-slider">
            <div class="active" style="background-image:url(media/hd-1.jpg)"></div>
            <div style="background-image:url(media/hd-5.jpg)"></div>
            <div style="background-image:url(media/hd-3.jpg)"></div>
             <div style="background-image:url(media/hd-4.jpg)"></div>
        </div>
        <div class="container">
            <h1>The events</h1>
            <h2>Spring is nature way of saying let's party!</h2>
            <ol class="breadcrumb bg-transparent">
                <li><a href="index-2.html">Home</a></li>
                <li><a href="#">Pages</a></li>
                <li><a href="#">Events</a></li>
            </ol>
        </div>
    </header>
    <main>
        <section class="section-base ">

        <!-- Toast -->
        <div id="toast" class="toast" role="alert " aria-live="assertive" aria-atomic="true" style="position: fixed; top: 20px; right: 20px; z-index: 9999;">
          <div class="toast-header">
            <?php if(isset($_SESSION['name'])) {?>
            <img src="media/utilisateur-homme-50.png" class="avatar avatar-sm avatar-circle mr-2" alt="Image description">
            <?php } ?>
            <h6 class="mb-0">
                <?php
                    if(isset($_SESSION['name'])) echo 'Hello <strong>' . $_SESSION['name'] . '</strong>';
                    else echo 'Hello M./Mme';
                ?>
            </h6>
            <small class="ml-auto">11 mins ago</small>
            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="toast-body">
            Consulter nos evévènement et rencontrer plein de monde.
            <img src=<?php echo $AD['eventPhoto']?>>
          </div>
        </div>
        <!-- End Toast -->

            <div class="container">
                <div class="row justify-content-between">
                    <div>
                        <div class="input-text-btn" style="width: 300px">
                            <input class="input-text form-control" name="search" type="search" id="eventSearchText" placeholder="Research event" aria-label="Search Events">
                            <button id='findEvent' class="btn">Search</button>
                        </div>
                    </div>
                    <div>
                        <p style="display: inline;">Sort by : </p>
                        <select id="sortEvent" class="input-select" style="width: 200px" onchange="searchEvents()">
                            <option value="">Select an option:</option>
                            <option value=2>Nom</option>
                            <option value=1>Date</option>
                            <option value=3>Club</option>
                        </select>
                        <p style="display: inline;">Order by : </p>
                        <select id="orderEvent" class="input-select" style="width: 200px" onchange="searchEvents()">
                            <option value="">Select an option:</option>
                            <option value=1>ascending</option>
                            <option value=2>Descending</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div id="txtHint" class="col-lg-9">
                        <div class="grid-list gap-60 events-list" data-columns="1" data-gap="60">
                            <div class="grid-box">
                                <?php echo '<script> searchEvents(); </script>'; ?>
                            </div>

                            <div class="list-pagination">
                                <ul class="pagination" data-page-items="4" data-pagination-anima="fade-bottom" data-options="scrollTop:true"></ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <a href="#" class="media-box media-box-half" data-anima="pulse" data-time="2000">
                            <img alt="" src="media/long-4.jpg">
                            <div class="caption">
                                <h2>Sound of silence</h2>
                                <span class="extra-field">01 March 2019 at 8 PM</span>
                                <p class="text-xs">
                                    Lorem ipsum dolore consectetur adipisicing elito incididunto pertinole.
                                </p>
                            </div>
                        </a>
                        <hr class="space" />
                        <div class="icon-box icon-box-top boxed-area">
                            <i class="im-sunglasses-w2"></i>
                            <div class="caption">
                                <h3>Event organizers</h3>
                                <p>We're searching for event organizers</p>
                            </div>
                        </div>
                        <hr class="space-sm" />
                        <div class="icon-box icon-box-top boxed-area">
                            <i class="im-speach-bubbles"></i>
                            <div class="caption">
                                <h3>Need help?</h3>
                                <p>Contact us if have any event inquery</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- footer de la page -->
    <?php include_once('footer.php'); ?>

</body>

</html>