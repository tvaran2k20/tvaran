<?php 
  include("./dbconn.php");


if(isset($_POST['sdnext'])){
         $cid = $_GET['cid'];
         $name = $_POST['uname'];
         $email = $_POST['ename'];
         $mobile = $_POST['mobile'];
         $pwd = $_POST['pwd'];
         $gender = $_POST['gender'];
         $age = $_POST['age'];
    //checking email for repetation
         $select = "SELECT * FROM student WHERE email = '$email'";
          $sfire = mysqli_query($conn,$select);
          
           
       if(mysqli_num_rows($sfire) < 1){
          $query = "INSERT INTO `student`(`c_id`, `name`, `email`, `mobile`, `psw`, `age`, `gender`) VALUES ($cid, '$name', '$email','$mobile','$pwd',$age,'$gender')";
           $fire = mysqli_query($conn, $query);
          if($fire){
              //fetching sid from student table
              $sselect = "SELECT * FROM student WHERE email = '$email'";
              $ssfire = mysqli_query($conn,$sselect);
              $sdata = mysqli_fetch_array($ssfire);
              $sid = $sdata['s_id'];
              
              header("Location:../newregistration.php?fill=3&cid=$cid&sid=$sid");
          }else{
             header("Location:../newregistration.php?fill=1&error=1");
          }
           
       }else{
          header("Location:../newregistration.php?fill=2&cid=$cid&email=0"); 
       }

}

?>