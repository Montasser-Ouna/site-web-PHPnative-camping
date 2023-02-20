<?php
  include_once "../Controller/UtilisateurC.php";

    $utilisateurc=new UtilisateurC();
  $utilisateur4=$utilisateurc->AfficherUtilisateurs();
  $utilisateur5=$utilisateurc->AfficherUtilisateurs();

?>

<?php /*<script src="back-ressources/assets/vendor/hs-navbar-vertical-aside/hs-navbar-vertical-aside-mini-cache.js"></script> */?>

<!-- ONLY DEV -->
<!-- JS Preview mode only -->

<?php  /*       surtout pour la barre de recherche  Num : "A"  */     ?>

<div id="headerMain" class="d-none">
  <header id="header" class="navbar navbar-expand-lg navbar-fixed navbar-height navbar-flush navbar-container navbar-bordered">
    <div class="navbar-nav-wrap">
      <div class="navbar-brand-wrapper">
        <!-- Logo -->
        <a class="navbar-brand" href="index.php" aria-label="Camping Fevers">
          <img class="navbar-brand-logo" src="assets/svg/logos/logo.png" alt="Logo" />
          <img class="navbar-brand-logo-mini" src="assets/svg/logos/logo-short.png" alt="Logo" />
        </a>
        <!-- End Logo -->
      </div>
      <div class="navbar-nav-wrap-content-left">
        <!-- Navbar Vertical Toggle -->
        <button type="button" class="js-navbar-vertical-aside-toggle-invoker close mr-3">
          <i class="tio-first-page navbar-vertical-aside-toggle-short-align" data-toggle="tooltip" data-placement="right" title="Collapse"> </i>
          <i class="tio-last-page navbar-vertical-aside-toggle-full-align" data-template='
          <div class="tooltip d-none d-sm-block" role="tooltip">
            <div class="arrow"></div>
            <div class="tooltip-inner"></div>
          </div>'
          data-toggle="tooltip" data-placement="right" title="Expand"
          > </i>
        </button>
        <!-- End Navbar Vertical Toggle -->
        <!-- Search Form -->

        <!-- End Search Form -->
      </div>
      <!-- Secondary Content -->
      <div class="navbar-nav-wrap-content-right">
        <!-- Navbar -->
        <ul class="navbar-nav align-items-center flex-row">
          <li class="nav-item d-md-none">
            <!-- Search Trigger -->
            <div class="hs-unfold">
              <a class="js-hs-unfold-invoker btn btn-icon btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options=' {   "target": "#searchDropdown",   "type": "css-animation",   "animationIn": "fadeIn",   "hasOverlay": "rgba(46, 52, 81, 0.1)",   "closeBreakpoint": "md" }'>
                <i class="tio-search"></i>
              </a>
            </div>
            <!-- End Search Trigger -->
          </li>
          <li class="nav-item d-none d-sm-inline-block">
            <!-- Notification -->
            <div class="hs-unfold">
              <a class="js-hs-unfold-invoker btn btn-icon btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options=' {   "target": "#notificationDropdown",   "type": "css-animation" }'>
                <i class="tio-notifications-on-outlined"></i>
                <span class="btn-status btn-sm-status btn-status-danger"></span>
              </a>
              <div id="notificationDropdown" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right navbar-dropdown-menu" style="width: 25rem;">
                <!-- Header -->
                <div class="card-header">
                  <span class="card-title h4">Notifications</span>
                  <!-- Unfold -->
                  <div class="hs-unfold">
                    <a class="js-hs-unfold-invoker btn btn-icon btn-sm btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options='{"target": "#notificationSettingsOneDropdown", "type": "css-animation" }'>
                      <i class="tio-more-vertical"></i>
                    </a>
                    <div id="notificationSettingsOneDropdown" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right">
                      <span class="dropdown-header">Settings</span>
                      <a class="dropdown-item" href="#">
                        <i class="tio-archive dropdown-item-icon"></i> Archive all
                      </a>
                      <a class="dropdown-item" href="#">
                        <i class="tio-all-done dropdown-item-icon"></i>Mark all as read
                      </a>
                      <a class="dropdown-item" href="#">
                        <i class="tio-toggle-off dropdown-item-icon"></i> Disable notifications
                      </a>
                      <a class="dropdown-item" href="#">
                        <i class="tio-gift dropdown-item-icon"></i> What's new?
                      </a>
                      <div class="dropdown-divider"></div>
                      <span class="dropdown-header">Feedback</span>
                      <a class="dropdown-item" href="#">
                        <i class="tio-chat-outlined dropdown-item-icon"></i> Report
                      </a>
                    </div>
                  </div>
                  <!-- End Unfold -->
                </div>
                <!-- End Header -->
                <!-- Nav -->
                <ul class="nav nav-tabs nav-justified" id="notificationTab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="notificationNavOne-tab" data-toggle="tab" href="#notificationNavOne" role="tab" aria-controls="notificationNavOne" aria-selected="true">
                      <?php
                        $nb=0;
                        foreach ($utilisateur5 as $r) { if(strcmp($r['timee'],"")!=0) $nb++; } ?> Messages (<?php echo $nb ?>)
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="notificationNavTwo-tab" data-toggle="tab" href="#notificationNavTwo" role="tab" aria-controls="notificationNavTwo" aria-selected="false">Archived</a>
                  </li>
                </ul>
                <!-- End Nav -->
                <!-- Body -->
                <div class="card-body-height">
                  <!-- Tab Content -->
                  <div class="tab-content" id="notificationTabContent">
                    <div class="tab-pane fade show active" id="notificationNavOne" role="tabpanel" aria-labelledby="notificationNavOne-tab">
                      <ul class="list-group list-group-flush navbar-card-list-group">
                        <?php foreach($utilisateur4 as $row ) { if(strcmp($row['timee'],"")!=0) { ?>
                        <!-- Item -->
                        <li class="list-group-item custom-checkbox-list-wrapper">
                          <div class="row">
                            <div class="col-auto position-static">
                              <div class="d-flex align-items-center">
                                <div class="custom-control custom-checkbox custom-checkbox-list">
                                  <input type="checkbox" class="custom-control-input" id="notificationCheck1" checked />
                                  <label class="custom-control-label" for="notificationCheck1"></label>
                                  <span class="custom-checkbox-list-stretched-bg"></span>
                                </div>
                                <div class="avatar avatar-sm avatar-circle">
                                  <img class="avatar-img" src="<?php echo $row['pdp']?>" alt="Image Description" />
                                </div>
                              </div>
                            </div>
                            <div class="col ml-n3">
                              <span class="card-title h5"><?php echo $row['nom']; echo $row['prenom'];  ?></span>
                              <p class="card-text font-size-sm">Just logged in as a <?php echo $row['accesstype'] ; ?>
                                <span class="badge badge-success">Review</span>
                              </p>
                            </div>
                            <small class="col-auto text-muted text-cap"><?php echo $row['timee'] ; ?></small>
                          </div>
                          <a class="stretched-link" href="#"></a>
                        </li>
                        <!-- End Item -->
                        <?php }} ?>
                      </ul>
                    </div>
                    <div class="tab-pane fade" id="notificationNavTwo" role="tabpanel" aria-labelledby="notificationNavTwo-tab">
                      <ul class="list-group list-group-flush navbar-card-list-group">
                        <!-- Item -->
                        <li class="list-group-item custom-checkbox-list-wrapper">
                          <div class="row">
                            <div class="col-auto position-static">
                              <div class="d-flex align-items-center">
                                <div class="custom-control custom-checkbox custom-checkbox-list">
                                  <input type="checkbox" class="custom-control-input" id="notificationCheck7" />
                                  <label class="custom-control-label" for="notificationCheck7"></label>
                                  <span class="custom-checkbox-list-stretched-bg"></span>
                                </div>
                                <div class="avatar avatar-sm avatar-soft-dark avatar-circle">
                                  <span class="avatar-initials">A</span>
                                </div>
                              </div>
                            </div>
                            <div class="col ml-n3">
                              <span class="card-title h5">Anne Richard</span>
                              <p class="card-text font-size-sm">accepted your invitation to join Notion</p>
                            </div>
                            <small class="col-auto text-muted text-cap">1dy</small>
                          </div>
                          <a class="stretched-link" href="#"></a>
                        </li>
                        <!-- End Item -->
                      </ul>
                    </div>
                  </div>
                  <!-- End Tab Content -->
                </div>
                <!-- End Body -->
                <!-- Card Footer -->
                <a class="card-footer text-center" href="#">
                  View all notifications <i class="tio-chevron-right"></i>
                </a>
                <!-- End Card Footer -->
              </div>
            </div>
            <!-- End Notification -->
          </li>

          <li class="nav-item d-none d-sm-inline-block">

          </li>
          <li class="nav-item">
            <!-- Account -->
            <div class="hs-unfold">
              <a class="js-hs-unfold-invoker navbar-dropdown-account-wrapper" href="javascript:;" data-hs-unfold-options=' {   "target": "#accountNavbarDropdown",   "type": "css-animation"  }'>
                <div class="avatar avatar-sm avatar-circle">
                  <img class="avatar-img" src="media/back160.jpg" alt="Image Description" />
                  <span class="avatar-status avatar-sm-status avatar-status-success"></span>
                </div>
              </a>
              <div id="accountNavbarDropdown" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right navbar-dropdown-menu navbar-dropdown-account" style="width: 16rem;">
                <div class="dropdown-item">
                  <div class="media align-items-center">
                    <div class="avatar avatar-sm avatar-circle mr-2">
                      <img class="avatar-img" src="media/back160.jpg" alt="Image Description" />
                    </div>
                    <div class="media-body">
                      <span class="card-title h5"><?php echo $_SESSION['nomUser']; ?> </span>
                    </div>
                  </div>
                </div>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="showu.php?idutilisateur=<?php echo($_SESSION['userID']); ?>">
                  <span class="text-truncate pr-2" title="Profile &amp; account">Profile &amp; account</span>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="showclub.php?idClubcamping=<?php echo $_SESSION['clubID'] ?>">
                  <div class="media align-items-center">
                    <div class="avatar avatar-sm avatar-dark avatar-circle mr-2">
                      <span class="avatar-initials">HS</span>
                    </div>
                    <div class="media-body">
                      <span class="card-title h5"><?php echo $_SESSION['nomClub']; ?>
                        <span class="badge badge-primary badge-pill text-uppercase ml-1">club</span>
                      </span>
                      <span class="card-text"><?php echo $_SESSION['contactClub']; ?></span>
                    </div>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">
                  <span class="text-truncate pr-2" title="Manage team">Manage team</span>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="../views/deconnexion.php">
                  <span class="text-truncate pr-2" title="Sign out">Sign out</span>
                </a>
              </div>
            </div>
            <!-- End Account -->
          </li>
        </ul>
        <!-- End Navbar -->
      </div>
      <!-- End Secondary Content -->
    </div>
  </header>
</div>

<?php /*   surtout pour les notifications   */    ?>

<div id="headerFluid" class="d-none">
  <header id="header" class="navbar navbar-expand-xl navbar-fixed navbar-height navbar-flush navbar-container navbar-bordered">
    <div class="js-mega-menu navbar-nav-wrap">
      <div class="navbar-brand-wrapper">
        <!-- Logo -->
        <a class="navbar-brand" href="index.php" aria-label="Front">
          <img class="navbar-brand-logo" src="assets/svg/logos/logo.png" alt="Logo" />
        </a>
        <!-- End Logo -->
      </div>

      <?php /* refers: Secondary Content BARRE DE NAVIGATION HORIZONTALE :-> Pour la cloche-> Appli-> Activité-> compte */ ?>

      <!-- Secondary Content -->
      <div class="navbar-nav-wrap-content-right">
        <!-- Navbar -->
        <ul class="navbar-nav align-items-center flex-row">
          <li class="nav-item d-none d-sm-inline-block">

            <!-- Notification -->
            <div class="hs-unfold">
              <a class="js-hs-unfold-invoker btn btn-icon btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options='{"target": "#notificationDropdown", "type": "css-animation"}'>
                <i class="tio-notifications-on-outlined"></i>
                <span class="btn-status btn-sm-status btn-status-danger"></span>
              </a>
              <div id="notificationDropdown" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right navbar-dropdown-menu" style="width: 25rem;">

                <!-- Header -->
                <div class="card-header">
                  <span class="card-title h4">   Notifications   </span>
                  <!-- Unfold -->
                  <div class="hs-unfold">
                    <a class="js-hs-unfold-invoker btn btn-icon btn-sm btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options=' {   "target": "#notificationSettingsOneDropdown",   "type": "css-animation" }'>
                      <i class="tio-more-vertical"></i>
                    </a>
                    <div id="notificationSettingsOneDropdown" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right">
                      <span class="dropdown-header">Settings</span>
                      <a class="dropdown-item" href="#">
                        <i class="tio-archive dropdown-item-icon"></i>
                        Archive all
                      </a>
                      <a class="dropdown-item" href="#">
                        <i class="tio-all-done dropdown-item-icon"></i>
                        Mark all as read
                      </a>
                      <a class="dropdown-item" href="#">
                        <i class="tio-toggle-off dropdown-item-icon"></i>
                        Disable notifications
                      </a>
                      <a class="dropdown-item" href="#">
                        <i class="tio-gift dropdown-item-icon"></i>
                        What's new?
                      </a>
                      <div class="dropdown-divider"></div>
                      <span class="dropdown-header">Feedback</span>
                      <a class="dropdown-item" href="#">
                        <i class="tio-chat-outlined dropdown-item-icon"></i>
                        Report
                      </a>
                    </div>
                  </div>
                  <!-- End Unfold -->
                </div>
                <!-- End Header -->
                <!-- Nav -->
                <ul class="nav nav-tabs nav-justified" id="notificationTab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="notificationNavOne-tab" data-toggle="tab" href="#notificationNavOne" role="tab" aria-controls="notificationNavOne" aria-selected="true">Messages (3)</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="notificationNavTwo-tab" data-toggle="tab" href="#notificationNavTwo" role="tab" aria-controls="notificationNavTwo" aria-selected="false">Archived</a>
                  </li>
                </ul>
                <!-- End Nav -->
                <!-- Body -->
                <div class="card-body-height">
                  <!-- Tab Content -->
                  <div class="tab-content" id="notificationTabContent">
                    <div class="tab-pane fade show active" id="notificationNavOne" role="tabpanel" aria-labelledby="notificationNavOne-tab">
                      <ul class="list-group list-group-flush navbar-card-list-group">
                        <!-- Item -->
                        <li class="list-group-item custom-checkbox-list-wrapper">
                          <div class="row">
                            <div class="col-auto position-static">
                              <div class="d-flex align-items-center">
                                <div class="custom-control custom-checkbox custom-checkbox-list">
                                  <input type="checkbox" class="custom-control-input" id="notificationCheck1" checked />
                                  <label class="custom-control-label" for="notificationCheck1"></label>
                                  <span class="custom-checkbox-list-stretched-bg"></span>
                                </div>
                                <div class="avatar avatar-sm avatar-circle">
                                  <img class="avatar-img" src="assets/img/160x160/img3.jpg" alt="Image Description" />
                                </div>
                              </div>
                            </div>
                            <div class="col ml-n3">
                              <span class="card-title h5">Brian Warner</span>
                              <p class="card-text font-size-sm">changed an issue from "In Progress" to
                                <span class="badge badge-success">Review</span>
                              </p>
                            </div>
                            <small class="col-auto text-muted text-cap">2hr</small>
                          </div>
                          <a class="stretched-link" href="#"></a>
                        </li>
                        <!-- End Item -->
                        <!-- Item -->
                        <li class="list-group-item custom-checkbox-list-wrapper">
                          <div class="row">
                            <div class="col-auto position-static">
                              <div class="d-flex align-items-center">
                                <div class="custom-control custom-checkbox custom-checkbox-list">
                                  <input type="checkbox" class="custom-control-input" id="notificationCheck2" checked />
                                  <label class="custom-control-label" for="notificationCheck2"></label>
                                  <span class="custom-checkbox-list-stretched-bg"></span>
                                </div>
                                <div class="avatar avatar-sm avatar-soft-dark avatar-circle">
                                  <span class="avatar-initials">K</span>
                                </div>
                              </div>
                            </div>
                            <div class="col ml-n3">
                              <span class="card-title h5">Klara Hampton</span>
                              <p class="card-text font-size-sm">mentioned you in a comment</p>
                              <blockquote class="blockquote blockquote-sm">
                                Nice work, love! You really nailed it. Keep it up!
                              </blockquote>
                            </div>
                            <small class="col-auto text-muted text-cap">10hr</small>
                          </div>
                          <a class="stretched-link" href="#"></a>
                        </li>
                        <!-- End Item -->
                        <!-- Item -->
                        <li class="list-group-item custom-checkbox-list-wrapper">
                          <div class="row">
                            <div class="col-auto position-static">
                              <div class="d-flex align-items-center">
                                <div class="custom-control custom-checkbox custom-checkbox-list">
                                  <input type="checkbox" class="custom-control-input" id="notificationCheck4" checked />
                                  <label class="custom-control-label" for="notificationCheck4"></label>
                                  <span class="custom-checkbox-list-stretched-bg"></span>
                                </div>
                                <div class="avatar avatar-sm avatar-circle">
                                  <img class="avatar-img" src="assets/img/160x160/img10.jpg" alt="Image Description" />
                                </div>
                              </div>
                            </div>
                            <div class="col ml-n3">
                              <span class="card-title h5">Ruby Walter</span>
                              <p class="card-text font-size-sm">joined the Slack group HS Team</p>
                            </div>
                            <small class="col-auto text-muted text-cap">3dy</small>
                          </div>
                          <a class="stretched-link" href="#"></a>
                        </li>
                        <!-- End Item -->
                        <!-- Item -->
                        <li class="list-group-item custom-checkbox-list-wrapper">
                          <div class="row">
                            <div class="col-auto position-static">
                              <div class="d-flex align-items-center">
                                <div class="custom-control custom-checkbox custom-checkbox-list">
                                  <input type="checkbox" class="custom-control-input" id="notificationCheck3" />
                                  <label class="custom-control-label" for="notificationCheck3"></label>
                                  <span class="custom-checkbox-list-stretched-bg"></span>
                                </div>
                                <div class="avatar avatar-sm avatar-circle">
                                  <img class="avatar-img" src="assets/svg/brands/google.svg" alt="Image Description" />
                                </div>
                              </div>
                            </div>
                            <div class="col ml-n3">
                              <span class="card-title h5">from Google</span>
                              <p class="card-text font-size-sm">Start using forms to capture the information of prospects visiting your Google website</p>
                            </div>
                            <small class="col-auto text-muted text-cap">17dy</small>
                          </div>
                          <a class="stretched-link" href="#"></a>
                        </li>
                        <!-- End Item -->
                        <!-- Item -->
                        <li class="list-group-item custom-checkbox-list-wrapper">
                          <div class="row">
                            <div class="col-auto position-static">
                              <div class="d-flex align-items-center">
                                <div class="custom-control custom-checkbox custom-checkbox-list">
                                  <input type="checkbox" class="custom-control-input" id="notificationCheck5" />
                                  <label class="custom-control-label" for="notificationCheck5"></label>
                                  <span class="custom-checkbox-list-stretched-bg"></span>
                                </div>
                                <div class="avatar avatar-sm avatar-circle">
                                  <img class="avatar-img" src="assets/img/160x160/img7.jpg" alt="Image Description" />
                                </div>
                              </div>
                            </div>
                            <div class="col ml-n3">
                              <span class="card-title h5">Sara Villar</span>
                              <p class="card-text font-size-sm">completed
                                <i class="tio-folder-bookmarked text-primary"></i> FD-7 task
                              </p>
                            </div>
                            <small class="col-auto text-muted text-cap">2mn</small>
                          </div>
                          <a class="stretched-link" href="#"></a>
                        </li>
                        <!-- End Item -->
                      </ul>
                    </div>
                    <div class="tab-pane fade" id="notificationNavTwo" role="tabpanel" aria-labelledby="notificationNavTwo-tab">
                      <ul class="list-group list-group-flush navbar-card-list-group">
                        <!-- Item -->
                        <li class="list-group-item custom-checkbox-list-wrapper">
                          <div class="row">
                            <div class="col-auto position-static">
                              <div class="d-flex align-items-center">
                                <div class="custom-control custom-checkbox custom-checkbox-list">
                                  <input type="checkbox" class="custom-control-input" id="notificationCheck7" />
                                  <label class="custom-control-label" for="notificationCheck7"></label>
                                  <span class="custom-checkbox-list-stretched-bg"></span>
                                </div>
                                <div class="avatar avatar-sm avatar-soft-dark avatar-circle">
                                  <span class="avatar-initials">A</span>
                                </div>
                              </div>
                            </div>
                            <div class="col ml-n3">
                              <span class="card-title h5">Anne Richard</span>
                              <p class="card-text font-size-sm">accepted your invitation to join Notion</p>
                            </div>
                            <small class="col-auto text-muted text-cap">1dy</small>
                          </div>
                          <a class="stretched-link" href="#"></a>
                        </li>
                        <!-- End Item -->
                        <!-- Item -->
                        <li class="list-group-item custom-checkbox-list-wrapper">
                          <div class="row">
                            <div class="col-auto position-static">
                              <div class="d-flex align-items-center">
                                <div class="custom-control custom-checkbox custom-checkbox-list">
                                  <input type="checkbox" class="custom-control-input" id="notificationCheck6" />
                                  <label class="custom-control-label" for="notificationCheck6"></label>
                                  <span class="custom-checkbox-list-stretched-bg"></span>
                                </div>
                                <div class="avatar avatar-sm avatar-circle">
                                  <img class="avatar-img" src="assets/img/160x160/img5.jpg" alt="Image Description" />
                                </div>
                              </div>
                            </div>
                            <div class="col ml-n3">
                              <span class="card-title h5">Finch Hoot</span>
                              <p class="card-text font-size-sm">left Slack group HS projects</p>
                            </div>
                            <small class="col-auto text-muted text-cap">3dy</small>
                          </div>
                          <a class="stretched-link" href="#"></a>
                        </li>
                        <!-- End Item -->
                        <!-- Item -->
                        <li class="list-group-item custom-checkbox-list-wrapper">
                          <div class="row">
                            <div class="col-auto position-static">
                              <div class="d-flex align-items-center">
                                <div class="custom-control custom-checkbox custom-checkbox-list">
                                  <input type="checkbox" class="custom-control-input" id="notificationCheck8" />
                                  <label class="custom-control-label" for="notificationCheck8"></label>
                                  <span class="custom-checkbox-list-stretched-bg"></span>
                                </div>
                                <div class="avatar avatar-sm avatar-dark avatar-circle">
                                  <span class="avatar-initials">HS</span>
                                </div>
                              </div>
                            </div>
                            <div class="col ml-n3">
                              <span class="card-title h5">Htmlstream</span>
                              <p class="card-text font-size-sm">you earned a "Top endorsed"
                                <i class="tio-verified text-primary"></i> badge
                              </p>
                            </div>
                            <small class="col-auto text-muted text-cap">6dy</small>
                          </div>
                          <a class="stretched-link" href="#"></a>
                        </li>
                        <!-- End Item -->
                        <!-- Item -->
                        <li class="list-group-item custom-checkbox-list-wrapper">
                          <div class="row">
                            <div class="col-auto position-static">
                              <div class="d-flex align-items-center">
                                <div class="custom-control custom-checkbox custom-checkbox-list">
                                  <input type="checkbox" class="custom-control-input" id="notificationCheck9" />
                                  <label class="custom-control-label" for="notificationCheck9"></label>
                                  <span class="custom-checkbox-list-stretched-bg"></span>
                                </div>
                                <div class="avatar avatar-sm avatar-circle">
                                  <img class="avatar-img" src="assets/img/160x160/img8.jpg" alt="Image Description" />
                                </div>
                              </div>
                            </div>
                            <div class="col ml-n3">
                              <span class="card-title h5">Linda Bates</span>
                              <p class="card-text font-size-sm">Accepted your connection</p>
                            </div>
                            <small class="col-auto text-muted text-cap">17dy</small>
                          </div>
                          <a class="stretched-link" href="#"></a>
                        </li>
                        <!-- End Item -->
                        <!-- Item -->
                        <li class="list-group-item custom-checkbox-list-wrapper">
                          <div class="row">
                            <div class="col-auto position-static">
                              <div class="d-flex align-items-center">
                                <div class="custom-control custom-checkbox custom-checkbox-list">
                                  <input type="checkbox" class="custom-control-input" id="notificationCheck10" />
                                  <label class="custom-control-label" for="notificationCheck10"></label>
                                  <span class="custom-checkbox-list-stretched-bg"></span>
                                </div>
                                <div class="avatar avatar-sm avatar-soft-dark avatar-circle">
                                  <span class="avatar-initials">L</span>
                                </div>
                              </div>
                            </div>
                            <div class="col ml-n3">
                              <span class="card-title h5">Lewis Clarke</span>
                              <p class="card-text font-size-sm">completed
                                <i class="tio-folder-bookmarked text-primary"></i> FD-134 task
                              </p>
                            </div>
                            <small class="col-auto text-muted text-cap">2mn</small>
                          </div>
                          <a class="stretched-link" href="#"></a>
                        </li>
                        <!-- End Item -->
                      </ul>
                    </div>
                  </div>
                  <!-- End Tab Content -->
                </div>
                <!-- End Body -->
                <!-- Card Footer -->
                <a class="card-footer text-center" href="#">
                  View all notifications
                  <i class="tio-chevron-right"></i>
                </a>
                <!-- End Card Footer -->
              </div>
            </div>
            <!-- End Notification -->

          </li>
          <li class="nav-item d-none d-sm-inline-block">

            <!-- Apps -->
            <div class="hs-unfold">
              <a class="js-hs-unfold-invoker btn btn-icon btn-ghost-secondary rounded-circle"  href="javascript:;" data-hs-unfold-options=' {   "target": "#appsDropdown",   "type": "css-animation" }'>
                <i class="tio-menu-vs-outlined"></i>
              </a>
              <div id="appsDropdown" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right navbar-dropdown-menu" style="width: 25rem;">
                <!-- Header -->
                <div class="card-header">
                  <span class="card-title h4">Web apps &amp; services</span>
                </div>
                <!-- End Header -->
                <!-- Body -->
                <div class="card-body card-body-height">
                  <!-- Nav -->
                  <div class="nav nav-pills flex-column">
                    <a class="nav-link" href="#">
                      <div class="media align-items-center">
                        <span class="mr-3">
                          <img class="avatar avatar-xs avatar-4by3" src="assets/svg/brands/atlassian.svg" alt="Image Description" />
                        </span>
                        <div class="media-body text-truncate">
                          <span class="h5 mb-0">Atlassian</span>
                          <span class="d-block font-size-sm text-body">Security and control across Cloud</span>
                        </div>
                      </div>
                    </a>
                    <a class="nav-link" href="#">
                      <div class="media align-items-center">
                        <span class="mr-3">
                          <img class="avatar avatar-xs avatar-4by3" src="assets/svg/brands/slack.svg" alt="Image Description" />
                        </span>
                        <div class="media-body text-truncate">
                          <span class="h5 mb-0">Slack
                            <span class="badge badge-primary badge-pill text-uppercase ml-1">Try</span>
                          </span>
                          <span class="d-block font-size-sm text-body">Email collaboration software</span>
                        </div>
                      </div>
                    </a>
                    <a class="nav-link" href="#">
                      <div class="media align-items-center">
                        <span class="mr-3">
                          <img class="avatar avatar-xs avatar-4by3" src="assets/svg/brands/google-webdev.svg" alt="Image Description" />
                        </span>
                        <div class="media-body text-truncate">
                          <span class="h5 mb-0">Google webdev</span>
                          <span class="d-block font-size-sm text-body">Work involved in developing a website</span>
                        </div>
                      </div>
                    </a>
                    <a class="nav-link" href="#">
                      <div class="media align-items-center">
                        <span class="mr-3">
                          <img class="avatar avatar-xs avatar-4by3" src="assets/svg/brands/frontapp.svg" alt="Image Description" />
                        </span>
                        <div class="media-body text-truncate">
                          <span class="h5 mb-0">Frontapp</span>
                          <span class="d-block font-size-sm text-body">The inbox for teams</span>
                        </div>
                      </div>
                    </a>
                    <a class="nav-link" href="#">
                      <div class="media align-items-center">
                        <span class="mr-3">
                          <img class="avatar avatar-xs avatar-4by3" src="assets/svg/illustrations/review-rating-shield.svg" alt="Image Description" />
                        </span>
                        <div class="media-body text-truncate">
                          <span class="h5 mb-0">HS Support</span>
                          <span class="d-block font-size-sm text-body">Customer service and support</span>
                        </div>
                      </div>
                    </a>
                    <a class="nav-link" href="#">
                      <div class="media align-items-center">
                        <span class="avatar avatar-xs avatar-soft-dark mr-3">
                          <span class="avatar-initials">
                            <i class="tio-apps"></i>
                          </span>
                        </span>
                        <div class="media-body text-truncate">
                          <span class="h5 mb-0">More Front products</span>
                          <span class="d-block font-size-sm text-body">Check out more HS products</span>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- End Nav -->
                </div>
                <!-- End Body -->
                <!-- Footer -->
                <a class="card-footer text-center" href="#">
                  View all apps

                  <i class="tio-chevron-right"></i>
                </a>
                <!-- End Footer -->
              </div>
            </div>
            <!-- End Apps -->

          </li>
          <li class="nav-item d-none d-sm-inline-block">


          </li>
          <li class="nav-item">

            <!-- Account -->
            <div class="hs-unfold">
              <a class="js-hs-unfold-invoker navbar-dropdown-account-wrapper" href="javascript:;" data-hs-unfold-options='{ "target": "#accountNavbarDropdown", "type": "css-animation" }' >
                <div class="avatar avatar-sm avatar-circle">
                  <img class="avatar-img" src="assets/img/160x160/img6.jpg" alt="Image Description" />
                  <span class="avatar-status avatar-sm-status avatar-status-success"></span>
                </div>
              </a>
              <div id="accountNavbarDropdown" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right navbar-dropdown-menu navbar-dropdown-account" style="width: 16rem;">
                <div class="dropdown-item">
                  <div class="media align-items-center">
                    <div class="avatar avatar-sm avatar-circle mr-2">
                      <img class="avatar-img" src="assets/img/160x160/img6.jpg" alt="Image Description" />
                    </div>
                    <div class="media-body">
                      <span class="card-title h5">Mark Williams</span>
                      <span class="card-text">mark@example.com</span>
                    </div>
                  </div>
                </div>
                <div class="dropdown-divider"></div>
                <!-- Unfold -->
                <div class="hs-unfold w-100">
                  <a class="js-hs-unfold-invoker navbar-dropdown-submenu-item dropdown-item d-flex align-items-center" href="javascript:;" data-hs-unfold-options='{ "target": "#navSubmenuPagesAccountDropdown1", "event": "hover" }' >
                    <span class="text-truncate pr-2" title="Set status">Set status</span>
                    <i class="tio-chevron-right navbar-dropdown-submenu-item-invoker ml-auto"></i>
                  </a>
                  <div id="navSubmenuPagesAccountDropdown1" class="hs-unfold-content hs-unfold-has-submenu dropdown-unfold dropdown-menu navbar-dropdown-sub-menu">
                    <a class="dropdown-item" href="#">
                      <span class="legend-indicator bg-success mr-1"></span>
                      <span class="text-truncate pr-2" title="Available">Available</span>
                    </a>
                    <a class="dropdown-item" href="#">
                      <span class="legend-indicator bg-danger mr-1"></span>
                      <span class="text-truncate pr-2" title="Busy">Busy</span>
                    </a>
                    <a class="dropdown-item" href="#">
                      <span class="legend-indicator bg-warning mr-1"></span>
                      <span class="text-truncate pr-2" title="Away">Away</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                      <span class="text-truncate pr-2" title="Reset status">Reset status</span>
                    </a>
                  </div>
                </div>
                <!-- End Unfold -->
                <a class="dropdown-item" href="#">
                  <span class="text-truncate pr-2" title="Profile &amp; account">Profile &amp; account</span>
                </a>
                <a class="dropdown-item" href="#">
                  <span class="text-truncate pr-2" title="Settings">Settings</span>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">
                  <div class="media align-items-center">
                    <div class="avatar avatar-sm avatar-dark avatar-circle mr-2">
                      <span class="avatar-initials">HS</span>
                    </div>
                    <div class="media-body">
                      <span class="card-title h5">Htmlstream
                        <span class="badge badge-primary badge-pill text-uppercase ml-1">PRO</span>
                      </span>
                      <span class="card-text">hs.example.com</span>
                    </div>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <!-- Unfold -->
                <div class="hs-unfold w-100">
                  <a class="js-hs-unfold-invoker navbar-dropdown-submenu-item dropdown-item d-flex align-items-center" href="javascript:;" data-hs-unfold-options='{ "target": "#navSubmenuPagesAccountDropdown2", "event": "hover" }' >
                    <span class="text-truncate pr-2" title="Customization">Customization</span>
                    <i class="tio-chevron-right navbar-dropdown-submenu-item-invoker ml-auto"></i>
                  </a>
                  <div id="navSubmenuPagesAccountDropdown2" class="hs-unfold-content hs-unfold-has-submenu dropdown-unfold dropdown-menu navbar-dropdown-sub-menu">
                    <a class="dropdown-item" href="#">
                      <span class="text-truncate pr-2" title="Invite people">Invite people</span>
                    </a>
                    <a class="dropdown-item" href="#">
                      <span class="text-truncate pr-2" title="Analytics">Analytics</span>
                      <i class="tio-open-in-new"></i>
                    </a>
                    <a class="dropdown-item" href="#">
                      <span class="text-truncate pr-2" title="Customize Front">Customize Front</span>
                      <i class="tio-open-in-new"></i>
                    </a>
                  </div>
                </div>
                <!-- End Unfold -->
                <a class="dropdown-item" href="#">
                  <span class="text-truncate pr-2" title="Manage team">Manage team</span>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="../views/deconnexion.php">
                  <span class="text-truncate pr-2" title="Sign out">Sign out</span>
                </a>
              </div>
            </div>
            <!-- End Account -->

          </li>
          <li class="nav-item">

            <!-- Toggle -->
            <button type="button"  class="navbar-toggler btn btn-ghost-secondary rounded-circle" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navbarNavMenu"  data-toggle="collapse" data-target="#navbarNavMenu" >
              <i class="tio-menu-hamburger"></i>
            </button>
            <!-- End Toggle -->

          </li>
        </ul>
        <!-- End Navbar -->
      </div>
      <!-- End Secondary Content -->

      <!-- importance inconnue : à regarder de plus près -->
      <!-- Navbar -->
      <div class="navbar-nav-wrap-content-left collapse navbar-collapse" id="navbarNavMenu">
        <div class="navbar-body">
          <ul class="navbar-nav flex-grow-1">
            <!-- Dashboards -->
            <li class="hs-has-sub-menu">
              <a id="dashboardsDropdown" class="hs-mega-menu-invoker navbar-nav-link nav-link nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-labelledby="navLinkDashboardsDropdown">
                <i class="tio-home-vs-1-outlined nav-icon"></i> Dashboards

              </a>
              <!-- Dropdown -->
              <ul id="navLinkDashboardsDropdown" class="hs-sub-menu dropdown-menu dropdown-menu-lg" aria-labelledby="dashboardsDropdown" style="min-width: 16rem;">
                <li>
                  <a class="dropdown-item" href="index.php">
                    <span class="tio-circle nav-indicator-icon"></span> Default
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="dashboard-alternative.php">
                    <span class="tio-circle nav-indicator-icon"></span> Alternative
                  </a>
                </li>
              </ul>
              <!-- End Dropdown -->
            </li>
            <!-- End Dashboards -->
            <!-- Pages -->
            <li class="hs-has-sub-menu">
              <a id="pagesDropdown" class="hs-mega-menu-invoker navbar-nav-link nav-link nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-labelledby="navLinkPagesDropdown">
                <i class="tio-pages-outlined nav-icon"></i> Pages

              </a>
              <!-- Dropdown -->
              <ul id="navLinkPagesDropdown" class="hs-sub-menu dropdown-menu dropdown-menu-lg" aria-labelledby="pagesDropdown" style="min-width: 16rem;">
                <!-- Users -->
                <li class="hs-has-sub-menu">
                  <a id="pagesDropdownUsers" class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navLinkPagesDropdownUsers">
                    <span class="tio-circle nav-indicator-icon"></span> Users

                  </a>
                  <ul id="navLinkPagesDropdownUsers" class="hs-sub-menu dropdown-menu dropdown-menu-lg" aria-labelledby="pagesDropdownUsers" style="min-width: 16rem;">
                    <li>
                      <a class="dropdown-item" href="users.php">
                        <span class="tio-circle-outlined nav-indicator-icon"></span> Overview
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="users-leaderboard.php">
                        <span class="tio-circle-outlined nav-indicator-icon"></span> Leaderboard
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="users-add-user.php">
                        <span class="tio-circle-outlined nav-indicator-icon"></span> Add user
                        <span class="badge badge-info badge-pill ml-1">Hot</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!-- End Users -->
                <!-- User Profile -->
                <li class="hs-has-sub-menu">
                  <a id="pagesDropdownUserProfile" class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navLinkPagesDropdownUserProfile" >
                    <span class="tio-circle nav-indicator-icon"></span> User profile
                    <span class="badge badge-primary badge-pill ml-2">5</span>
                  </a>
                  <ul id="navLinkPagesDropdownUserProfile" class="hs-sub-menu dropdown-menu dropdown-menu-lg" aria-labelledby="pagesDropdownUserProfile" style="min-width: 16rem;">
                    <li>
                      <a class="dropdown-item" href="user-profile.php">
                        <span class="tio-circle-outlined nav-indicator-icon"></span> Profile
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="user-profile-teams.php">
                        <span class="tio-circle-outlined nav-indicator-icon"></span> Teams
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="user-profile-projects.php">
                        <span class="tio-circle-outlined nav-indicator-icon"></span> Projects
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="user-profile-connections.php">
                        <span class="tio-circle-outlined nav-indicator-icon"></span> Connections
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="user-profile-my-profile.php">
                        <span class="tio-circle-outlined nav-indicator-icon"></span> My profile
                      </a>
                    </li>
                  </ul>
                </li>
                <!-- End User Profile -->
                <!-- Account -->
                <li class="hs-has-sub-menu">
                  <a id="pagesDropdownAccount" class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navLinkPagesDropdownAccount">
                    <span class="tio-circle nav-indicator-icon"></span> Account

                  </a>
                  <ul id="navLinkPagesDropdownAccount" class="hs-sub-menu dropdown-menu dropdown-menu-lg" aria-labelledby="pagesDropdownAccount" style="min-width: 16rem;">
                    <li>
                      <a class="dropdown-item" href="account-settings.php">
                        <span class="tio-circle-outlined nav-indicator-icon"></span> Settings
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="account-billing.php">
                        <span class="tio-circle-outlined nav-indicator-icon"></span> Billing
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="account-invoice.php">
                        <span class="tio-circle-outlined nav-indicator-icon"></span> Invoice
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="account-api-keys.php">
                        <span class="tio-circle-outlined nav-indicator-icon"></span> API Keys
                      </a>
                    </li>
                  </ul>
                </li>
                <!-- End Account -->
                <!-- Projects -->
                <li class="hs-has-sub-menu">
                  <a id="pagesDropdownProjects" class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navLinkPagesDropdownProjects">
                    <span class="tio-circle nav-indicator-icon"></span> Projects

                  </a>
                  <ul id="navLinkPagesDropdownProjects" class="hs-sub-menu dropdown-menu dropdown-menu-lg" aria-labelledby="pagesDropdownProjects" style="min-width: 16rem;">
                    <li>
                      <a class="dropdown-item" href="projects.php">
                        <span class="tio-circle-outlined nav-indicator-icon"></span> Overview
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="projects-timeline.php">
                        <span class="tio-circle-outlined nav-indicator-icon"></span> Timeline
                      </a>
                    </li>
                  </ul>
                </li>
                <!-- End Projects -->
                <!-- Project -->
                <li class="hs-has-sub-menu">
                  <a id="pagesDropdownProject" class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navLinkPagesDropdownProject">
                    <span class="tio-circle nav-indicator-icon"></span> Project

                  </a>
                  <ul id="navLinkPagesDropdownProject" class="hs-sub-menu dropdown-menu dropdown-menu-lg" aria-labelledby="pagesDropdownProject" style="min-width: 16rem;">
                    <li>
                      <a class="dropdown-item" href="project.php">
                        <span class="tio-circle-outlined nav-indicator-icon"></span> Overview
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="project-files.php">
                        <span class="tio-circle-outlined nav-indicator-icon"></span> Files
                        <span class="badge badge-info badge-pill ml-1">Hot</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="project-activity.php">
                        <span class="tio-circle-outlined nav-indicator-icon"></span> Activity
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="project-teams.php">
                        <span class="tio-circle-outlined nav-indicator-icon"></span> Teams
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="project-settings.php">
                        <span class="tio-circle-outlined nav-indicator-icon"></span> Settings
                      </a>
                    </li>
                  </ul>
                </li>
                <!-- End Project -->
                <li class="dropdown-divider"></li>
                <!-- Signin -->
                <li class="hs-has-sub-menu">
                  <a id="pagesDropdownSignin" class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navLinkPagesDropdownSignin">
                    <span class="tio-circle nav-indicator-icon"></span> Sign in

                  </a>
                  <ul id="navLinkPagesDropdownSignin" class="hs-sub-menu dropdown-menu dropdown-menu-lg" aria-labelledby="pagesDropdownSignin" style="min-width: 16rem;">
                    <li>
                      <a class="dropdown-item" href="authentication-signin-basic.php">
                        <span class="tio-circle-outlined nav-indicator-icon"></span> Basic
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="authentication-signin-cover.php">
                        <span class="tio-circle-outlined nav-indicator-icon"></span> Cover
                      </a>
                    </li>
                  </ul>
                </li>
                <!-- End Signin -->
                <!-- Signup -->
                <li class="hs-has-sub-menu">
                  <a id="pagesDropdownSignup" class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navLinkPagesDropdownSignup">
                    <span class="tio-circle nav-indicator-icon"></span> Sign up

                  </a>
                  <ul id="navLinkPagesDropdownSignup" class="hs-sub-menu dropdown-menu dropdown-menu-lg" aria-labelledby="pagesDropdownSignup" style="min-width: 16rem;">
                    <li>
                      <a class="dropdown-item" href="authentication-signup-basic.php">
                        <span class="tio-circle-outlined nav-indicator-icon"></span> Basic
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="authentication-signup-cover.php">
                        <span class="tio-circle-outlined nav-indicator-icon"></span> Cover
                      </a>
                    </li>
                  </ul>
                </li>
                <!-- End Signup -->
                <!-- Reset Password -->
                <li class="hs-has-sub-menu">
                  <a id="pagesDropdownResetPassword" class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navLinkPagesDropdownResetPassword" >
                    <span class="tio-circle nav-indicator-icon"></span> Reset password

                  </a>
                  <ul id="navLinkPagesDropdownResetPassword" class="hs-sub-menu dropdown-menu dropdown-menu-lg" aria-labelledby="pagesDropdownResetPassword" style="min-width: 16rem;">
                    <li>
                      <a class="dropdown-item" href="authentication-reset-password-basic.php">
                        <span class="tio-circle-outlined nav-indicator-icon"></span> Basic
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="authentication-reset-password-cover.php">
                        <span class="tio-circle-outlined nav-indicator-icon"></span> Cover
                      </a>
                    </li>
                  </ul>
                </li>
                <!-- End Reset Password -->
                <!-- Email Verification -->
                <li class="hs-has-sub-menu">
                  <a id="pagesDropdownEmailVerification" class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navLinkPagesDropdownEmailVerification" >
                    <span class="tio-circle nav-indicator-icon"></span> Email verification
                  </a>
                  <ul id="navLinkPagesDropdownEmailVerification" class="hs-sub-menu dropdown-menu dropdown-menu-lg" aria-labelledby="pagesDropdownEmailVerification" style="min-width: 16rem;">
                    <li>
                      <a class="dropdown-item" href="authentication-email-verification-basic.php">
                        <span class="tio-circle-outlined nav-indicator-icon"></span> Basic
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="authentication-email-verification-cover.php">
                        <span class="tio-circle-outlined nav-indicator-icon"></span> Cover
                      </a>
                    </li>
                  </ul>
                </li>
                <!-- End Email Verification -->
                <!-- 2-step Verification -->
                <li class="hs-has-sub-menu">
                  <a id="pagesDropdown2StepVerification"  class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false"  aria-controls="navLinkPagesDropdown2StepVerification" >
                    <span class="tio-circle nav-indicator-icon"></span> 2-step Verification

                  </a>
                  <ul id="navLinkPagesDropdown2StepVerification" class="hs-sub-menu dropdown-menu dropdown-menu-lg" aria-labelledby="pagesDropdown2StepVerification" style="min-width: 16rem;">
                    <li>
                      <a class="dropdown-item" href="authentication-two-step-verification-basic.php">
                        <span class="tio-circle-outlined nav-indicator-icon"></span> Basic
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="authentication-two-step-verification-cover.php">
                        <span class="tio-circle-outlined nav-indicator-icon"></span> Cover
                      </a>
                    </li>
                  </ul>
                </li>
                <!-- End 2-step Verification -->
                <li class="dropdown-divider"></li>
                <!-- Welcome Page -->
                <li>
                  <a class="dropdown-item" href="error-404.php">
                    <span class="tio-circle nav-indicator-icon"></span> Error 404
                  </a>
                </li>
                <!-- ENd Welcome Page -->
                <!-- Welcome Page -->
                <li>
                  <a class="dropdown-item" href="error-500.php">
                    <span class="tio-circle nav-indicator-icon"></span> Error 500
                  </a>
                </li>
                <!-- ENd Welcome Page -->
                <li class="dropdown-divider"></li>
                <!-- Welcome Page -->
                <li>
                  <a class="dropdown-item" href="welcome-page.php">
                    <span class="tio-circle nav-indicator-icon"></span> Welcome page
                  </a>
                </li>
                <!-- ENd Welcome Page -->
              </ul>
              <!-- End Dropdown -->
            </li>
            <!-- End Pages -->

            <!-- Layouts -->
            <li>
              <a class="navbar-nav-link nav-link" href="layouts/layouts.php">
                <i class="tio-dashboard-vs-outlined nav-icon"></i> Layouts
              </a>
            </li>
            <!-- End Layouts -->
            <!-- Documentation -->
            <li class="hs-has-sub-menu">
              <a id="documentationDropdown" class="hs-mega-menu-invoker navbar-nav-link nav-link nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-labelledby="navLinkDocumentationDropdown">
                <i class="tio-book-opened nav-icon"></i> Docs

              </a>
              <!-- Dropdown -->
              <ul id="navLinkDocumentationDropdown" class="hs-sub-menu dropdown-menu dropdown-menu-lg" aria-labelledby="documentationDropdown" style="min-width: 16rem;">
                <li>
                  <a class="dropdown-item" href="documentation/index.html">
                    <span class="tio-circle nav-indicator-icon"></span> Documentation
                    <span class="badge badge-primary badge-pill ml-1">v1.0</span>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="documentation/index.html">
                    <span class="tio-circle nav-indicator-icon"></span> Components
                  </a>
                </li>
              </ul>
              <!-- End Dropdown -->
            </li>
            <!-- End Documentation -->
          </ul>
        </div>
      </div>
      <!-- End Navbar -->
    </div>
  </header>
</div>

<?php  /*       sert d'appuis à "A" pour la barre de recherche    */     ?>

<div id="headerDouble" class="d-none">
  <header id="header" class="navbar navbar-expand-lg navbar-bordered flex-lg-column px-0">
    <div class="navbar-dark w-100">
      <div class="container-fluid">
        <div class="navbar-nav-wrap">
          <div class="navbar-brand-wrapper">
            <!-- Logo -->
            <a class="navbar-brand" href="index.php" aria-label="Camping Fever">
              <img class="navbar-brand-logo" src="assets/svg/logos/logo-white.png" alt="Logo" />
            </a>
            <!-- End Logo -->
          </div>

          <div class="navbar-nav-wrap-content-left">
            <!-- Search Form -->

            <!-- End Search Form -->
          </div>

          <!-- Secondary Content -->

          </div>
          <!-- End Secondary Content -->
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <nav class="js-mega-menu flex-grow-1">
        <!-- Navbar -->
        <div class="navbar-nav-wrap-navbar collapse navbar-collapse" id="navbarNavMenu">

        </div>
        <!-- End Navbar -->
      </nav>
    </div>
  </header>
</div>

<?php   /*     s'occupe du panneau vertical gauche Num : "B"  */     ?>

<div id="sidebarMain" class="d-none">
  <aside class="js-navbar-vertical-aside navbar navbar-vertical-aside navbar-vertical navbar-vertical-fixed navbar-expand-xl navbar-bordered">
    <div class="navbar-vertical-container">
      <div class="navbar-vertical-footer-offset">
        <div class="navbar-brand-wrapper justify-content-between">
          <!-- Logo -->
          <a class="navbar-brand" href="index.php" aria-label="Camping Fever">
            <img class="navbar-brand-logo" src="assets/svg/logos/logo.png" alt="Logo" />
            <img class="navbar-brand-logo-mini" src="assets/svg/logos/logo-short.png" alt="Logo" />
          </a>
          <!-- End Logo -->
          <!-- Navbar Vertical Toggle -->
          <button type="button" class="js-navbar-vertical-aside-toggle-invoker navbar-vertical-aside-toggle btn btn-icon btn-xs btn-ghost-dark">
            <i class="tio-clear tio-lg"></i>
          </button>
          <!-- End Navbar Vertical Toggle -->
        </div>
        <!-- Content -->
        <div class="navbar-vertical-content">
          <ul class="navbar-nav navbar-nav-lg nav-tabs">
            <li class="nav-item">
              <small class="nav-subtitle" title="Pages">Pages</small>
              <small class="tio-more-horizontal nav-subtitle-replacer"></small>
            </li>
            <!-- Pages -->
            <li class="navbar-vertical-aside-has-menu">
              <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="Pages">
                <i class="tio-pages-outlined nav-icon"></i>
                <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Gestion Users</span>
              </a>
              <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                <li class="navbar-vertical-aside-has-menu">
                  <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="Users">
                    <span class="tio-circle nav-indicator-icon"></span>
                    <span class="text-truncate">Users</span>
                  </a>
                  <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                    <li class="nav-item">
                      <a class="nav-link" href="users.php" title="Overview">
                        <span class="tio-circle-outlined nav-indicator-icon"></span>
                        <span class="text-truncate">Overview</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="ajouterUtilisateur.php" title="Add user">
                        <span class="tio-circle-outlined nav-indicator-icon"></span>
                        <span class="text-truncate">Add user
                          <span class="badge badge-info badge-pill ml-1">Hot</span>
                        </span>
                      </a>
                    </li>
                  </ul>
                </li>


              </ul>
            </li>
            <!-- End Pages -->


            <!-- Events Management -->
            <li class="navbar-vertical-aside-has-menu">
              <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="Events Management">
                <i class="tio-event nav-icon"></i>
                <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Event Management</span>
              </a>
              <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                <li class="navbar-vertical-aside-has-menu">
                  <a class="nav-link" href="addEvent.php" title="add Event">
                    <span class="tio-circle nav-indicator-icon"></span>
                    <span class="text-truncate">Add Event</span>
                  </a>
                </li>
                <li class="navbar-vertical-aside-has-menu">
                  <a class="nav-link" href="showEvents-back.php" title="Show events">
                    <span class="tio-circle nav-indicator-icon"></span>
                    <span class="text-truncate">Show Events</span>
                  </a>
                </li>
                <li class="navbar-vertical-aside-has-menu">
                  <a class="nav-link" href="calendarC.php" title="Calendar">
                    <span class="tio-circle nav-indicator-icon"></span>
                    <span class="text-truncate">Calendar</span>
                  </a>
                </li>
              </ul>
            </li>
            <!-- End Events Management -->

            <li class="nav-item">
              <a class="js-nav-tooltip-link nav-link" href="promotions.php" title="Promotions" data-placement="left">
                <i class="tio-shopping nav-icon"></i>
                <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Promotions</span>
              </a>
            </li>


            <li class="nav-item">
              <a class="js-nav-tooltip-link nav-link" href="dashboard-alternative.php" title="Forum" data-placement="left">
                <i class="tio-comment-text nav-icon"></i>
                <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Forum</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="js-nav-tooltip-link nav-link" href="../views/index.php" title="FRONT" data-placement="left">
                <i class="tio-home"></i>
                <span class="navbar-vertical-aside-mini-mode-hidden-elements "> FRONT</span>
              </a>
            </li>
            <li class="nav-item">
              <div class="nav-divider"></div>
            </li>


            <?php  /* permet d'afficher le footer comme icon sur la barre de navigation lors de la réduction de la barre de navigation gauche grâce à ">|" situé sur la barre de navigation vertical à gauche                 Explication:                   -Lors de la reduction de la fenêtre il n'y a plus de "footer" pour sur la barre de                   navigation vertical. Cette partie est donc celle qui s'affichera et on aura plus qu'un seule                  bloc "Content"  */ ?>

            <li class="nav-item">
              <small class="tio-more-horizontal nav-subtitle-replacer"></small>
            </li>
            <!-- Front Builder -->
            <li class="nav-item nav-footer-item ">
              <a class="d-none d-md-flex js-hs-unfold-invoker nav-link nav-link-toggle" href="javascript:;" data-hs-unfold-options='{ "target": "#styleSwitcherDropdown", "type": "css-animation", "animationIn": "fadeInRight", "animationOut": "fadeOutRight", "hasOverlay": true, "smartPositionOff": true }'>
                <i class="tio-tune nav-icon"></i>
              </a>
              <a class="d-flex d-md-none nav-link nav-link-toggle" href="javascript:;">
                <i class="tio-tune nav-icon"></i>
              </a>
            </li>

          </ul>
        </div>
        <!-- End Content -->


        <!-- Footer -->

        </div>
        <!-- End Footer -->
      </div>
    </div>
  </aside>
</div>

<?php  /*       sert d'appuis à "B" pour le panneau vertical    */     ?>

<div id="sidebarCompact" class="d-none">
  <aside class="js-navbar-vertical-aside navbar navbar-vertical-aside navbar-vertical navbar-vertical-fixed navbar-expand-xl navbar-bordered">
    <div class="navbar-vertical-container">

      <div class="navbar-brand d-flex justify-content-center">
        <!-- Logo -->
        <a class="navbar-brand" href="index.php" aria-label="Camping Fever">
          <img class="navbar-brand-logo-short" src="assets/svg/logos/logo-short.png" alt="Logo" />
        </a>
        <!-- End Logo -->
      </div>
      <!-- Content -->
      <div class="navbar-vertical-content">
        <ul class="navbar-nav nav-compact">
          <!-- Dashboards -->
          <li class="navbar-vertical-aside-has-menu nav-item">
            <a class="js-navbar-vertical-aside-menu-link nav-link" href="javascript:;" title="Dashboards">
              <i class="tio-home-vs-1-outlined nav-icon"></i>
              <span class="nav-compact-title text-truncate">Dashboards</span>
            </a>
            <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
              <li class="nav-item">
                <a class="nav-link" href="index.php" title="Default">
                  <span class="tio-circle nav-indicator-icon"></span>
                  <span class="text-truncate">Default</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="dashboard-alternative.php" title="Alternative">
                  <span class="tio-circle nav-indicator-icon"></span>
                  <span class="text-truncate">Alternative</span>
                </a>
              </li>
            </ul>
          </li>
          <!-- End Dashboards -->
          <!-- Pages -->
          <li class="navbar-vertical-aside-has-menu nav-item">
            <a class="js-navbar-vertical-aside-menu-link nav-link" href="javascript:;" title="Pages">
              <i class="tio-pages-outlined nav-icon"></i>
              <span class="nav-compact-title text-truncate">Pages</span>
            </a>
            <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
              <li class="navbar-vertical-aside-has-menu">
                <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="Users">
                  <span class="tio-circle nav-indicator-icon"></span>
                  <span class="text-truncate">Users</span>
                </a>
                <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                  <li class="nav-item">
                    <a class="nav-link" href="users.php" title="Overview">
                      <span class="tio-circle-outlined nav-indicator-icon"></span>
                      <span class="text-truncate">Overview</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="users-leaderboard.php" title="Leaderboard">
                      <span class="tio-circle-outlined nav-indicator-icon"></span>
                      <span class="text-truncate">Leaderboard</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="users-add-user.php" title="Add user">
                      <span class="tio-circle-outlined nav-indicator-icon"></span>
                      <span class="text-truncate">Add user
                        <span class="badge badge-info badge-pill ml-1">Hot</span>
                      </span>
                    </a>
                  </li>
                </ul>
              </li>


              <li class="navbar-vertical-aside-has-menu">
                <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="Projects">
                  <span class="tio-circle nav-indicator-icon"></span>
                  <span class="text-truncate">Projects</span>
                </a>
                <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                  <li class="nav-item">
                    <a class="nav-link" href="projects.php" title="Overview">
                      <span class="tio-circle-outlined nav-indicator-icon"></span>
                      <span class="text-truncate">Overview</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="projects-timeline.php" title="Timeline">
                      <span class="tio-circle-outlined nav-indicator-icon"></span>
                      <span class="text-truncate">Timeline</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="navbar-vertical-aside-has-menu">
                <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="Project">
                  <span class="tio-circle nav-indicator-icon"></span>
                  <span class="text-truncate">Project</span>
                </a>
                <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                  <li class="nav-item">
                    <a class="nav-link" href="project.php" title="Overview">
                      <span class="tio-circle-outlined nav-indicator-icon"></span>
                      <span class="text-truncate">Overview</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="project-files.php" title="Files">
                      <span class="tio-circle-outlined nav-indicator-icon"></span>
                      <span class="text-truncate">Files
                        <span class="badge badge-info badge-pill ml-1">Hot</span>
                      </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="project-activity.php" title="Activity">
                      <span class="tio-circle-outlined nav-indicator-icon"></span>
                      <span class="text-truncate">Activity</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="project-teams.php" title="Teams">
                      <span class="tio-circle-outlined nav-indicator-icon"></span>
                      <span class="text-truncate">Teams</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="project-settings.php" title="Settings">
                      <span class="tio-circle-outlined nav-indicator-icon"></span>
                      <span class="text-truncate">Settings</span>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <!-- End Pages -->

          <!-- Authentication -->
          <li class="navbar-vertical-aside-has-menu nav-item">
            <a class="js-navbar-vertical-aside-menu-link nav-link" href="javascript:;" title="Authentication">
              <i class="tio-lock-outlined nav-icon"></i>
              <span class="nav-compact-title text-truncate">Authentication</span>
            </a>
            <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
              <li class="navbar-vertical-aside-has-menu nav-item">
                <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="Sign in">
                  <span class="tio-circle nav-indicator-icon"></span>
                  <span class="text-truncate">Sign in</span>
                </a>
                <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                  <li class="nav-item">
                    <a class="nav-link" href="authentication-signin-basic.php" title="Basic">
                      <span class="tio-circle-outlined nav-indicator-icon"></span>
                      <span class="text-truncate">Basic</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="authentication-signin-cover.php" title="Cover">
                      <span class="tio-circle-outlined nav-indicator-icon"></span>
                      <span class="text-truncate">Cover</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="navbar-vertical-aside-has-menu nav-item">
                <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="Sign up">
                  <span class="tio-circle nav-indicator-icon"></span>
                  <span class="text-truncate">Sign up</span>
                </a>
                <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                  <li class="nav-item">
                    <a class="nav-link" href="authentication-signup-basic.php" title="Basic">
                      <span class="tio-circle-outlined nav-indicator-icon"></span>
                      <span class="text-truncate">Basic</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="authentication-signup-cover.php" title="Cover">
                      <span class="tio-circle-outlined nav-indicator-icon"></span>
                      <span class="text-truncate">Cover</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="navbar-vertical-aside-has-menu nav-item">
                <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="Reset password">
                  <span class="tio-circle nav-indicator-icon"></span>
                  <span class="text-truncate">Reset password</span>
                </a>
                <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                  <li class="nav-item">
                    <a class="nav-link" href="authentication-reset-password-basic.php" title="Basic">
                      <span class="tio-circle-outlined nav-indicator-icon"></span>
                      <span class="text-truncate">Basic</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="authentication-reset-password-cover.php" title="Cover">
                      <span class="tio-circle-outlined nav-indicator-icon"></span>
                      <span class="text-truncate">Cover</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="navbar-vertical-aside-has-menu nav-item">
                <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="Email verification">
                  <span class="tio-circle nav-indicator-icon"></span>
                  <span class="text-truncate">Email verification</span>
                </a>
                <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                  <li class="nav-item">
                    <a class="nav-link" href="authentication-email-verification-basic.php" title="Basic">
                      <span class="tio-circle-outlined nav-indicator-icon"></span>
                      <span class="text-truncate">Basic</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="authentication-email-verification-cover.php" title="Cover">
                      <span class="tio-circle-outlined nav-indicator-icon"></span>
                      <span class="text-truncate">Cover</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="navbar-vertical-aside-has-menu nav-item">
                <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="2-step Verification">
                  <span class="tio-circle nav-indicator-icon"></span>
                  <span class="text-truncate">2-step Verification</span>
                </a>
                <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                  <li class="nav-item">
                    <a class="nav-link" href="authentication-two-step-verification-basic.php" title="Basic">
                      <span class="tio-circle-outlined nav-indicator-icon"></span>
                      <span class="text-truncate">Basic</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="authentication-two-step-verification-cover.php" title="Cover">
                      <span class="tio-circle-outlined nav-indicator-icon"></span>
                      <span class="text-truncate">Cover</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="javascript:;" data-toggle="modal" data-target="#welcomeMessageModal" title="Welcome message">
                  <span class="tio-circle nav-indicator-icon"></span>
                  <span class="text-truncate">Welcome message</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="error-404.php" title="Error 404">
                  <span class="tio-circle nav-indicator-icon"></span>
                  <span class="text-truncate">Error 404</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="error-500.php" title="Error 500">
                  <span class="tio-circle nav-indicator-icon"></span>
                  <span class="text-truncate">Error 500</span>
                </a>
              </li>
            </ul>
          </li>
          <!-- End Authentication -->

          <li class="nav-item">
            <a class="nav-link" href="welcome-page.php" title="Welcome page">
              <i class="tio-visible-outlined nav-icon"></i>
              <span class="nav-compact-title text-truncate">Welcome page</span>
            </a>
          </li>

          <!-- Events Management -->
          <li class="navbar-vertical-aside-has-menu nav-item">
            <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="Events Management">
              <i class="tio-event nav-icon"></i>
              <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Event Management</span>
            </a>
            <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
              <li class="navbar-vertical-aside-has-menu">
                <a class="nav-link" href="addEvent.php" title="add Event">
                  <span class="tio-circle nav-indicator-icon"></span>
                  <span class="text-truncate">Add Event</span>
                </a>
              </li>
              <li class="navbar-vertical-aside-has-menu">
                <a class="nav-link" href="showEvents-back.php" title="Show events">
                  <span class="tio-circle nav-indicator-icon"></span>
                  <span class="text-truncate">Show Events</span>
                </a>
              </li>
              <li class="navbar-vertical-aside-has-menu">
                <a class="nav-link" href="calendarC.php" title="Calendar">
                  <span class="tio-circle nav-indicator-icon"></span>
                  <span class="text-truncate">Calendar</span>
                </a>
              </li>
            </ul>
          </li>
          <!-- End Events Management -->

          <li class="nav-item">
            <a class="nav-link" href="layouts/layouts.php" title="Layouts">
              <i class="tio-dashboard-vs-outlined nav-icon"></i>
              <span class="nav-compact-title text-truncate">Layouts</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="documentation/index.html" title="Documentation">
              <i class="tio-book-opened nav-icon"></i>
              <span class="nav-compact-title text-truncate">Documentation</span>
              <span class="badge badge-primary badge-pill">v1.0</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="documentation/typography.php" title="Components">
              <i class="tio-layers-outlined nav-icon"></i>
              <span class="nav-compact-title text-truncate">Components</span>
            </a>
          </li>
        </ul>
      </div>
      <!-- End Content -->

    </div>
  </aside>
</div>


<script src="assets/js/demo.js"></script>
<!-- END ONLY DEV -->
