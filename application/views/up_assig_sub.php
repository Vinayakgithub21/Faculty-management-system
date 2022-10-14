

<div class="content-body">
    <form action="<?php echo base_url() ?>Subject/up_assig_sub" method="post">
            <table align="center">
                <?php// print_r($result);?>
                <tr>
                    <td> <h1>Update Assigned Subject Form Page </h1> </td>
                </tr>
                <tr>
                    <td>Subject Assigned ID</td>
                    <td><input type="text" value="<?php echo $result[0]['assigid']; ?>" name="txtassig_id"></td>
                </tr>
                
                <tr>
                        <td>Subject Id</td>
                        <td><select name="sid" class="combo">
                        <option value="select">Select...</option>
                        <?php foreach($subjects as $subject){ ?>

                        <option value="<?php  echo $subject['sub_id']?>" <?php if($result[0]['sub_id'] == $subject['sub_id']) echo "selected"; ?>><?php  echo $subject['sname']?></option>
                        <?php } ?>
                        
    
                    </tr>
                    <tr>
                        <td>Faculty Id</td>
                        <td><select name="fid" class="combo">
                        <option value="select">Select...</option>
                        <?php foreach($facultys as $faculty){ ?>

                        <option value="<?php  echo $faculty['fac_id']?>"<?php if($result[0]['fac_id'] == $faculty['fac_id']) echo "selected"; ?>><?php  echo $faculty['fname']?> <?php  echo $faculty['lname']?></option>
                        <?php } ?>
                        
    
                    </tr>
                    <tr>
                        <td>Date Assigned </td>
                        <td><input type="date" name="intdate" /></td>
    
                    </tr>
                <tr>
                    <td>Status</td>
                    <td>
                        <select id="status" name="txtstatus" size="1" required>
                            <option value="" style="display:none">Status</option>
                            <option value="Active" <?php if($result[0]['status'] == 'Active') echo "selected"; ?>>Active</option>
                            <option value="Inactive" <?php if($result[0]['status'] == 'Inactive') echo "selected"; ?>>Inactive</option>
                        </select></td>
                    
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="btnupdate" value="Update" /></td>
                </tr>
                
         </div>


