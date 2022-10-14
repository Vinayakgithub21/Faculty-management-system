
  <div class="content-body">


<div class="container">
      <div class="row">
          <div class="col-md-sm-9">
              <div class="card">
                  <div class="card-header">
                      <h4>Faculty Details</h4>

                  </div>
                  <div class="card-body">
                      <form action="<?= base_url()?>faculty/facultyInsert" method="post" enctype="multipart/form-data">
                         
                           <div class="form-group">
                              <label for="">First Name</label>
                              <input type="text" name="txtfname"  class="form-control" />
                                                             
                           </div>
                           <div class="form-group">
                              <label for="">Last Name</label>
                              <input type="text" name="txtlname" class="form-control"  />
                               
                              
                           </div>
                           <div class="form-group">
                              <label for="">username</label>
                              <input type="text" name="txtusername" class="form-control" />
                               
                              
                           </div>
                           <div class="form-group">
                              <label for="">password</label>
                              <input type="text" name="txtpassword" class="form-control" />
                               
                              
                           </div>

                           <div class="form-group">
                              <label for="">Address</label>
                              <input type="text" name="txtaddress" class="form-control" />
                               
                              
                           </div>
                           
                           <div class="form-group">
                             
                              <input type="hidden" name="txttype" class="form-control" value="faculty" />
                               
                              
                           </div>


                           <div class="form-group">
                              <label for="">Mobile no</label>
                              <input type="text" name="intmobileno" class="form-control"/>
                               
                              
                           </div>
                           <div class="form-group">
                              <label for="">Department ID</label>
                            
                        <select name="did">
                        <option  value="select">Select...</option>
                        <?php foreach($departments as $department){ ?>

                        <option value="<?php  echo $department['depart_id']?>"><?php  echo $department['depart_name']?></option>
                        <?php } ?>
                              
                               
                              
                           </div>
                           <div class="form-group">
                              <label for="">upload Photo</label>
                             
                              <input class="form-control" type="file" name="userfile" value="">
                               
                              
                           </div>
                           <div class="form-group">
                              <label for="">Upload Resume</label>
                              <input class="form-control" type="file" name="userdoc" value="">

                              
                              
                           </div>
                           <div class="form-group">
                              <!-- <label for="">submit</label> -->
                              <button type="submit"  class="form-control" name="btnsubmit" class="form-control" value="submit">SUbmit </button>
                              
                           </div>


                      </form>
                        
                  </div>

              </div>
          </div>

      </div>
   </div>
</div>