
    
    <!-- Trigger the modal with a button -->




    <div class="content-body">


<div class="container">
      <div class="row">
          <div class="col-md-sm-9">
              <div class="card">
                  <div class="card-header">
                      <h4>Department Registration Form</h4>

                  </div>
                  <div class="card-body">
                      <form action="<?= base_url()?>Department/departmentInsert" method="post" enctype="multipart/form-data">
                         
                           <div class="form-group">
                              <label for="">Department Name</label>
                              <input type="text" name="txtdepartmentname"  class="form-control" />
                                                             
                           </div>
                           <div class="form-group">
                              <label for="">Department Descrption</label>
                              <input type="text" name="txtdescription" class="form-control"  />
                               
                         
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