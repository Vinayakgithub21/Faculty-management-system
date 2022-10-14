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
                                         
                                               
            
                                            <th>Subject Id</th>
                                           <th>Subject Name</th>
                                        <th>Description</th>
                                       <th>Syllabus</th>
                                          <th>Status</th> 
                                                    </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
  
  foreach($results as $result){
  ?>

  <tr>
        
  <td><?php echo $result['sub_id'] ?></td>
        <td><?php echo $result['sname'] ?>  </td>
        <td><?php echo $result['description'] ?></td>
        
        <td><a href="<?=base_url()?>syllabus/<?= $result['syllabus']?>" class="btn-info" > View syllabus</a></td>
        <td><?php echo $result['status'] ?></td>
       
</tr>
<?php  } ?>
                                            
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                            <th>Subject Id</th>
            <th>Subject Name</th>
            <th>Description</th>
            <th>Syllabus</th>
            <th>Status</th>              
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