 

 <?php




    $con = mysqli_connect('localhost','root','VINEETH@9','attendance');

    if ($con->connect_error){
        die("connection error");
    }
    else{
        echo "connected successfully";
    }
	
date_default_timezone_set('Asia/Kolkata');
	       $date = date("Y-m-d");
           $ThisDate = date("d-m-Y", strtotime($date));
		   
// sql to delete a record

$delete_id = @$_GET['delete'];

$sql = "DELETE FROM `student_details` WHERE  name='$delete_id'";

//$sql .= "DELETE FROM `attendance_taken` WHERE  name='$delete_id'";

if ($con->query($sql) === TRUE) {
   ?>
   <script>
      //window.location = "admin.php";
        if(!alert('student deleted successfully.')){window.location = "admin.php?view_student=view_student";}
   
   </script>
   <?php
       } 
   else {
    ?>
     <script>
       // window.location = "attendancepanel.php";
          if(!alert('Can not delete student.Some error occured')){window.location = "admin.php?view_student=view_student";}
   
     </script>
   <?php
   }

$con->close();

			  
?>