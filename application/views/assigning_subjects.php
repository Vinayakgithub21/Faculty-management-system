<div class="content-body">
<form action="<?= base_url()?>welcome/assigningSubjects" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td><h1>Assigning Subject Form</h1></td>
            </tr>
            <?php //echo "<pre>"; print_r($subjects)?>
                    <!-- <tr>
                        <td>Id</td>
                        <td><input type="text" name="intid" /></td>
                    </tr> -->
                    
                    
                    <tr>
                        <td>Subject Id</td>
                        <td><select name="sid" class="combo">
                        <option value="select">Select...</option>
                        <?php foreach($subjects as $subject){ ?>

                        <option value="<?php  echo $subject['sub_id']?>"><?php  echo $subject['sname']?></option>
                        <?php } ?>
                        
    
                    </tr>
                    <tr>
                        <td>Faculty Id</td>
                        <td><select name="fid" class="combo">
                        <option value="select">Select...</option>
                        <?php foreach($facultys as $faculty){ ?>

                        <option value="<?php  echo $faculty['fac_id']?>"><?php  echo $faculty['fname']?> <?php  echo $faculty['lname']?></option>
                        <?php } ?>
                        
    
                    </tr>
                    <tr>
                        <td>Date Assigned </td>
                        <td><input type="date" name="intdate" /></td>
    
                    </tr>
<!--                    
                    <tr>
                        <td>status</td>
                        <td><input type="text" name="txtstatus" /></td>
    
                    </tr> -->
                    <tr>
                        <td></td>
                        <td><input type="submit" name="btnsubmit" /></td>
                    </tr>
                    
                    
                    <!-- <tr<td><a href="">ViewRecords</a> </td></tr> -->
    
        </table>
    </form>
  </div>