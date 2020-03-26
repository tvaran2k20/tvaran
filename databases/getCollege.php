<?php 
 include("./dbconn.php");
   $cname = $_POST['cname'];
  $output = '';
   $query = "SELECT * FROM college WHERE collegeName LIKE '%".$cname."%' AND c_id < 128";

  $fire = mysqli_query($conn,$query);

  
      if(mysqli_num_rows($fire)>0){
       while($row = mysqli_fetch_array($fire)){
       $output .= '
        
          <li class="clist">'.$row['collegeName'].'</li>
       
       ';
   }
    echo $output;
    }


?>