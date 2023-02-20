<?php error_reporting(E_ALL ^ E_NOTICE); ?>
<?php
include_once "../Model/comment.php";
include_once "../Controller/commentC.php";
$error = "";
$commentC = null;
$commentC = new commentC();
$connect = mysqli_connect("localhost", "root", "", "test");


$query2 = "SELECT user, count(*) as number FROM comments GROUP BY user";
$result2 = mysqli_query($connect, $query2);

$liste = $commentC->afficherComs();
if ($_POST["action"] == "add") {
  if (
    isset($_POST["user"]) &&
    isset($_POST["ID"]) &&
    isset($_POST["contents"])
  ) {
    if (
      !empty($_POST["user"]) &&
      !empty($_POST["ID"]) &&
      !empty($_POST["contents"])
    ) {
      $thread = new comment(
        $_POST["user"],
        $_POST["ID"],
        $_POST["contents"]
      );
      $commentC->ajouterCom($thread);
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

      $commentC->supprimerCom($_POST["ID"]);
    } else
      $error = "Missing information";
  }
}
if ($_POST["action"] == "update") {
  if (
    isset($_POST["user"]) &&
    isset($_POST["thread"]) &&
    isset($_POST["ID"]) &&
    isset($_POST["contents"])
  ) {
    if (
      !empty($_POST["user"]) &&
      !empty($_POST["thread"]) &&
      !empty($_POST["ID"]) &&
      !empty($_POST["contents"])
    ) {
      $thread = new comment(
        $_POST["user"],
        $_POST["thread"],
        $_POST["contents"]
      );
      $ID = $_POST["ID"];
      $commentC->updateCom($thread, $ID);
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
        while ($row = mysqli_fetch_array($result2)) {
          echo "['" . $row["user"] . "', " . $row["number"] . "],";
        }
        ?>
      ]);
      var options = {
        title: 'Nombre de threads par utilisateurs',
        is3D: true,
        pieHole: 0.4
      };
      var chart2 = new google.visualization.PieChart(document.getElementById('piechart2'));
      chart2.draw(data, options);
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
          <a href="statistiques forum.php">Statistiques forum</a>
        </div>
        <!-- End Header -->

        <div class="row">
          <div class="col-lg-4">
            <!-- Body -->
            <div class="card-body bg-light h-100">
              <form name="ajout" action="" method="POST">
                <br>
                <p>Ajouter Comment</p>
                <div class="form-group">
                  <label class="input-label" for="exampleFormControlInput1">User</label>
                  <input type="text" id="user" name="user" class="form-control">
                </div>
                <div class="form-group">
                  <label class="input-label" for="exampleFormControlInput1">Thread ID</label>
                  <input type="text" id="ID" name="ID" class="form-control">
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
              <p>Modifier commentaire</p>
              <div class="form-group">
                <label class="input-label" for="exampleFormControlInput1">ID du commentaire</label>
                <input type="text" name="ID" id="ID" class="form-control">
              </div>
              <div class="form-group">
                <label class="input-label" for="exampleFormControlInput1">Nouveau ID Thread associé</label>
                <input type="text" name="thread" id="thread" class="form-control">
              </div>
              <div class="form-group">
                <label class="input-label" for="exampleFormControlInput1">User</label>
                <input type="text" name="user" id="user" class="form-control">
              </div>
              <input type="hidden" name="action" value="update">
              <div class="form-group">
                <label class="input-label" for="exampleFormControlTextarea1">Contenu du commentaire</label>
                <textarea id="exampleFormControlTextarea1" name="contents" id="contents" class="form-control" rows="4"></textarea>
              </div>
              <button type="submit" type="button" class="btn btn-primary">Primary</button>
            </form>
          </div>
          <div class="col-lg-4">
            <div class="card-body bg-light h-100">
              <form name="supression" action="" method="POST">
                <br>
                <p>Supprimer commentaire</p>
                <div class="form-group">
                  <label class="input-label" for="exampleFormControlInput1">ID Comment</label>
                  <input type="text" class="form-control" name="ID" id="ID" placeholder="ID du commentaire a supprimer">
                </div>
                <input type="hidden" name="action" value="delete">
                <button type="submit" name="form3" class="btn btn-primary">Primary</button>
                <div id="piechart2" style="width: 500; height: 600;"></div>

              </form>
            </div>
          </div>
        </div>
      </div>
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
                        "orderable": true
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
            <th>Thread</th>
          </tr>
        </thead>

        <tbody>
          <?php foreach ($liste as $row) { ?>
            <tr>
              <td class="table-column"></td>
              <td class="table-column"></td>
              <td><?php echo $row['user'] ?></td>
              <td><?php echo $row['content'] ?></td>
              <td><?php echo $row['date_comment'] ?></td>
              <td><?php echo $row['ID'] ?></td>
              <td><?php echo $row['thread'] ?></td>
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


  <!-- JS Implementing Plugins -->

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

</html>