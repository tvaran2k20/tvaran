<?php 
  include("./dbconn.php");
//FOR COLLEGE TABLE //
  
  if(isset($_POST['cnext'])){
      if(!empty($_POST['cname'])){
          $cname = $_POST['cname'];
          // selecting cid from college table for old college.
          $select = "SELECT * FROM college WHERE collegeName = '$cname'";
          $selectfire = mysqli_query($conn,$select);
          $data = mysqli_fetch_array($selectfire);
          $c_id = $data['c_id'];
          
          if(mysqli_num_rows($selectfire) < 1){
              //inserting new college data  into database
           $query = "INSERT INTO `college`(`collegeName`) VALUES ('$cname')";
           $fire = mysqli_query($conn,$query);
          if($fire){
              //getting cid from database for new college entry
              $nselect = "SELECT * FROM college WHERE collegeName = '$cname'";
              $nselectfire = mysqli_query($conn,$nselect);
              $ndata = mysqli_fetch_array($nselectfire);
              $nc_id = $ndata['c_id'];
              header("Location:../newregistration.php?fill=2&cid=$nc_id");
              //student insertcode goes here
              
              
          }else{
              echo " something went wrong";
          }
     
          }else{
               header("Location:../newregistration.php?fill=2&cid=$c_id");
              //student insertion code goes here
          }
      
    }else{
          header("Location:../newregistration.php?error=empty");
      } 
    }

  

    
        
         
         

         


    
   



?>
