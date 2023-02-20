<?php error_reporting (E_ALL ^ E_NOTICE); ?>
<?php
include_once "../Model/forum.php";
include_once "../Controller/forumC.php";
session_start();
$error = "";
$forumC = null;
$forumC = new forumC();
if ($_POST["action"] == "add") {
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
    } else
      $error = "Missing information";
  }
}
if ($_POST["action"] == "delete") {
  if (
    isset($_POST["ID"])
  ) {
    if (
      !empty($_POST["ID"])
    ) {

      $forumC->supprimerThread($_POST["ID"]);
    } else
      $error = "Missing information";
  }
}
if ($_POST["action"] == "update") {
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
      $ID = $_POST["ID"];
      $forumC->updateThread($thread, $ID);
    } else
      $error = "Missing information";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Title -->
  <title>Alternative Dashboard | Front - Admin &amp; Dashboard Template</title>
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

<body class="   footer-offset">

  <!-- Pour acceuillir navbar.php -->
  <?php include_once('navbar.php'); ?>
  <!-- Search Form -->
  <div id="searchDropdown" class="hs-unfold-content dropdown-unfold search-fullwidth d-md-none">
    <form class="input-group input-group-merge input-group-borderless">
      <div class="input-group-prepend">
        <div class="input-group-text">
          <i class="tio-search"></i>
        </div>
      </div>

      <input class="form-control rounded-0" type="search" placeholder="Search in front" aria-label="Search in front">

      <div class="input-group-append">
        <div class="input-group-text">
          <div class="hs-unfold">
            <a class="js-hs-unfold-invoker" href="javascript:;" data-hs-unfold-options='{
                   "target": "#searchDropdown",
                   "type": "css-animation",
                   "animationIn": "fadeIn",
                   "hasOverlay": "rgba(46, 52, 81, 0.1)",
                   "closeBreakpoint": "md"
                 }'>
              <i class="tio-clear tio-lg"></i>
            </a>
          </div>
        </div>
      </div>
    </form>
  </div>
  <!-- End Search Form -->


  <main id="content" role="main" class="main">
    <!-- Content -->
    <div class="bg-dark">
      <div class="content container-fluid" style="height: 25rem;">
        <!-- Page Header -->
        <div class="page-header page-header-light">
          <div class="row align-items-center">
            <div class="col">
              <h1 class="page-header-title">Management Forum</h1>
            </div>

            <div class="col-auto">
              <!-- Daterangepicker -->
              <button id="js-daterangepicker-predefined" class="btn btn-sm btn-ghost-light dropdown-toggle">
                <i class="tio-date-range"></i>
                <span class="js-daterangepicker-predefined-preview ml-1"></span>
              </button>
              <!-- End Daterangepicker -->
            </div>
          </div>
          <!-- End Row -->

          <!-- Nav Scroller -->
          <div class="js-nav-scroller hs-nav-scroller-horizontal">
            <span class="hs-nav-scroller-arrow-prev hs-nav-scroller-arrow-dark-prev" style="display: none;">
              <a class="hs-nav-scroller-arrow-link" href="javascript:;">
                <i class="tio-chevron-left"></i>
              </a>
            </span>

            <span class="hs-nav-scroller-arrow-next hs-nav-scroller-arrow-dark-next" style="display: none;">
              <a class="hs-nav-scroller-arrow-link" href="javascript:;">
                <i class="tio-chevron-right"></i>
              </a>
            </span>


            <!-- End Nav -->
          </div>
          <!-- End Nav Scroller -->
        </div>
        <!-- End Page Header -->
      </div>
    </div>
    <!-- End Content -->

    <!-- Content -->
    <div class="content container-fluid" style="margin-top: -17rem;">
      <!-- Card -->

      <!-- Card -->
      <div class="card">
        <!-- Header -->
        <div class="card-header">
          <h4 class="card-header-title">Management Forum
          </h4>
              <a href="comments back.php">Management Commentaires</a>
              <a href="statistiques forum.php">Statistiques forum</a>
        </div>
        <!-- End Header -->

        <div class="row">
          <div class="col-lg-4">
            <!-- Body -->
            <div class="card-body bg-light h-100">
            <form name="ajout" action="" method="POST">
              <br>
              <p>Ajouter Thread</p>
              <div class="form-group">
                <label class="input-label" for="exampleFormControlInput1">User</label>
                <input type="text" id="user" name="user" class="form-control">
              </div>
              <div class="form-group">
                <label class="input-label" for="exampleFormControlInput1">Titre</label>
                <input type="text" id="title" name="title" class="form-control">
              </div>
              <div class="form-group">
                <label class="input-label" for="exampleFormControlTextarea1">Contenu</label>
                <textarea id="contents" name="contents" class="form-control" rows="4"></textarea>
              </div>
              <input type="hidden" name="action" value="add">
              <button type="submit" class="btn btn-primary">Primary</button>
            </form>
                </div>
            <!-- End Body -->
          </div>
          <div class="col-lg-4">
            <!-- Body -->

            <form name="modifier" action="" method="POST">
              <br>
              <p>Modifier thread</p>
              <div class="form-group">
                <label class="input-label" for="exampleFormControlInput1">ID du thread</label>
                <input type="text" name="ID" id="ID"  class="form-control">
              </div>
              <div class="form-group">
                <label class="input-label" for="exampleFormControlInput1">User</label>
                <input type="text" name="user" id="user" class="form-control">
              </div>
              <div class="form-group">
                <label class="input-label" for="exampleFormControlInput1">Titre du thread</label>
                <input type="text" name="title" id="title"   class="form-control">
              </div>
              <input type="hidden" name="action" value="update">
              <div class="form-group">
                <label class="input-label" for="exampleFormControlTextarea1">Contenu du thread</label>
                <textarea id="exampleFormControlTextarea1" name="contents" id="contents" class="form-control" rows="4"></textarea>
              </div>
              <button  type="submit" type="button" class="btn btn-primary">Primary</button>
            </form>

            <!-- End Body -->
          </div>
          <div class="col-lg-4">
            <!-- Body -->

            <div class="card-body bg-light h-100">

              <form name="supression" action="" method="POST">
                <br>
                <p>Supprimer thread</p>
                <div class="form-group">
                  <label class="input-label" for="exampleFormControlInput1">ID Thread</label>
                  <input type="text" class="form-control" name="ID" id="ID" placeholder="ID du thread a supprimer">
                </div>
                <input type="hidden" name="action" value="delete">
                <button type="submit" name="form3" class="btn btn-primary">Primary</button>
              </form>

            </div>
            <!-- End Body -->
          </div>

        </div>
        <!-- End Row -->

      </div>
      <!-- End Card -->
    </div>

    <div class="footer">
      <div class="row justify-content-between align-items-center">
        <div class="col">
          <p class="font-size-sm mb-0">&copy; Front. <span class="d-none d-sm-inline-block">2020 Htmlstream.</span></p>
        </div>
        <div class="col-auto">
          <div class="d-flex justify-content-end">
            <!-- List Dot -->
            <ul class="list-inline list-separator">
              <li class="list-inline-item">
                <a class="list-separator-link" href="#">FAQ</a>
              </li>

              <li class="list-inline-item">
                <a class="list-separator-link" href="#">License</a>
              </li>

              <li class="list-inline-item">
                <!-- Keyboard Shortcuts Toggle -->
                <div class="hs-unfold">
                  <a class="js-hs-unfold-invoker btn btn-icon btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options='{
                              "target": "#keyboardShortcutsSidebar",
                              "type": "css-animation",
                              "animationIn": "fadeInRight",
                              "animationOut": "fadeOutRight",
                              "hasOverlay": true,
                              "smartPositionOff": true
                             }'>
                    <i class="tio-command-key"></i>
                  </a>
                </div>
                <!-- End Keyboard Shortcuts Toggle -->
              </li>
            </ul>
            <!-- End List Dot -->
          </div>
        </div>
      </div>
    </div>

  </main>
  <!-- ========== END MAIN CONTENT ========== -->


  <!-- JS Implementing Plugins -->
  <script src="assets/js/vendor.min.js"></script>
  <script src="assets/vendor/chart.js/dist/Chart.min.js"></script>



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

      // initialization of Nav Scroller
      $('.js-nav-scroller').each(function() {
        new HsNavScroller($(this)).init()
      });

      // initialization of chartjs
      $('.js-chart').each(function() {
        $.HSCore.components.HSChartJS.init($(this));
      });

      // initialization of chartjs
      var updatingChartDatasets = [
        [
          [18, 51, 60, 38, 88, 50, 40, 52, 88, 80, 60, 70],
          [27, 38, 60, 77, 40, 50, 49, 29, 42, 27, 42, 50]
        ],
        [
          [77, 40, 50, 49, 27, 38, 60, 42, 50, 29, 42, 27],
          [60, 38, 18, 51, 88, 50, 40, 52, 60, 70, 88, 80]
        ]
      ]

      // initialization of chartjs
      var updatingChart = $.HSCore.components.HSChartJS.init($('#updatingData'), {
        data: {
          datasets: [{
              data: updatingChartDatasets[0][0]
            },
            {
              data: updatingChartDatasets[0][1]
            }
          ]
        }
      });

      // Call when tab is clicked
      $('[data-toggle="chart"]').click(function(e) {
        let keyDataset = $(e.currentTarget).attr('data-datasets')

        // Update datasets for chart
        updatingChart.data.datasets.forEach(function(dataset, key) {
          dataset.data = updatingChartDatasets[keyDataset][key];
        });
        updatingChart.update();
      })

      // initialization of chartjs
      $.HSCore.components.HSChartJS.init($('.js-chartjs-doughnut-half'), {
        options: {
          tooltips: {
            postfix: "%"
          },
          cutoutPercentage: 85,
          rotation: 1 * Math.PI,
          circumference: 1 * Math.PI
        }
      });

      // initialization of daterangepicker
      $('.js-daterangepicker').daterangepicker();

      $('.js-daterangepicker-times').daterangepicker({
        timePicker: true,
        startDate: moment().startOf('hour'),
        endDate: moment().startOf('hour').add(32, 'hour'),
        locale: {
          format: 'M/DD hh:mm A'
        }
      });

      var start = moment();
      var end = moment();

      function cb(start, end) {
        $('#js-daterangepicker-predefined .js-daterangepicker-predefined-preview').html(start.format('MMM D') + ' - ' + end.format('MMM D, YYYY'));
      }

      $('#js-daterangepicker-predefined').daterangepicker({
        startDate: start,
        endDate: end,
        ranges: {
          'Today': [moment(), moment()],
          'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days': [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month': [moment().startOf('month'), moment().endOf('month')],
          'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        }
      }, cb);

      cb(start, end);

      // initialization of jvectormap
      var markers = [{
          "latLng": [38, -97],
          "name": "United States",
          "active": 200,
          "new": 40,
          "flag": "./assets/vendor/flag-icon-css/flags/1x1/us.svg",
          "code": "US"
        },
        {
          "latLng": [20, 77],
          "name": "India",
          "active": 300,
          "new": 100,
          "flag": "./assets/vendor/flag-icon-css/flags/1x1/in.svg",
          "code": "IN"
        },
        {
          "latLng": [60, -105],
          "name": "Canada",
          "active": 400,
          "new": 500,
          "flag": "./assets/vendor/flag-icon-css/flags/1x1/ca.svg",
          "code": "CA"
        },
        {
          "latLng": [51, 9],
          "name": "Germany",
          "active": 120,
          "new": 600,
          "flag": "./assets/vendor/flag-icon-css/flags/1x1/de.svg",
          "code": "DE"
        },
        {
          "latLng": [54, -2],
          "name": "United Kingdom",
          "active": 140,
          "new": 100,
          "flag": "./assets/vendor/flag-icon-css/flags/1x1/gb.svg",
          "code": "GB"
        },
        {
          "latLng": [1.3, 103.8],
          "name": "Singapore",
          "active": 56,
          "new": 0,
          "flag": "./assets/vendor/flag-icon-css/flags/1x1/sg.svg",
          "code": "SG"
        },
        {
          "latLng": [9.0, 8.6],
          "name": "Nigeria",
          "active": 34,
          "new": 2,
          "flag": "./assets/vendor/flag-icon-css/flags/1x1/ng.svg",
          "code": "NG"
        },
        {
          "latLng": [61.5, 105.3],
          "name": "Russia",
          "active": 135,
          "new": 46,
          "flag": "./assets/vendor/flag-icon-css/flags/1x1/ru.svg",
          "code": "RU"
        },
        {
          "latLng": [35.8, 104.1],
          "name": "China",
          "active": 325,
          "new": 75,
          "flag": "./assets/vendor/flag-icon-css/flags/1x1/cn.svg",
          "code": "CN"
        },
        {
          "latLng": [-10, -51],
          "name": "Brazil",
          "active": 242,
          "new": 17,
          "flag": "./assets/vendor/flag-icon-css/flags/1x1/br.svg",
          "code": "BR"
        }
      ]

      $('.js-jvectormap').each(function() {
        var jVectorMap = $.HSCore.components.HSJVectorMap.init($(this), {
          markers: markers,
          onRegionTipShow: function(e, el, code) {
            let marker = markers.find(function(marker) {
              return marker.code == code
            });

            if (marker) {
              el.html(
                '<span class="d-flex align-items-center mb-2">' +
                '<img class="avatar avatar-xss avatar-circle mr-2" src="' + marker['flag'] + '" alt="Flag">' +
                '<span class="h5 mb-0">' + marker['name'] + '</span>' +
                '</span>' +
                '<dl class="row" style="max-width: 10rem;">' +
                '<dt class="col-sm-6 mb-0">Active:</dt>' +
                '<dd class="col-sm-6 text-sm-right mb-0">' + marker['active'] + '</dd>' +
                '<dt class="col-sm-6 mb-0">New:</dt>' +
                '<dd class="col-sm-6 text-sm-right mb-0">' + marker['new'] + '</dd>' +
                '</dl>'
              );
            } else {
              return false;
            }
          },
          onMarkerTipShow: function(e, el, code) {
            el.html(
              '<span class="d-flex align-items-center mb-2">' +
              '<img class="avatar avatar-xss avatar-circle mr-2" src="' + markers[code]['flag'] + '" alt="Flag">' +
              '<span class="h5 mb-0">' + markers[code]['name'] + '</span>' +
              '</span>' +
              '<dl class="row" style="max-width: 10rem;">' +
              '<dt class="col-sm-6 mb-0">Active:</dt>' +
              '<dd class="col-sm-6 text-sm-right mb-0">' + markers[code]['active'] + '</dd>' +
              '<dt class="col-sm-6 mb-0">New:</dt>' +
              '<dd class="col-sm-6 text-sm-right mb-0">' + markers[code]['new'] + '</dd>' +
              '</dl>'
            );
          }
        });
      });
    });
  </script>

  <!-- IE Support -->
  <script>
    if (/MSIE \d|Trident.*rv:/.test(navigator.userAgent)) document.write('<script src="assets/vendor/babel-polyfill/polyfill.min.js"><\/script>');
  </script>
</body>

<!-- Mirrored from htmlstream.com/front-dashboard/dashboard-alternative.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 Nov 2020 01:56:46 GMT -->

</html>