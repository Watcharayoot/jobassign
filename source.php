<?php $ss = $this->session->userdata('logged_in');?>
<!doctype html> 
<html> 
<head> 
    <title>DataTables and Codeigniter</title> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <!--data table--> 
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs/pdfmake-0.1.18/dt-1.10.12/b-1.2.2/b-colvis-1.2.2/b-html5-1.2.2/b-print-1.2.2/r-2.1.0/datatables.min.css" /> 
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs/pdfmake-0.1.18/dt-1.10.12/b-1.2.2/b-colvis-1.2.2/b-html5-1.2.2/b-print-1.2.2/r-2.1.0/datatables.min.js"></script> 
    <!--/.data table--> 
    <style> 
        body { 
            padding: 15px; 
        } 
    </style> 
</head> 
<body> 
    <?php if($ss["job"]=="assign"){?>
    <div class="row" style="margin-bottom: 10px"> 
        <div class="col-md-4"> 
            <h2 style="margin-top:0px">MY JOB</h2> 
        </div> 
        <div class="col-md-4 text-center"> 
            <div style="margin-top: 4px" id="message"> 
                
            </div> 
        </div> 
        <div class="col-md-4 text-right"> 
            
        </div> 
    </div> 
    <table class="table table-bordered table-striped" id="mytable"> 
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
               
        </tbody> 
    </table> 

<div class="row" style="margin-bottom: 10px"> 
        <div class="col-md-4"> 
            <h2 style="margin-top:0px">Assign JOB</h2> 
        </div> 
        <div class="col-md-4 text-center"> 
            <div style="margin-top: 4px" id="message"> 
                
            </div> 
        </div> 
        <div class="col-md-4 text-right"> 
            
        </div> 
    </div> 
    <table class="table table-bordered table-striped" id="mytable2"> 
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
               
        </tbody> 
    </table>
    <?php ;}
    elseif ($ss["job"]=="worker"){?> 
        <div class="row" style="margin-bottom: 10px"> 
        <div class="col-md-4"> 
            <h2 style="margin-top:0px">MY JOB</h2> 
        </div> 
        <div class="col-md-4 text-center"> 
            <div style="margin-top: 4px" id="message"> 
                
            </div> 
        </div> 
        <div class="col-md-4 text-right"> 
            
        </div> 
    </div> 
    <table class="table table-bordered table-striped" id="mytable"> 
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
                                    
                                    
                                    </tr>
                                    <?php } ?>
               
        </tbody> 
    </table> 
                <?php ; }
                elseif ($ss["job"]=="master"){?>
<div class="row" style="margin-bottom: 10px"> 
        <div class="col-md-4"> 
            <h2 style="margin-top:0px">MY assign JOB</h2> 
        </div> 
        <div class="col-md-4 text-center"> 
            <div style="margin-top: 4px" id="message"> 
                
            </div> 
        </div> 
        <div class="col-md-4 text-right"> 
            
        </div> 
    </div> 
    <table class="table table-bordered table-striped" id="mytable"> 
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


                      <div class="row" style="margin-bottom: 10px"> 
        <div class="col-md-4"> 
            <h2 style="margin-top:0px">ALL JOB</h2> 
        </div> 
        <div class="col-md-4 text-center"> 
            <div style="margin-top: 4px" id="message"> 
                
            </div> 
        </div> 
        <div class="col-md-4 text-right"> 
            
        </div> 
    </div> 
    <table class="table table-bordered table-striped" id="mytable"> 
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

                                    <?php ; } ?>


    <?php //print_r($data);?>
    <script type="text/javascript"> 
        $(document).ready(function() { 
            $("#mytable").dataTable(); 
        }); 
    </script> 
     <script type="text/javascript"> 
        $(document).ready(function() { 
            $("#mytable2").dataTable(); 
        }); 
    </script> 
</body> 
</html>