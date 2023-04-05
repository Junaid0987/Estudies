<!DOCTYPE html>
<html lang="en">
<head>
    <?php $url="http://localhost/Estudiez/dashboard/"; ?>
    <?php  if(isset($_SESSION['firstname']) && $_SESSION['firstname'] !='') {
            // echo  '<a href="'. $url.'/dashboard/" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Dashboard<i class="fa fa-arrow-right ms-3"></i></a>';
           }else{
            // echo  '<a href="'. $url.'/signin.php" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Login<i class="fa fa-arrow-right ms-3"></i></a>';
            // echo  '<a href="'. $url.'/signup.php" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Register<i class="fa fa-arrow-right ms-3"></i></a>';
           }?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>ADMIN | Dashboard</title>

    <link href="<?php echo $url;?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"/>

    <!-- Toastr style -->
    <link href="<?php echo $url;?>assets/css/plugins/toastr/toastr.min.css" rel="stylesheet">

    <!-- Gritter -->
    <link href="<?php echo $url;?>assets/js/plugins/gritter/jquery.gritter.css" rel="stylesheet">

    <link href="<?php echo $url;?>assets/css/animate.css" rel="stylesheet">
    <link href="<?php echo $url;?>assets/css/style.css" rel="stylesheet">

</head>
<body>

    <!---SIDEBAR-START--->

    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element">
                        <!-- <img class="border rounded-circle p-2 mx-auto mb-3" src="localhost/Estudiez/dshboard/img/icons8-user-90.png" style="width: 80px; height: 80px;">     -->
                        <?php
                        include "database.php";
                        session_start();
                        ?>
                            <div class="text-center" style="font-size: 20px;">
                            <span style="font-size: 25px;"><i class="fa-solid fa-user-graduate"></i></span>                       
                            <a   href="#">
                                <span class="block m-t-xs font-bold"><?php echo $_SESSION['firstname']; ?> </span>
                            </a>
                            </div>
                            <!-- <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a class="dropdown-item" href="profile.html">Profile</a></li>
                                <li><a class="dropdown-item" href="contacts.html">Contacts</a></li>
                                <li><a class="dropdown-item" href="mailbox.html">Mailbox</a></li>
                                <li class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="signin.php">Logout</a></li>
                            </ul> -->
                        </div>
                        <div class="logo-element">
                        <span><i class="fa-solid fa-user-graduate"></i></span>                       

                        </div>
                    </li>
                    <li >
                        <a class="active" href="<?php echo $url;?>index.php"><i class="fa fa-table"></i><span class="nav-label">Dashboard</span></a>
                    <li >
                        <a class="active" href="<?php echo $url;?>users/index.php"><i class="fa fa-users"></i><span class="nav-label">Users</span></a>
                    </li>
                    <li >
                        <a class="active" href="<?php echo $url;?>teachers/index.php"><i class="fas fa-user"></i> <span class="nav-label">Teachers</span></a>
                    </li>
                    <li >
                        <a class="active" href="<?php echo $url;?>resources/index.php"><i class="fas fa-user"></i> <span class="nav-label">Resources</span></a>
                    </li>
                    <li >
                        <a class="active" href="<?php echo $url;?>guardian/index.php"><i class="fa fa-users"></i> <span class="nav-label">Parents</span></a>
                    </li>
                    <li >
                        <a class="active" href="<?php echo $url;?>students/index.php"><i class="fa fa-users"></i> <span class="nav-label">Students</span></a>
                    </li>
                    <li >
                        <a class="active" href="<?php echo $url;?>marks_student/index.php"><i class="fa fa-users"></i> <span class="nav-label">Marks</span></a>
                    </li>
                    <li >
                        <a class="active" href="<?php echo $url;?>subject/index.php"><i class="fa fa-book"></i> <span class="nav-label">Subject</span></a>
                    </li>
                    <li >
                        <a class="active" href="<?php echo $url;?>exams/index.php"><i class="fa fa-pen"></i><span class="nav-label">Exams</span></a>
                    </li>
                    
                    <li >
                        <a class="active" href="<?php echo $url;?>contact/index.php"><i class="fa fa-phone"></i><span class="nav-label">Contact</span></a>
                    </li>
                    <li >
                        <a class="active" href="<?php echo $url;?>student-attendence/class_attendence.php"><i class="fas fa-check"></i><span class="nav-label">Attendence</span></a>
                    </li>
                    <li >
                        <a class="active" href="<?php echo $url;?>class/index.php"><i class="fa-solid fa-bell"></i><span class="nav-label">Class</span></a>
                    </li>
                    <li >
                        <a class="active" href="<?php echo $url;?>events/index.php"><i class="fa-solid fa-calendar"></i><span class="nav-label">Events</span></a>
                    </li>
                    <li >
                        <a class="active" href="<?php echo $url;?>news/index.php"><i class="fa-solid fa-newspaper"></i><span class="nav-label">News</span></a>
                    </li>
                    <li >
                    </li>
                    </li>
                    
            </div>
        </nav>

        <div id="page-wrapper" class="gray-bg dashbard-1">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
                    <!-- <li>
                        <a href="#"><i class="fa fa-table"></i> <span class="nav-label">Tables</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="table_basic.php">Static Tables</a></li>
                            <li><a href="table_data.php">Data Tables</a></li>
                        </ul>
                    </li> -->
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            <form role="search" class="navbar-form-custom" action="search_results.html">
                <div class="form-group">
                    <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
                </div>
            </form>
        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li style="padding: 20px">
                 
                <!---SIDEBAR-END--->



                <!---NAVBAR-START--->

                <ul class="nav navbar-top-links navbar-right">
               
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell"></i>  <span class="label label-primary">8</span>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="mailbox.html" class="dropdown-item">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> You have 16 messages
                                    <span class="float-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li>
                            <a href="profile.html" class="dropdown-item">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="float-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li>
                            <a href="grid_options.html" class="dropdown-item">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="float-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li>
                            <div class="text-center link-block">
                                <a href="notifications.html" class="dropdown-item">
                                    <strong>See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>


                <li>
                    <a href="<?php echo $url;?>logout.php">
                        <i class="fa fa-sign-out"></i> Log out
                    </a>
                </li>
                
            </ul>

        </nav>
        </div>
<!---NAVBAR-END-->
