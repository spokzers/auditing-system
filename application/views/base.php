<!DOCTYPE html>
<html lang="en">
<!--================================================================================
    Item Name: Materialize - Material Design Admin Template
    Version: 1.0
    Author: GeeksLabs
    Author URL: http://www.themeforest.net/user/geekslabs
================================================================================ -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
    <!-- <title>EPIC Auditing System</title> -->
    <!-- <title>MENA Auditing System</title> -->
    <!-- Favicons-->
    <link rel="icon" href="<?php echo base_url(); ?>static/images/favicon/favicon-32x32.png" sizes="32x32">
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>static/images/favicon/apple-touch-icon-152x152.png">
    <!-- For iPhone -->
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="<?php echo base_url(); ?>static/images/favicon/mstile-144x144.png">
    <!-- For Windows Phone -->
    <!-- CORE CSS-->
    <script type="text/javascript" src="<?php echo base_url(); ?>static/js/jquery-1.11.2.min.js"></script>
    <link href="<?php echo base_url(); ?>static/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="<?php echo base_url(); ?>static/css/style.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="<?php echo base_url(); ?>static/css/sweetalert.css" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
    <link href="<?php echo base_url(); ?>static/js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="<?php echo base_url(); ?>static/js/plugins/jvectormap/jquery-jvectormap.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="<?php echo base_url(); ?>static/js/plugins/chartist-js/chartist.min.css" type="text/css" rel="stylesheet" media="screen,projection">
    <script src="<?php echo base_url(); ?>static/js/sweetalert.min.js"></script>
    <!-- xchart css -->
    <link href="<?php echo base_url(); ?>static/js/plugins/xcharts/xcharts.min.css" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- jQuery Library -->
    
</head>

<body>
    <!-- Start Page Loading -->
    <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <!-- End Page Loading -->
    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <!-- START HEADER -->
    <header id="header" class="page-topbar">
        <!-- start header nav-->
        <div class="navbar-fixed">
            <nav class="cyan">
                <div class="nav-wrapper">
                    <h1 class="logo-wrapper row">
                        <div class="col s1 left">
                        <a href="<?php echo base_url(); ?>index.php/" class="brand-logo darken-1">
                            <img src="<?php echo base_url(); ?>static/images/logo.png" style="max-width:35%;" alt="EPIC logo">
                        </a>
                        </div>
                        <div class="col s11 right hide-on-med-and-down">
                            <!-- <a href="<?php echo base_url(); ?>index.php/"  style="font-size: 40px"> EPIC Auditing System</a> -->
                            <!-- <a href="<?php echo base_url(); ?>index.php/"  style="font-size: 40px"> MENA Auditing System</a> -->
                        </div>
                        <!-- <span class="logo-text">EPIC Auditing System</span> -->
                    </h1>
                    <!-- <ul class="right hide-on-med-and-down"> -->
                        <!-- <li class="search-out">
                            <input type="text" class="search-out-text">
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="waves-effect waves-block waves-light show-search"><i class="mdi-action-search"></i></a>
                        </li> -->
                        <!-- <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen"><i class="mdi-action-settings-overscan"></i></a>
                        </li> -->
                        <!-- <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light"><i class="mdi-social-notifications"></i></a>
                        </li> -->
                        <!-- Dropdown Trigger -->
                        <!-- <li><a href="#" data-activates="chat-out" class="waves-effect waves-block waves-light chat-collapse"><i class="mdi-communication-chat"></i></a>
                        </li> -->
                    <!-- </ul> -->
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
                    <li class="user-details cyan darken-2">
                        <div class="row">
                            <div class="col col s4 m4 l4">
                                <img src="<?php echo base_url(); ?>uploads/profile/<?php echo $this->crud->session_data('id');?>.jpg" alt="" class="circle responsive-img valign profile-image">
                            </div>
                            <div class="col col s8 m8 l8">
                                <ul id="profile-dropdown" class="dropdown-content">
                                    <!-- <li><a href="#"><i class="mdi-action-face-unlock"></i> Profile</a>
                                    </li>
                                    <li><a href="#"><i class="mdi-action-settings"></i> Settings</a>
                                    </li>
                                    <li><a href="#"><i class="mdi-communication-live-help"></i> Help</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li><a href="#"><i class="mdi-action-lock-outline"></i> Lock</a>
                                    </li> -->
                                    <li><a href="<?php echo base_url();?>index.php/login/logout"><i class="mdi-hardware-keyboard-tab"></i> Logout</a>
                                    </li>
                                </ul>
                                <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown"><?php

                                    switch ($this->crud->session_designation()) {
                                        case 1:
                                            echo "Administrator";
                                            break;
                                        case 2:
                                            echo "Inspector";
                                            break;
                                        case 3:
                                            echo "Supervisor";
                                            break;
                                        case 4:
                                            echo "Manager";
                                            break;
                                        case 5:
                                            echo "Government Official";
                                            break;
                                        case 6:
                                            echo "Client";
                                            break;
                                        default:
                                            echo "User";
                                    }
                                    ?>
                                <i class="mdi-navigation-arrow-drop-down right"></i></a>
                                 <?php

                                    // switch ($this->crud->session_designation()) {
                                    //     case 1:
                                    //         echo "<p class='user-roal'>Administrator</p>";
                                    //         break;
                                    //     case 2:
                                    //         echo "<p class='user-roal'>Inspector</p>";
                                    //         break;
                                    //     case 3:
                                    //         echo "<p class='user-roal'>Supervisor</p>";
                                    //         break;
                                    //     case 4:
                                    //         echo "<p class='user-roal'>Manager</p>";
                                    //         break;
                                    //     case 5:
                                    //         echo "<p class='user-roal'>Government Official</p>";
                                    //         break;
                                    //     case 6:
                                    //         echo "<p class='user-roal'>Client</p>";
                                    //         break;
                                    //     default:
                                    //         echo "<p class='user-roal'>User</p>";
                                    // }
                                     // echo "<p class='user-roal'>Welcome</p>";
                                    ?>

                            </div>
                        </div>
                    </li>
                    <li class="bold"><a href="<?php echo base_url();?>" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> <span class="trn" data-trn-key="Dashboard">Dashboard</span></a>
                    </li>
                    <li class="no-padding">
                        <ul class="collapsible collapsible-accordion">
                            <li class="bold" <?php
                                    if($this->crud->session_designation() == 6){
                                        echo "style='display:none;'";
                                    }
                                    ?>><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-social-person"></i> <span class="trn" data-trn-key="Inspectors">Inspectors</span></a>
                                <div class="collapsible-body">
                                    <ul>
                                       <?php
                                    if($this->crud->session_designation() == 5 || $this->crud->session_designation() == 3){
                                        echo "<div style='display:none;'>";
                                    }
                                    ?>
                                        <li <?php
                                    if($this->crud->session_designation() == 2){
                                        echo "style='display:none;'";
                                    }
                                    ?>><a href="<?php echo base_url();?>index.php/inspector/create"><span class="trn" data-trn-key="Create New">Create New</span></a>
                                        </li>
                                      <?php
                                    if($this->crud->session_designation() == 5 || $this->crud->session_designation() == 3){
                                        echo "</div>";
                                    }
                                    ?>
                                        <li><a href="<?php echo base_url();?>index.php/inspector/"><span class="trn" data-trn-key="View All">View All</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="bold"  <?php
                                    if($this->crud->session_designation() == 2){
                                        echo "style='display:none;'";
                                    }
                                    ?>><a class="collapsible-header  waves-effect waves-cyan"><i class="mdi-action-settings"></i><span class="trn" data-trn-key="Facility">Facility</span> </a>
                                <div class="collapsible-body">
                                    <ul>
                                      <?php
                                    if($this->crud->session_designation() == 5 || $this->crud->session_designation() == 3){
                                        echo "<div style='display:none;'>";
                                    }
                                    ?>
                                        <li
                            <li class="bold" <?php
                                    if($this->crud->session_designation() == 6){
                                        echo "style='display:none;'";
                                    }
                                    ?>><a href="<?php echo base_url();?>index.php/facility/create"><span class="trn" data-trn-key="Create New">Create New</span></a>
                                        </li>
                                     <?php
                                    if($this->crud->session_designation() == 5 || $this->crud->session_designation() == 3){
                                        echo "</div>";
                                    }
                                    ?>
                                        <li><a href="<?php echo base_url();?>index.php/facility/"><span class="trn" data-trn-key="View All">View All</span></a>
                                        </li>
                                        <li
                            <li class="bold" <?php
                                    if($this->crud->session_designation() == 6){
                                        echo "style='display:none;'";
                                    }
                                    ?>><a href="<?php echo base_url();?>index.php/centre/"><span class="trn" data-trn-key="Commercial Centres">Commercial Centres</span></a>
                                        </li>
                                        <li
                            <li class="bold" <?php
                                    if($this->crud->session_designation() == 6){
                                        echo "style='display:none;'";
                                    }
                                    ?>><a href="<?php echo base_url();?>index.php/FacilityWorker/"><span class="trn" data-trn-key="Workers">Workers</span></a>
                                        </li>

                                    </ul>
                                </div>
                            </li>
                            <li class="bold" <?php
                                    if($this->crud->session_designation() == 6){
                                        echo "style='display:none;'";
                                    }
                                    ?>><a class="collapsible-header  waves-effect waves-cyan"><i class="mdi-editor-attach-money"></i><span class="trn" data-trn-key="Penalties">Penalties</span> </a>
                                <div class="collapsible-body">
                                    <ul>
                                    <?php
                                    if($this->crud->session_designation() == 5 || $this->crud->session_designation() == 3 || $this->crud->session_designation() == 2){
                                        echo "<div style='display:none;'>";
                                    }
                                    ?>
                                        <li><a href="<?php echo base_url();?>index.php/penalty/create"><span class="trn" data-trn-key="Create New">Create New</span></a>
                                        </li>
                                      <?php
                                    if($this->crud->session_designation() == 5 || $this->crud->session_designation() == 3 || $this->crud->session_designation() == 2){
                                        echo "</div>";
                                    }
                                    ?>
                                        <li><a href="<?php echo base_url();?>index.php/penalty/"><span class="trn" data-trn-key="View All">View All</span></a>
                                        </li>
                                        <!-- <li><a href="table-data.html"><span class="trn" data-trn-key="Category">Category</span></a> -->
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="bold"<?php
                                    if($this->crud->session_designation() == 6){
                                        echo "style='display:none;'";
                                    }
                                    ?>><a class="collapsible-header  waves-effect waves-cyan"><i class="mdi-action-done"></i><span class="trn" data-trn-key="Checklist">Checklist Templates</span> </a>
                                <div class="collapsible-body">
                                    <ul>
                                    <?php
                                    if($this->crud->session_designation() == 5 || $this->crud->session_designation() == 3 || $this->crud->session_designation() == 2){
                                        echo "<div style='display:none;'>";
                                    }
                                    ?>
                                        <li><a href="<?php echo base_url();?>index.php/checklist/create"><span class="trn" data-trn-key="Create New">Create New</span></a>
                                        </li>
                                    <?php
                                    if($this->crud->session_designation() == 5 || $this->crud->session_designation() == 3 || $this->crud->session_designation() == 2){
                                        echo "</div>";
                                    }
                                    ?>
                                        <li><a href="<?php echo base_url();?>index.php/checklist"><span class="trn" data-trn-key="View All">View All</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="bold"<?php
                                    if($this->crud->session_designation() == 6){
                                        echo "style='display:none;'";
                                    }
                                    ?>><a class="collapsible-header  waves-effect waves-cyan"><i class="mdi-action-history"></i><span class="trn" data-trn-key="Audits">Audits</span></a>
                                <div class="collapsible-body">
                                    <ul>
                                 <?php
                                    if($this->crud->session_designation() == 5 || $this->crud->session_designation() == 3 || $this->crud->session_designation() == 2){
                                        echo "<div style='display:none;'>";
                                    }
                                    ?>

                                        <li><a href="<?php echo base_url();?>index.php/audit/create"><span class="trn" data-trn-key="Schedule Audit">Schedule Audit</span></a>
                                        </li>

                                        <?php
                                    if($this->crud->session_designation() == 2){
                                        echo "</div>";
                                    }
                                    ?>
                                   <?php
                                    if($this->crud->session_designation() == 5 || $this->crud->session_designation() == 3){
                                        echo "</div>";
                                    }
                                    ?>
                                        <li><a href="<?php echo base_url();?>index.php/audit"><span class="trn" data-trn-key="View All">View All</span></a>
                                        </li>
                                      <?php
                                    if($this->crud->session_designation() == 5 || $this->crud->session_designation() == 3 || $this->crud->session_designation() == 2){
                                        echo "<div style='display:none;'>";
                                    }
                                    ?>
                                        <li><a href="<?php  echo base_url();?>index.php/audit/auto_create"><span class="trn" data-trn-key="Auto Schedule">Auto Schedule</span></a>
                                        </li>
                                    
                                      <?php
                                    if($this->crud->session_designation() == 5 || $this->crud->session_designation() == 3 || $this->crud->session_designation() == 2){
                                        echo "</div>";
                                    }
                                    ?>
                                    </ul>
                                </div>
                            </li>
                            <li class="bold"<?php
                                    if($this->crud->session_designation() == 6){
                                        echo "style='display:none;'";
                                    }
                                    ?>><a class="collapsible-header  waves-effect waves-cyan"><i class="mdi-editor-attach-money"></i><span class="trn" data-trn-key="Training">Trainings</span> </a>
                                <div class="collapsible-body">
                                    <ul>
                                    <?php
                                    if($this->crud->session_designation() == 5 || $this->crud->session_designation() == 3 || $this->crud->session_designation() == 2){
                                        echo "<div style='display:none;'>";
                                    }
                                    ?>
                                        <li><a href="<?php echo base_url();?>index.php/training/create"><span class="trn" data-trn-key="Schedule Trainings">Schedule Trainings</span></a>
                                        </li>
                                         <?php
                                    if($this->crud->session_designation() == 5 || $this->crud->session_designation() == 3 || $this->crud->session_designation() == 2){
                                        echo "</div>";
                                    }
                                    ?>

                                        <li><a href="<?php echo base_url();?>index.php/training/"><span class="trn" data-trn-key="View All">View All</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="bold"<?php
                                    if($this->crud->session_designation() == 6){
                                        echo "style='display:none;'";
                                    }
                                    ?> <?php
                                    if($this->crud->session_designation() == 2){
                                        echo "style='display:none;'";
                                    }
                                    ?>><a href="<?php echo base_url(); ?>index.php/reports" class="collapsible-header waves-effect waves-cyan"><i class="mdi-editor-insert-chart"></i> <span class="trn" data-trn-key="Graphs">Graphs</span></a>
                            </li>
                            <li class="bold"><a href="<?php echo base_url();?>index.php/login/logout" class="collapsible-header waves-effect waves-cyan"><i class="mdi-action-settings-power"></i> <span class="trn" data-trn-key="Log out">Logout</span></a>
                            </li>
                            <li class="bold"><a class="collapsible-header waves-effect waves-cyan lang-selector" data-value=""><i class="mdi-action-language"></i></a>
                            </li>
                            <li class="bold"><a href="http://teffiti.com/" class="collapsible-header waves-effect waves-cyan">
                            <i class="mdi-action-language"></i><span>Teffiti</span></a>
                            </li>
                            <li class="bold"><a href="http://epic-e360.co.uk/" class="collapsible-header waves-effect waves-cyan"><i class="mdi-action-language"></i><span>EPIC</span></a>
                            </li>

                        </ul>
                    </li>
                </ul>
                <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only darken-2"><i class="mdi-navigation-menu" ></i></a>
            </aside>
            <!-- END LEFT SIDEBAR NAV-->
            <!-- //////////////////////////////////////////////////////////////////////////// -->