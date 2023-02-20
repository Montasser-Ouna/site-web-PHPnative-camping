<?PHP
require_once "../controller/UtilisateurC.php";
require_once "../controller/PromotionC.php";
require_once "../model/Utilisateur.php";
require_once "../model/Promotion.php";
require_once "../config.php";

session_start();

$UtilisateurC = new UtilisateurC();
$PromotionC = new PromotionC();
$listePromotion = $PromotionC->afficherPromotions();


    // create an instance of the controller
    $userC = new PromotionC();
    if (
        isset($_POST["localisation"]) &&
        isset($_POST["image"]) &&
        isset($_POST["description"]) &&
        isset($_POST["dateD"]) &&
        isset($_POST["dateF"]) &&
        isset($_POST["prixact"]) &&
        isset($_POST["prix"])
    ) {
        if (
            !empty($_POST["localisation"]) &&
            !empty($_POST["image"]) &&
            !empty($_POST["description"]) &&
            !empty($_POST["dateD"]) &&
            !empty($_POST["dateF"]) &&
            !empty($_POST["prixact"]) &&
            !empty($_POST["prix"])
        ) {
            $user = new Promotion(
                $_POST['localisation'],
                $_POST['image'],
                $_POST['description'],
                $_POST['dateD'],
                $_POST['dateF'],
                $_POST['prixact'],
                $_POST['prix'],
                $_SESSION['userID']
            );
            $userC->ajouterPromotion($user);





        }
        else
            $error = "Missing information";
    }
    if (
      isset($_POST["localisation"]) &&
      isset($_POST["image"]) &&
      isset($_POST["description"]) &&
      isset($_POST["dateD"]) &&
      isset($_POST["dateF"]) &&
      isset($_POST["prixact"]) &&
      isset($_POST["prix"])
  ) {
      if (
          !empty($_POST["localisation"]) &&
          !empty($_POST["image"]) &&
          !empty($_POST["description"]) &&
          !empty($_POST["dateD"]) &&
          !empty($_POST["dateF"]) &&
          !empty($_POST["prixact"]) &&
          !empty($_POST["prix"])
      ) {
          $user = new Promotion(
              $_POST['localisation'],
              $_POST['image'],
              $_POST['description'],
              $_POST['dateD'],
              $_POST['dateF'],
              $_POST['prixact'],
              $_POST['prix'],
              $_SESSION['userID']
          );
          $userC->modifierPromotion($user,$id);
          header('Location:promotions.php');
      }
      else
          $error = "Missing information";
  }

?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from htmlstream.com/front-dashboard/users.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 Nov 2020 01:56:46 GMT -->

<head>
  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title -->
  <title>Users | Front - Admin &amp; Dashboard Template</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="favicon.ico">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&amp;display=swap" rel="stylesheet">

  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="assets/css/vendor.min.css">
  <link rel="stylesheet" href="assets/vendor/icon-set/style.css">



  <!-- CSS Front Template -->
  <link rel="stylesheet" href="assets/css/theme.minc619.css?v=1.0">
  <link href="css/zoom.css" rel="stylesheet" media="all">
<!-- SWEETALERT -->
<link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@3/dark.css" rel="stylesheet">
<script src="//cdn.jsdelivr.net/npm/sweetalert2@9/dist/sweetalert2.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>

<body class="   footer-offset">

  <!-- Pour acceuillir navbar.php -->
  <?php include_once('navbar.php'); ?>



  <!-- ========== HEADER ========== -->





  <!-- ========== END HEADER ========== -->

  <!-- ========== MAIN CONTENT ========== -->
  <!-- Navbar Vertical -->



  <!-- End Navbar Vertical -->

  <main id="content" role="main" class="main">
    <!-- Content -->
    <div class="content container-fluid">
      <!-- Page Header -->
      <!-- End Row -->
    </div>
    <!-- End Page Header -->







                      </form>
                    </div>
                  </div>
                  <!-- End Card -->
                </div>
              </div>
              <!-- End Unfold -->
            </div>
          </div>
        </div>
        <!-- End Row -->
      </div>
      <!-- End Header -->

      <!-- Table -->

      <center>
        <h1>Les Promotions</h1>
      </center>


      <div class="row">
        <div class="col-3">
          <button data-toggle="modal" data-target="#ModalAjout" style="display: inline-block;   font-size: 15px; color: #fff; background: #4b7cf3; border-radius: 5px">
            <i class="fe fe-plus-square-o "></i>Ajouter une nouvelle promotion
          </button>

        </div>
      </div>
      <div class="table-responsive table--no-card m-b-30">
        <table role="table" class="table table-borderless table-data3">
          <thead role="rowgroup" style="    background-color: #EFEFEF;">
            <tr>
              <th>Localisation</th>
              <th>image</th>
              <th>Description</th>
              <th>dateD</th>
              <th>dateF</th>
              <th>prix actuel</th>
              <th>prix</th>
              <th>
                <center>Actions</center>
              </th>
            </tr>
          </thead>
          <tbody id="myTable">
            <?php foreach ($listePromotion as $row) { ?>

              <td>
                <h1><?PHP echo $row['localisation']; ?> <h1>
              </td>
              <link href="assets/css/zoom.css" rel="stylesheet" media="all">
              <td role="cell"><img id="<?php echo $row['id']; ?>" style="height:70px  ;width:110px ;" onClick="Preview_clic(this.id)" src="../image/<?php echo $row['image']; ?>" /></td>

              <td>
                <h1><?PHP $l = $UtilisateurC->recupererUtilisateur((int) $row['iduser']);
                  foreach ($l as $row2) {
                    echo "Responsable du groupe :".$row2['nom'];
                  }
                ?> <h1>
              </td>
              <td>
                <h1><?PHP echo $row['dateD']; ?> <h1>
              </td>
              <td>
                <h1><?PHP echo $row['dateF']; ?> <h1>

            </td>
            <td>           <del> <h1><?PHP echo $row['prixact']; ?>DT <h1> </del>
            <td>
                <h1><?PHP echo $row['prix']; ?>DT <h1>
            <td>



                <div>
                  <a class="btn btn-success" href="modifierPromotion.php<?php echo "?id=".$row['id'] ?>">
                    <i class="tio-edit"></i> modifer</a>
                  <a class="btn btn-danger" href="supprimerPromotion.php<?php echo "?id=".$row['id'] ?>">
                    <i class="tio-edit"></i> supprimer </a>


                </div>
              </td>
              </tr>

            <?php } ?>
          </tbody>
        </table>
        <div style="text-align:right"> <a class="btn btn-info" href="statestique.php<?php echo "?id=".$row['id'] ?>">
                    <i class="tio-info"></i> <h2> Statistiques </h2> </a> </div>
                    <br>
                    <br>
      </div>


      <button data-toggle="modal" data-target="#UpdateModal" hidden id="btnModalModif">Click</button>

      <!-- Modal Ajout -->

      <div class="modal" id="ModalAjout" tabindex="-1" role="dialog" aria-labelledby="ModalAjoutLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">

              Ajouter une nouvelle promotion
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="text-danger fe fe-x"></i></button>
              <h4 class="modal-title" id="ModalAjoutLabel"></h4>
            </div>
            <form action="" method="POST" >
              <div class="modal-body">
                <form>
                  <div class="container">
                    <div class="row">
                      <div class="col-12">
                        <center>Localisation</center>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <input type="text" name="localisation" id="localisation" class="form-control" >
                      </div>
                    </div>
                  </div>
                  <br>
                  <div class="container">
                    <div class="row">
                      <div class="col-12">
                        <center>image</center>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <input type="file" class="form-control" name="image">
                      </div>
                    </div>
                  </div>
                  <br>
                  <div class="container">
                    <div class="row">
                      <div class="col-12">
                        <center>Description</center>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <input type="text" class="form-control" id="Description" name="description">

                      </div>
                    </div>
                  </div>
                  <br>
                  <div class="container">
                    <div class="row">
                      <div class="col-12">
                        <center>DateD</center>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <input type="date" class="form-control" id="dateD" name="dateD" >

                      </div>
                    </div>
                  </div>
                  <br>
                  <div class="container">
                    <div class="row">
                      <div class="col-12">
                        <center>DateF</center>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <input type="date" class="form-control" id="dateF" name="dateF" >
                      </div>
                    </div>
                  </div>
                  <br>
                  <div class="container">
                    <div class="row">
                      <div class="col-12">
                        <center>Prix actuel</center>
                      </div>
                    </div>

                      <table >
                        <tr>
                          <td width=66%>
                         <input type="text"value=""  class="form-control" id="prixact" name="prixact" > </td>
                         <td>
                        <input type="text" value="DT" disabled > </td>
                        </tr>
                     </table>
                  </div>
                  <br>
                  <div class="container">
                    <div class="row">
                      <div class="col-12">
                        <center>Prix</center>
                      </div>
                    </div>

                      <table >
                        <tr>
                          <td width=66%>
                         <input type="text"value=""  class="form-control" id="prix" name="prix" > </td>
                         <td>
                        <input type="text" value="DT" disabled > </td>
                        </tr>
                     </table>
                  </div>
                  <br>
                  <br>
                  <div class="container">
                    <div class="row">
                      <div class="col-12">
                        <center>


                          <button class="btn  " style="background-color: #424f66 ;color: #FFFFFF" type="submit" name="ajouter" name="submit" id="submit" value="ajouter" style="background-color: #424f66 ;color: #FFFFFF"> Ajouter

                          </button>

                        </center>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
          </div>
        </div>
      </div>

      <!-- fin Modal-->
     <!-------------------------------------------DEBUT Modal ZOOOM IAMGE------------------------------------->

<div class="modal-img"  id="myModal" tabindex="-1" role="dialog" aria-labelledby=" id="myModal""
aria-hidden="true">

<!-- Modal Content (The Image) -->
<img class="modal-content-img" id="img01">


</div>
<!-------------------------------------------FIN Modal ZOOOM IAMGE----------------------------------------->


      <script src="assets/js/zoom.js"></script>





      <!-- End Table -->
      <h2> Cliquer sur [ ] pour gérer le map </h2>
      <iframe src="https://www.google.com/maps/d/embed?mid=1Nxv4oKX9ncrs7atKUui0BUOR9miT6y9m" width="1257" height="480"></iframe>


      <!-- End Tab Content -->
    </div>
    <!-- End Body -->
    </div>
    </div>
    </div>
    <!-- End Edit user Modal -->
    <!-- ========== END SECONDARY CONTENTS ========== -->


    <!-- JS Implementing Plugins -->
    <script src="assets/js/vendor.min.js"></script>



    <!-- JS Front -->
    <script src="assets/js/theme.min.js"></script>

    <!-- JS Plugins Init. -->
    <script>
      $(document).on('ready', function() {
        // ONLY DEV

        if (window.localStorage.getItem('hs-builder-popover') === null) {
          $('#builderPopover').popover('show');

          $(document).on('click', '#closeBuilderPopover', function() {
            window.localStorage.setItem('hs-builder-popover', true);
            $('#builderPopover').popover('dispose');
          });
        } else {
          $('#builderPopover').on('show.bs.popover', function() {
            return false
          });
        }

        // END ONLY DEV

        $('.js-navbar-vertical-aside-toggle-invoker').click(function() {
          $('.js-navbar-vertical-aside-toggle-invoker i').tooltip('hide');
        });


        // initialization of mega menu
        var megaMenu = new HSMegaMenu($('.js-mega-menu'), {
          desktop: {
            position: 'left'
          }
        }).init();


        // initialization of navbar vertical navigation
        var sidebar = $('.js-navbar-vertical-aside').hsSideNav();

        // initialization of tooltip in navbar vertical menu
        $('.js-nav-tooltip-link').tooltip({
          boundary: 'window'
        })

        $(".js-nav-tooltip-link").on("show.bs.tooltip", function(e) {
          if (!$("body").hasClass("navbar-vertical-aside-mini-mode")) {
            return false;
          }
        });

        // initialization of unfold
        $('.js-hs-unfold-invoker').each(function() {
          var unfold = new HSUnfold($(this)).init();
        });

        // initialization of form search
        $('.js-form-search').each(function() {
          new HSFormSearch($(this)).init()
        });

        // initialization of Show Password
        $('.js-toggle-password').each(function() {
          new HSTogglePassword(this).init()
        });

        // initialization of file attach
        $('.js-file-attach').each(function() {
          var customFile = new HSFileAttach($(this)).init();
        });

        // initialization of tabs
        $('.js-tabs-to-dropdown').each(function() {
          var transformTabsToBtn = new HSTransformTabsToBtn($(this)).init();
        });

        // initialization of step form
        $('.js-step-form').each(function() {
          var stepForm = new HSStepForm($(this), {
            finish: function() {
              $("#addUserStepFormProgress").hide();
              $("#addUserStepFormContent").hide();
              $("#successMessageContent").show();
            }
          }).init();
        });

        // initialization of masked input
        $('.js-masked-input').each(function() {
          var mask = $.HSCore.components.HSMask.init($(this));
        });

        // initialization of select2
        $('.js-select2-custom').each(function() {
          var select2 = $.HSCore.components.HSSelect2.init($(this));
        });

        // initialization of counters
        $('.js-counter').each(function() {
          var counter = new HSCounter($(this)).init();
        });

        // initialization of datatables
        var datatable = $.HSCore.components.HSDatatables.init($('#datatable'), {
          dom: 'Bfrtip',
          buttons: [{
              extend: 'copy',
              className: 'd-none'
            },
            {
              extend: 'excel',
              className: 'd-none'
            },
            {
              extend: 'csv',
              className: 'd-none'
            },
            {
              extend: 'pdf',
              className: 'd-none'
            },
            {
              extend: 'print',
              className: 'd-none'
            },
          ],
          select: {
            style: 'multi',
            selector: 'td:first-child input[type="checkbox"]',
            classMap: {
              checkAll: '#datatableCheckAll',
              counter: '#datatableCounter',
              counterInfo: '#datatableCounterInfo'
            }
          },
          language: {
            zeroRecords: '<div class="text-center p-4">' +
              '<img class="mb-3" src="./assets/svg/illustrations/sorry.svg" alt="Image Description" style="width: 7rem;">' +
              '<p class="mb-0">No data to show</p>' +
              '</div>'
          }
        });

        $('#export-copy').click(function() {
          datatable.button('.buttons-copy').trigger()
        });

        $('#export-excel').click(function() {
          datatable.button('.buttons-excel').trigger()
        });

        $('#export-csv').click(function() {
          datatable.button('.buttons-csv').trigger()
        });

        $('#export-pdf').click(function() {
          datatable.button('.buttons-pdf').trigger()
        });

        $('#export-print').click(function() {
          datatable.button('.buttons-print').trigger()
        });

        $('.js-datatable-filter').on('change', function() {
          var $this = $(this),
            elVal = $this.val(),
            targetColumnIndex = $this.data('target-column-index');

          datatable.column(targetColumnIndex).search(elVal).draw();
        });

        $('#datatableSearch').on('mouseup', function(e) {
          var $input = $(this),
            oldValue = $input.val();

          if (oldValue == "") return;

          setTimeout(function() {
            var newValue = $input.val();

            if (newValue == "") {
              // Gotcha
              datatable.search('').draw();
            }
          }, 1);
        });

        // initialization of quick view popover
        $('#editUserPopover').popover('show');

        $(document).on('click', '#closeEditUserPopover', function() {
          $('#editUserPopover').popover('dispose');
        });

        $('#editUserModal').on('show.bs.modal', function() {
          $('#editUserPopover').popover('dispose');
        });
      });
    </script>

    <!-- IE Support -->
    <script>
      if (/MSIE \d|Trident.*rv:/.test(navigator.userAgent)) document.write('<script src="assets/vendor/babel-polyfill/polyfill.min.js"><\/script>');
    </script>
</body>

<!-- Mirrored from htmlstream.com/front-dashboard/users.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 Nov 2020 01:57:52 GMT -->

</html>