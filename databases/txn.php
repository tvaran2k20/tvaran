<?php 
include("./dbconn.php");
if(isset($_POST['submit'])){
  $sid = $_POST['sid'];
  $allsid = $_POST['allsid'];
  $amount = $_POST['amount'];
  $txn = $_POST['txn'];
  $date = $_POST['date'];
  
    
 $select = "SELECT * FROM `transactionlist` WHERE txnid = $txn";
 $sfire = mysqli_query($conn,$select);
 if(mysqli_num_rows($sfire) < 1){
     $query = "INSERT INTO `transactionlist`(`s_id`,`allsid`, `amount`, `txnid`, `date`) VALUES ($sid,'$allsid','$amount','$txn','$date')";
     $fire = mysqli_query($conn,$query);
     if($fire){
        header("Location:../transactionConfirmation.php?status=1"); 
     }else{
        header("Location:../transactionConfirmation.php?status=0"); 

     }
 }else{
     header("Location:../transactionConfirmation.php?error=1");
 }



}


?>