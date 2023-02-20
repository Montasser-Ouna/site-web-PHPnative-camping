<?php
include "../Model/Utilisateur.php";
include "../controller/UtilisateurC.php";
session_start();
$error = "";
$idutilisateur=$_GET['idutilisateur'];
    // create user
    $user = null;
    $userC = new UtilisateurC();
    $user1= $userC->recupererUtilisateur($idutilisateur);
    // create an instance of the controller Mohamed Ali mohamed.ali@esprit.tn med med
    	$_POST["pdp"] = "Capture4.PNG";

   if (
        isset($_POST["nom"]) &&
        isset($_POST["prenom"]) &&
        isset($_POST["email"])&&
        isset($_POST["datedenais"])&&
        isset($_POST["motdepasse"])&&
        isset($_POST["cmotdepasse"])&&
        isset($_POST["ville"])&&
        isset($_POST["tel"])&&
        isset($_POST["choix"])
    ) {
        if (
            !empty($_POST["nom"]) &&
            !empty($_POST["prenom"]) &&
            !empty($_POST["email"])&&
            !empty($_POST["datedenais"]) &&
            !empty($_POST["motdepasse"]) &&
            !empty($_POST["cmotdepasse"]) &&
            !empty($_POST["ville"])  &&
            !empty($_POST["tel"]) &&
            !empty($_POST["choix"])
        ) {
            $user = new Utilisateur(
               $_POST["nom"],
                $_POST["prenom"],
                $_POST["email"], $_POST["datedenais"],$_POST["motdepasse"],$_POST["cmotdepasse"],$_POST["ville"], $_POST["tel"],$_POST["choix"],$_POST["pdp"]
            );
             $user->setIdutilisateur($idutilisateur);
            $userC->modifierUtilisateur($user);
            header('Location:users.php');
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
  </head>
  <tbody>
 <?php include_once('navbar.php'); ?>
 <div class="page-header">
          <div class="row align-items-end">
            <div class="col-sm mb-2 mb-sm-0">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-no-gutter">
                  <li class="breadcrumb-item"><a class="breadcrumb-link" href="javascript:;">Pages</a></li>
                  <li class="breadcrumb-item"><a class="breadcrumb-link" href="javascript:;">Users</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Overview</li>
                </ol>
              </nav>

              <h1 class="page-title">Users</h1>
            </div>

            <div class="col-sm-auto">
              <a class="btn btn-primary" href="users-add-user.html">
                <i class="tio-user-add mr-1"></i> Add user
              </a>
            </div>
          </div>
          <!-- End Row -->
        </div>
 <?php
foreach ($user1 as $row)
{
?>

<div class="tab-content" id="editUserModalTabContent">
              <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <form action="" method="POST">


                  <!-- Form Group -->
                  <div class="row form-group">
                    <label for="editFirstNameModalLabel" class="col-sm-3 col-form-label input-label"></label>


                     <div class="col-sm-9">
                      First name <i class="tio-help-outlined text-body ml-1" data-toggle="tooltip" data-placement="top" title="Displayed on public forums, such as Front."></i>
                      <div class="js-form-message input-group input-group-sm-down-break">

                        <input type="text" class="form-control" name="nom" id="editFirstNameModalLabel" placeholder="Your first name" aria-label="Your first name" value="<?php echo $row['nom'];?>">
                      </div>
                    </div>
                  </div>
                      <div class="row form-group">
                        <label for="editLastNameModalLabel" class="col-sm-3 col-form-label input-label"></label>

                        <div class="col-sm-9">
                        Last name <i class="tio-help-outlined text-body ml-1" data-toggle="tooltip" data-placement="top" title="Displayed on public forums, such as Front."></i>
                        <input type="text" class="form-control" name="prenom" id="editLastNameModalLabel" placeholder="Your last name" aria-label="Your last name" value=" <?php echo $row['prenom'];?>">
                      </div>

                    </div>
                  <!-- End Form Group -->

                  <!-- Form Group -->
                  <div class="row form-group">
                    <label for="editEmailModalLabel" class="col-sm-3 col-form-label input-label">Email</label>

                    <div class="col-sm-9">
                      <div class="js-form-message">
                        <input type="email" class="form-control" name="email" id="editEmailModalLabel" placeholder="Email" aria-label="Email" value="<?php echo $row['email'];?>">
                      </div>
                    </div>
                  </div>
                  <!-- End Form Group -->
         <!-- Form Group -->
                  <div class="row form-group">
                    <label for="editDepartmentModalLabel" class="col-sm-3 col-form-label input-label">Department</label>

                    <div class="col-sm-9">
                      <input type="date" class="form-control" name="datedenais" id="editDepartmentModalLabel" placeholder="Your department" aria-label="Your department" value="<?php echo $row['datedenais'];?>">
                    </div>
                  </div>
                  <!-- End Form Group -->


                  <!-- Form Group -->
                  <div class="row form-group">
                    <label for="editOrganizationModalLabel" class="col-sm-3 col-form-label input-label">Mot de passe</label>

                    <div class="col-sm-9">
                      <div class="js-form-message">
                        <input type="password" class="form-control" name="motdepasse" id="editOrganizationModalLabel" placeholder="Your organization" aria-label="Your organization" value="<?php echo $row['motdepasse'];?>">
                      </div>
                    </div>
                  </div>
                  <div class="row form-group">
                    <label for="editOrganizationModalLabel" class="col-sm-3 col-form-label input-label">confirmer Mot de passe</label>

                    <div class="col-sm-9">
                      <div class="js-form-message">
                        <input type="password" class="form-control" name="cmotdepasse" id="editOrganizationModalLabel" placeholder="Your organization" aria-label="Your organization" value="<?php echo $row['cmotdepasse'];?>">
                      </div>
                    </div>
                  </div>
                  <!-- End Form Group -->

         <!-- Form Group -->
                    <div class="row form-group">
                      <label for="editPhoneLabel" class="col-sm-3 col-form-label input-label">Phone <span class="input-label-secondary">(Optional)</span></label>

                      <div class="col-sm-9">
                        <div class="input-group input-group-sm-down-break align-items-center">
                          <input type="text" class="js-masked-input form-control" name="tel" id="editPhoneLabel" placeholder="216+"value="<?php echo $row['tel'];?>"
                                 >

                          <div class="input-group-append">
                            <!-- Select -->
                            <div class="select2-custom">
                              <select class="js-select2-custom" name="ville"
                                    data-hs-select2-options='{
                                      "minimumResultsForSearch": "Infinity",
                                      "dropdownAutoWidth": true,
                                      "width": "6rem"
                                    }'>
                                <option value="<?php echo $row['ville'];?>" selected></option>
                                  <option value="Ariana">Ariana</option>
                                                    <option value="Béja">Béja</option>
                                                    <option value="Ben Arous">Ben Arous</option>
                                                    <option value="Bizerte">Bizerte</option>
                                                    <option value="Gabes">Gabes</option>
                                                    <option value="Gafsa">Gafsa</option>
                                                    <option value="Jendouba">Jendouba</option>
                                                    <option value="Kairouan">Kairouan</option>
                                                    <option value="Kasserine">Kasserine</option>
                                                    <option value="Kebili">Kebili</option>
                                                    <option value="La Manouba">La Manouba</option>
                                                    <option value="Kef">Kef</option>
                                                    <option value="Mahdia">Mahdia</option>
                                                    <option value="Médenine">Médenine</option>
                                                    <option value="Monastir">Monastir</option>
                                                    <option value="Nabeul">Nabeul</option>
                                                    <option value="sfax">sfax</option>
                                                    <option value="Sidi Bouzid">Sidi Bouzid</option>
                                                    <option value="Siliana">Siliana</option>
                                                    <option value="Sousse">Sousse</option>
                                                    <option value="Tataouine">Tataouine</option>
                                                    <option value="Tozeur">Tozeur</option>
                                                    <option value="Tunis">Tunis</option>
                                                    <option value="Zaghouan">Zaghouan</option>
                              </select>
                              <!-- End Select -->
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End Form Group -->

                  <!-- Form Group -->
                  <div class="row form-group">
                    <label class="col-sm-3 col-form-label input-label">Accesstype</label>

                    <div class="col-sm-9">
                      <div class="js-form-message input-group input-group-sm-down-break">
                        <!-- Custom Radio -->
                        <div class="form-control">
                          <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" name="choix" value="respensable du club" id="1">
                            <label class="custom-control-label" for="1">respensable d'un club de camping</label>
                          </div>
                        </div>
                        <!-- End Custom Radio -->

                        <!-- Custom Radio -->
                        <div class="form-control">
                          <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" name="choix" value="User" id="2">
                            <label class="custom-control-label" for="2">User</label>
                          </div>
                        </div>
                        <!-- End Custom Radio -->
                      </div>
                    </div>
                  </div>
                  <!-- End Form Group -->

                  <div class="d-flex justify-content-end">
                    <button type="button" class="btn btn-white mr-2" data-dismiss="modal" aria-label="Close">Cancel</button>
                    <button type="submit" class="btn btn-primary" >Save changes</button>
                  </div>
                     </form>


              </div>
            </div>
              <?php }?>
              <script src="assets/js/vendor.min.js"></script>



    <!-- JS Front -->
    <script src="assets/js/theme.min.js"></script>

    <!-- JS Plugins Init. -->
    <script>
      $(document).on('ready', function () {
        // ONLY DEV

          if (window.localStorage.getItem('hs-builder-popover') === null) {
            $('#builderPopover').popover('show');

            $(document).on('click', '#closeBuilderPopover' , function() {
              window.localStorage.setItem('hs-builder-popover', true);
              $('#builderPopover').popover('dispose');
            });
          } else {
            $('#builderPopover').on('show.bs.popover', function () {
              return false
            });
          }

        // END ONLY DEV

        $('.js-navbar-vertical-aside-toggle-invoker').click(function () {
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
        $('.js-nav-tooltip-link').tooltip({ boundary: 'window' })

        $(".js-nav-tooltip-link").on("show.bs.tooltip", function(e) {
          if (!$("body").hasClass("navbar-vertical-aside-mini-mode")) {
            return false;
          }
        });

        // initialization of unfold
        $('.js-hs-unfold-invoker').each(function () {
          var unfold = new HSUnfold($(this)).init();
        });

        // initialization of form search
        $('.js-form-search').each(function () {
          new HSFormSearch($(this)).init()
        });

        // initialization of Show Password
        $('.js-toggle-password').each(function () {
          new HSTogglePassword(this).init()
        });

        // initialization of file attach
        $('.js-file-attach').each(function () {
          var customFile = new HSFileAttach($(this)).init();
        });

        // initialization of tabs
        $('.js-tabs-to-dropdown').each(function () {
          var transformTabsToBtn = new HSTransformTabsToBtn($(this)).init();
        });

        // initialization of step form
        $('.js-step-form').each(function () {
          var stepForm = new HSStepForm($(this), {
            finish: function() {
              $("#addUserStepFormProgress").hide();
              $("#addUserStepFormContent").hide();
              $("#successMessageContent").show();
            }
          }).init();
        });

        // initialization of masked input
        $('.js-masked-input').each(function () {
          var mask = $.HSCore.components.HSMask.init($(this));
        });

        // initialization of select2
        $('.js-select2-custom').each(function () {
          var select2 = $.HSCore.components.HSSelect2.init($(this));
        });

        // initialization of counters
        $('.js-counter').each(function() {
          var counter = new HSCounter($(this)).init();
        });

        // initialization of datatables
        var datatable = $.HSCore.components.HSDatatables.init($('#datatable'), {
          dom: 'Bfrtip',
          buttons: [
            {
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

        $('#datatableSearch').on('mouseup', function (e) {
          var $input = $(this),
            oldValue = $input.val();

          if (oldValue == "") return;

          setTimeout(function(){
            var newValue = $input.val();

            if (newValue == ""){
              // Gotcha
              datatable.search('').draw();
            }
          }, 1);
        });

        // initialization of quick view popover
        $('#editUserPopover').popover('show');

        $(document).on('click', '#closeEditUserPopover' , function() {
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
              </tbody>
               </html>