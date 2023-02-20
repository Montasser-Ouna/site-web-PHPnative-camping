<div id="preloader"></div>
<?php

    $url = $_SERVER['PHP_SELF'];
    $reg = '#^(.+[\\\/])*([^\\\/]+)$#';
    define('pageencours', preg_replace($reg, '$2', $url));
    $_SESSION['pageprecedente'] = pageencours;
    if(pageencours != 'index.php') { ?>
    <nav class="menu-classic menu-fixed align-right" data-menu-anima="fade-in">
        <?php
    }else{ ?>
    <nav class="menu-classic menu-fixed menu-transparent light align-right" data-menu-anima="fade-in">
        <?php
    } ?>
        <div class="container justify-content-between" style="margin:auto auto; padding: 0 0">
            <div class="menu-brand">
                <a href="index.php">
                    <img class="logo-default scroll-hide" src="media/logo-solid-name-blue.png" alt="logo" />
                    <img class="logo-retina scroll-hide" src="media/logo-solid-name-blue.png" alt="logo" />
                    <img class="logo-default scroll-show" src="media/logo-solid-name.png" alt="logo" />
                    <img class="logo-retina scroll-show" src="media/logo-solid-name.png" alt="logo" />
                </a>
            </div>
            <i class="menu-btn"></i>
            <div class="menu-cnt">
                <ul id="main-menu">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li class="dropdown">
                        <a href="#">Pages</a>
                        <ul>
                            <li class="dropdown-submenu">
                                <a>About</a>
                                <ul>
                                    <li><a href="team.php">Team</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a>Special</a>
                                <ul>
                                    <li><a href="promotions.php">Promotions</a></li>
                                    <!-- fais attention au positionnement des fichiers et au lien -->
                                    <li><a href="../views/showEvents-front.php">Events</a></li>
                                    <li><a href="../views/ads.php">Annonces</a></li>
                                    <li><a href="../commerce/index.php">Offres</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a>Others</a>
                                <ul>
                                    <li><a href="history.php">History</a></li>
                                    <li><a href="gallery.php">Gallery</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="showlistclub.php">Clubs</a>
                        <ul>
                            <li><a href="showlistclub.php">Camping clubs list</a></li>
                        </ul>
                    </li>
                    <li><a href="forum.php">Forum</a></li>
                    <li>
                        <a href="contacts.php">Contacts</a>
                    </li>
                </ul>
                <?php
                    if(!isset($_SESSION['name'])) {
                ?>
                <div class="row justify-content-between" style="margin-left:2em;margin-top:0;margin-bottom:auto;">
                    <div>
                        <ul class="lan-menu">
                            <a href="register.php"><li>
                                <button class="btn btn-sm btn-border btn-border-orange" type="submit">S'inscrire</button>
                            </li></a>
                        </ul>
                    </div>
                    <div>
                        <ul class="lan-menu" style="margin-left:0.5em;">
                            <a href="login.php"><li>
                                <button class="btn btn-sm btn-orange" type="submit">Se Connecter</button>
                            </li></a>
                        </ul>
                    </div>
                </div>
                <?php
                    } else {
                ?>
                <div class="menu-cnt" style="margin-left:2em;margin-top:0;margin-bottom:auto;">
                    <ul style="margin-top: 0">
                        <li class="dropdown">
                            <p style="text-align: center">
                                <img src="media/utilisateur-homme-50.png" style="display: block; margin: auto auto">
                                <span style="font-weight: bold"><?php echo $_SESSION['name']; ?></span>
                            </p>
                            <ul>
                                <li> <a href="showu.php?idutilisateur=<?php echo($_SESSION['userID']); ?>">Profile&Account</a> </li>
                                <li> <a href="deconnexion.php">Sign out</a> </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <?php
                    }
                ?>
            </div>
        </div>
    </nav>
