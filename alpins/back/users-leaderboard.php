<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from htmlstream.com/front-dashboard/users-leaderboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 Nov 2020 01:57:52 GMT -->
<head>
    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Leaderboard | Front - Admin &amp; Dashboard Template</title>

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

    <!-- ========== HEADER ========== -->
    

    

    
    <!-- ========== END HEADER ========== -->

    <!-- ========== MAIN CONTENT ========== -->
    <!-- Navbar Vertical -->
    

    
    <!-- End Navbar Vertical -->

    <main id="content" role="main" class="main">
      <!-- Content -->
      <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
          <div class="row align-items-end">
            <div class="col-sm mb-2 mb-sm-0">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-no-gutter">
                  <li class="breadcrumb-item"><a class="breadcrumb-link" href="javascript:;">Pages</a></li>
                  <li class="breadcrumb-item"><a class="breadcrumb-link" href="javascript:;">Users</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Leaderboard</li>
                </ol>
              </nav>

              <h1 class="page-title">Leaderboard</h1>
            </div>

            <div class="col-sm-auto">
              <!-- Nav -->
              <ul class="nav nav-segment" id="leaderboardTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="all-time-tab" data-toggle="tab" href="#all-time" role="tab">
                    All time
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="weekly-tab" data-toggle="tab" href="#weekly" role="tab">
                    Weekly
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="monthly-tab" data-toggle="tab" href="#monthly" role="tab">
                    Monthly
                  </a>
                </li>
              </ul>
              <!-- End Nav -->
            </div>
          </div>
          <!-- End Row -->
        </div>
        <!-- End Page Header -->

        <!-- Card -->
        <div class="card overflow-hidden">
          <!-- Tab Content -->
          <div class="tab-content" id="leaderboardTabContent">
            <div class="tab-pane fade show active" id="all-time" role="tabpanel" aria-labelledby="all-time-tab">
              <!-- Table -->
              <div class="table-responsive">
                <table class="table table-borderless table-thead-bordered table-nowrap table-text-center table-align-middle card-table">
                  <thead class="thead-light">
                    <tr>
                      <th scope="col" style="width: 2rem;">Rank</th>
                      <th scope="col" class="text-left">Name</th>
                      <th scope="col">Closed issues</th>
                      <th scope="col">Completed projects</th>
                      <th scope="col">Progress</th>
                      <th scope="col">Efficiency rate</th>
                      <th scope="col">Hours</th>
                      <th scope="col">Avg. Score</th>
                    </tr>
                  </thead>

                  <tbody>
                    <tr>
                      <td><span class="text-warning" style="font-size: 1.5rem;">🥇</span></td>
                      <td class="text-left">
                        <a class="d-flex align-items-center" href="user-profile.html">
                          <div class="avatar avatar-circle">
                            <img class="avatar-img" src="assets/img/160x160/img10.jpg" alt="Image Description">
                          </div>
                          <div class="ml-3">
                            <span class="d-block h5 text-hover-primary mb-0">Amanda Harvey</span>
                          </div>
                        </a>
                      </td>
                      <td>20</td>
                      <td>35</td>
                      <td>
                        <div class="chartjs-custom" style="height: 2rem; width: 6rem;">
                          <canvas class="js-chart"
                                  data-hs-chartjs-options='{
                                    "type": "line",
                                    "data": {
                                       "labels": ["value","value","value","value","value","value","value"],
                                       "datasets": [{
                                        "data": [15,15,7,27,34,25,30],
                                        "backgroundColor": "transparent",
                                        "borderColor": "#377dff",
                                        "borderWidth": 2,
                                        "pointRadius": 0,
                                        "pointHoverRadius": 0
                                      }]
                                    },
                                    "options": {
                                       "scales": {
                                         "yAxes": [{
                                           "display": false
                                         }],
                                         "xAxes": [{
                                           "display": false
                                         }]
                                       },
                                       "tooltips": false
                                    }
                                  }'>
                          </canvas>
                        </div>
                      </td>
                      <td>
                        <span class="badge badge-soft-success p-1">
                          <i class="tio-trending-up"></i> 1.5%
                        </span>
                      </td>
                      <td>505</td>
                      <td><i class="tio-star text-warning mr-1"></i> 4.97</td>
                    </tr>

                    <tr>
                      <td><span class="text-secondary" style="font-size: 1.5rem;">🥈</span></td>
                      <td class="text-left">
                        <a class="d-flex align-items-center" href="user-profile.html">
                          <div class="avatar avatar-circle">
                            <img class="avatar-img" src="assets/img/160x160/img3.jpg" alt="Image Description">
                          </div>
                          <div class="ml-3">
                            <span class="d-block h5 text-hover-primary mb-0">David Harrison</span>
                          </div>
                        </a>
                      </td>
                      <td>12</td>
                      <td>54</td>
                      <td>
                        <div class="chartjs-custom" style="height: 2rem; width: 6rem;">
                          <canvas class="js-chart"
                                  data-hs-chartjs-options='{
                                    "type": "line",
                                    "data": {
                                       "labels": ["value","value","value","value","value","value","value"],
                                       "datasets": [{
                                        "data": [6,3,24,20,10,11,14],
                                        "backgroundColor": "transparent",
                                        "borderColor": "#377dff",
                                        "borderWidth": 2,
                                        "pointRadius": 0,
                                        "pointHoverRadius": 0
                                      }]
                                    },
                                    "options": {
                                       "scales": {
                                         "yAxes": [{
                                           "display": false
                                         }],
                                         "xAxes": [{
                                           "display": false
                                         }]
                                       },
                                       "tooltips": false
                                    }
                                  }'>
                          </canvas>
                        </div>
                      </td>
                      <td>
                        <span class="badge badge-soft-success p-1">
                          <i class="tio-trending-up"></i> 3.5%
                        </span>
                      </td>
                      <td>467</td>
                      <td><i class="tio-star text-warning mr-1"></i> 4.95</td>
                    </tr>

                    <tr>
                      <td><span style="font-size: 1.5rem; color: #924b18;">🥉</span></td>
                      <td class="text-left">
                        <a class="d-flex align-items-center" href="user-profile.html">
                          <div class="avatar avatar-soft-info avatar-circle">
                            <span class="avatar-initials">L</span>
                          </div>
                          <div class="ml-3">
                            <span class="d-block h5 text-hover-primary mb-0">Lori Hunter</span>
                          </div>
                        </a>
                      </td>
                      <td>62</td>
                      <td>31</td>
                      <td>
                        <div class="chartjs-custom" style="height: 2rem; width: 6rem;">
                          <canvas class="js-chart"
                                  data-hs-chartjs-options='{
                                    "type": "line",
                                    "data": {
                                       "labels": ["value","value","value","value","value","value","value"],
                                       "datasets": [{
                                        "data": [26,13,34,40,50,21,17],
                                        "backgroundColor": "transparent",
                                        "borderColor": "#377dff",
                                        "borderWidth": 2,
                                        "pointRadius": 0,
                                        "pointHoverRadius": 0
                                      }]
                                    },
                                    "options": {
                                       "scales": {
                                         "yAxes": [{
                                           "display": false
                                         }],
                                         "xAxes": [{
                                           "display": false
                                         }]
                                       },
                                       "tooltips": false
                                    }
                                  }'>
                          </canvas>
                        </div>
                      </td>
                      <td>
                        <span class="badge badge-soft-danger p-1">
                          <i class="tio-trending-down"></i> 2.1%
                        </span>
                      </td>
                      <td>460</td>
                      <td><i class="tio-star text-warning mr-1"></i> 4.90</td>
                    </tr>

                    <tr>
                      <td>4</td>
                      <td class="text-left">
                        <a class="d-flex align-items-center" href="user-profile.html">
                          <div class="avatar avatar-circle">
                            <img class="avatar-img" src="assets/img/160x160/img8.jpg" alt="Image Description">
                          </div>
                          <div class="ml-3">
                            <span class="d-block h5 text-hover-primary mb-0">Linda Bates</span>
                          </div>
                        </a>
                      </td>
                      <td>0</td>
                      <td>76</td>
                      <td>
                        <div class="chartjs-custom" style="height: 2rem; width: 6rem;">
                          <canvas class="js-chart"
                                  data-hs-chartjs-options='{
                                    "type": "line",
                                    "data": {
                                       "labels": ["value","value","value","value","value","value","value"],
                                       "datasets": [{
                                        "data": [22,22,34,20,10,11,25],
                                        "backgroundColor": "transparent",
                                        "borderColor": "#377dff",
                                        "borderWidth": 2,
                                        "pointRadius": 0,
                                        "pointHoverRadius": 0
                                      }]
                                    },
                                    "options": {
                                       "scales": {
                                         "yAxes": [{
                                           "display": false
                                         }],
                                         "xAxes": [{
                                           "display": false
                                         }]
                                       },
                                       "tooltips": false
                                    }
                                  }'>
                          </canvas>
                        </div>
                      </td>
                      <td>
                        <span class="badge badge-soft-success p-1">
                          <i class="tio-trending-up"></i> 9.6%
                        </span>
                      </td>
                      <td>414</td>
                      <td><i class="tio-star text-warning mr-1"></i> 4.52</td>
                    </tr>

                    <tr>
                      <td>5</td>
                      <td class="text-left">
                        <a class="d-flex align-items-center" href="user-profile.html">
                          <div class="avatar avatar-soft-dark avatar-circle">
                            <span class="avatar-initials">B</span>
                          </div>
                          <div class="ml-3">
                            <span class="d-block h5 text-hover-primary mb-0">Brian Halligan</span>
                          </div>
                        </a>
                      </td>
                      <td>8</td>
                      <td>25</td>
                      <td>
                        <div class="chartjs-custom" style="height: 2rem; width: 6rem;">
                          <canvas class="js-chart"
                                  data-hs-chartjs-options='{
                                    "type": "line",
                                    "data": {
                                       "labels": ["value","value","value","value","value","value","value"],
                                       "datasets": [{
                                        "data": [9,15,35,20,10,20,22],
                                        "backgroundColor": "transparent",
                                        "borderColor": "#377dff",
                                        "borderWidth": 2,
                                        "pointRadius": 0,
                                        "pointHoverRadius": 0
                                      }]
                                    },
                                    "options": {
                                       "scales": {
                                         "yAxes": [{
                                           "display": false
                                         }],
                                         "xAxes": [{
                                           "display": false
                                         }]
                                       },
                                       "tooltips": false
                                    }
                                  }'>
                          </canvas>
                        </div>
                      </td>
                      <td>
                        <span class="badge badge-soft-success p-1">
                          <i class="tio-trending-up"></i> 1.1%
                        </span>
                      </td>
                      <td>372</td>
                      <td><i class="tio-star text-warning mr-1"></i> 4.25</td>
                    </tr>

                    <tr>
                      <td>6</td>
                      <td class="text-left">
                        <a class="d-flex align-items-center" href="user-profile.html">
                          <div class="avatar avatar-circle">
                            <img class="avatar-img" src="assets/img/160x160/img6.jpg" alt="Image Description">
                          </div>
                          <div class="ml-3">
                            <span class="d-block h5 text-hover-primary mb-0">Costa Quinn</span>
                          </div>
                        </a>
                      </td>
                      <td>44</td>
                      <td>4</td>
                      <td>
                        <div class="chartjs-custom" style="height: 2rem; width: 6rem;">
                          <canvas class="js-chart"
                                  data-hs-chartjs-options='{
                                    "type": "line",
                                    "data": {
                                       "labels": ["value","value","value","value","value","value","value"],
                                       "datasets": [{
                                        "data": [6,3,24,20,10,25,14],
                                        "backgroundColor": "transparent",
                                        "borderColor": "#377dff",
                                        "borderWidth": 2,
                                        "pointRadius": 0,
                                        "pointHoverRadius": 0
                                      }]
                                    },
                                    "options": {
                                       "scales": {
                                         "yAxes": [{
                                           "display": false
                                         }],
                                         "xAxes": [{
                                           "display": false
                                         }]
                                       },
                                       "tooltips": false
                                    }
                                  }'>
                          </canvas>
                        </div>
                      </td>
                      <td>
                        <span class="badge badge-soft-danger p-1">
                          <i class="tio-trending-down"></i> 9.2%
                        </span>
                      </td>
                      <td>399</td>
                      <td><i class="tio-star text-warning mr-1"></i> 3.80</td>
                    </tr>

                    <tr>
                      <td>7</td>
                      <td class="text-left">
                        <a class="d-flex align-items-center" href="user-profile.html">
                          <div class="avatar avatar-soft-primary avatar-circle">
                            <span class="avatar-initials">M</span>
                          </div>
                          <div class="ml-3">
                            <span class="d-block h5 text-hover-primary mb-0">Mark Colbert</span>
                          </div>
                        </a>
                      </td>
                      <td>25</td>
                      <td>43</td>
                      <td>
                        <div class="chartjs-custom" style="height: 2rem; width: 6rem;">
                          <canvas class="js-chart"
                                  data-hs-chartjs-options='{
                                    "type": "line",
                                    "data": {
                                       "labels": ["value","value","value","value","value","value","value"],
                                       "datasets": [{
                                        "data": [35,40,14,10,20,15,10],
                                        "backgroundColor": "transparent",
                                        "borderColor": "#377dff",
                                        "borderWidth": 2,
                                        "pointRadius": 0,
                                        "pointHoverRadius": 0
                                      }]
                                    },
                                    "options": {
                                       "scales": {
                                         "yAxes": [{
                                           "display": false
                                         }],
                                         "xAxes": [{
                                           "display": false
                                         }]
                                       },
                                       "tooltips": false
                                    }
                                  }'>
                          </canvas>
                        </div>
                      </td>
                      <td>
                        <span class="badge badge-soft-danger p-1">
                          <i class="tio-trending-down"></i> 1.5%
                        </span>
                      </td>
                      <td>390</td>
                      <td><i class="tio-star text-warning mr-1"></i> 3.80</td>
                    </tr>

                    <tr>
                      <td>8</td>
                      <td class="text-left">
                        <a class="d-flex align-items-center" href="user-profile.html">
                          <div class="avatar avatar-circle">
                            <img class="avatar-img" src="assets/img/160x160/img9.jpg" alt="Image Description">
                          </div>
                          <div class="ml-3">
                            <span class="d-block h5 text-hover-primary mb-0">Ella Lauda</span>
                          </div>
                        </a>
                      </td>
                      <td>55</td>
                      <td>15</td>
                      <td>
                        <div class="chartjs-custom" style="height: 2rem; width: 6rem;">
                          <canvas class="js-chart"
                                  data-hs-chartjs-options='{
                                    "type": "line",
                                    "data": {
                                       "labels": ["value","value","value","value","value","value","value"],
                                       "datasets": [{
                                        "data": [26,23,24,30,40,29,34],
                                        "backgroundColor": "transparent",
                                        "borderColor": "#377dff",
                                        "borderWidth": 2,
                                        "pointRadius": 0,
                                        "pointHoverRadius": 0
                                      }]
                                    },
                                    "options": {
                                       "scales": {
                                         "yAxes": [{
                                           "display": false
                                         }],
                                         "xAxes": [{
                                           "display": false
                                         }]
                                       },
                                       "tooltips": false
                                    }
                                  }'>
                          </canvas>
                        </div>
                      </td>
                      <td>
                        <span class="badge badge-soft-success p-1">
                          <i class="tio-trending-up"></i> 7%
                        </span>
                      </td>
                      <td>204</td>
                      <td><i class="tio-star text-warning mr-1"></i> 3.45</td>
                    </tr>

                    <tr>
                      <td>9</td>
                      <td class="text-left">
                        <a class="d-flex align-items-center" href="user-profile.html">
                          <div class="avatar avatar-circle">
                            <img class="avatar-img" src="assets/img/160x160/img5.jpg" alt="Image Description">
                          </div>
                          <div class="ml-3">
                            <span class="d-block h5 text-hover-primary mb-0">Finch Hoot</span>
                          </div>
                        </a>
                      </td>
                      <td>4</td>
                      <td>57</td>
                      <td>
                        <div class="chartjs-custom" style="height: 2rem; width: 6rem;">
                          <canvas class="js-chart"
                                  data-hs-chartjs-options='{
                                    "type": "line",
                                    "data": {
                                       "labels": ["value","value","value","value","value","value","value"],
                                       "datasets": [{
                                        "data": [16,25,29,31,5,9,12],
                                        "backgroundColor": "transparent",
                                        "borderColor": "#377dff",
                                        "borderWidth": 2,
                                        "pointRadius": 0,
                                        "pointHoverRadius": 0
                                      }]
                                    },
                                    "options": {
                                       "scales": {
                                         "yAxes": [{
                                           "display": false
                                         }],
                                         "xAxes": [{
                                           "display": false
                                         }]
                                       },
                                       "tooltips": false
                                    }
                                  }'>
                          </canvas>
                        </div>
                      </td>
                      <td>
                        <span class="badge badge-soft-success p-1">
                          <i class="tio-trending-up"></i> 1.5%
                        </span>
                      </td>
                      <td>202</td>
                      <td><i class="tio-star text-warning mr-1"></i> 3.02</td>
                    </tr>

                    <tr>
                      <td>10</td>
                      <td class="text-left">
                        <a class="d-flex align-items-center" href="user-profile.html">
                          <div class="avatar avatar-soft-danger avatar-circle">
                            <span class="avatar-initials">C</span>
                          </div>
                          <div class="ml-3">
                            <span class="d-block h5 text-hover-primary mb-0">Chris Mathew</span>
                          </div>
                        </a>
                      </td>
                      <td>9</td>
                      <td>61</td>
                      <td>
                        <div class="chartjs-custom" style="height: 2rem; width: 6rem;">
                          <canvas class="js-chart"
                                  data-hs-chartjs-options='{
                                    "type": "line",
                                    "data": {
                                       "labels": ["value","value","value","value","value","value","value"],
                                       "datasets": [{
                                        "data": [36,43,24,10,7,15,20],
                                        "backgroundColor": "transparent",
                                        "borderColor": "#377dff",
                                        "borderWidth": 2,
                                        "pointRadius": 0,
                                        "pointHoverRadius": 0
                                      }]
                                    },
                                    "options": {
                                       "scales": {
                                         "yAxes": [{
                                           "display": false
                                         }],
                                         "xAxes": [{
                                           "display": false
                                         }]
                                       },
                                       "tooltips": false
                                    }
                                  }'>
                          </canvas>
                        </div>
                      </td>
                      <td>
                        <span class="badge badge-soft-success p-1">
                          <i class="tio-trending-up"></i> 6.6%
                        </span>
                      </td>
                      <td>159</td>
                      <td><i class="tio-star text-warning mr-1"></i> 2.92</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- End Table -->
            </div>

            <div class="tab-pane fade" id="weekly" role="tabpanel" aria-labelledby="weekly-tab">
              <!-- Table -->
              <div class="table-responsive">
                <table class="table table-borderless table-thead-bordered table-nowrap table-text-center table-align-middle card-table">
                  <thead class="thead-light">
                    <tr>
                      <th scope="col" style="width: 2rem;">Rank</th>
                      <th scope="col" class="text-left">Name</th>
                      <th scope="col">Closed issues</th>
                      <th scope="col">Projects</th>
                      <th scope="col">Progress</th>
                      <th scope="col">Efficiency rate</th>
                      <th scope="col">Hours</th>
                      <th scope="col">Avg. Score</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><span class="text-warning" style="font-size: 1.5rem;">🥇</span></td>
                      <td class="text-left">
                        <a class="d-flex align-items-center" href="user-profile.html">
                          <div class="avatar avatar-circle">
                            <img class="avatar-img" src="assets/img/160x160/img10.jpg" alt="Image Description">
                          </div>
                          <div class="ml-3">
                            <span class="d-block h5 text-hover-primary mb-0">Amanda Harvey</span>
                          </div>
                        </a>
                      </td>
                      <td>56</td>
                      <td>35</td>
                      <td>
                        <div class="chartjs-custom" style="height: 2rem; width: 6rem;">
                          <canvas class="js-chart"
                                  data-hs-chartjs-options='{
                                    "type": "line",
                                    "data": {
                                       "labels": ["value","value","value","value","value","value","value"],
                                       "datasets": [{
                                        "data": [21,20,24,20,18,30,50],
                                        "backgroundColor": "transparent",
                                        "borderColor": "#377dff",
                                        "borderWidth": 2,
                                        "pointRadius": 0,
                                        "pointHoverRadius": 0
                                      }]
                                    },
                                    "options": {
                                       "scales": {
                                         "yAxes": [{
                                           "display": false
                                         }],
                                         "xAxes": [{
                                           "display": false
                                         }]
                                       },
                                       "tooltips": false
                                    }
                                  }'>
                          </canvas>
                        </div>
                      </td>
                      <td>
                        <span class="badge badge-soft-success p-1">
                          <i class="tio-trending-up"></i> 3.9%
                        </span>
                      </td>
                      <td>505</td>
                      <td><i class="tio-star text-warning mr-1"></i> 4.80</td>
                    </tr>
                    <tr>
                      <td><span class="text-secondary" style="font-size: 1.5rem;">🥈</span></td>
                      <td class="text-left">
                        <a class="d-flex align-items-center" href="user-profile.html">
                          <div class="avatar avatar-soft-info avatar-circle">
                            <span class="avatar-initials">L</span>
                          </div>
                          <div class="ml-3">
                            <span class="d-block h5 text-hover-primary mb-0">Lori Hunter</span>
                          </div>
                        </a>
                      </td>
                      <td>82</td>
                      <td>31</td>
                      <td>
                        <div class="chartjs-custom" style="height: 2rem; width: 6rem;">
                          <canvas class="js-chart"
                                  data-hs-chartjs-options='{
                                    "type": "line",
                                    "data": {
                                       "labels": ["value","value","value","value","value","value","value"],
                                       "datasets": [{
                                        "data": [4,20,24,25,25,25,26],
                                        "backgroundColor": "transparent",
                                        "borderColor": "#377dff",
                                        "borderWidth": 2,
                                        "pointRadius": 0,
                                        "pointHoverRadius": 0
                                      }]
                                    },
                                    "options": {
                                       "scales": {
                                         "yAxes": [{
                                           "display": false
                                         }],
                                         "xAxes": [{
                                           "display": false
                                         }]
                                       },
                                       "tooltips": false
                                    }
                                  }'>
                          </canvas>
                        </div>
                      </td>
                      <td>
                        <span class="badge badge-soft-success p-1">
                          <i class="tio-trending-up"></i> 0.1%
                        </span>
                      </td>
                      <td>460</td>
                      <td><i class="tio-star text-warning mr-1"></i> 4.72</td>
                    </tr>
                    <tr>
                      <td><span style="font-size: 1.5rem; color: #924b18;">🥉</span></td>
                      <td class="text-left">
                        <a class="d-flex align-items-center" href="user-profile.html">
                          <div class="avatar avatar-circle">
                            <img class="avatar-img" src="assets/img/160x160/img8.jpg" alt="Image Description">
                          </div>
                          <div class="ml-3">
                            <span class="d-block h5 text-hover-primary mb-0">Linda Bates</span>
                          </div>
                        </a>
                      </td>
                      <td>34</td>
                      <td>76</td>
                      <td>
                        <div class="chartjs-custom" style="height: 2rem; width: 6rem;">
                          <canvas class="js-chart"
                                  data-hs-chartjs-options='{
                                    "type": "line",
                                    "data": {
                                       "labels": ["value","value","value","value","value","value","value"],
                                       "datasets": [{
                                        "data": [30,20,40,15,18,20,25],
                                        "backgroundColor": "transparent",
                                        "borderColor": "#377dff",
                                        "borderWidth": 2,
                                        "pointRadius": 0,
                                        "pointHoverRadius": 0
                                      }]
                                    },
                                    "options": {
                                       "scales": {
                                         "yAxes": [{
                                           "display": false
                                         }],
                                         "xAxes": [{
                                           "display": false
                                         }]
                                       },
                                       "tooltips": false
                                    }
                                  }'>
                          </canvas>
                        </div>
                      </td>
                      <td>
                        <span class="badge badge-soft-success p-1">
                          <i class="tio-trending-up"></i> 4.5%
                        </span>
                      </td>
                      <td>414</td>
                      <td><i class="tio-star text-warning mr-1"></i> 4.22</td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td class="text-left">
                        <a class="d-flex align-items-center" href="user-profile.html">
                          <div class="avatar avatar-soft-dark avatar-circle">
                            <span class="avatar-initials">B</span>
                          </div>
                          <div class="ml-3">
                            <span class="d-block h5 text-hover-primary mb-0">Brian Halligan</span>
                          </div>
                        </a>
                      </td>
                      <td>84</td>
                      <td>25</td>
                      <td>
                        <div class="chartjs-custom" style="height: 2rem; width: 6rem;">
                          <canvas class="js-chart"
                                  data-hs-chartjs-options='{
                                    "type": "line",
                                    "data": {
                                       "labels": ["value","value","value","value","value","value","value"],
                                       "datasets": [{
                                        "data": [5,8,12,20,18,25,15],
                                        "backgroundColor": "transparent",
                                        "borderColor": "#377dff",
                                        "borderWidth": 2,
                                        "pointRadius": 0,
                                        "pointHoverRadius": 0
                                      }]
                                    },
                                    "options": {
                                       "scales": {
                                         "yAxes": [{
                                           "display": false
                                         }],
                                         "xAxes": [{
                                           "display": false
                                         }]
                                       },
                                       "tooltips": false
                                    }
                                  }'>
                          </canvas>
                        </div>
                      </td>
                      <td>
                        <span class="badge badge-soft-danger p-1">
                          <i class="tio-trending-down"></i> 0.8%
                        </span>
                      </td>
                      <td>372</td>
                      <td><i class="tio-star text-warning mr-1"></i> 4.10</td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td class="text-left">
                        <a class="d-flex align-items-center" href="user-profile.html">
                          <div class="avatar avatar-circle">
                            <img class="avatar-img" src="assets/img/160x160/img3.jpg" alt="Image Description">
                          </div>
                          <div class="ml-3">
                            <span class="d-block h5 text-hover-primary mb-0">David Harrison</span>
                          </div>
                        </a>
                      </td>
                      <td>33</td>
                      <td>54</td>
                      <td>
                        <div class="chartjs-custom" style="height: 2rem; width: 6rem;">
                          <canvas class="js-chart"
                                  data-hs-chartjs-options='{
                                    "type": "line",
                                    "data": {
                                       "labels": ["value","value","value","value","value","value","value"],
                                       "datasets": [{
                                        "data": [10,20,22,20,22,17,12],
                                        "backgroundColor": "transparent",
                                        "borderColor": "#377dff",
                                        "borderWidth": 2,
                                        "pointRadius": 0,
                                        "pointHoverRadius": 0
                                      }]
                                    },
                                    "options": {
                                       "scales": {
                                         "yAxes": [{
                                           "display": false
                                         }],
                                         "xAxes": [{
                                           "display": false
                                         }]
                                       },
                                       "tooltips": false
                                    }
                                  }'>
                          </canvas>
                        </div>
                      </td>
                      <td>
                        <span class="badge badge-soft-danger p-1">
                          <i class="tio-trending-down"></i> 1.9%
                        </span>
                      </td>
                      <td>467</td>
                      <td><i class="tio-star text-warning mr-1"></i> 4.5</td>
                    </tr>
                    <tr>
                      <td>6</td>
                      <td class="text-left">
                        <a class="d-flex align-items-center" href="user-profile.html">
                          <div class="avatar avatar-circle">
                            <img class="avatar-img" src="assets/img/160x160/img6.jpg" alt="Image Description">
                          </div>
                          <div class="ml-3">
                            <span class="d-block h5 text-hover-primary mb-0">Costa Quinn</span>
                          </div>
                        </a>
                      </td>
                      <td>10</td>
                      <td>4</td>
                      <td>
                        <div class="chartjs-custom" style="height: 2rem; width: 6rem;">
                          <canvas class="js-chart"
                                  data-hs-chartjs-options='{
                                    "type": "line",
                                    "data": {
                                       "labels": ["value","value","value","value","value","value","value"],
                                       "datasets": [{
                                        "data": [5,20,24,10,18,14,9],
                                        "backgroundColor": "transparent",
                                        "borderColor": "#377dff",
                                        "borderWidth": 2,
                                        "pointRadius": 0,
                                        "pointHoverRadius": 0
                                      }]
                                    },
                                    "options": {
                                       "scales": {
                                         "yAxes": [{
                                           "display": false
                                         }],
                                         "xAxes": [{
                                           "display": false
                                         }]
                                       },
                                       "tooltips": false
                                    }
                                  }'>
                          </canvas>
                        </div>
                      </td>
                      <td>
                        <span class="badge badge-soft-danger p-1">
                          <i class="tio-trending-down"></i> 5.6%
                        </span>
                      </td>
                      <td>399</td>
                      <td><i class="tio-star text-warning mr-1"></i> 3.80</td>
                    </tr>
                    <tr>
                      <td>7</td>
                      <td class="text-left">
                        <a class="d-flex align-items-center" href="user-profile.html">
                          <div class="avatar avatar-circle">
                            <img class="avatar-img" src="assets/img/160x160/img5.jpg" alt="Image Description">
                          </div>
                          <div class="ml-3">
                            <span class="d-block h5 text-hover-primary mb-0">Finch Hoot</span>
                          </div>
                        </a>
                      </td>
                      <td>2</td>
                      <td>57</td>
                      <td>
                        <div class="chartjs-custom" style="height: 2rem; width: 6rem;">
                          <canvas class="js-chart"
                                  data-hs-chartjs-options='{
                                    "type": "line",
                                    "data": {
                                       "labels": ["value","value","value","value","value","value","value"],
                                       "datasets": [{
                                        "data": [10,23,32,20,44,17,23],
                                        "backgroundColor": "transparent",
                                        "borderColor": "#377dff",
                                        "borderWidth": 2,
                                        "pointRadius": 0,
                                        "pointHoverRadius": 0
                                      }]
                                    },
                                    "options": {
                                       "scales": {
                                         "yAxes": [{
                                           "display": false
                                         }],
                                         "xAxes": [{
                                           "display": false
                                         }]
                                       },
                                       "tooltips": false
                                    }
                                  }'>
                          </canvas>
                        </div>
                      </td>
                      <td>
                        <span class="badge badge-soft-success p-1">
                          <i class="tio-trending-up"></i> 6.2%
                        </span>
                      </td>
                      <td>202</td>
                      <td><i class="tio-star text-warning mr-1"></i> 3.54</td>
                    </tr>
                    <tr>
                      <td>8</td>
                      <td class="text-left">
                        <a class="d-flex align-items-center" href="user-profile.html">
                          <div class="avatar avatar-circle">
                            <img class="avatar-img" src="assets/img/160x160/img9.jpg" alt="Image Description">
                          </div>
                          <div class="ml-3">
                            <span class="d-block h5 text-hover-primary mb-0">Ella Lauda</span>
                          </div>
                        </a>
                      </td>
                      <td>5</td>
                      <td>15</td>
                      <td>
                        <div class="chartjs-custom" style="height: 2rem; width: 6rem;">
                          <canvas class="js-chart"
                                  data-hs-chartjs-options='{
                                    "type": "line",
                                    "data": {
                                       "labels": ["value","value","value","value","value","value","value"],
                                       "datasets": [{
                                        "data": [35,15,24,12,18,9,8],
                                        "backgroundColor": "transparent",
                                        "borderColor": "#377dff",
                                        "borderWidth": 2,
                                        "pointRadius": 0,
                                        "pointHoverRadius": 0
                                      }]
                                    },
                                    "options": {
                                       "scales": {
                                         "yAxes": [{
                                           "display": false
                                         }],
                                         "xAxes": [{
                                           "display": false
                                         }]
                                       },
                                       "tooltips": false
                                    }
                                  }'>
                          </canvas>
                        </div>
                      </td>
                      <td>
                        <span class="badge badge-soft-danger p-1">
                          <i class="tio-trending-down"></i> 0.1%
                        </span>
                      </td>
                      <td>204</td>
                      <td><i class="tio-star text-warning mr-1"></i> 3.45</td>
                    </tr>
                    <tr>
                      <td>9</td>
                      <td class="text-left">
                        <a class="d-flex align-items-center" href="user-profile.html">
                          <div class="avatar avatar-soft-primary avatar-circle">
                            <span class="avatar-initials">M</span>
                          </div>
                          <div class="ml-3">
                            <span class="d-block h5 text-hover-primary mb-0">Mark Colbert</span>
                          </div>
                        </a>
                      </td>
                      <td>29</td>
                      <td>43</td>
                      <td>
                        <div class="chartjs-custom" style="height: 2rem; width: 6rem;">
                          <canvas class="js-chart"
                                  data-hs-chartjs-options='{
                                    "type": "line",
                                    "data": {
                                       "labels": ["value","value","value","value","value","value","value"],
                                       "datasets": [{
                                        "data": [4,20,24,10,18,8,19],
                                        "backgroundColor": "transparent",
                                        "borderColor": "#377dff",
                                        "borderWidth": 2,
                                        "pointRadius": 0,
                                        "pointHoverRadius": 0
                                      }]
                                    },
                                    "options": {
                                       "scales": {
                                         "yAxes": [{
                                           "display": false
                                         }],
                                         "xAxes": [{
                                           "display": false
                                         }]
                                       },
                                       "tooltips": false
                                    }
                                  }'>
                          </canvas>
                        </div>
                      </td>
                      <td>
                        <span class="badge badge-soft-success p-1">
                          <i class="tio-trending-up"></i> 4.6%
                        </span>
                      </td>
                      <td>390</td>
                      <td><i class="tio-star text-warning mr-1"></i> 3.26</td>
                    </tr>
                    <tr>
                      <td>10</td>
                      <td class="text-left">
                        <a class="d-flex align-items-center" href="user-profile.html">
                          <div class="avatar avatar-soft-danger avatar-circle">
                            <span class="avatar-initials">C</span>
                          </div>
                          <div class="ml-3">
                            <span class="d-block h5 text-hover-primary mb-0">Chris Mathew</span>
                          </div>
                        </a>
                      </td>
                      <td>11</td>
                      <td>61</td>
                      <td>
                        <div class="chartjs-custom" style="height: 2rem; width: 6rem;">
                          <canvas class="js-chart"
                                  data-hs-chartjs-options='{
                                    "type": "line",
                                    "data": {
                                       "labels": ["value","value","value","value","value","value","value"],
                                       "datasets": [{
                                        "data": [10,20,12,20,24,17,35],
                                        "backgroundColor": "transparent",
                                        "borderColor": "#377dff",
                                        "borderWidth": 2,
                                        "pointRadius": 0,
                                        "pointHoverRadius": 0
                                      }]
                                    },
                                    "options": {
                                       "scales": {
                                         "yAxes": [{
                                           "display": false
                                         }],
                                         "xAxes": [{
                                           "display": false
                                         }]
                                       },
                                       "tooltips": false
                                    }
                                  }'>
                          </canvas>
                        </div>
                      </td>
                      <td>
                        <span class="badge badge-soft-success p-1">
                          <i class="tio-trending-up"></i> 6.6%
                        </span>
                      </td>
                      <td>159</td>
                      <td><i class="tio-star text-warning mr-1"></i> 2.92</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- End Table -->
            </div>

            <div class="tab-pane fade" id="monthly" role="tabpanel" aria-labelledby="monthly-tab">
              <!-- Table -->
              <div class="table-responsive">
                <table class="table table-borderless table-thead-bordered table-nowrap table-text-center table-align-middle card-table">
                  <thead class="thead-light">
                    <tr>
                      <th scope="col" style="width: 2rem;">Rank</th>
                      <th scope="col" class="text-left">Name</th>
                      <th scope="col">Closed issues</th>
                      <th scope="col">Completed projects</th>
                      <th scope="col">Progress</th>
                      <th scope="col">Efficiency rate</th>
                      <th scope="col">Hours</th>
                      <th scope="col">Avg. Score</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><span class="text-warning" style="font-size: 1.5rem;">🥇</span></td>
                      <td class="text-left">
                        <a class="d-flex align-items-center" href="user-profile.html">
                          <div class="avatar avatar-soft-info avatar-circle">
                            <span class="avatar-initials">L</span>
                          </div>
                          <div class="ml-3">
                            <span class="d-block h5 text-hover-primary mb-0">Lori Hunter</span>
                          </div>
                        </a>
                      </td>
                      <td>45</td>
                      <td>31</td>
                      <td>
                        <div class="chartjs-custom" style="height: 2rem; width: 6rem;">
                          <canvas class="js-chart"
                                  data-hs-chartjs-options='{
                                    "type": "line",
                                    "data": {
                                       "labels": ["value","value","value","value","value","value","value"],
                                       "datasets": [{
                                        "data": [15,36,17,20,4,30,32],
                                        "backgroundColor": "transparent",
                                        "borderColor": "#377dff",
                                        "borderWidth": 2,
                                        "pointRadius": 0,
                                        "pointHoverRadius": 0
                                      }]
                                    },
                                    "options": {
                                       "scales": {
                                         "yAxes": [{
                                           "display": false
                                         }],
                                         "xAxes": [{
                                           "display": false
                                         }]
                                       },
                                       "tooltips": false
                                    }
                                  }'>
                          </canvas>
                        </div>
                      </td>
                      <td>
                        <span class="badge badge-soft-success p-1">
                          <i class="tio-trending-up"></i> 0.5%
                        </span>
                      </td>
                      <td>460</td>
                      <td><i class="tio-star text-warning mr-1"></i> 4.72</td>
                    </tr>
                    <tr>
                      <td><span class="text-secondary" style="font-size: 1.5rem;">🥈</span></td>
                      <td class="text-left">
                        <a class="d-flex align-items-center" href="user-profile.html">
                          <div class="avatar avatar-circle">
                            <img class="avatar-img" src="assets/img/160x160/img10.jpg" alt="Image Description">
                          </div>
                          <div class="ml-3">
                            <span class="d-block h5 text-hover-primary mb-0">Amanda Harvey</span>
                          </div>
                        </a>
                      </td>
                      <td>12</td>
                      <td>35</td>
                      <td>
                        <div class="chartjs-custom" style="height: 2rem; width: 6rem;">
                          <canvas class="js-chart"
                                  data-hs-chartjs-options='{
                                    "type": "line",
                                    "data": {
                                       "labels": ["value","value","value","value","value","value","value"],
                                       "datasets": [{
                                        "data": [22,15,24,47,18,25,29],
                                        "backgroundColor": "transparent",
                                        "borderColor": "#377dff",
                                        "borderWidth": 2,
                                        "pointRadius": 0,
                                        "pointHoverRadius": 0
                                      }]
                                    },
                                    "options": {
                                       "scales": {
                                         "yAxes": [{
                                           "display": false
                                         }],
                                         "xAxes": [{
                                           "display": false
                                         }]
                                       },
                                       "tooltips": false
                                    }
                                  }'>
                          </canvas>
                        </div>
                      </td>
                      <td>
                        <span class="badge badge-soft-success p-1">
                          <i class="tio-trending-up"></i> 3.5%
                        </span>
                      </td>
                      <td>505</td>
                      <td><i class="tio-star text-warning mr-1"></i> 4.71</td>
                    </tr>
                    <tr>
                      <td><span style="font-size: 1.5rem; color: #924b18;">🥉</span></td>
                      <td class="text-left">
                        <a class="d-flex align-items-center" href="user-profile.html">
                          <div class="avatar avatar-circle">
                            <img class="avatar-img" src="assets/img/160x160/img3.jpg" alt="Image Description">
                          </div>
                          <div class="ml-3">
                            <span class="d-block h5 text-hover-primary mb-0">David Harrison</span>
                          </div>
                        </a>
                      </td>
                      <td>1</td>
                      <td>54</td>
                      <td>
                        <div class="chartjs-custom" style="height: 2rem; width: 6rem;">
                          <canvas class="js-chart"
                                  data-hs-chartjs-options='{
                                    "type": "line",
                                    "data": {
                                       "labels": ["value","value","value","value","value","value","value"],
                                       "datasets": [{
                                        "data": [5,15,12,31,18,14,10],
                                        "backgroundColor": "transparent",
                                        "borderColor": "#377dff",
                                        "borderWidth": 2,
                                        "pointRadius": 0,
                                        "pointHoverRadius": 0
                                      }]
                                    },
                                    "options": {
                                       "scales": {
                                         "yAxes": [{
                                           "display": false
                                         }],
                                         "xAxes": [{
                                           "display": false
                                         }]
                                       },
                                       "tooltips": false
                                    }
                                  }'>
                          </canvas>
                        </div>
                      </td>
                      <td>
                        <span class="badge badge-soft-danger p-1">
                          <i class="tio-trending-down"></i> 2.1%
                        </span>
                      </td>
                      <td>467</td>
                      <td><i class="tio-star text-warning mr-1"></i> 4.65</td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td class="text-left">
                        <a class="d-flex align-items-center" href="user-profile.html">
                          <div class="avatar avatar-circle">
                            <img class="avatar-img" src="assets/img/160x160/img6.jpg" alt="Image Description">
                          </div>
                          <div class="ml-3">
                            <span class="d-block h5 text-hover-primary mb-0">Costa Quinn</span>
                          </div>
                        </a>
                      </td>
                      <td>0</td>
                      <td>4</td>
                      <td>
                        <div class="chartjs-custom" style="height: 2rem; width: 6rem;">
                          <canvas class="js-chart"
                                  data-hs-chartjs-options='{
                                    "type": "line",
                                    "data": {
                                       "labels": ["value","value","value","value","value","value","value"],
                                       "datasets": [{
                                        "data": [16,15,22,47,33,15,10],
                                        "backgroundColor": "transparent",
                                        "borderColor": "#377dff",
                                        "borderWidth": 2,
                                        "pointRadius": 0,
                                        "pointHoverRadius": 0
                                      }]
                                    },
                                    "options": {
                                       "scales": {
                                         "yAxes": [{
                                           "display": false
                                         }],
                                         "xAxes": [{
                                           "display": false
                                         }]
                                       },
                                       "tooltips": false
                                    }
                                  }'>
                          </canvas>
                        </div>
                      </td>
                      <td>
                        <span class="badge badge-soft-danger p-1">
                          <i class="tio-trending-down"></i> 2.7%
                        </span>
                      </td>
                      <td>399</td>
                      <td><i class="tio-star text-warning mr-1"></i> 4.30</td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td class="text-left">
                        <a class="d-flex align-items-center" href="user-profile.html">
                          <div class="avatar avatar-soft-dark avatar-circle">
                            <span class="avatar-initials">B</span>
                          </div>
                          <div class="ml-3">
                            <span class="d-block h5 text-hover-primary mb-0">Brian Halligan</span>
                          </div>
                        </a>
                      </td>
                      <td>10</td>
                      <td>25</td>
                      <td>
                        <div class="chartjs-custom" style="height: 2rem; width: 6rem;">
                          <canvas class="js-chart"
                                  data-hs-chartjs-options='{
                                    "type": "line",
                                    "data": {
                                       "labels": ["value","value","value","value","value","value","value"],
                                       "datasets": [{
                                        "data": [12,15,55,47,24,20,22],
                                        "backgroundColor": "transparent",
                                        "borderColor": "#377dff",
                                        "borderWidth": 2,
                                        "pointRadius": 0,
                                        "pointHoverRadius": 0
                                      }]
                                    },
                                    "options": {
                                       "scales": {
                                         "yAxes": [{
                                           "display": false
                                         }],
                                         "xAxes": [{
                                           "display": false
                                         }]
                                       },
                                       "tooltips": false
                                    }
                                  }'>
                          </canvas>
                        </div>
                      </td>
                      <td>
                        <span class="badge badge-soft-success p-1">
                          <i class="tio-trending-up"></i> 1.1%
                        </span>
                      </td>
                      <td>372</td>
                      <td><i class="tio-star text-warning mr-1"></i> 4.25</td>
                    </tr>
                    <tr>
                      <td>6</td>
                      <td class="text-left">
                        <a class="d-flex align-items-center" href="user-profile.html">
                          <div class="avatar avatar-circle">
                            <img class="avatar-img" src="assets/img/160x160/img8.jpg" alt="Image Description">
                          </div>
                          <div class="ml-3">
                            <span class="d-block h5 text-hover-primary mb-0">Linda Bates</span>
                          </div>
                        </a>
                      </td>
                      <td>39</td>
                      <td>76</td>
                      <td>
                        <div class="chartjs-custom" style="height: 2rem; width: 6rem;">
                          <canvas class="js-chart"
                                  data-hs-chartjs-options='{
                                    "type": "line",
                                    "data": {
                                       "labels": ["value","value","value","value","value","value","value"],
                                       "datasets": [{
                                        "data": [22,53,24,22,18,33,29],
                                        "backgroundColor": "transparent",
                                        "borderColor": "#377dff",
                                        "borderWidth": 2,
                                        "pointRadius": 0,
                                        "pointHoverRadius": 0
                                      }]
                                    },
                                    "options": {
                                       "scales": {
                                         "yAxes": [{
                                           "display": false
                                         }],
                                         "xAxes": [{
                                           "display": false
                                         }]
                                       },
                                       "tooltips": false
                                    }
                                  }'>
                          </canvas>
                        </div>
                      </td>
                      <td>
                        <span class="badge badge-soft-danger p-1">
                          <i class="tio-trending-down"></i> 1.6%
                        </span>
                      </td>
                      <td>414</td>
                      <td><i class="tio-star text-warning mr-1"></i> 4.12</td>
                    </tr>
                    <tr>
                      <td>7</td>
                      <td class="text-left">
                        <a class="d-flex align-items-center" href="user-profile.html">
                          <div class="avatar avatar-circle">
                            <img class="avatar-img" src="assets/img/160x160/img5.jpg" alt="Image Description">
                          </div>
                          <div class="ml-3">
                            <span class="d-block h5 text-hover-primary mb-0">Finch Hoot</span>
                          </div>
                        </a>
                      </td>
                      <td>64</td>
                      <td>57</td>
                      <td>
                        <div class="chartjs-custom" style="height: 2rem; width: 6rem;">
                          <canvas class="js-chart"
                                  data-hs-chartjs-options='{
                                    "type": "line",
                                    "data": {
                                       "labels": ["value","value","value","value","value","value","value"],
                                       "datasets": [{
                                        "data": [22,15,24,47,18,25,29],
                                        "backgroundColor": "transparent",
                                        "borderColor": "#377dff",
                                        "borderWidth": 2,
                                        "pointRadius": 0,
                                        "pointHoverRadius": 0
                                      }]
                                    },
                                    "options": {
                                       "scales": {
                                         "yAxes": [{
                                           "display": false
                                         }],
                                         "xAxes": [{
                                           "display": false
                                         }]
                                       },
                                       "tooltips": false
                                    }
                                  }'>
                          </canvas>
                        </div>
                      </td>
                      <td>
                        <span class="badge badge-soft-success p-1">
                          <i class="tio-trending-up"></i> 3.3%
                        </span>
                      </td>
                      <td>202</td>
                      <td><i class="tio-star text-warning mr-1"></i> 3.02</td>
                    </tr>
                    <tr>
                      <td>8</td>
                      <td class="text-left">
                        <a class="d-flex align-items-center" href="user-profile.html">
                          <div class="avatar avatar-soft-primary avatar-circle">
                            <span class="avatar-initials">M</span>
                          </div>
                          <div class="ml-3">
                            <span class="d-block h5 text-hover-primary mb-0">Mark Colbert</span>
                          </div>
                        </a>
                      </td>
                      <td>83</td>
                      <td>43</td>
                      <td>
                        <div class="chartjs-custom" style="height: 2rem; width: 6rem;">
                          <canvas class="js-chart"
                                  data-hs-chartjs-options='{
                                    "type": "line",
                                    "data": {
                                       "labels": ["value","value","value","value","value","value","value"],
                                       "datasets": [{
                                        "data": [10,15,24,47,18,37,32],
                                        "backgroundColor": "transparent",
                                        "borderColor": "#377dff",
                                        "borderWidth": 2,
                                        "pointRadius": 0,
                                        "pointHoverRadius": 0
                                      }]
                                    },
                                    "options": {
                                       "scales": {
                                         "yAxes": [{
                                           "display": false
                                         }],
                                         "xAxes": [{
                                           "display": false
                                         }]
                                       },
                                       "tooltips": false
                                    }
                                  }'>
                          </canvas>
                        </div>
                      </td>
                      <td>
                        <span class="badge badge-soft-danger p-1">
                          <i class="tio-trending-down"></i> 5.2%
                        </span>
                      </td>
                      <td>390</td>
                      <td><i class="tio-star text-warning mr-1"></i> 3.01</td>
                    </tr>
                    <tr>
                      <td>9</td>
                      <td class="text-left">
                        <a class="d-flex align-items-center" href="user-profile.html">
                          <div class="avatar avatar-soft-danger avatar-circle">
                            <span class="avatar-initials">C</span>
                          </div>
                          <div class="ml-3">
                            <span class="d-block h5 text-hover-primary mb-0">Chris Mathew</span>
                          </div>
                        </a>
                      </td>
                      <td>30</td>
                      <td>61</td>
                      <td>
                        <div class="chartjs-custom" style="height: 2rem; width: 6rem;">
                          <canvas class="js-chart"
                                  data-hs-chartjs-options='{
                                    "type": "line",
                                    "data": {
                                       "labels": ["value","value","value","value","value","value","value"],
                                       "datasets": [{
                                        "data": [6,3,24,20,10,11,14],
                                        "backgroundColor": "transparent",
                                        "borderColor": "#377dff",
                                        "borderWidth": 2,
                                        "pointRadius": 0,
                                        "pointHoverRadius": 0
                                      }]
                                    },
                                    "options": {
                                       "scales": {
                                         "yAxes": [{
                                           "display": false
                                         }],
                                         "xAxes": [{
                                           "display": false
                                         }]
                                       },
                                       "tooltips": false
                                    }
                                  }'>
                          </canvas>
                        </div>
                      </td>
                      <td>
                        <span class="badge badge-soft-success p-1">
                          <i class="tio-trending-up"></i> 1.4%
                        </span>
                      </td>
                      <td>159</td>
                      <td><i class="tio-star text-warning mr-1"></i> 2.87</td>
                    </tr>
                    <tr>
                      <td>10</td>
                      <td class="text-left">
                        <a class="d-flex align-items-center" href="user-profile.html">
                          <div class="avatar avatar-circle">
                            <img class="avatar-img" src="assets/img/160x160/img9.jpg" alt="Image Description">
                          </div>
                          <div class="ml-3">
                            <span class="d-block h5 text-hover-primary mb-0">Ella Lauda</span>
                          </div>
                        </a>
                      </td>
                      <td>15</td>
                      <td>15</td>
                      <td>
                        <div class="chartjs-custom" style="height: 2rem; width: 6rem;">
                          <canvas class="js-chart"
                                  data-hs-chartjs-options='{
                                    "type": "line",
                                    "data": {
                                       "labels": ["value","value","value","value","value","value","value"],
                                       "datasets": [{
                                        "data": [22,15,24,47,18,25,22],
                                        "backgroundColor": "transparent",
                                        "borderColor": "#377dff",
                                        "borderWidth": 2,
                                        "pointRadius": 0,
                                        "pointHoverRadius": 0
                                      }]
                                    },
                                    "options": {
                                       "scales": {
                                         "yAxes": [{
                                           "display": false
                                         }],
                                         "xAxes": [{
                                           "display": false
                                         }]
                                       },
                                       "tooltips": false
                                    }
                                  }'>
                          </canvas>
                        </div>
                      </td>
                      <td>
                        <span class="badge badge-soft-danger p-1">
                          <i class="tio-trending-down"></i> 2.1%
                        </span>
                      </td>
                      <td>204</td>
                      <td><i class="tio-star text-warning mr-1"></i> 2.67</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- End Table -->
            </div>
          </div>
          <!-- End Tab Content -->
        </div>
        <!-- End Card -->
      </div>
      <!-- End Content -->

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
    <!-- ========== END MAIN CONTENT ========== -->

    <!-- ========== SECONDARY CONTENTS ========== -->
    <!-- Keyboard Shortcuts -->
    <div id="keyboardShortcutsSidebar" class="hs-unfold-content sidebar sidebar-bordered sidebar-box-shadow">
      <div class="card card-lg sidebar-card sidebar-scrollbar">
        <div class="card-header">
          <h4 class="card-header-title">Keyboard shortcuts</h4>

          <!-- Toggle Button -->
          <a class="js-hs-unfold-invoker btn btn-icon btn-xs btn-ghost-dark ml-2" href="javascript:;"
             data-hs-unfold-options='{
                "target": "#keyboardShortcutsSidebar",
                "type": "css-animation",
                "animationIn": "fadeInRight",
                "animationOut": "fadeOutRight",
                "hasOverlay": true,
                "smartPositionOff": true
               }'>
            <i class="tio-clear tio-lg"></i>
          </a>
          <!-- End Toggle Button -->
        </div>

        <!-- Body -->
        <div class="card-body sidebar-body">
          <div class="list-group list-group-sm list-group-flush list-group-no-gutters mb-5">
            <div class="list-group-item">
              <h5 class="mb-1">Formatting</h5>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span class="font-weight-bold">Bold</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">b</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <em>italic</em>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">i</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <u>Underline</u>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">u</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <s>Strikethrough</s>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">Alt</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">s</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span class="small">Small text</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">s</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <mark>Highlight</mark>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">e</kbd>
                </div>
              </div>
            </div>
          </div>

          <div class="list-group list-group-sm list-group-flush list-group-no-gutters mb-5">
            <div class="list-group-item">
              <h5 class="mb-1">Insert</h5>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Mention person <a href="#">(@Brian)</a></span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">@</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Link to doc <a href="#">(+Meeting notes)</a></span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">+</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <a href="#">#hashtag</a>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">#hashtag</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Date</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">/date</kbd>
                  <kbd class="d-inline-block mb-1">Space</kbd>
                  <kbd class="d-inline-block mb-1">/datetime</kbd>
                  <kbd class="d-inline-block mb-1">/datetime</kbd>
                  <kbd class="d-inline-block mb-1">Space</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Time</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">/time</kbd>
                  <kbd class="d-inline-block mb-1">Space</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Note box</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">/note</kbd>
                  <kbd class="d-inline-block mb-1">Enter</kbd>
                  <kbd class="d-inline-block mb-1">/note red</kbd>
                  <kbd class="d-inline-block mb-1">/note red</kbd>
                  <kbd class="d-inline-block mb-1">Enter</kbd>
                </div>
              </div>
            </div>
          </div>

          <div class="list-group list-group-sm list-group-flush list-group-no-gutters mb-5">
            <div class="list-group-item">
              <h5 class="mb-1">Editing</h5>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Find and replace</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">r</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Find next</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">n</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Find previous</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">p</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Indent</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Tab</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Un-indent</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Shift</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">Tab</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Move line up</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">Shift</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1"><i class="tio-arrow-large-upward-outlined"></i></kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Move line down</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">Shift</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1"><i class="tio-arrow-large-downward-outlined font-size-sm"></i></kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Add a comment</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">Alt</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">m</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Undo</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">z</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Redo</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">y</kbd>
                </div>
              </div>
            </div>
          </div>

          <div class="list-group list-group-sm list-group-flush list-group-no-gutters">
            <div class="list-group-item">
              <h5 class="mb-1">Application</h5>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Create new doc</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">Alt</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">n</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Present</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">Shift</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">p</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Share</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">Shift</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">s</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Search docs</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">Shift</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">o</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Keyboard shortcuts</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">Shift</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">/</kbd>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End Body -->
      </div>
    </div>
    <!-- End Keyboard Shortcuts -->

    <!-- Activity -->
    <div id="activitySidebar" class="hs-unfold-content sidebar sidebar-bordered sidebar-box-shadow sidebar-scrollbar">
      <div class="card card-lg sidebar-card">
        <div class="card-header">
          <h4 class="card-header-title">Activity stream</h4>

          <!-- Toggle Button -->
          <a class="js-hs-unfold-invoker btn btn-icon btn-xs btn-ghost-dark ml-2" href="javascript:;"
             data-hs-unfold-options='{
              "target": "#activitySidebar",
              "type": "css-animation",
              "animationIn": "fadeInRight",
              "animationOut": "fadeOutRight",
              "hasOverlay": true,
              "smartPositionOff": true
             }'>
            <i class="tio-clear tio-lg"></i>
          </a>
          <!-- End Toggle Button -->
        </div>

        <!-- Body -->
        <div class="card-body sidebar-body">
          <!-- Step -->
          <ul class="step step-icon-sm step-avatar-sm">
            <!-- Step Item -->
            <li class="step-item">
              <div class="step-content-wrapper">
                <div class="step-avatar">
                  <img class="step-avatar-img" src="assets/img/160x160/img9.jpg" alt="Image Description">
                </div>

                <div class="step-content">
                  <h5 class="mb-1">Iana Robinson</h5>

                  <p class="font-size-sm mb-1">Added 2 files to task <a class="text-uppercase" href="#"><i class="tio-folder-bookmarked"></i> Fd-7</a></p>

                  <ul class="list-group list-group-sm">
                    <!-- List Item -->
                    <li class="list-group-item list-group-item-light">
                      <div class="row gx-1">
                        <div class="col-6">
                          <div class="media">
                              <span class="mt-1 mr-2">
                                <img class="avatar avatar-xs" src="assets/svg/brands/excel.svg" alt="Image Description">
                              </span>
                            <div class="media-body text-truncate">
                              <span class="d-block font-size-sm text-dark text-truncate" title="weekly-reports.xls">weekly-reports.xls</span>
                              <small class="d-block text-muted">12kb</small>
                            </div>
                          </div>
                        </div>
                        <div class="col-6">
                          <div class="media">
                              <span class="mt-1 mr-2">
                                <img class="avatar avatar-xs" src="assets/svg/brands/word.svg" alt="Image Description">
                              </span>
                            <div class="media-body text-truncate">
                              <span class="d-block font-size-sm text-dark text-truncate" title="weekly-reports.xls">weekly-reports.xls</span>
                              <small class="d-block text-muted">4kb</small>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <!-- End List Item -->
                  </ul>

                  <small class="text-muted text-uppercase">Now</small>
                </div>
              </div>
            </li>
            <!-- End Step Item -->

            <!-- Step Item -->
            <li class="step-item">
              <div class="step-content-wrapper">
                <span class="step-icon step-icon-soft-dark">B</span>

                <div class="step-content">
                  <h5 class="mb-1">Bob Dean</h5>

                  <p class="font-size-sm mb-1">Marked <a class="text-uppercase" href="#"><i class="tio-folder-bookmarked"></i> Fr-6</a> as <span class="badge badge-soft-success badge-pill"><span class="legend-indicator bg-success"></span>"Completed"</span></p>

                  <small class="text-muted text-uppercase">Today</small>
                </div>
              </div>
            </li>
            <!-- End Step Item -->

            <!-- Step Item -->
            <li class="step-item">
              <div class="step-content-wrapper">
                <div class="step-avatar">
                  <img class="step-avatar-img" src="assets/img/160x160/img3.jpg" alt="Image Description">
                </div>

                <div class="step-content">
                  <h5 class="h5 mb-1">Crane</h5>

                  <p class="font-size-sm mb-1">Added 5 card to <a href="#">Payments</a></p>

                  <ul class="list-group list-group-sm">
                    <li class="list-group-item list-group-item-light">
                      <div class="row gx-1">
                        <div class="col">
                          <img class="img-fluid rounded ie-sidebar-activity-img" src="assets/svg/illustrations/card-1.svg" alt="Image Description">
                        </div>
                        <div class="col">
                          <img class="img-fluid rounded ie-sidebar-activity-img" src="assets/svg/illustrations/card-2.svg" alt="Image Description">
                        </div>
                        <div class="col">
                          <img class="img-fluid rounded ie-sidebar-activity-img" src="assets/svg/illustrations/card-3.svg" alt="Image Description">
                        </div>
                        <div class="col-auto align-self-center">
                          <div class="text-center">
                            <a href="#">+2</a>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>

                  <small class="text-muted text-uppercase">May 12</small>
                </div>
              </div>
            </li>
            <!-- End Step Item -->

            <!-- Step Item -->
            <li class="step-item">
              <div class="step-content-wrapper">
                <span class="step-icon step-icon-soft-info">D</span>

                <div class="step-content">
                  <h5 class="mb-1">David Lidell</h5>

                  <p class="font-size-sm mb-1">Added a new member to Front Dashboard</p>

                  <small class="text-muted text-uppercase">May 15</small>
                </div>
              </div>
            </li>
            <!-- End Step Item -->

            <!-- Step Item -->
            <li class="step-item">
              <div class="step-content-wrapper">
                <div class="step-avatar">
                  <img class="step-avatar-img" src="assets/img/160x160/img7.jpg" alt="Image Description">
                </div>

                <div class="step-content">
                  <h5 class="mb-1">Rachel King</h5>

                  <p class="font-size-sm mb-1">Marked <a class="text-uppercase" href="#"><i class="tio-folder-bookmarked"></i> Fr-3</a> as <span class="badge badge-soft-success badge-pill"><span class="legend-indicator bg-success"></span>"Completed"</span></p>

                  <small class="text-muted text-uppercase">Apr 29</small>
                </div>
              </div>
            </li>
            <!-- End Step Item -->

            <!-- Step Item -->
            <li class="step-item">
              <div class="step-content-wrapper">
                <div class="step-avatar">
                  <img class="step-avatar-img" src="assets/img/160x160/img5.jpg" alt="Image Description">
                </div>

                <div class="step-content">
                  <h5 class="mb-1">Finch Hoot</h5>

                  <p class="font-size-sm mb-1">Earned a "Top endorsed" <i class="tio-verified text-primary"></i> badge</p>

                  <small class="text-muted text-uppercase">Apr 06</small>
                </div>
              </div>
            </li>
            <!-- End Step Item -->

            <!-- Step Item -->
            <li class="step-item">
              <div class="step-content-wrapper">
                  <span class="step-icon step-icon-soft-primary">
                    <i class="tio-user"></i>
                  </span>

                <div class="step-content">
                  <h5 class="mb-1">Project status updated</h5>

                  <p class="font-size-sm mb-1">Marked <a class="text-uppercase" href="#"><i class="tio-folder-bookmarked"></i> Fr-3</a> as <span class="badge badge-soft-primary badge-pill"><span class="legend-indicator bg-primary"></span>"In progress"</span></p>

                  <small class="text-muted text-uppercase">Feb 10</small>
                </div>
              </div>
            </li>
            <!-- End Step Item -->
          </ul>
          <!-- End Step -->

          <a class="btn btn-block btn-white" href="javascript:;">View all <i class="tio-chevron-right"></i></a>
        </div>
        <!-- End Body -->
      </div>
    </div>
    <!-- End Activity -->

    <!-- Welcome Message Modal -->
    <div class="modal fade" id="welcomeMessageModal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <!-- Header -->
          <div class="modal-close">
            <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary" data-dismiss="modal" aria-label="Close">
              <i class="tio-clear tio-lg"></i>
            </button>
          </div>
          <!-- End Header -->

          <!-- Body -->
          <div class="modal-body p-sm-5">
            <div class="text-center">
              <div class="w-75 w-sm-50 mx-auto mb-4">
                <img class="img-fluid" src="assets/svg/illustrations/graphs.svg" alt="Image Description">
              </div>

              <h4 class="h1">Welcome to Front</h4>

              <p>We're happy to see you in our community.</p>
            </div>
          </div>
          <!-- End Body -->

          <!-- Footer -->
          <div class="modal-footer d-block text-center py-sm-5">
            <small class="text-cap mb-4">Trusted by the world's best teams</small>

            <div class="w-85 mx-auto">
              <div class="row justify-content-between">
                <div class="col">
                  <img class="img-fluid ie-welcome-brands" src="assets/svg/brands/gitlab-gray.svg" alt="Image Description">
                </div>
                <div class="col">
                  <img class="img-fluid ie-welcome-brands" src="assets/svg/brands/fitbit-gray.svg" alt="Image Description">
                </div>
                <div class="col">
                  <img class="img-fluid ie-welcome-brands" src="assets/svg/brands/flow-xo-gray.svg" alt="Image Description">
                </div>
                <div class="col">
                  <img class="img-fluid ie-welcome-brands" src="assets/svg/brands/layar-gray.svg" alt="Image Description">
                </div>
              </div>
            </div>
          </div>
          <!-- End Footer -->
        </div>
      </div>
    </div>
    <!-- End Welcome Message Modal -->
    <!-- ========== END SECONDARY CONTENTS ========== -->


    <!-- JS Implementing Plugins -->
    <script src="assets/js/vendor.min.js"></script>
    <script src="assets/vendor/chart.js/dist/Chart.min.js"></script>
    
    

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

        // initialization of line chartist
        $('.js-chart').each(function () {
          $.HSCore.components.HSChartJS.init($(this));
        });
      });
    </script>

    <!-- IE Support -->
    <script>
      if (/MSIE \d|Trident.*rv:/.test(navigator.userAgent)) document.write('<script src="assets/vendor/babel-polyfill/polyfill.min.js"><\/script>');
    </script>
  </body>

<!-- Mirrored from htmlstream.com/front-dashboard/users-leaderboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 Nov 2020 01:57:53 GMT -->
</html>