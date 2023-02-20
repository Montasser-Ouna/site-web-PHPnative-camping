<?php error_reporting(E_ALL ^ E_NOTICE); ?>
<?php
include_once "../Model/forum.php";
include_once "../Controller/forumC.php";

$connect = mysqli_connect("localhost", "root", "", "test");
$query = "SELECT utilisateur, count(*) as number FROM threads GROUP BY utilisateur";


$result = mysqli_query($connect, $query);

$error = "";
$thread = null;
$thread = new forumC();
$liste = $thread->afficherThreads();
$liste2 = $thread->nombreUtilisateur();
$liste3 = $thread->nombrePosts();
$recherche = $thread->afficherThreads();

?>

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
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                <script type="text/javascript">
                  google.charts.load('current', {
                    'packages': ['corechart']
                  });

                  google.charts.setOnLoadCallback(drawChart);

                  function drawChart() {
                    var data = google.visualization.arrayToDataTable([
                      ['utilisateur', 'number'],
                      <?php
                      while ($row = mysqli_fetch_array($result)) {
                        echo "['" . $row["utilisateur"] . "', " . $row["number"] . "],";
                      }
                      ?>
                    ]);
                    var options = {
                      title: 'Nombre de threads par utilisateurs',
                      is3D: true,
                      pieHole: 0.4
                    };
                    var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                    chart.draw(data, options);
                  }

                </script>
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


  <main id="content" role="main" class="main">
    <!-- Content -->
    <div class="bg-dark">
      <div class="content container-fluid" style="height: 25rem;">
        <!-- Page Header -->

      </div>
    </div>
    </div>

    <div class="content container-fluid" style="margin-top: -17rem;">

      <div class="card">
        <div class="card-header">
          <h4 class="card-header-title">Management Forum
          </h4>
        </div>
        <div class="row">

          <div class="col-lg-4">
            <div class="grid-item">
              <div class="card-body bg-light h-100">



                <h2>Statistiques Forum</h2>
                <div id="piechart" style="width: 450; height: 350;"></div>
                <?php foreach ($liste3 as $row) { ?>
                  <H1>Nombre posts : <?php echo $row['IDcount']; ?></H1>
                <?php } ?>

              </div>

            </div>
          </div>
          <!-- End Body -->

          <!-- End Body -->
        </div>

      </div>
      <!-- End Row -->

    </div>
    <!-- End Card -->

    <div class="card mb-3 mb-lg-5">
      <div class="card-header">
        <div class="row justify-content-between align-items-center flex-grow-1">
          <div class="col-12 col-md">
            <div class="d-flex justify-content-between align-items-center">
              <h5 class="card-header-title">Threads</h5>
            </div>
          </div>
          <div class="col-auto">
            <div class="row align-items-sm-center">
              <div class="col-md">
                <form>
                  <div class="input-group input-group-merge input-group-flush">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="tio-search"></i>
                      </div>
                    </div>
                    <input id="datatableSearch" type="search" class="form-control" placeholder="Rechercher threads" aria-label="Rechercher threads">
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="table-responsive datatable-custom">
        <table id="datatable" class="table table-borderless table-thead-bordered table-nowrap table-align-middle card-table" data-hs-datatables-options='{
                     "columnDefs": [{
                        "targets": [0, 1],
                        "orderable": false
                      }],
                     "order": [],
                     "info": {
                       "totalQty": "#datatableWithPaginationInfoTotalQty"
                     },
                     "search": "#datatableSearch",
                     "entries": "#datatableEntries",
                     "pageLength": 8,
                     "isResponsive": false,
                     "isShowPaging": false,
                     "pagination": "datatablePagination"
                   }'>
          <thead class="thead-light">
            <tr>
              <th scope="col" class="table-column-pr-0">
                <div class="custom-control custom-checkbox">
                  <input id="datatableCheckAll" type="checkbox" class="custom-control-input">
                  <label class="custom-control-label" for="datatableCheckAll"></label>
                </div>
              </th>
              <th class="table-column-pl-0"></th>
              <th>Utilisateur</th>
              <th>Titre</th>
              <th>Contenu</th>
              <th>ID</th>
            </tr>
          </thead>

          <tbody>
            <?php foreach ($liste as $row) { ?>
              <tr>
                <td class="table-column-pr-0"></td>
                <td class="table-column-pl-0"></td>
                <td><?php echo $row['utilisateur'] ?></td>
                <td><?php echo $row['titre'] ?></td>
                <td><?php echo $row['contenu'] ?></td>
                <td><?php echo $row['ID'] ?></td>
              </tr>
            <?php } ?>
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
              <select id="datatableEntries" class="js-select2-custom" data-hs-select2-options='{
                            "minimumResultsForSearch": "Infinity",
                            "customClass": "custom-select custom-select-sm custom-select-borderless",
                            "dropdownAutoWidth": true,
                            "width": true
                          }'>
                <option value="4">4</option>
                <option value="6">6</option>
                <option value="8" selected>8</option>
                <option value="12">12</option>
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

    <!-- Footer -->

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

    <!-- End Footer -->
  </main>
  <!-- ========== END MAIN CONTENT ========== -->


  <script src="assets/js/vendor.min.js"></script>
  <script src="assets/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="assets/js/theme.min.js"></script>
  <script src="assets/vendor/chartjs-plugin-datalabels/dist/chartjs-plugin-datalabels.min.js"></script>

  <!-- JS Plugins Init. -->
  <script>
    window.alert = function(text) {
      console.log('tried to alert: ' + text);
      return true;
    };
    alert(new Date());

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

      // initialization of select2
      $('.js-select2-custom').each(function() {
        var select2 = $.HSCore.components.HSSelect2.init($(this));
      });

      // initialization of chartjs
      Chart.plugins.unregister(ChartDataLabels);

      $('.js-chart').each(function() {
        $.HSCore.components.HSChartJS.init($(this));
      });

      var updatingChart = $.HSCore.components.HSChartJS.init($('#updatingData'));

      // Call when tab is clicked
      $('[data-toggle="chart-bar"]').click(function(e) {
        let keyDataset = $(e.currentTarget).attr('data-datasets')

        if (keyDataset === 'lastWeek') {
          updatingChart.data.labels = ["Apr 22", "Apr 23", "Apr 24", "Apr 25", "Apr 26", "Apr 27", "Apr 28", "Apr 29", "Apr 30", "Apr 31"];
          updatingChart.data.datasets = [{
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
          updatingChart.data.datasets = [{
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
      $('.js-chart-datalabels').each(function() {
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

      // initialization of clipboard
      $('.js-clipboard').each(function() {
        var clipboard = $.HSCore.components.HSClipboard.init(this);
      });
    });
  </script>


  <!-- JS Front -->
  <script src="assets/js/theme.min.js"></script>
  <!-- IE Support -->
  <script>
    if (/MSIE \d|Trident.*rv:/.test(navigator.userAgent)) document.write('<script src="assets/vendor/babel-polyfill/polyfill.min.js"><\/script>');
  </script>
</body>

<!-- Mirrored from htmlstream.com/front-dashboard/dashboard-alternative.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 Nov 2020 01:56:46 GMT -->

</html>