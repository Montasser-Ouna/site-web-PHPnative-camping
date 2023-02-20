<?php

/**
********************************************
addEvent.php
------------
_____________________

Author: Guimdo Lioguy
Date: 28/11/2020
_____________________
-------------------------------------------
;Ajout d'un évènement dans la base de données

;add event to the Database
-------------------------------------------
********************************************
*/

require_once('../controller/eventC.php');

$eventC = new EventC;

if(isset($_POST['eventName'])
  && isset($_POST['eventDate'])
  && isset($_POST['eventPlace'])
  && isset($_POST['eventContent'])
  && isset($_FILES['eventPhoto'])
  && isset($_POST['eventAuthor'])
)
{
  if(!empty($_POST['eventName'])
    && !empty($_POST['eventDate'])
    && !empty($_POST['eventPlace'])
    && !empty($_POST['eventContent'])
    && !empty($_FILES['eventPhoto'])
    && !empty($_POST['eventAuthor'])
  )
  {
    $extFile = ['png', 'jpg', 'jpeg', 'bmp'];
    $test = 0;
    $file = pathinfo($_FILES['eventPhoto']['name']);
    if(isset($file['extension']))
    {
      if(in_array($file['extension'], $extFile) && $_FILES['eventPhoto']['size'] <= 5000000) //5Mo
      $test = 1;
      if($test)
      {
        $localFile = '../views/media/';
        $pathImage = $localFile . strtolower(str_replace(' ', '', $_POST['eventName']) . '.' . $file['extension']);
        move_uploaded_file($_FILES['eventPhoto']['tmp_name'], $pathImage);
      }
      if($test)
      {
        $event = new Event(12,
                        $_POST['eventName'],
                        $_POST['eventDate'],
                        $_POST['eventPlace'],
                        $_POST['eventContent'],
                        $pathImage,
                        $_POST['eventAuthor']

        );
        $eventC->addEvent($event);
        header("Location: showEvents-back.php");
      }
    }
  }
}

session_start();
$id_session = session_id();

/*if($_SESSION['typeAccess']==3)
  $_SESSION['nomClub'] = 'Administrator';*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title -->
  <title>AddEvent | Camping Fever</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="favicon.ico">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&amp;display=swap" rel="stylesheet">

  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="assets/css/vendor.min.css">
  <link rel="stylesheet" href="assets/vendor/icon-set/style.css">

  <!-- CSS Implementing Date Form --to date range picker -->
  <link rel="stylesheet" href="../my-ressources/daterangepicker/daterangepicker.css">

  <!-- CSS Front Template -->
  <link rel="stylesheet" href="assets/css/theme.minc619.css?v=1.0">
</head>

<body class="   footer-offset">

  <!-- Pour acceuillir navbar.php -->
  <?php include_once('navbar.php'); ?>

  <!-- JS Implementing Plugins -->
  <script src="assets/js/vendor.min.js"></script>
  <script src="assets/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="assets/vendor/chart.js.extensions/chartjs-extensions.js"></script>
  <script src="assets/vendor/chartjs-plugin-datalabels/dist/chartjs-plugin-datalabels.min.js"></script>

  <script src="../my-ressources/daterangepicker/moment.min.js"></script>
  <script src="../my-ressources/daterangepicker/daterangepicker.js"></script>
  <script src="../my-ressources/dropzone/dist/min/dropzone.min.js"></script>
  <script src="assets/vendor/hs-count-characters/dist/js/hs-count-characters.js"></script>








  <main id="content" role="main" class="main pointer-event">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Event Management</a></li>
        <li class="breadcrumb-item active" aria-current="page">Add Event</li>
      </ol>
    </nav>

    <!-- Content -->
    <div class="content container-fluid">

      <!-- Page Header -->
      <div class="page-header">

        <div class="row align-items-center">
          <div class="col-sm mb-2 mb-sm-0">
            <h1 class="page-header-title">Event Management</h1>
          </div>

          <div class="col-sm-auto">
            <a class="btn btn-primary" href="showEvents-back.php">
              <i class="tio-event mr-1"></i> Show Events
            </a>
          </div>
        </div>
      </div>
      <!-- End Page Header -->

      <div class="card">
        <div class="card-header">
          <h5 class="card-header-title">Add Event</h5>
          <small class="text-muted">Hello :) <?php echo $_SESSION['nomClub'] ?></small>
        </div>
        <div class="card-body">
          <form action='' method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label class="input-label" for="eventName">Event Name</label>
              <input type="text" name="eventName" id="eventName" class="form-control" placeholder="nomDeL'evenement">
            </div>

            <?php // pour la date ?>
            <!-- Form Group -->
            <div class="form-group">
              <label for="eventDate" class="input-label">Event Date</label>

              <div id="projectDeadlineNewProjectFlatpickr" class="js-flatpickr flatpickr-custom input-group input-group-merge"
                   data-hs-flatpickr-options='{
                    "appendTo": "#projectDeadlineNewProjectFlatpickr",
                    "dateFormat": "Y/m/d",
                    "wrap": true
                  }'>
                <div class="input-group-prepend" data-toggle>
                  <div class="input-group-text">
                    <i class="tio-date-range"></i>
                  </div>
                </div>

                <input type="text" name="eventDate" class="flatpickr-custom-form-control form-control" id="projectDeadlineFlatpickrNewProjectLabel" placeholder="Select dates" data-input value="<?php echo date('Y/m/d'); ?>">
              </div>
            </div>

            <div class="form-group">
              <label class="input-label" for="eventPlace">Event Place</label>
              <div class="input-group-merge">
                <div class="input-group-prepend" data-toggle>
                  <div class="input-group-text">
                    <i class="tio-poi"></i>
                  </div>
                </div>
                <input type="text" name="eventPlace" id="eventPlace" class="form-control" placeholder="LieuDeL'evenement">
              </div>
            </div>

            <div class="form-group">
              <div class="d-flex justify-content-between">
                <label class="input-label" for="eventContent">Event Content</label>

                <span id="countCharacters" class="text-muted"></span>
              </div>

              <textarea id="eventContent" name="eventContent" class="form-control js-count-characters" placeholder="the event content" rows="4" data-hs-count-characters-options='
              {
                "output": "#countCharacters"
              }'></textarea>
            </div>

            <div class="form-group">
              <!-- File Attachment Input -->
              <label class="input-label">Event Photo</label>
              <label class="custom-file-boxed" for="eventPhoto">
                <div class="dz-message custom-file-boxed-label">
                  <img class="avatar avatar-xl avatar-4by3 mb-3" src="assets/svg/illustrations/browse.svg" alt="Image Description">
                  <div id="customFileBoxedEg">
                  </div>
                  <span class="btn btn-sm btn-white">Browse files</span>
                  <small class="d-block text-muted">Maximum file size 5MB</small>
                </div>
                <input id="eventPhoto" name="eventPhoto" type="file" class="js-file-attach custom-file-boxed-input"
                       data-hs-file-attach-options='{
                         "textTarget": "#customFileBoxedEg"
                       }' />
              </label>
              <!-- End File Attachment Input -->
            </div>
            <div class="form-group">
              <label class="input-label" for="eventID">Event Author</label>
              <div class="input-group-merge">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="tio-group-equal"></i>
                  </div>
                </div>
                <input type="text" name="eventAuthor"  id="eventAuthor" class="form-control" value="<?php echo $_SESSION['nomClub']; ?>" readonly>
              </div>
            </div>
            <div class="d-flex justify-content-center">
              <p class="card-text">Add event with this form.</p>
            </div>
            <div class="d-flex justify-content-end">
              <input type="submit" name="submit" value="Submit" class="btn btn-primary">
            </div>
          </form>
        </div>
      </div>


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
                <a class="js-hs-unfold-invoker" href="javascript:;"
                data-hs-unfold-options='{
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
</div>

<!-- Footer -->
<div class="footer">
  <div class="row justify-content-between align-items-center">
    <div class="col">
      <p class="font-size-sm mb-0">&copy; Back. <span class="d-none d-sm-inline-block">2020 Camping Fever.</span></p>
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
              <a class="js-hs-unfold-invoker btn btn-icon btn-ghost-secondary rounded-circle" href="javascript:;"
              data-hs-unfold-options='{
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
<!-- End Footer -->

</main>





<!-- JS Front -->
<script src="assets/js/theme.min.js"></script>
<script src="assets/js/hs.daterangepicker.js"></script>
<script src="assets/js/hs.dropzone.js"></script>

<!-- JS Plugins Init. -->
<script>
  $(document).on('ready', function () {

      // initialization of daterangepicker
      $('.js-daterangepicker').each(function () {
        var d = $.HSCore.components.HSDaterangepicker.init($(this));
      });

      // initialization of dropzone file attach module
      $('.dropzone-custom').each(function () {
        var dropzone = $.HSCore.components.HSDropzone.init('#' + $(this).attr('id'));
      });
      // initialization of Count Characters
      $('.js-count-characters').each(function () {
        new HSCountCharacters($(this)).init()
      });

      // initialization of custom file
      $('.js-file-attach').each(function () {
        var customFile = new HSFileAttach($(this)).init();
      });

      // initialization of flatpickr
      $('.js-flatpickr').each(function () {
        $.HSCore.components.HSFlatpickr.init($(this));
      });

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

        // initialization of select2
        $('.js-select2-custom').each(function () {
          var select2 = $.HSCore.components.HSSelect2.init($(this));
        });

        // initialization of chartjs
        Chart.plugins.unregister(ChartDataLabels);

        $('.js-chart').each(function () {
          $.HSCore.components.HSChartJS.init($(this));
        });

        var updatingChart = $.HSCore.components.HSChartJS.init($('#updatingData'));

        // Call when tab is clicked
        $('[data-toggle="chart-bar"]').click(function(e) {
          let keyDataset = $(e.currentTarget).attr('data-datasets')

          if (keyDataset === 'lastWeek') {
           updatingChart.data.labels = ["Apr 22", "Apr 23", "Apr 24", "Apr 25", "Apr 26", "Apr 27", "Apr 28", "Apr 29", "Apr 30", "Apr 31"];
           updatingChart.data.datasets = [
           {
             "data": [120, 250, 300, 200, 300, 290, 350, 100, 125, 320],
             "backgroundColor": "#377dff",
             "hoverBackgroundColor": "#377dff",
             "borderColor": "#377dff"
           },
           {
             "data": [250, 130, 322, 144, 129, 300, 260, 120, 260, 245, 110],
             "backgroundColor": "#e7eaf3",
             "borderColor": "#e7eaf3"
           }
           ];
           updatingChart.update();
         } else {
           updatingChart.data.labels = ["May 1", "May 2", "May 3", "May 4", "May 5", "May 6", "May 7", "May 8", "May 9", "May 10"];
           updatingChart.data.datasets = [
           {
             "data": [200, 300, 290, 350, 150, 350, 300, 100, 125, 220],
             "backgroundColor": "#377dff",
             "hoverBackgroundColor": "#377dff",
             "borderColor": "#377dff"
           },
           {
             "data": [150, 230, 382, 204, 169, 290, 300, 100, 300, 225, 120],
             "backgroundColor": "#e7eaf3",
             "borderColor": "#e7eaf3"
           }
           ]
           updatingChart.update();
         }
       })

        // initialization of bubble chartjs with Datalabels plugin
        $('.js-chart-datalabels').each(function () {
          $.HSCore.components.HSChartJS.init($(this), {
            plugins: [ChartDataLabels],
            options: {
              plugins: {
                datalabels: {
                  anchor: function(context) {
                    var value = context.dataset.data[context.dataIndex];
                    return value.r < 20 ? 'end' : 'center';
                  },
                  align: function(context) {
                    var value = context.dataset.data[context.dataIndex];
                    return value.r < 20 ? 'end' : 'center';
                  },
                  color: function(context) {
                    var value = context.dataset.data[context.dataIndex];
                    return value.r < 20 ? context.dataset.backgroundColor : context.dataset.color;
                  },
                  font: function(context) {
                    var value = context.dataset.data[context.dataIndex],
                    fontSize = 25;

                    if (value.r > 50) {
                      fontSize = 35;
                    }

                    if (value.r > 70) {
                      fontSize = 55;
                    }

                    return {
                      weight: 'lighter',
                      size: fontSize
                    };
                  },
                  offset: 2,
                  padding: 0
                }
              }
            },
          });
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

        // initialization of datatables
        var datatable = $.HSCore.components.HSDatatables.init($('#datatable'), {
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

        // initialization of clipboard
        $('.js-clipboard').each(function() {
          var clipboard = $.HSCore.components.HSClipboard.init(this);
        });
      });
    </script>

    <!-- IE Support -->
    <script>
      if (/MSIE \d|Trident.*rv:/.test(navigator.userAgent)) document.write('<script src="assets/vendor/babel-polyfill/polyfill.min.js"><\/script>');
    </script>
  </body>

  </html>