



   <div class="content-body">

  <div class="container">
        <div class="row">
            <div class="col-md-sm-9">
                <div class="card">
                    <div class="card-header">
                        <h4>Faculty Details</h4>

                    </div>
                    <div class="card-body">
                        <form action="<?= base_url()?>faculty/update" method="post" enctype="multipart/form-data">
                        <!--  -->

                        <div class="container-fluid">
                


                
                <div class="col-sm-2">
                <img src="<?=base_url()?>faculty/facpic/<?= $fac_detail['profile_photo']?>" alt="profilepic" class="img-fluid rounded-circle"  >
                                
                    
                </div>


                        <!--  -->
                             <div class="form-group">
                                <label for="">Faculty ID</label>
                                <input type="text" name="id" class="form-control" value=" <?php echo $fac_detail['fac_id'] ?>"/>

                             </div>
                             <div class="form-group">
                                <label for="">First Name</label>
                                <input type="text" name="txtfname"  class="form-control" value=" <?php echo $fac_detail['fname'] ?>"/>
                                                               
                             </div>
                             <div class="form-group">
                                <label for="">Last Name</label>
                                <input type="text" name="txtlname" class="form-control"  value=" <?php echo $fac_detail['lname'] ?>"/>
                                 
                                
                             </div>
                             <div class="form-group">
                                <label for="">Address</label>
                                <input type="text" name="txtaddress" class="form-control" value=" <?php echo $fac_detail['address'] ?>"/>
                                 
                                
                             </div>
                             <div class="form-group">
                                <label for="">Mobile no</label>
                                <input type="text" name="intmobileno" class="form-control" value=" <?php echo $fac_detail['mobile'] ?>"/>
                                 
                                
                             </div>
                             <div class="form-group">
                                <label for="">Department ID</label>
                                <input type="text" name="did" class="form-control" value=" <?php echo $fac_detail['depart_id'] ?>"/>
                                 
                                
                             </div>
                             <div class="form-group">
                                <label for="">Update Photo</label>
                                <input type="hidden" name="userfile" value="<?= $fac_detail['profile_photo']?>">
                                <input class="form-control" type="file" name="userfile" value="">
                                                             
                                
                             </div>
                             <div class="form-group">
                                <label for="">Update/Resume</label>
                                <input type="hidden" name="old_resume" value="<?= $fac_detail['resume']?>" />
                                <input class="form-control" type="file" name="new_resume">

                                <a href="<?=base_url()?>faculty/facresume/<?= $fac_detail['resume']?>" class="btn-info"> View Resume</a>

                                 
                                
                             </div>
                             <div class="form-group">
                                <label for="">submit</label>
                                <input type="submit" class="form-control" name="btnupdate" class="form-control" value="Update" />
                                
                             </div>


                        </form>
                          
                    </div>

                </div>
            </div>

        </div>
     </div>
 </div>
 
            <!--  -->
            
        