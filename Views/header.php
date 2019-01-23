<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="msapplication-tap-highlight" content="no">
        <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
        <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
        <title><?= (isset($this->title)) ? $this->title : 'Welcome'; ?></title>

        <!-- Favicons-->
        <link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">
        <!-- Favicons-->
        <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
        <!-- For iPhone -->
        <meta name="msapplication-TileColor" content="#00bcd4">
        <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
        <!-- For Windows Phone -->


        <!-- CORE CSS-->    
        <link href="<?= URL; ?>public/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection">
        <link href="<?= URL; ?>public/css/style.min.css" type="text/css" rel="stylesheet" media="screen,projection">
        <!-- Other Plugins -->    
        <link href="<?= URL; ?>public/css/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">

        <!-- jQuery Library -->
        <script type="text/javascript" src="<?= URL; ?>public/js/jquery-1.11.2.min.js"></script>    
        <!--materialize js-->
        <script type="text/javascript" src="<?= URL; ?>public/js/materialize.min.js"></script>
        <!--scrollbar-->
        <script type="text/javascript" src="<?= URL; ?>public/js/perfect-scrollbar.min.js"></script>
        <!--plugins.js - Some Specific JS codes for Plugin Settings-->
        <script type="text/javascript" src="<?= URL; ?>public/js/plugins.min.js"></script>
        <script type="text/javascript" src="<?= URL; ?>public/js/pickatime.js"></script>

        <?php
        if (isset($this->js)) {
            // Let loop through the array from the controller
            foreach ($this->js as $js) {
                echo '<script type="text/javascript" src="' . URL . $js . '"></script>';
            }
        }


        if (isset($this->css)) {
            // Let loop through the array from the controller
            foreach ($this->css as $css) {
                echo '<link type="text/css" rel="stylesheet" href="' . URL . $css . '" media="screen,projection"/>';
            }
        }
        ?>

    </head>

    <body>
        <!-- Start Page Loading
        <div id="loader-wrapper">
            <div id="loader"></div>        
            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
        </div>
        End Page Loading -->

        <!--    Administrator Login    -->
        <?php
        if (Session::get('loggedIn') == TRUE and Session::get('role') == 'admin') {
            ?>
            <!-- START HEADER -->
            <header id="header" class="page-topbar">
                <!-- start header nav-->
                <div class="navbar-fixed">
                    <nav class="navbar-color blue lighten-3">
                        <div class="nav-wrapper">
                            <ul class="left">                      
                                <li>
                                    <h1 class="logo-wrapper">
                                        <a href="<?= URL; ?>dashboard" class="brand-logo darken-1">
                                            <!--<img src="public/image/logo.png" alt="OAU Health">--> 
                                            e-Dentist
                                        </a>
                                    </h1></li>
                            </ul>
                            <ul class="right hide-on-med-and-down">

                                <li class="bold"><a href="<?= URL; ?>dashboard">Home</a>
                                </li> 
                                <li class="bold"><a href="<?= URL; ?>category">Category</a>
                                </li> 
                                <li class="bold"><a href="<?= URL; ?>tips">Tips</a>
                                </li>
                            </ul>
                            <!--                                                <div class="header-search-wrapper hide-on-med-and-down">
                                                        <i class="mdi-action-search"></i>
                                                        <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explore Materialize"/>
                                                    </div>-->

                            <!-- translation-button -->

                            <!-- notifications-dropdown -->
                        </div>
                    </nav>
                </div>
                <!-- end header nav-->
            </header>
            <!-- END HEADER -->

            <!-- //////////////////////////////////////////////////////////////////////////// -->

            <!-- START MAIN -->
            <div id="main">
                <!-- START WRAPPER -->
                <div class="wrapper">

                    <!-- START LEFT SIDEBAR NAV-->
                    <aside id="left-sidebar-nav">
                        <ul id="slide-out" class="side-nav fixed leftside-navigation">
                            <li class="user-details blue lighten-3">
                                <div class="row">

                                    <label>
                                        <i class="small mdi-image-camera"></i><input type="file" name="file" id="file">
                                        <input type="hidden" name="email" value="<?= $this->email; ?>" id="email">
                                    </label>                      
                                    <div class="col col s4 m4 l4 display-pic">

                          <!-- <img src="public/image/pic/avatar.png" alt="" class="circle responsive-img valign profile-image"> -->
                                    </div>

                                    <div class="col col s8 m8 l8">
                                        <ul id="profile-dropdown" class="dropdown-content">
                                            <li><a href="<?= URL; ?>logout"><i class="mdi-hardware-keyboard-tab"></i> Logout</a>
                                            </li>
                                        </ul>
                                        <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn lastname" href="#" data-activates="profile-dropdown">Hi! <?= $this->lastname; ?><i class="mdi-navigation-arrow-drop-down right"></i></a>
                                        <p class="user-roal">Administrator</p>
                                    </div>
                                </div>
                            </li>
    <!--                          <li class="bold"><a href="<?php // echo URL;     ?>dashboard" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> Home</a></li>-->

                            <!--<li class="li-hover"><div class="divider"></div></li>-->


                        </ul>
                        <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only cyan"><i class="mdi-navigation-menu"></i></a>
                    </aside>
                    <!-- END LEFT SIDEBAR NAV-->

                    <!--  -->


                    <!--  -->
                    <!-- START RIGHT SIDEBAR NAV-->
                    <!-- LEFT RIGHT SIDEBAR NAV-->

                    <?php
                }
                ?>

                <!--        Staff Login      -->
                <?php
                if (Session::get('loggedIn') == TRUE and Session::get('role') == 'patient') {
                    ?>
                    <!-- START HEADER -->
                    <header id="header" class="page-topbar">
                        <!-- start header nav-->
                        <div class="navbar-fixed">
                            <nav class="navbar-color blue lighten-3">
                                <div class="nav-wrapper">
                                    <ul class="left">                      
                                        <li>
                                            <h1 class="logo-wrapper">
                                                <a href="<?= URL; ?>patient" class="brand-logo darken-1">
                                                    <!--<img src="public/image/logo.png" alt="OAU Health">--> 
                                                    e-Dentist</a>
                                                <span class="logo-text">OAU Health Center</span>
                                            </h1>
                                        </li>
                                    </ul>


                                    <div class="header-search-wrapper hide-on-med-and-down">
                                        <i class="mdi-action-search"></i>
                                        <input type="search" id="searchbox" name="Search" class="header-search-input z-depth-2" placeholder="Explore e-dentist"/>
                                        <!-- Where the result will appear -->
                                        <!--<div class="searchres"></div>-->

                                        <div class="col s12 m8 l9">
                                            <ul class="collection searchres">

                                            </ul>
                                        </div>
                                    </div>

                                    <!-- translation-button -->

                                    <!-- notifications-dropdown -->
                                </div>
                            </nav>
                        </div>
                        <!-- end header nav-->
                    </header>
                    <!-- END HEADER -->

                    <!-- //////////////////////////////////////////////////////////////////////////// -->

                    <!-- START MAIN -->
                    <div id="main">
                        <!-- START WRAPPER -->
                        <div class="wrapper">

                            <!-- START LEFT SIDEBAR NAV-->
                            <aside id="left-sidebar-nav">
                                <ul id="slide-out" class="side-nav fixed leftside-navigation">
                                    <li class="user-details blue lighten-3">
                                        <div class="row">

                                            <label>
                                                <i class="small mdi-image-camera"></i><input type="file" name="file" id="file">
                                                <input type="hidden" name="email" value="<?= $this->email; ?>" id="email">
                                            </label>                      
                                            <div class="col col s4 m4 l4 display-pic">

                          <!-- <img src="public/image/pic/avatar.png" alt="" class="circle responsive-img valign profile-image"> -->
                                            </div>

                                            <div class="col col s8 m8 l8">
                                                <ul id="profile-dropdown" class="dropdown-content">
                                                    <li><a href="<?= URL; ?>logout"><i class="mdi-hardware-keyboard-tab"></i> Logout</a>
                                                    </li>
                                                </ul>
                                                <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn lastname" href="#" data-activates="profile-dropdown">Hi! <?= $this->lastname; ?><i class="mdi-navigation-arrow-drop-down right"></i></a>
                                                <p class="user-roal">Patient</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="bold"><a href="<?php echo URL; ?>patient" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> Home</a></li>
                                    <li class="bold"><a href="<?php echo URL; ?>faq" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> FAQs</a></li>



                                </ul>
                                <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only cyan"><i class="mdi-navigation-menu"></i></a>
                            </aside>



                            <!-- Compose Email Trigger -->
                            <div id="mail-app">

                                <div class="fixed-action-btn" style="bottom: 50px; right: 19px;">
                                    <a class="btn-floating btn-large red modal-trigger" href="#modal1">
                                        <i class="mdi-editor-border-color"></i>
                                    </a>
                                </div>




                                <!-- Compose Email Structure -->
                                <div id="modal1" class="modal">
                                    <div class="modal-content">
                                        <nav class="red">
                                            <div class="nav-wrapper">
                                                <div class="left col s12 m5 l5">
                                                    <ul>
                                                        <li><a href="#!" class="email-menu"><i class="modal-action modal-close  mdi-hardware-keyboard-backspace"></i></a>
                                                        </li>
                                                        <li><a href="#!" class="email-type">Appointment</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col s12 m7 l7 hide-on-med-and-down">
                                                    <ul class="right">
                                                        <li><a href="#!"><i class="modal-action modal-close back-button"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>

                                            </div>
                                        </nav>
                                    </div>
                                    <div class="model-email-content">
                                        <span class="loading right-align"></span>
                                        <div class="row">
                                            <form class="col s12">
                                                <div class="row">
                                                    <div class="input-field col s12">
                                                        <i class="mdi-image-timelapse prefix"></i>
                                                        <input id="date" type="text" class="datepicker">
                                                        <input id="email-user" value="<?php echo $this->email; ?>" type="hidden" class="email-type">
                                                        <label for="date">Date</label>

                                                    </div>
                                                </div>
                                                
                                                <div class="row">
                                                    <div class="input-field col s12">
                                                        <i class="mdi-image-timelapse prefix"></i>
                                                        <input id="time" type="text" class="timepicker">
                                                        <label for="time">Time</label>

                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="input-field col s12">
                                                         <i class="mdi-editor-insert-invitation prefix"></i>
                                                        <input id="subject" type="text" class="validate">
                                                        <label for="subject">Subject</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="input-field col s12">
                                                         <i class="mdi-content-add prefix"></i>
                                                        <textarea id="description" class="materialize-textarea" length="500"></textarea>
                                                        <label for="description">Provide few description</label>
                                                    </div>
                                                </div>
                                                
                                                  <div class="row">
                                <div class="input-field col s2">
                                    <button class="send-appointment btn waves-effect waves-light" type="submit"><i class="mdi-content-send"></i></button>
                                </div>
                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <!-- END LEFT SIDEBAR NAV-->

                            <!-- //////////////////////////////////////////////////////////////////////////// -->


                            <!-- //////////////////////////////////////////////////////////////////////////// -->
                            <!-- START RIGHT SIDEBAR NAV-->
                            <!-- LEFT RIGHT SIDEBAR NAV-->

                            <?php
                        }
                        ?>

