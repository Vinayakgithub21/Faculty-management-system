


    
    <!-- Trigger the modal with a button -->




    <div class="content-body">


<div class="container">
      <div class="row">
          <div class="col-md-sm-9">
              <div class="card">
                  <div class="card-header">
                      <h4>Subject Registration Form</h4>

                  </div>
                  <div class="card-body">
                      <form action="<?= base_url()?>subject/subjectinsert" method="post" enctype="multipart/form-data">
                         
                           <div class="form-group">
                              <label for="">Subject Name</label>
                              <input type="text" name="txtsubjecttname"  class="form-control" />
                                                             
                           </div>
                           <div class="form-group">
                              <label for=""> Descrption</label>
                              <input type="text" name="txtdescription" class="form-control"  />
                               
                         
                           </div>
                           <div class="form-group">
                              <label for=""> Syllabus</label>
                              <input type="file" name="userfile" class="form-control"  />
                               
                         
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