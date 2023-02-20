
<div id="preloader"></div>
    <nav class="menu-classic menu-fixed align-right" data-menu-anima="fade-in">
        <div class="container">
            <div class="menu-brand">
                    <a href="../BACK/index.php">
                    <img class="logo-default scroll-hide" src="media/logo1.png" alt="logo" />
                    <img class="logo-retina scroll-hide" src="media/logo1.png" alt="logo" />
                    <img class="logo-default scroll-show" src="media/logo1.png" alt="logo" />
                    <img class="logo-retina scroll-show" src="media/logo1.png" alt="logo" />
                </a>
            </div>
            <i class="menu-btn"></i>
            <div class="menu-cnt">
                <ul id="main-menu">
                    <li class="dropdown">

                           <li class="dropdown">
                            <a href="showlistclub.php">Camping clubs list</a>
                        </li>
                    </li>


                </ul>
                <div class="menu-right">
                    <ul class="lan-menu">
                        <li class="dropdown">
                            <a href="#"><img src="media/en.png" alt="lang" />EN </a>
                            <ul>
                                <li><a href="#"><img src="media/it.png" alt="lang" />IT</a></li>
                                <li><a href="#"><img src="media/es.png" alt="lang" />ES</a></li>
                            </ul>
                        </li>
                    </ul>
                        <ul class="lan-menu">
                        <li >
                            <?php
                                if(isset($_SESSION['clubID']) && !empty($_SESSION['clubID'])) {
                                    if(isset($_SESSION['nomClub']) && !empty($_SESSION['nomClub'])) {
                            ?>
                            <a href="../back/addEvent.php">
                                <img src="media/18764668.jpg" width="20" height="20" alt="lang" />
                                    <?php echo $_SESSION['nomClub']; ?>
                            </a>
                                <?php
                                }
                                }
                                else {
                            ?>
                            <a href="login.php"> <img src="media/18764668.jpg" width="20" height="20" alt="lang" /> Login </a>
                            <?php } ?>
                        </li>
                    </ul>
                    <?php
                                if(isset($_SESSION['clubID']) && !empty($_SESSION['clubID'])) {
                                    if(isset($_SESSION['nomClub']) && !empty($_SESSION['nomClub'])) {
                            ?>
                    <ul><a href="deconnexion.php">Logout</a></ul>
                    <?php } ?>
                        <?php } ?>
                </div>
            </div>
        </div>
    </nav>