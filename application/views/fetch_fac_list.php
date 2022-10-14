<!--************
            Sidebar end
        *************-->

        <!--************
            Content body start
        *************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Hi, welcome back!</h4>
                            <span class="ml-1">Datatable</span>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Datatable</a></li>
                        </ol>
                    </div>
                </div>
                <!-- row -->


                
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Datatable</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example2" class="display" style="width:100%">
                                        <thead>
                                            <tr>
                                            <th>Faculty Id</th>
                                                <th>Faculty  Name</th>
                                               
                                                <th>Mobile No.</th>
                                                <th>Department</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
  
  foreach($results as $result){
  ?>

  <tr>
        
    <td><?php echo $result['fac_id'] ?></td>
    <td><?php echo $result['fname']. " ".$result['lname']?>  </td>

    
    <td><?php echo $result['mobile'] ?>  </td>
    <td><?php echo $result['depart_name'] ?></td>
    <td><?php //echo $result['profile_photo'] ?></td>
    <td><?php //echo $result['resume'] ?></td>
   

</tr>
<?php  } ?>
                                            
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                            <th>Faculty Id</th>
                                                <th>Faculty  Name</th>
                                               
                                                <th>Mobile No.</th>
                                                <th>Department</th>
                                                
                                            
                                                
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>