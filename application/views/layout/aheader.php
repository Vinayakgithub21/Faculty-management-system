<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title> Admin Dashboard </title>
    <!-- Favicon icon -->
    <link href="<?= base_url();?>/assets/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url();?>/assets/images/favicon.png">
    <link rel="stylesheet" href="<?= base_url();?>/assets/vendor/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url();?>/assets/vendor/owl-carousel/css/owl.theme.default.min.css">
    <link href="<?= base_url();?>/assets/vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
    <link href="<?= base_url();?>/assets/css/style.css" rel="stylesheet">



</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
                <span class="nav-text">Dashboard</span></a>
                        <ul aria-expanded="false">
                <!-- <img class="logo-abbr" src="./images/logo.png" alt="">
                <img class="logo-compact" src="./images/logo-text.png" alt="">
                <img class="brand-title" src="./images/logo-text.png" alt=""> -->
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
           
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="search_bar dropdown">
                                <span class="search_icon p-3 c-pointer" data-toggle="dropdown">
                                    <i class="mdi mdi-magnify"></i>
                                </span>
                                <div class="dropdown-menu p-0 m-0">
                                    <form>
                                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                                    </form>
                                    
                                </div>
                            </div>
                        </div>

                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <i class="mdi mdi-bell"></i>
                                    <div class="pulse-css"></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <ul class="list-unstyled">
                                        <li class="media dropdown-item">
                                            <span class="success"><i class="ti-user"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Martin</strong> has added a <strong>customer</strong> Successfully
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="primary"><i class="ti-shopping-cart"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Jennifer</strong> purchased Light Dashboard 2.0.</p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="danger"><i class="ti-bookmark"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Robin</strong> marked a <strong>ticket</strong> as unsolved.
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="primary"><i class="ti-heart"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>David</strong> purchased Light Dashboard 1.0.</p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="success"><i class="ti-image"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong> James.</strong> has added a<strong>customer</strong> Successfully
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                    </ul>
                                    <a class="all-notification" href="#">See all notifications <i
                                            class="ti-arrow-right"></i></a>
                                </div>
                            </li>
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <i class="mdi mdi-account"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="<?= base_url();?>/assets/app-profile.html" class="dropdown-item">
                                        <i class="icon-user"></i>
                                        <span class="ml-2">Profile </span>
                                    </a>
                                    <!-- <a href="<?= base_url();?>/assets/email-inbox.html" class="dropdown-item">
                                        <i class="icon-envelope-open"></i>
                                        <span class="ml-2">Inbox </span>
                                    </a> -->
                                    <a href="<?= base_url();?>/admin/Logout" class="dropdown-item">
                                        <i class="icon-key"></i>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>

        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->

        <div class="quixnav">
            <div class="quixnav-scroll">
                <ul class="metismenu" id="menu">
                    <!-- <li class="nav-label first">Main Menu</li> -->
                    <!-- <li><a class="has" href="javascript:void()">
                         <ul aria-expanded="false"> -->
                            <!-- <li><a href="<?= base_url();?>/assets/index.html">Dashboard 1</a></li>
                            <li><a href="<?= base_url();?>/assets/index2.html">Dashboard 2</a></li> -->
                        <!-- </ul> -->
                    </li> 
                    <!-- <li class="nav-label">Hello There!</li> -->

                    

                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                        class="icon icon-chart-bar-33"></i><span class="nav-text">Department</span></a>
                            <ul aria-expanded="false">
                            <li><a href="<?= base_url();?>/department/departmentInsert">Add New Department</a></li>
                             <li><a href="<?= base_url();?>/department/fetch_depart">Department List</a></li>
                          
                  
                             </ul>
                             </li>
                                 
                              <li>
                                <a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-chart-bar-33"></i><span class="nav-text">Subject</span></a>
                                     <ul aria-expanded="false">
                                 <li><a href="<?= base_url();?>/Subject/subjectinsert">Add New Subject</a></li>
                                 <li><a href="<?= base_url();?>/Subject/fetch_sub">Subject List</a></li>
                           
                             </li></ul>


                             <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-chart-bar-33"></i><span class="nav-text">Faculty</span></a>
                                     <ul aria-expanded="false">
                                 <li><a href="<?= base_url();?>/Faculty/facultyInsert">Add New Faculty</a></li>
                                 <li><a href="<?= base_url();?>/Faculty/fetch_fac">Faculy List</a></li>
                           
                             </li></ul>
                
                             <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-chart-bar-33"></i><span class="nav-text">Assign</span></a>
                                     <ul aria-expanded="false">
                                 <li><a href="<?= base_url();?>/Subject/assigningSubjects">Assigning Subject</a></li>
                                 <li><a href="<?= base_url();?>/Subject/fetch_assig_sub">Assigned  Subject List</a></li>
                           
                             </li>

                       
                    </li>
                    

                    
                    </li>
                    
                </ul>
            </div>


        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->