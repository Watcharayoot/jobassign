<?php $ss = $this->session->userdata('logged_in');?>
<?php
date_default_timezone_set('Asia/Bangkok');



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>WORK</title>

    <!-- Fontfaces CSS-->
    <link href="/it/job/assets/css/font-face.css" rel="stylesheet" media="all">
    <link href="/it/job/assets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="/it/job/assets/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="/it/job/assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="/it/job/assets/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="/it/job/assets/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="/it/job/assets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="/it/job/assets/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="/it/job/assets/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="/it/job/assets/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="/it/job/assets/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="/it/job/assets/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="/it/job/assets/css/theme.css" rel="stylesheet" media="all">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="dist/js/bootstrap-select.js"></script>

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="/it/job/assets/images/icon/logo.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">

                        <li>
                            <a href="show">
                                <i class="far fa-check-square"></i>Work</a>
                        </li>

                       
                            </ul>
                       
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="/it/job/assets/images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                       <li>
                            <a href="show">
                                <i class="far fa-check-square"></i>Work</a>
                        </li>
                       
                        
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                           
                                <P>JOB ASSIGNMENT </P>
                               
                           
                            <div class="header-button">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                        
                                        <div class="mess-dropdown js-dropdown">
                                            
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        
                                            
                                        </div>
                                  
                                    <div class="noti__item js-item-menu">
                                   
                                        
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title">
                                                
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c1 img-cir img-40">
                                                    <i class="zmdi zmdi-email-open"></i>
                                                </div>
                                                
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c2 img-cir img-40">
                                                    <i class="zmdi zmdi-account-box"></i>
                                                </div>
                                                
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c3 img-cir img-40">
                                                    <i class="zmdi zmdi-file-text"></i>
                                                </div>
                                               
                                            </div>
                                            <div class="notifi__footer">
                                                <a href="#">All notifications</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        
                                        <div class="content">
                                            <a class="js-acc-btn">info</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a><?php echo $ss["full_name"];?></a>
                                                    </h5>
                                                    
                                                </div>
                                            </div>
                                            
                                          
                                            <div class="account-dropdown__footer">
                                                <a href="logout">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- END HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
               
                           
                        <div class="row m-t-30">
                            <div class="col-md-12">
                                <!-- DATA TABLE-->



                                <div class="card-body card-block">
                                        <form action="input" method="post" enctype="multipart/form-data" class="form-horizontal">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <p class="form-control-static"><?php echo $ss["full_name"];?></p>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Work Topic</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="topic" placeholder="Text" class="form-control">
                                                    <small class="form-text text-muted">Topic work</small>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="select" class=" form-control-label">REFERENCE</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                   
                                                    <select name="Ref_no" id="select" class="form-control" data-live-search="true">
                                                        <option value=""> Please select</option>

                                                        <?php foreach($ref as $key){ ?>
                                                    <option value="<?php echo $key["doc_no"];?>"> <?php echo $key["work_event"]; ?></option>
                                                <?php } ?></option>
                                                        
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="select" class=" form-control-label">Worker</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="worker" id="select" class="form-control">
                                                        <option>Please select</option>

                                                        <?php foreach($data as $key){ ?>
                                                    <option value="<?php echo $key["ID"];?>"> <?php echo $key["display_name"]; ?></option>
                                                <?php } ?></option>
                                                        
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label  class=" form-control-label">Date START</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="date"  name="start" placeholder="YYYY-MM-DD" class="form-control">
                                                    
                                                </div>
                                            </div>
                                            
                                                
                                            
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">DATA</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea name="detail" id="textarea-input" rows="9" placeholder="DATA WORK" class="form-control"></textarea>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label  class=" form-control-label">Date Finish</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="date" name="finish" placeholder="YYYY-MM-DD" class="form-control">
                                                    
                                                </div>
                                            </div>
                                              <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label  class=" form-control-label">LEVEL</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <div class="form-check-inline form-check">
                                                        <label for="inline-radio1" class="form-check-label ">
                                                            <input type="radio" id="inline-radio1" name="score" value="1" class="form-check-input">NORMAL 
                                                        </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        <label for="inline-radio2" class="form-check-label ">
                                                            <input type="radio" id="inline-radio2" name="score" value="2" class="form-check-input">IMPORTANT 
                                                        </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        <label for="inline-radio3" class="form-check-label ">
                                                            <input type="radio" id="inline-radio3" name="score" value="3" class="form-check-input">VERY IMPORTANT 
                                                        </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label  class=" form-control-label">URGENT</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <div class="form-check-inline form-check">
                                                        <label for="inline-radio1" class="form-check-label ">
                                                            <input type="radio" id="inline-radio1" name="urgent" value="1" class="form-check-input">URGENT
                                                        </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            <center>
                                            <button type="submit" class="btn btn-success btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Submit
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Reset
                                        </button>
                                    </foam>
                                        </center>
                                           
                                            
                                <?php //print_r($data);?>
                                <!-- END DATA TABLE-->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="/it/job/assets/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="/it/job/assets/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="/it/job/assets/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="/it/job/assets/vendor/slick/slick.min.js">
    </script>
    <script src="/it/job/assets/vendor/wow/wow.min.js"></script>
    <script src="/it/job/assets/vendor/animsition/animsition.min.js"></script>
    <script src="/it/job/assets/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="/it/job/assets/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="/it/job/assets/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="/it/job/assets/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="/it/job/assets/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="/it/job/assets/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="/it/job/assets/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="/it/job/assets/js/main.js"></script>

</body>

</html>
<!-- end document-->
