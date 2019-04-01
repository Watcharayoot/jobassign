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
    <title>job assign</title>

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
                        <?php if($ss["job"] == "master" || $ss["job"] == "assign"){?>
                        <li>
                            <a href="home">
                                <i class="fas fa-chart-bar"></i>ASSIGN</a>
                        </li>
                        <?php ;}
                        else  ;?>

                       
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
                            <?php if($ss["job"] == "master" || $ss["job"] == "assign"){?>
                        <li>
                            <a href="home">
                                <i class="fas fa-chart-bar"></i>ASSIGN</a>
                        </li>
                        <?php ;}
                        else  ;?>
                       
                        
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

                                <button class="btn btn-danger" onclick="window.location.href='source'" >
                                            <i class="fa fa-dot-circle-o" ></i> DATA SOURCE
                                        </button>
                                
                                <!-- DATA TABLE-->
                               
                                <?php if($ss["job"]=="master"){
                                  ;?>
                                    <P>ASSIGNED JOB by <?php echo $ss["full_name"];?></P>


                                <div class="table-responsive m-b-40">
                                    <table id="dataTable" class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>date start</th>
                                                <th>topic</th>
                                                <th>Worker</th>
                                                <th>date end</th>
                                                <th>status</th>
                                            </tr>
                                        </thead>
                                         <tbody>
                                   <?php foreach ($assign as $row) { ?>
                                    <tr>
                                    <td ><?php echo $row['date_start'];?></td>
                                    <td ><a href="data/<?php echo $row['doc_no'];?>" > <?php echo $row['work_event'];?></td>
                                    <td ><?php echo $row['worker'];?></td>
                                    <td ><?php echo $row['date_end'];?></td>
                                    <?php if($row['order_status']=='uncomplete'){?>
                                    
                                    <td ><font color="red"><?php echo $row['order_status'];?></font></td>
                                    <?php ;}
                                    elseif($row['order_status']=='complete') {;?>
                                        <td ><font color="ForestGreen"><?php echo $row['order_status'];?></font></td>
                                        <?php ;}
                                        elseif($row['order_status']=='Check') {;?>
                                        <td ><font color="ForestGreen"><?php echo $row['order_status'];?></font></td>
                                        <?php ;}


                                        elseif($row['order_status']=='processing') {;?>
                                        <td ><font color="Gold"><?php echo $row['order_status'];?></font></td>
                                        <?php ;}?>
                                    
                                    </tr>
                                    <?php } ?>
                                    </table>
                                </div>
                                   



                                    <P>OVERVIEW</P>


                                                 <div class="table-responsive m-b-40">
                                    <table id="table_id" class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>date start</th>
                                                <th>topic</th>
                                                <th>assign_by</th>
                                                <th>worker</th>
                                                <th>status</th>
                                            </tr>
                                        </thead>
                                         <tbody>
                                   <?php foreach ($data as $row) { ?>
                                    <tr>
                                    <td ><?php echo $row['date_start'];?></td>
                                    <td ><a href="data/<?php echo $row['doc_no'];?>" > <?php echo $row['work_event'];?></td>
                                    <td ><?php echo $row['assign_by'];?></td>
                                    <td ><?php echo $row['worker'];?></td>
                                    <?php if($row['order_status']=='uncomplete'){?>
                                    
                                    <td ><font color="red"><?php echo $row['order_status'];?></font></td>
                                    <?php ;}
                                    elseif($row['order_status']=='complete') {;?>
                                        <td ><font color="ForestGreen "><?php echo $row['order_status'];?></font></td>
                                        <?php ;}
                                        elseif($row['order_status']=='Check') {;?>
                                        <td ><font color="ForestGreen"><?php echo $row['order_status'];?></font></td>
                                        <?php ;}

                                        elseif($row['order_status']=='processing') {;?>
                                        <td ><font color="Gold  "><?php echo $row['order_status'];?></font></td>
                                        <?php ;}?>
                                    </tr>
                                    <?php } ?>
                                    </table>



                                </div>
                               <?php }









                                elseif ($ss["job"]=="assign") {?>
                                   
                                    <P>MY JOB == <?php echo $ss["full_name"];?></P>
                                   <div class="table-responsive m-b-40">
                                    <table id="dataTable" class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>date start</th>
                                                <th>topic</th>
                                                <th>assign_by</th>
                                                
                                                <th>date end</th>
                                                <th>status</th>
                                            </tr>
                                        </thead>
                                         <tbody>
                                   <?php foreach ($data as $row) { ?>
                                    <tr>
                                    <td ><?php echo $row['date_start'];?></td>
                                    <td ><a href="data/<?php echo $row['doc_no'];?>" > <?php echo $row['work_event'];?></td>
                                    <td ><?php echo $row['assign_by'];?></td>
                                    <td ><?php echo $row['date_end'];?></td>
                                    <?php if($row['order_status']=='uncomplete'){?>
                                    
                                    <td ><font color="red"><?php echo $row['order_status'];?></font></td>
                                    <?php ;}
                                    elseif($row['order_status']=='complete'|| $row['order_status']=='Check') {;?>
                                        <td ><font color="ForestGreen"> complete </font></td>
                                        <?php ;}

                                        elseif($row['order_status']=='processing') {;?>
                                        <td ><font color="Gold  "><?php echo $row['order_status'];?></font></td>
                                        <?php ;}?>
                                    </tr>
                                    <?php } ?>
                                    </table>
                                </div>

                             <P>ASSIGNED JOB by <?php echo $ss["full_name"];?></P>


                                <div class="table-responsive m-b-40">
                                    <table id="dataTable" class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>date start</th>
                                                <th>topic</th>
                                                <th>Worker</th>
                                                <th>date end</th>
                                                <th>status</th>
                                            </tr>
                                        </thead>
                                         <tbody>
                                   <?php foreach ($assign as $row) { ?>
                                    <tr>
                                    <td ><?php echo $row['date_start'];?></td>
                                    <td ><a href="data/<?php echo $row['doc_no'];?>" > <?php echo $row['work_event'];?></td>
                                    <td ><?php echo $row['worker'];?></td>
                                    <td ><?php echo $row['date_end'];?></td>
                                    <?php if($row['order_status']=='uncomplete'){?>
                                    
                                    <td ><font color="red"><?php echo $row['order_status'];?></font></td>
                                    <?php ;}
                                    elseif($row['order_status']=='complete') {;?>
                                        <td ><font color="ForestGreen"><?php echo $row['order_status'];?></font></td>
                                        <?php ;}
                                        elseif($row['order_status']=='Check') {;?>
                                        <td ><font color="ForestGreen"><?php echo $row['order_status'];?></font></td>
                                        <?php ;}


                                        elseif($row['order_status']=='processing') {;?>
                                        <td ><font color="Gold"><?php echo $row['order_status'];?></font></td>
                                        <?php ;}?>
                                    
                                    </tr>
                                    <?php } ?>
                                    </table>
                                </div>
                             




                         <?php    ;   }



                                


                                




                                else{
                                    ?>

                                    <P>MY JOB == <?php echo $ss["full_name"];?></P>
                                   <div class="table-responsive m-b-40">
                                    <table id="dataTable" class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>date start</th>
                                                <th>topic</th>
                                                <th>assign_by</th>
                                                
                                                <th>date end</th>
                                                <th>status</th>
                                            </tr>
                                        </thead>
                                         <tbody>
                                   <?php foreach ($data as $row) { ?>
                                    <tr>
                                    <td ><?php echo $row['date_start'];?></td>
                                    <td ><a href="data/<?php echo $row['doc_no'];?>" > <?php echo $row['work_event'];?></td>
                                    <td ><?php echo $row['assign_by'];?></td>
                                    <td ><?php echo $row['date_end'];?></td>
                                     <?php if($row['order_status']=='uncomplete'){?>
                                    
                                    <td ><font color="red"><?php echo $row['order_status'];?></font></td>
                                    <?php ;}
                                    elseif($row['order_status']=='complete'|| $row['order_status']=='Check') {;?>
                                        <td ><font color="ForestGreen"> complete </font></td>
                                        <?php ;}

                                        elseif($row['order_status']=='processing') {;?>
                                        <td ><font color="Gold"><?php echo $row['order_status'];?></font></td>
                                        <?php ;}?>
                                    
                                    </tr>
                                    <?php } ?>
                                    </table>
                                </div>
                            <?php ;   }


                                ?>






                                      <?php //print_r($data);?>

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
