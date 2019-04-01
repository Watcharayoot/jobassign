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

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

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

                        <li>
                            <a href="http://vps345.pathosting.com/it/job//index.php/Welcome/show">
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
                            <a href="http://vps345.pathosting.com/it/job/index.php/Welcome/show">
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
                                                <a href="http://vps345.pathosting.com/it/job/index.php/Welcome/logout">
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
 <?php if($data[0]['work_ref']==null){
                                                    echo"no reference";} 
                                                    else { ?>
                                <div class="row form-group">
                                                <div class="col col-md-3">
                                                     <label for="disabled-input" class=" form-control-label">REFERENCE</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                   
                                                     <button onclick="document.getElementById('ref').style.display='block'" class="w3-button w3-black">REFERENCE</button>

  <div id="ref" class="w3-modal">
    <div class="w3-modal-content w3-card-4">
      <header class="w3-container w3-teal"> 
        <span onclick="document.getElementById('ref').style.display='none'" 
        class="w3-button w3-display-topright">&times;</span>
        <h2>REFERENCE</h2>
      </header>
      <div class="w3-container">
        <p>Topic:<?php echo $ref[0]['work_event'];?></p>
        <p>Detail:<?php echo $ref[0]['work_detail'];?> </p>
      </div>
     
    </div>
  </div>
                                                </div>
                                            </div>
                                           

<?php };?>



                           
                 
                                <!-- DATA TABLE-->

                                                    



                                <div class="card-body card-block">
                                        <form  action="<?php echo base_url()?>index.php/welcome/update" method="post" enctype="multipart/form-data" class="form-horizontal" onSubmit="JavaScript:return fncSubmit();">
                                    

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="disabled-input" class=" form-control-label">Work Topic</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                   
                                                    <input type="text" id="disabled-input" name="work_event" class="form-control" value="<?php echo $data[0]['work_event'];?>" readonly>
                                                    <small class="form-text text-muted">Topic work</small>
                                                </div>
                                            </div>

                                            
                                            
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label  class=" form-control-label">Date START</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                     <input type="text" id="disabled-input" name="date_start" placeholder="<?php echo $data[0]['date_start'];?>" disabled="" class="form-control">
                                                    
                                                </div>
                                            </div>
                                            
                                                
                                            
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">DATA</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea  name="work_detail" rows="9" disabled="" class="form-control" readonly><?php echo $data[0]['work_detail'];?></textarea>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label  class=" form-control-label">Date Finish</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="disabled-input" name="date_end" placeholder="<?php echo $data[0]['date_end'];?>" class="form-control" disable="" readonly>
                                                    
                                                </div>
                                            </div>



                                            <?php if($ss["ID"]== $data[0]['assign_by']){?>
                                           <details ontoggle="myFunction()">
<summary>EDIT</summary><br>
<div class="row form-group">

                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">DATA</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea  name="work_detail_edit" rows="9" placeholder=""  class="form-control"> <?php echo $data[0]['work_detail'];?> </textarea>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label  class=" form-control-label">Date Finish</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="date" id="disabled-input" name="date_end_edit" class="form-control">
                                                    
                                                </div>
                                            </div>
                                            <center><button type="submit" class="btn btn-primary btn-sm" name="edit" value="edit">
                                            <i class="fa fa-dot-circle-o" ></i> EDIT
                                        </button>
                                    <a href="mailto:<?php echo$data[0]['worker'];?>@mbjenterprise.co.th?subject=Jobassign&body=JOB:<?php echo$data[0]['work_event'];?>%0DDetail:รายละเอียดของงานมีการเพิ่มหรือแก้ไข " target="_blank">
                                            E-mail
                                        </a></center>
</details>

<script>
function myFunction() {
  alert("This Edit for assignment");
}
</script><?php ;} 
else ;?>

<br>
                                           
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">WORK COMPLETE</label>
                                                </div>
                                                 
                                                <div class="col-12 col-md-9">
                                                    <?php if ($ss["ID"]==$data[0]['worker']){?>
                                                   <textarea  name="work_note" rows="9" class="form-control" readonly ><?php echo $data[0]['work_note'];?></textarea>
                                               </div>
                                           </div>
                                                   <div class="row form-group">

                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label"></label>
                                                </div>

                                                 <?php if ($data[0]['work_status']=="1" || $data[0]['work_status']=="2"){?>
                                                <div class="col-12 col-md-9">
                                                    <textarea  name="work_note_update" rows="4" class="form-control"><?php echo $data[0]['work_note'];?></textarea>
                                                </div>
                                            </div>
                                                <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">File</label>
                                                </div>
                                               
                                                    <div class="col-12 col-md-6">
                                                <input type="file"  name="file" multiple class="form-control" accept="image/jpeg,image/gif,image/png,image/jpg,application/pdf" >
                                                
                                            
                                                 </div>
                                                 <div class="col-12 col-md-3">
                                                <button type="submit" class="btn btn-success btn-sm" name="upload" value="<?php echo $data[0]['doc_no'];?>">
                                            <i class="fa fa-dot-circle-o" ></i> UPLOAD
                                        </button>
                                                
                                            
                                                 </div>
                                           
                                            </div>

                                                 
                                                <div class="col-12 col-md-9">
                                            
                                            
                                            <?php if($data[0]['comment']!=null){?>
                                            </div>
                                        </div>
                                                    <div class="row form-group">
                                                  
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">COMMENT</label>
                                               
                                               
                                               </div> 

                                               <div class="col-12 col-md-9">
                                                    <textarea  name="comment_work" rows="4" class="form-control" readonly><?php echo $data[0]['comment'];?> </textarea>
                                                </div>
                                            


                                                        <?php ;}
                                                        else ;


                                                        ; }
                                                        else ;?>

                                                   <?php ; }

                                                  else {?>
                                                  </div> <textarea  rows="9" placeholder="<?php echo $data[0]['work_note'];?>"  class="form-control" readonly></textarea></div> 
                                                    <?php if($data[0]['job_at']!=null){?>
                                                   <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">File</label>
                                                </div>
                                                 <div class="col-12 col-md-9">
                                                    <a target="_blank" rel="noopener noreferrer" href="<?php echo $data[0]['job_at'];?>">File</a>
                                                
                                            </div>


                                                  <?php ;}
                                                  else ;
                                                  ;}?>
                                                
                                            
                                        
                                            
                                                 <?php if ($ss["ID"]== $data[0]['worker']){ 
                                                    if ($data[0]['work_status']=="1" || $data[0]['work_status']=="2"){?>
                                                    </div>
                                                        <div class="row form-group">
                                                  
                                                
                                                
                                                    <div class="col-12 col-md-12">
                                                        
                                           <center> <button type="submit" class="btn btn-success btn-sm" name="update" value="<?php echo $data[0]['assign_by'];?>">
                                            <i class="fa fa-dot-circle-o" ></i> UPDATE
                                        </button>
                                    <button type="submit" class="btn btn-primary btn-sm" name="complete" value="<?php echo $data[0]['assign_by'];?>">
                                            <i class="fa fa-dot-circle-o" ></i> Complete
                                        </button></center> <?php ;} 
                                             elseif ($data[0]['work_status']=="4"){ 
                                                if($data[0]['score']!=null){?>
                                                </div>
                                                        <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label  class=" form-control-label">SCORE</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="disabled-input" value="<?php echo $data[0]['score'];?>" class="form-control" disable="" readonly>
                                                    
                                                </div>
                                            </div> <?php ;} 
                                            else ;}?>

                                        </foam>
                                    
                                    <?php }



                                    else  {?> 
                                    </div>
                                        <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label  class=" form-control-label">TIME Stamp</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="disabled-input" name="date_end" placeholder="<?php echo $data[0]['time_stamp'];?>" disabled="" class="form-control">
                                                    
                                                </div>
                                            </div>
                                                <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label  class=" form-control-label">COMMENT</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" name="comment_work" class="form-control">
                                                    
                                                </div></div>
                                                <div class="row form-group">
                                                    <div class="col col-md-12">
                                                    
                                                <center> <button type="submit" class="btn btn-success btn-sm" name="comment" value="<?php echo $data[0]['worker'];?>">
                                            <i class="fa fa-dot-circle-o" ></i> Comment
                                        </button></center><br>
                                        <?php if($data[0]['work_status']=="1" || $data[0]['work_status']=="2"){?>
                                         <center> <button type="submit" class="btn btn-danger" name="cancle" value="<?php echo $data[0]['doc_no'];?>">
                                            <i class="fa fa-dot-circle-o" ></i> Cancle
                                        </button></center><?php ;}
                                        elseif($data[0]['work_status']=="3"){;?>
                                            <center> <button type="submit" class="btn btn-danger" name="ok" value="<?php echo $data[0]['doc_no'];?>">
                                            <i class="fa fa-dot-circle-o" ></i> OK
                                        </button></center>
                                        <?php ;}
                                        elseif($data[0]['work_status']=="4"){;}?>

                                    </div>
                                </div>
                                    <br>
                                    <br>


                                                <?php ;} 
                                                //print_r($data);
                                                //if($data[0]['work_ref']==null){
                                                  //  echo"nodata";}
                                                    //else print_r($ref);?>
                                        
                                    

                                   
                                     

                                         
                                
                                <!-- END DATA TABLE-->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
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
    <script language="javascript">
function fncSubmit()
{
    if(confirm('Confirm DATA')==true)
    {
        return true;
    }
    else
    {
        return false;
    }
}
</script>

<script>
// Get the modal
var modal = document.getElementById('ref');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>


</body>

</html>
<!-- end document-->

