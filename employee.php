<?php
    include_once "header.php";
?>
<!DOCTYPE html>
<html lang="en">  
    <head>  
        



    </head>  
    <style>
    body {
        background-image: url(image/bg4.jpg);
         background-color: #ECF0F1;
         background-size: stretch;
    }
</style>
    <body>  
    <!-- Modal -->
<div class="modal fade" id="studentaddmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="font-size: 15px">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="exampleModalLabel">Add Employee Data</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" >
          <span aria-hidden="true" >&times;</span>
        </button>
      </div>

      <form action="Insertcode.php" method="POST" >
        <div class="modal-body" >
        

            <div class="form-group">
                <label> Last Name </label>
                <input type="text" name="e_lastname" class="form-control"  placeholder="Enter Last Name" style="font-size: 13px">
            </div>
          
            <div class="form-group">
                <label> First Name </label>
                <input type="text" name="e_firstname" class="form-control"  placeholder="Enter First Name" style="font-size: 13px">
            </div>
            <div class="form-group">
                <label> Email </label>
                <input type="text" name="e_mail" class="form-control"  placeholder="Enter Email" style="font-size: 15px">
            </div>
            <div class="form-group">
                <label> Phone Number </label>
                <input type="text" name="e_phone" class="form-control"  placeholder="Enter Phone Number" style="font-size: 15px">
            </div>
            <div class="form-group">
                <label> Birthday </label>
                <input type="date" name="e_bday" class="form-control"  placeholder="Enter Birthday" style="font-size: 15px">
            </div>
            <div class="form-group">
                <label> Address </label>
                <input type="text" name="e_address" class="form-control"  placeholder="Enter Address" style="font-size: 15px">
            </div>
            <div class="form-group">
                <label> SSS/GSIS ID </label>
                <input type="text" name="e_sss_gsis" class="form-control"  placeholder="Enter SSS/GSIS ID" style="font-size: 15px">
            </div>
            <div class="form-group">
                <label> Status </label>
                <select  class="form-control" name="e_status" style="font-size: 15px">
                    <option></option>
                    <option value="Active">Active</option>
                    <option value="Inactive">Inactive</option>
                </select>
            </div>
        
      </div>
      <div style="float:right; padding-right: 20px;">
            <button type="button" class="btn btn-secondary" data-dismiss="modal" style="font-size: 15px">Close</button>
            <button type="submit" name="insertdata" class="btn btn-primary" style="font-size: 15px">Save Data</button><br><br>
      </div>
      </form>
    </div>
  </div>
</div>

 <?php

 $connect = mysqli_connect("localhost", "root", "", "task1");  
 $output = '';  
 $sql = "SELECT * FROM employees WHERE e_status = 'Active' ORDER BY e_id ASC";  
 $result = mysqli_query($connect, $sql);  
     while($row = mysqli_fetch_array($result))  
      {  



 ?>
 <!-- Modal -->
<div class="modal fade" id="studentaddmodaledit<?php echo $row["e_id"]?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="font-size: 15px">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="exampleModalLabel">Edit Employee Data</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" >
          <span aria-hidden="true" >&times;</span>
        </button>
      </div>

      <form action="update.php" method="POST" >
        <div class="modal-body" >
        

            <div class="form-group">
                <label> Last Name </label>
                <input type="text" name="e_lastname" class="form-control" value="<?php echo $row["e_lastname"]?>" placeholder="Enter Last Name" style="font-size: 13px">
            </div>
          
            <div class="form-group">
                <label> First Name </label>
                <input type="text" name="e_firstname" class="form-control" value="<?php echo $row["e_firstname"]?>" placeholder="Enter First Name" style="font-size: 13px">
            </div>
            <div class="form-group">
                <label> Email </label>
                <input type="text" name="e_mail" class="form-control" value="<?php echo $row["e_mail"]?>" placeholder="Enter Email" style="font-size: 15px">
            </div>
            <div class="form-group">
                <label> Phone Number </label>
                <input type="text" name="e_phone" class="form-control" value="<?php echo $row["e_phone"]?>" placeholder="Enter Phone Number" style="font-size: 15px">
            </div>
            <div class="form-group">
                <label> Birthday </label>
                <input type="date" name="e_bday" class="form-control" value="<?php echo $row["e_bday"]?>" placeholder="Enter Birthday" style="font-size: 15px">
            </div>
            <div class="form-group">
                <label> Address </label>
                <input type="text" name="e_address" class="form-control" value="<?php echo $row["e_address"]?>" placeholder="Enter Address" style="font-size: 15px">
            </div>
            <div class="form-group">
                <label> SSS/GSIS ID </label>
                <input type="text" name="e_sss_gsis" class="form-control" value="<?php echo $row["e_sss_gsis"]?>" placeholder="Enter SSS/GSIS ID" style="font-size: 15px">
            </div>


            <div class="form-group">
                <label> Status </label>
                <select  class="form-control" name="e_status" style="font-size: 15px" >
                   
                    <option value="Active">Active</option>
                    <option value="Inactive">Inactive</option>
                </select>
            </div>
            
                
                <input type="hidden" name="e_id" class="form-control" value="<?php echo $row["e_id"]?>" placeholder="Enter SSS/GSIS ID" style="font-size: 15px">
            
        
      </div>
      <div style="float:right; padding-right: 20px;">
            <button type="button" class="btn btn-secondary" data-dismiss="modal" style="font-size: 15px">Close</button>
            <button type="submit" name="insertdata" class="btn btn-primary" style="font-size: 15px">Save Data</button><br><br>
      </div>
      </form>
    </div>
  </div>
</div>
<?php
    }
?>

        <div class="container-fluid">  
            <br />  
            <br />
			<br /> <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#studentaddmodal" style="font-size: 15px">
                 Add Employee
                </button>
			<div class="table-responsive">  
<br />
				<span id="result"></span>
				<div id="live_data"></div>                 
			</div>  
		</div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>  
</html>  
<script>  
$(document).ready(function(){  
    function fetch_data()  
    {  
        $.ajax({  
            url:"select.php",  
            method:"POST",  
            success:function(data){  
				$('#live_data').html(data);  
            }  
        });  
    }  
    fetch_data();  
    
	function edit_data(id, text, column_name)  
    {  
        $.ajax({  
            url:"edit.php",  
            method:"POST",  
            data:{id:id, text:text, column_name:column_name},  
            dataType:"text",  
            success:function(data){  
                //alert(data);
				$('#result').html("<div >"+data+"</div>");
            }  
        });  
    }  
    $(document).on('blur', '.e_lastname', function(){  
        var e_id = $(this).data("id1");  
        var e_lastname = $(this).text();  
        edit_data(e_id, e_lastname, "e_lastname");  
    });  
    $(document).on('blur', '.e_firstname', function(){  
        var e_id = $(this).data("id2");  
        var e_firstname = $(this).text();  
        edit_data(e_id, e_firstname, "e_firstname");  
    });  
    $(document).on('blur', '.e_mail', function(){  
        var e_id = $(this).data("id3");  
        var e_mail = $(this).text();  
        edit_data(e_id, e_mail, "e_mail");  
    });  
    $(document).on('blur', '.e_phone', function(){  
        var e_id = $(this).data("id4");  
        var e_phone = $(this).text();  
        edit_data(e_id, e_phone, "e_phone");  
    });  
    $(document).on('blur', '.e_bday', function(){  
        var e_id = $(this).data("id5");  
        var e_bday = $('this').text();  
        edit_data(e_id, e_bday, "e_bday");  
    });  
    $(document).on('blur', '.e_address', function(){  
        var e_id = $(this).data("id6");  
        var e_address = $(this).text();  
        edit_data(e_id, e_address, "e_address");  
    });  
    $(document).on('blur', '.e_sss_gsis', function(){  
        var e_id = $(this).data("id7");  
        var e_sss_gsis = $(this).text();  
        edit_data(e_id, e_sss_gsis, "e_sss_gsis");  
    });  
    $(document).on('blur', '.e_status', function(){  
        var e_id = $(this).data("id8");  
        var e_status = $(this).text();  
        edit_data(e_id, e_status, "e_status");  
    });  
   
    $(document).on('click', '.btn_delete', function(){  
        var e_id=$(this).data("id9");  
        if(confirm("Are you sure you want to delete this?"))  
        {  
            $.ajax({  
                url:"delete.php",  
                method:"POST",  
                data:{id:e_id},  
                dataType:"text",  
                success:function(data){  
                    alert(data);  
                    fetch_data();  
                }  
            });  
        }  
    }); 


});  
</script>