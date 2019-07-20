<?php  
 $connect = mysqli_connect("localhost", "root", "", "task1");  
 $output = '';  
 $sql = "SELECT * FROM employees WHERE e_status = 'Active' ORDER BY e_id ASC";  
 $result = mysqli_query($connect, $sql);  
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered" id="bt">  
                <tr>  
                     <th >ID</th>  
                     <th >Last Name</th> 
                     <th >First Name</th>
                      <th>View</th>
                     <th>Edit</th>
                     <th >Delete</th>  
                </tr>';  
 $rows = mysqli_num_rows($result);
 if($rows > 0)  
 {  
	  if($rows > 10)
	  {
		  $delete_records = $rows - 10;
		  $delete_sql = "DELETE FROM employees LIMIT $delete_records";
		  mysqli_query($connect, $delete_sql);
	  }
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td><center>'.$row["e_id"].'</center></td>  
                     <td class="e_lastname" data-id1="'.$row["e_id"].'" contenteditable><center>'.$row["e_lastname"].'</center></td>  
                     <td class="e_firstname" data-id2="'.$row["e_id"].'" contenteditable><center>'.$row["e_firstname"].'</center></td>  
 
                     <td>

                      <!-- Button to Open the Modal -->
<center><button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal' .$row["e_id"].'" title="View Employee Full Details" >
  <span class="glyphicon glyphicon-eye-open"></span></center></td>
             <!-- Button to Open the Modal -->
 <td><center><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#studentaddmodaledit' .$row["e_id"].'" title="Edit Employee Details">
  <span class="glyphicon glyphicon-pencil"></span></center></td>


 <!-- Modal -->
<div class="modal fade" id="studentaddmodal' .$row["e_id"].'"" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="font-size: 15px">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="exampleModalLabel">Add Employee Data</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" >
          <span aria-hidden="true" >&times;</span>
        </button>
      </div>

      <form action="update.php" method="POST" >
        <div class="modal-body" >
        

            <div class="form-group">
                <label> Last Name </label>
                <input type="text" name="e_lastname" class="form-control"  value="'.$row["e_lastname"].'" placeholder="Enter Last Name" style="font-size: 13px">
            </div>
          
            <div class="form-group">
                <label> First Name </label>
                <input type="text" name="e_firstname" class="form-control"  value="'.$row["e_firstname"].'" placeholder="Enter First Name" style="font-size: 13px">
            </div>
            <div class="form-group">
                <label> Email </label>
                <input type="text" name="e_mail" class="form-control"  value="'.$row["e_mail"].'"  placeholder="Enter Email" style="font-size: 15px">
            </div>
            <div class="form-group">
                <label> Phone Number </label>
                <input type="text" name="e_phone" class="form-control"  value="'.$row["e_phone"].'"  placeholder="Enter Phone Number" style="font-size: 15px">
            </div>
            <div class="form-group">
                <label> Birthday </label>
                <input type="date" name="e_bday" class="form-control"  value="'.$row["e_bday"].'"  placeholder="Enter Birthday" style="font-size: 15px">
            </div>
            <div class="form-group">
                <label> Address </label>
                <input type="text" name="e_address" class="form-control"  value="'.$row["e_address"].'"  placeholder="Enter Address" style="font-size: 15px">
            </div>
            <div class="form-group">
                <label> SSS/GSIS ID </label>
                <input type="text" name="e_sss_gsis" class="form-control"  value="'.$row["e_sss_gsis"].'"  placeholder="Enter SSS/GSIS ID" style="font-size: 15px">
            </div>
            <div class="form-group">
                <label> Status </label>
                <select  class="form-control"   name="e_status" style="font-size: 15px">
                    <option></option>
                    <option value="Active">Active</option>
                    <option value="Inactive">Inactive</option>
                </select>
            </div>
        
      </div>
      <div style="float:right; padding-right: 20px;">
            <button type="button" class="btn btn-secondary" data-dismiss="modal" style="font-size: 15px">Close</button>
            <button type="submit" class="btn btn-primary" style="font-size: 15px">Save Data</button><br><br>
      </div>
      </form>
    </div>
  </div>
</div>



<!-- The Modal -->
<div class="modal" id="myModal' .$row["e_id"].'">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h1 class="modal-title">Employee Full Details</h1>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <h3>Last Name: '.$row["e_lastname"].'</h3>
        <h3>First Name: '.$row["e_firstname"].'</h3>
        <h3>E-mail: '.$row["e_mail"].'</h3>
        <h3>Phone: '.$row["e_phone"].'</h3>
        <h3>Birthday: '.$row["e_bday"].'</h3>
        <h3>Address: '.$row["e_address"].'</h3>
        <h3>SSS/GSIS ID: '.$row["e_sss_gsis"].'</h3>
        <h3>Status: '.$row["e_status"].'</h3>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>




                     </td> 
                     <td><center><button type="button" name="delete_btn" data-id9="'.$row["e_id"].'" class="btn btn-xs btn-warning btn_delete" title="Delete Employee"><span class="glyphicon glyphicon-trash"></span></button></center></td>  
                </tr>  
           ';  
      }  

 }  
 else  
 {  
      $output .= '
				<tr>  
					<td></td>  
          <td id="last_name" ></td>
          <td id="first_name" ></td>  

          <td><button type="button"  class="btn btn-xs btn-danger btn_delete">x</button></td>  
			   </tr>';  
 }  
 $output .= '</table>  
      </div>';  
 echo $output;  
 ?>