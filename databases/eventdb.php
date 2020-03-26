<?php 
   include("./dbconn.php");

  if(isset($_POST['register'])){ 
      if(!empty($_POST['check_list'])){
     foreach($_POST['check_list'] as $selected){
           $cid = $_GET['cid'];
           $sid = $_GET['sid'];
          $query = "INSERT INTO `studentevent`(`s_id`, `c_id`, `event_id`) VALUES ($sid,$cid,$selected)";
          $fire = mysqli_query($conn,$query);
          if($fire){
              header("Location:../newregistration.php?fill=3&cid=$cid&sid=$sid&status=success");
              
          }else{
                 header("Location:../newregistration.php?fill=1&error=1");
          }
      }
      
  }else{
         header("Location:../newregistration.php?fill=1&error=empty");
  }
  
  
  //code for sending an email.

  
  }

?>