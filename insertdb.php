<?php
   include("./databases/dbconn.php");
   if(isset($_GET['button'])){
    $name = $_GET['name'];
    $gmail = $_GET['gmail'];
    $img = $_GET['img'];
    $work= $_GET['work'];
    $fb = $_GET['fb'];
    $insta = $_GET['insta'];
    $status = $_GET['status'];
    $mob = $_GET['mobile'];
    
    $query = "INSERT INTO `team`( `name`, `gmail`,`mobile`, `img`, `work`, `fb_link`, `linkdin_link`, `status`) VALUES ( '$name','$gmail','$mob','$img','$work','$fb','$insta',$status)";
       $fire = mysqli_query($conn,$query);
       if($fire){
           header("Location:./insert.php?status=success");
       }else{
           header("Location:./insert.php?status=error");
       }

   }


?>