<?php
    include "../includes/pages/header_.php";
?>
<body>

<div class="theme-loader">
    <div class="ball-scale">
        <div></div>
    </div>
</div>


<div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box"></div>
    <div class="pcoded-container navbar-wrapper">
        <nav class="navbar header-navbar pcoded-header" style="background: #47B0F8;">
            <div class="navbar-wrapper">
                <div class="navbar-logo">
                    <a class="mobile-menu" id="mobile-collapse" href="#!">
                        <i class="ti-menu"></i>
                    </a>
                    <a class="mobile-search morphsearch-search" href="#">
                        <i class="ti-search"></i>
                    </a>
                    <a href="index-2.html">
                        <img class="img-fluid" src="../../img/logo.png" alt="Theme-Logo"/>
                    </a>
                </div>
                <div class="navbar-container container-fluid">
                    <div>
                        <ul class="nav-left">
                            <li>
                                <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a>
                                </div>
                            </li>
                        </ul>
                        <ul class="nav-right">
                            <li class="user-profile header-notification">
                                <a href="#!">
                                    <img src="../assets/images/user.png" alt="User-Profile-Image">
                                    <span style="color: #0b0b0b">John Doe</span>
                                    <i class="ti-angle-down"></i>
                                </a>
                                <ul class="show-notification profile-notification">
                                    <li>
                                        <a href="user-profile.html">
                                            <i class="ti-user"></i> Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="email-inbox.html">
                                            <i class="ti-email"></i> My Messages
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#!">
                                            <i class="ti-layout-sidebar-left"></i> Logout
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <div class="pcoded-main-container">
            <div class="pcoded-wrapper">
                <nav class="pcoded-navbar" pcoded-header-position="relative">
                    <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                    <div class="pcoded-inner-navbar main-menu"><br>
                        <ul class="pcoded-item pcoded-left-item">
                            <li class=" ">
                                <a href="form-picker.html" data-i18n="nav.form-pickers.main">
                                    <span class="pcoded-micon"><i class="ti-pencil-alt"></i></span>
                                    <span class="pcoded-mtext">Dashboard</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="form-picker.html" data-i18n="nav.form-pickers.main">
                                    <span class="pcoded-micon"><i class="ti-pencil-alt"></i></span>
                                    <span class="pcoded-mtext">Dashboard</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="form-picker.html" data-i18n="nav.form-pickers.main">
                                    <span class="pcoded-micon"><i class="ti-pencil-alt"></i></span>
                                    <span class="pcoded-mtext">Dashboard</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="form-picker.html" data-i18n="nav.form-pickers.main">
                                    <span class="pcoded-micon"><i class="ti-pencil-alt"></i></span>
                                    <span class="pcoded-mtext">Dashboard</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="form-picker.html" data-i18n="nav.form-pickers.main">
                                    <span class="pcoded-micon"><i class="ti-pencil-alt"></i></span>
                                    <span class="pcoded-mtext">Dashboard</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                            <li class="pcoded-hasmenu">
                                <a href="javascript:void(0)" data-i18n="nav.form-components.main">
                                    <span class="pcoded-micon"><i class="ti-layers"></i></span>
                                    <span class="pcoded-mtext">Users</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class=" ">
                                        <a href="form-elements-component.html"
                                           data-i18n="nav.form-components.form-components">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext">View users</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="index.php?adduser=true"
                                           data-i18n="nav.form-components.form-elements-add-on">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext">Add user</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="pcoded-content">
                    <div class="pcoded-inner-content">
                        <div class="main-body">
                            <div class="page-wrapper">
                                <?php
                                    if (isset($_GET['adduser'])) {
                                        include "adduser.php";
                                    } elseif (isset($_GET['users'])) {
                                        include "users.php";
                                    } else {
                                        echo "Hey wassup welcome to dashboard";
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
    include "../includes/pages/footer_.php";
?>
</body>
</html>
