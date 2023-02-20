<?php

/**
********************************************
showEvents-back.php
-------------------
_____________________

Author: Guimdo Lioguy
Date: 03/12/2020
_____________________
-------------------------------------------
;Affihcer un évènement de la base de données au niveau du back

;Show events from database to the Dashboard for admin
-------------------------------------------
********************************************
*/

require_once('../controller/eventC.php');

$eventC = new EventC;

if(isset($_GET['delEventID']))
{
  if(!empty($_GET['delEventID']))
  {
    $eventC->delEvent((int)$_GET['delEventID']);
  }
}

session_start();
$id_session = session_id();

if($_SESSION['nomClub'])
    $data = $eventC->getEventsWithAuthor($_SESSION['nomClub']);
//$data = $eventC->getEvents();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title -->
  <title>ShowEvent | Camping Fever</title>

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

  <!-- CSS Implementing datatables for chechbox -->
  <script src="../my-ressources/datatables/media/js/jquery.dataTables.min.js"></script>
  <link rel="stylesheet" href="../my-ressources/select/css/select.dataTables.min.css">
  <link rel="stylesheet" href="../my-ressources/select2/dist/css/select2.min.css">

  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/ju/dt-1.10.22/b-1.6.5/b-colvis-1.6.5/datatables.min.css"/>
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
  <?php /* <script src="assets/vendor/hs-count-characters/dist/js/hs-count-characters.js"></script> */?>
  <script src="../my-ressources/select2/dist/js/select2.full.min.js"></script>
  <script src="../my-ressources/select/js/dataTables.select.min.js"></script>

  <main id="content" role="main" class="main pointer-event">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Event Management</a></li>
        <li class="breadcrumb-item active" aria-current="page">Show Events</li>
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
            <a class="btn btn-primary" href="addEvent.php">
              <i class="tio-add-event mr-1"></i> Add Event
            </a>
          </div>
        </div>
      </div>
      <!-- End Page Header -->

      <!-- Card -->
      <div class="card">
        <!-- Header -->
        <div class="card-header">
          <div class="row justify-content-between align-items-center flex-grow-1">
            <div class="col-12 col-md">
              <div class="d-flex justify-content-between align-items-center">
                <h5 class="card-header-title"> Events </h5>
              </div>
            </div>
            <!-- Datatable Info -->
            <div id="datatableCounterInfo" class="mr-2 mb-2 mb-sm-0" style="display: none;">
              <div class="d-flex align-items-center">
                <span class="font-size-sm mr-3">
                  <span id="datatableCounter">0</span>
                  Selected
                </span>
              </div>
            </div>


            <!-- Unfold -->
            <div class="hs-unfold">
              <a class="js-hs-unfold-invoker btn btn-icon btn-sm btn-ghost-secondary rounded-circle" href="javascript:;"
                data-hs-unfold-options='{
                  "target": "#showHideDropdown",
                  "type": "css-animation"
                }'>
                <i class="tio-table"></i>
              </a>

              <div id="showHideDropdown" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right dropdown-card" style="width: 15rem;">
                <div class="card card-sm">
                  <div class="card-body">
                   <div class="d-flex justify-content-between align-items-center mb-3">
                       <span class="mr-2">Name</span>

                      <!-- Checkbox Switch -->
                      <label class="toggle-switch toggle-switch-sm" for="toggleColumn_name">
                       <input type="checkbox" class="toggle-switch-input" id="toggleColumn_name" checked>
                        <span class="toggle-switch-label">
                         <span class="toggle-switch-indicator"></span>
                        </span>
                      </label>
                      <!-- End Checkbox Switch -->
                    </div>

                    <div class="d-flex justify-content-between align-items-center mb-3">
                      <span class="mr-2">Date</span>

                      <!-- Checkbox Switch -->
                      <label class="toggle-switch toggle-switch-sm" for="toggleColumn_date">
                        <input type="checkbox" class="toggle-switch-input" id="toggleColumn_date" checked>
                        <span class="toggle-switch-label">
                          <span class="toggle-switch-indicator"></span>
                        </span>
                      </label>
                      <!-- End Checkbox Switch -->
                    </div>

                    <div class="d-flex justify-content-between align-items-center mb-3">
                      <span class="mr-2">Status</span>

                      <!-- Checkbox Switch -->
                      <label class="toggle-switch toggle-switch-sm" for="toggleColumn_status">
                        <input type="checkbox" class="toggle-switch-input" id="toggleColumn_status" checked>
                        <span class="toggle-switch-label">
                          <span class="toggle-switch-indicator"></span>
                        </span>
                      </label>
                      <!-- End Checkbox Switch -->
                    </div>

                    <div class="d-flex justify-content-between align-items-center mb-3">
                      <span class="mr-2">Place</span>

                      <!-- Checkbox Switch -->
                      <label class="toggle-switch toggle-switch-sm" for="toggleColumn_place">
                        <input type="checkbox" class="toggle-switch-input" id="toggleColumn_place" checked>
                        <span class="toggle-switch-label">
                          <span class="toggle-switch-indicator"></span>
                        </span>
                      </label>
                      <!-- End Checkbox Switch -->
                    </div>

                    <div class="d-flex justify-content-between align-items-center mb-3">
                      <span class="mr-2">Content</span>

                      <!-- Checkbox Switch -->
                      <label class="toggle-switch toggle-switch-sm" for="toggleColumn_content">
                        <input type="checkbox" class="toggle-switch-input" id="toggleColumn_content" checked>
                        <span class="toggle-switch-label">
                          <span class="toggle-switch-indicator"></span>
                        </span>
                      </label>
                      <!-- End Checkbox Switch -->
                    </div>

                    <div class="d-flex justify-content-between align-items-center mb-3">
                      <span class="mr-2">Author</span>

                      <!-- Checkbox Switch -->
                      <label class="toggle-switch toggle-switch-sm" for="toggleColumn_author">
                        <input type="checkbox" class="toggle-switch-input" id="toggleColumn_author" checked>
                        <span class="toggle-switch-label">
                          <span class="toggle-switch-indicator"></span>
                        </span>
                      </label>
                      <!-- End Checkbox Switch -->
                    </div>

                    <div class="d-flex justify-content-between align-items-center mb-3">
                      <span class="mr-2">Edit The :</span>

                      <!-- Checkbox Switch -->
                      <label class="toggle-switch toggle-switch-sm" for="toggleColumn_edit">
                        <input type="checkbox" class="toggle-switch-input" id="toggleColumn_edit" checked>
                        <span class="toggle-switch-label">
                          <span class="toggle-switch-indicator"></span>
                        </span>
                      </label>
                      <!-- End Checkbox Switch -->
                    </div>

                    <div class="d-flex justify-content-between align-items-center">
                      <span class="mr-2">Last Modification</span>

                      <!-- Checkbox Switch -->
                      <label class="toggle-switch toggle-switch-sm" for="toggleColumn_modif">
                        <input type="checkbox" class="toggle-switch-input" id="toggleColumn_modif" checked>
                        <span class="toggle-switch-label">
                          <span class="toggle-switch-indicator"></span>
                        </span>
                      </label>
                      <!-- End Checkbox Switch -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Unfold -->


            <!-- End Datatable Info -->
            <div class="col-auto">
              <!-- Filter -->
              <form>
                <!-- Search -->
                <div class="input-group input-group-merge input-group-flush">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="tio-search"></i>
                    </div>
                  </div>
                  <input id="datatableSearch" type="search" class="form-control" placeholder="Search Event" aria-label="Search Events">
                </div>
                <!-- End Search -->
              </form>
              <!-- End Filter -->
            </div>
          </div>
        </div>
      </div>
      <!-- End Header -->

      <!-- Table -->
      <div class="table-responsive datatable-custom">
        <table id="datatable" class="table table-lg table-borderless table-thead-bordered table-nowrap table-align-middle card-table"
          data-hs-datatables-options='{
          "columnDefs": [{
            "targets": [0, 10],
            "orderable": false
          }],
          "order": [],
          "info": {
           "totalQty": "#datatableWithPaginationInfoTotalQty"
          },
          "search": "#datatableSearch",
          "entries": "#datatableEntries",
          "pageLength": 15,
          "isResponsive": false,
          "isShowPaging": false,
          "pagination": "datatablePagination"
          }'
          >
        <thead class="thead-light">
          <tr>
            <th class="table-column-pr-0">
              <div class="custom-control custom-checkbox">
                <input id="datatableCheckAll" type="checkbox" class="custom-control-input">
                <label class="custom-control-label" for="datatableCheckAll"></label>
              </div>
            </th>
            <th class="table-column-pl-0">ID</th>
            <th class="text-center">Name</th>
            <th class="text-center">Date</th>
            <th class="text-center">status</th>
            <th class="text-center">Place</th>
            <th class="text-center">Content</th>
            <th class="text-center">Author</th>
            <th class="text-center">Edit The :</th>
            <th class="text-center">Last Modification :</th>
            <th class="text-hover-primary text-center">Operation</th>
          </tr>
        </thead>

        <tbody>
          <?php
          foreach ($data as $rows)
          {
            ?>
            <tr>
              <td class="table-column-pr-0">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="usersDataCheck<?php echo $rows['eventID']; ?>" value="<?php echo $rows['eventID']; ?>">
                  <label class="custom-control-label" for="usersDataCheck<?php echo $rows['eventID']; ?>"></label>
                </div>
              </td>
              <td class="bg-white">
                <span class="d-block h5 text-hover-primary mb-0"> <?php echo $rows['eventID']; ?> </span>
              </td>
              <td>
                <span class="d-block h5 mb-0"> <?php echo $rows['eventName']; ?> </span>
              </td>
              <td> <?php echo $rows['eventDate']; ?> </td>
              <td>
                <span class="legend-indicator bg-success"></span>Active
              </td>
              <td class="text-center"> <?php echo $rows['eventPlace']; ?> </td>
              <td>
                <button type="button" class="btn btn-soft-primary" data-toggle="modal" data-target="#exampleModal<?php echo $rows['eventID']; ?>">
                  Open content
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal<?php echo $rows['eventID']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <!-- Header -->
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Content</h5>
                        <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary" data-dismiss="modal" aria-label="Close">
                          <i class="tio-clear tio-lg" aria-hidden="true"></i>
                        </button>
                      </div>
                      <!-- End Header -->

                      <!-- Body -->
                      <div class="modal-body">
                        <p style="-webkit-hyphens: auto;
                        -moz-hyphens: auto;
                        -ms-hyphens: auto;
                        hyphens: auto;"
                        >

                        <textarea id="eventContent" class="form-control js-count-characters" placeholder="the event content" rows="4" data-hs-count-characters-options='
                        {
                          "output": "#countCharacters"
                        }'
                        readonly> <?php echo $rows['eventContent']; ?> </textarea>
                      </p>
                    </div>
                    <!-- End Body -->

                    <!-- Footer -->
                    <div class="modal-footer">
                      <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                    </div>
                    <!-- End Footer -->
                  </div>
                </div>
              </div>
              <!-- End Modal -->
            </td>
            <td><?php echo $rows['eventAuthor']; ?></td>
            <td><?php echo $rows['addEventDate']; ?></td>
            <td><?php echo $rows['setEventDate']; ?></td>
            <td>
              <a class="btn btn-sm btn-outline-primary" href="modifyEvent.php?eventID=<?php echo $rows['eventID']; ?>">
                <i class="tio-edit"></i> Edit
              </a>

              <a class="btn btn-sm btn-outline-info" href="javascript:;">
                <i class="js-edit-icon tio-cloud"></i> Save
              </a>

              <a class="btn btn-sm btn-outline-danger delAlertLink" href="showEvents-back.php?delEventID=<?php echo $rows['eventID']; ?>" data-toggle="modal" data-target="#delAlert">
                <i class="tio-delete-outlined"></i> Deleted
              </a>
            </td>
          </tr>

          <?php
        }
        ?>
      </tbody>
    </table>
  </div>
  <!-- End Table -->


      <!-- Footer -->
      <div class="card-footer">
        <!-- Pagination -->
        <div class="row justify-content-center justify-content-sm-between align-items-sm-center">
          <div class="col-sm mb-2 mb-sm-0">
            <div class="d-flex justify-content-center justify-content-sm-start align-items-center">
              <span class="mr-2">Showing:</span>

              <!-- Select -->
              <select id="datatableEntries" class="js-select2-custom"
                      data-hs-select2-options='{
                        "minimumResultsForSearch": "Infinity",
                        "customClass": "custom-select custom-select-sm custom-select-borderless",
                        "dropdownAutoWidth": true,
                        "width": true
                      }'>
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="15" selected>15</option>
                <option value="20">20</option>
              </select>
              <!-- End Select -->

              <span class="text-secondary mr-2">of</span>

              <!-- Pagination Quantity -->
              <span id="datatableWithPaginationInfoTotalQty"></span>
            </div>
          </div>

          <div class="col-sm-auto">
            <div class="d-flex justify-content-center justify-content-sm-end">
              <!-- Pagination -->
              <nav id="datatablePagination" aria-label="Activity pagination"></nav>
            </div>
          </div>
        </div>
        <!-- End Pagination -->
      </div>
      <!-- End Footer -->



</div>
<!-- End Card -->

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

<!-- Modal -->
<div class="modal fade" id="delAlert" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content bg-warning">
      <div class="modal-header">
        <h5 class="modal-title text-danger text-cap" id="staticBackdropLabel"> <i class="tio-warning mt-1 mr-1"></i>Delete Event</h5>
        <button type="button" class="btn btn-xs btn-icon btn-ghost-secondary" data-dismiss="modal" aria-label="Close">
          <i class="tio-clear tio-lg"></i>
        </button>
      </div>
      <div class="modal-body">
        <p>Are you sure you want delete this event!! if you are not sure please click to "close"
        esle click to "Continue"</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-white" id="delAlertNo" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="delAlertYes">Continue</button>
      </div>
    </div>
  </div>
</div>
<!-- End Modal -->




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

<!-- JS Plugins Init. -->
<script>
  $(document).on('ready', function () {

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
                '<img class="mb-3" src="assets/svg/illustrations/sorry.svg" alt="Image Description" style="width: 7rem;">' +
                '<p class="mb-0">No data to show</p>' +
                '</div>'
          }
        });

      $('#toggleColumn_name').change(function (e) {
        datatable.columns(2).visible(e.target.checked)
      });

      $('#toggleColumn_date').change(function (e) {
        datatable.columns(3).visible(e.target.checked)
      });

      $('#toggleColumn_status').change(function (e) {
        datatable.columns(4).visible(e.target.checked)
      });

      $('#toggleColumn_place').change(function (e) {
        datatable.columns(5).visible(e.target.checked)
      });

      $('#toggleColumn_content').change(function (e) {
        datatable.columns(6).visible(e.target.checked)
      });

      $('#toggleColumn_author').change(function (e) {
        datatable.columns(7).visible(e.target.checked)
      });

      $('#toggleColumn_edit').change(function (e) {
        datatable.columns(8).visible(e.target.checked)
      });

      $('#toggleColumn_modif').change(function (e) {
        datatable.columns(9).visible(e.target.checked)
      });

      //suppression d'evenement
      var theHREF;

      $(".delAlertLink").click(function(e) {
        e.preventDefault();
        theHREF = $(this).attr("href");
        $("#delAlert").modal("show");
      });

      $("#delAlertNo").click(function(e) {
        $("#delAlert").modal("hide");
      });

      $("#delAlertYes").click(function(e) {
        window.location.href = theHREF;
      });

      // initialization of select2
      $('.js-select2-custom').each(function () {
        var select2 = $.HSCore.components.HSSelect2.init($(this));
      });

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