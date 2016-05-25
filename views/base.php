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
    <title>Materialize - Material Design Admin Template</title>
    <!-- Favicons-->
    <link rel="icon" href="<?php echo base_url(); ?>static/images/favicon/favicon-32x32.png" sizes="32x32">
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>static/images/favicon/apple-touch-icon-152x152.png">
    <!-- For iPhone -->
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="<?php echo base_url(); ?>static/images/favicon/mstile-144x144.png">
    <!-- For Windows Phone -->
    <!-- CORE CSS-->
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
                    <h1 class="logo-wrapper"><a href="index.html" class="brand-logo darken-1">
                      <!-- <img src="images/materialize-logo.png" alt="materialize logo"> -->
                      Auditing Management System
                    </a> <span class="logo-text">Auditing Management System</span></h1>
                    <ul class="right hide-on-med-and-down">
                        <!-- <li class="search-out">
                            <input type="text" class="search-out-text">
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="waves-effect waves-block waves-light show-search"><i class="mdi-action-search"></i></a>
                        </li> -->
                        <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen"><i class="mdi-action-settings-overscan"></i></a>
                        </li>
                        <!-- <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light"><i class="mdi-social-notifications"></i></a>
                        </li> -->
                        <!-- Dropdown Trigger -->
                        <!-- <li><a href="#" data-activates="chat-out" class="waves-effect waves-block waves-light chat-collapse"><i class="mdi-communication-chat"></i></a>
                        </li> -->
                    </ul>
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
                                <img src="<?php echo base_url();?>static/images/avatar.jpg" alt="" class="circle responsive-img valign profile-image">
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
                                <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown">John Doe<i class="mdi-navigation-arrow-drop-down right"></i></a>
                                <p class="user-roal">Administrator</p>
                            </div>
                        </div>
                    </li>
                    <li class="bold"><a href="<?php echo base_url();?>" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> Dashboard</a>
                    </li>
                    <li class="no-padding">
                        <ul class="collapsible collapsible-accordion">
                            <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-social-person"></i> <span class="trn" data-trn-key="Inspectors">Inspectors</span></a>
                                <div class="collapsible-body">
                                    <ul>
                                        <li><a href="<?php echo base_url();?>index.php/inspector/create">Create New</a>
                                        </li>
                                        <li><a href="<?php echo base_url();?>index.php/inspector/">View All</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="bold"><a class="collapsible-header  waves-effect waves-cyan"><i class="mdi-action-settings"></i> Facility</a>
                                <div class="collapsible-body">
                                    <ul>
                                        <li><a href="<?php echo base_url();?>index.php/facility/create">Create New</a>
                                        </li>
                                        <li><a href="<?php echo base_url();?>index.php/facility/">View All</a>
                                        </li>
                                        <li><a href="<?php echo base_url();?>index.php/centre/">Commercial Centres</a>
                                        </li>
                                        <li><a href="<?php echo base_url();?>index.php/FacilityWorker/">Workers</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="bold"><a class="collapsible-header  waves-effect waves-cyan"><i class="mdi-editor-attach-money"></i> Penalties</a>
                                <div class="collapsible-body">
                                    <ul>
                                        <li><a href="<?php echo base_url();?>index.php/penalty/create">Create New</a>
                                        </li>
                                        <li><a href="<?php echo base_url();?>index.php/penalty/">View All</a>
                                        </li>
                                        <li><a href="table-data.html">Category</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="bold"><a class="collapsible-header  waves-effect waves-cyan"><i class="mdi-action-done"></i> Checklist Templates</a>
                                <div class="collapsible-body">
                                    <ul>
                                        <li><a href="<?php echo base_url();?>index.php/checklist/create">Create New</a>
                                        </li>
                                        <li><a href="<?php echo base_url();?>index.php/checklist">View All</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="bold"><a class="collapsible-header  waves-effect waves-cyan"><i class="mdi-action-history"></i> Audits</a>
                                <div class="collapsible-body">
                                    <ul>
                                        <li><a href="<?php echo base_url();?>index.php/audit/create">Schedule Audit</a>
                                        </li>
                                        <li><a href="<?php echo base_url();?>index.php/audit">View All</a>
                                        </li>
                                        <li><a href="<?php echo base_url();?>index.php/audit/auto_create">Auto Schedule</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="bold"><a class="collapsible-header  waves-effect waves-cyan"><i class="mdi-editor-attach-money"></i> Trainings</a>
                                <div class="collapsible-body">
                                    <ul>
                                        <li><a href="<?php echo base_url();?>index.php/training/create">Schedule Trainings</a>
                                        </li>
                                        <li><a href="<?php echo base_url();?>index.php/training/">View All</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-editor-insert-chart"></i> Graphs</a>
                            </li>
                            <li class="bold"><a href="<?php echo base_url();?>index.php/login/logout" class="collapsible-header waves-effect waves-cyan"><i class="mdi-action-settings-power"></i> Logout</a>
                            </li>
                            <li class="bold"><a class="collapsible-header waves-effect waves-cyan lang-selector" data-value="pt"><i class="mdi-action-language"></i> Arabic</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only darken-2"><i class="mdi-navigation-menu" ></i></a>
            </aside>
            <!-- END LEFT SIDEBAR NAV-->
            <!-- //////////////////////////////////////////////////////////////////////////// -->
