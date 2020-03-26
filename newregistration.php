<!DOCTYPE html>
<?php  
 error_reporting(0);
 include("./databases/dbconn.php");
  $error = $_GET['error']; 
  $cid = $_GET['cid'];
  $sid = $_GET['sid'];

 
  
  
?>
<html lang="en" dir="ltr">
  <head><meta http-equiv="Content-Type" content="text/html; charset=euc-jp">
        
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tvaran - Registration</title>
    <link rel="stylesheet" href="./assests/css/lib/bootstrap.css">
    <link rel="stylesheet" href="./assests/css/newregistration.css">
    <link rel="stylesheet" href="./assests/css/lib/all.min.css">
</head>
  <body>
     <div class="container" >
         <div class="row">
             <div class="form-container p-3 col-lg-6 col-12   mx-lg-auto">
                <?php if($_GET['fill'] != 2 and $_GET['fill'] != 3 ): ?>
                 <form action="./databases/registerdb.php?fill=1" method="post">
                    <h4 class="text-center text-uppercase" style="box-shadow:0px 5px 5px rgba(0,0,0,.2); border:1px solid white; border-radius:7px;">register your college</h4>
                   
                     <label for="cname" class="text-primary">College Name*</label>
                     <input type="text" class="form-control cname" name="cname" id="cname" placeholder="Enter Your College Name" title="Enter Your College Name" required>
                      <?php if(isset($_GET['error'])): ?>
                    <label class="text-danger">
                    <b>    *College field can not be empty </b>
                    </label>
                   <?php endif; ?>
                     <button type="submit" class="btn btn-primary my-3 cnext" id="cnext" name="cnext">Next <i class="fas fa-arrow-right"></i></button>
                     <div class="cSuggestion d-none" id="cSuggestion">
                         <ul id="searchData">
                             
                             
                             
                         </ul>
                     </div>
                </form>
                <?php endif; ?>
                 <?php if($_GET['fill'] == 2): ?>
                   <form action="./databases/studentdb.php?cid=<?php echo $cid ?>" method="post">
                      <h4 class="text-center text-uppercase " style="box-shadow:0px 5px 5px rgba(0,0,0,.2); border:1px solid white; border-radius:7px;">personal information</h4>
                      <?php if(isset($_GET['email'])): ?>
                         <script>
                          alert("Email has been register. please choose other email");
                       </script>
                      <?php endif ?>
                       <label for="uname" class="text-primary">Name*</label>
                       <input type="text" class="form-control" name="uname" id="uname" placeholder="Enter Your  Name" title="Enter Your  Name" required>
                       <label for="ename" class="text-primary">Email*</label>
                       <input type="email" class="form-control" name="ename" id="ename" placeholder="Enter Your  Email" title="Enter Your  Email" required>
                       <label for="mobile" class="text-primary">Mobile*</label>
                       <input type="number" class="form-control mobile" name="mobile" id="mobile" placeholder="Enter Your mobile number" title="Enter Your  Mobile number" required>
                       <label for="pwd" class="text-primary">Password* (Greater than 6 digits)</label>
                       <input type="password" class="form-control password" name="pwd" id="psd" placeholder="Enter Your  Password" title="Enter Your  Password" required>
                       <label for="pwd" class="text-primary">Confirm Password*</label>
                       <input type="password" class="form-control cpassword" name="cpwd" id="cpwd" placeholder="Confirm Your  Password" title="Confirm Your  Password" required>
                       <span class="pwdnotmatch text-danger d-none">password not matched<br></span>
                       <span class="pwdmatch text-success d-none">password matched !!<br></span>
                       <label for="gender" class="text-primary">Gender*</label>
                       <input type="text" class="form-control gender" name="gender" id="gender" placeholder="Enter Your Gender" title="Enter Your Gender" required>
                       <div class="gender-menu d-none" style="position:absolute; z-index:1; background:white; width:95%;">
                           <ul>
                               <li class="g">Male</li>
                               <li class="g">Female</li>
                               <li class="g">Other</li>
                           </ul>
                       </div>
                       <label for="age" class="text-primary">Age*</label>
                       <input type="number" class="form-control" name="age" id="age" placeholder="Enter Your  Age" title="Enter Your  Age" required>
                       <button type="submit" class="btn btn-primary my-3 cnext sdnext" id="sdnext" name="sdnext">Next <i class="fas fa-arrow-right"></i></button>
                 </form>
                <?php endif; ?>
                    <?php if($_GET['fill'] == 3): ?>
                <form action="./databases/eventdb.php?cid=<?php echo $cid ?>&sid=<?php echo $sid ?>" method="post" class="eform">
                     <h4 class="text-center text-uppercase " style="box-shadow:0px 5px 5px rgba(0,0,0,.2); border:1px solid white; border-radius:7px;">select games to participate</h4>
                      <input type="checkbox" name="check_list[]"  value="6" >&nbsp; &nbsp;Athletics <br> 
                      <input type="checkbox" name="check_list[]" value="4">&nbsp; &nbsp;Basketball <br>
                      <input type="checkbox" name="check_list[]" value="5">&nbsp;&nbsp; Badminton<br>
                      <input type="checkbox" name="check_list[]" value="7">&nbsp; &nbsp;Carrom <br>
                      <input type="checkbox" name="check_list[]" value="3">&nbsp;&nbsp; Cricket <br>
                      <input type="checkbox" name="check_list[]" value="8"> &nbsp;&nbsp;Chess<br>
                      <input type="checkbox" name="check_list[]" value="1"> &nbsp;&nbsp;Football<br> 
                      <input type="checkbox" name="check_list[]" value="10"> &nbsp;&nbsp;Table Tennis<br>
                      <input type="checkbox" name="check_list[]" value="2">&nbsp;&nbsp;Volleyball<br>
                      <input type="checkbox" name="check_list[]" value="9">&nbsp;&nbsp;Lan Gaming <br>
                      <button type="submit" class="btn btn-success  btn-lg my-3 cnext" id="register" name="register">Register</button><br>
                    </form>
                   
                   <?php endif; ?>
                   <?php if(isset($_GET['status'])): 
                   
                           $select = "SELECT * FROM student WHERE s_id = $sid";
                           $sfire = mysqli_query($conn,$select);
                           $sdata = mysqli_fetch_array($sfire);
                            $name = $sdata['name'];
                            $email = $sdata['email'];
                       
                                $from = "KNIT@tvaran2k20.co.in";
                                $to = "$email";
                                $subject = "Tvaran 2k20- Registration Successful & Awaiting Payment";
                                $message = "
                               <h3> Hi <span style='color:#ff9933;'>".$name."</span></h3>
                 Greetings from Team Tvaran 2K20! Thank you for registering with us.<h4> Your registration ID is <span style='color:red;'>".$sid."</span></h4> and you must keep your registration id handy for payment purposes. 
To proceed towards payment completion, please click on “Complete Payment” link on the home page of our website https://tvaran2k20.co.in/transactionConfirmation.php <br> Enter your registration number or multiple registration numbers in case of bulk payment on the page along with the Transaction number/UTR after you have transferred the amount to the following account number
<h5>Amount to be transferred - ₹1000.00 PER PERSON</5>
<h5>A/C Number- 45850100009239 </h5>
<h5>IFSC Code- BARB0KNISUL (Fifth character is numeric Zero)</h5>
Bank and Branch- Bank of Baroda, Sultanpur KNIT Branch.
Looking forward towards your esteemed visit!
<p>Best Regards </p><br>
<p>Team Tvaran!</p>";
                                
                                $headers = "MIME-Version: 1.0" . "\r\n";
                                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                                $headers .= "from:" . $from;
                               
                                
      
                                  mail($to,$subject,$message,$headers);
                   
                   
                   ?>
                   <script>
                       var form = document.querySelector('.eform');
                       form.style.display = "none";
                   </script>
                   </p><h3 class="text-center text-primary text-uppercase">Registration successful</h3><p class="text-center">
Your registration number is <span class="text-danger"><?php echo $sid; ?></span>
To proceed towards payment completion, please click on “Confirm Payment” link on the home page of our website. Enter your registration number or multiple registration numbers in case of bulk payment on the page along with the Transaction number/UTR after you have transferred the amount to the following account number
<h6>Amount to be transferred - ₹1000.00 PER PERSON</h6>
<h6>A/C Number- 45850100009239</h6>
<h6>IFSC Code- BARB0KNISUL (Fifth character is numeric Zero)</h6>
<h6>A/C Name- Tvaran</h6></p>
                   <h6 class="text-center text-danger text-capitalize my-3">
                       
                       
                       we have sent an email to your registered email. please check your email to complete registraion.
                   </h6>
                    <a href="./index.php" class="btn btn-primary form-control text-uppercase">go to home page</a>
                   
                   <?php endif; ?>
                
             </div>
         </div>
     </div>

     
   
     <script src="./assests/js/lib/jquery.js" ></script>
     <script src="./assests/js/lib/bootstrap.min.js"></script>
     <script src="./assests/js/lib/all.min.js"></script>
     <script>
       //For college
         $('.cname').keyup( function() {
             $('.cSuggestion').removeClass("d-none");
              let cname = $(this).val();
               $.ajax({
                  url:"./databases/getCollege.php",
                   method:"post",
                   data:{
                       cname : cname
                   },
                   success: function(data){
                       if(data){
                           $('#searchData').html(data);
                       }else{
                          $('.cSuggestion').addClass("d-none"); 
                       }
                    }
               });
            });
         $(document).on('click' , '.clist' , function() {
            $('.cSuggestion').addClass("d-none");
             let listValue = $(this).text();
             $('.cname').val(listValue);
         });
         
     
 </script>
<script>
      //validating input fields for information
    $(document).ready(function () {
     $('#sdnext').attr('disabled', 'disabled');
     $('.form-control').keyup(function () {
         $('.form-control').each(function () {
             if ($(this).val().length == 0) {
                 $('#sdnext').attr('disabled', 'disabled');
             } else {
                 //mobile number validation
                 if($('.mobile').val().length < 10){
                     $('#sdnext').attr('disabled', 'disabled');
                 }else{
                     //password validation
                     if($('.password').val().length < 6){
                         $('#sdnext').attr('disabled', 'disabled');
                     }else{
                         $('#sdnext').removeAttr('disabled');
                     }
                 }
             }

         });
     });
        
 });
          
</script>
<script>
      $('.cpassword').keyup(function(){
          let pwd = $('.password').val();
          let cpwd = $(this).val();
          if(pwd == cpwd){
              $('.pwdnotmatch').addClass('d-none');
              $('.pwdmatch').removeClass('d-none');
          }else{
              $('.pwdnotmatch').removeClass('d-none');
            }
    });
      
</script>
<script>
    $('.gender').on('click' , function(){
        $('.gender-menu').removeClass('d-none');
        $('.g').on('click', function(){
            $('.gender-menu').addClass('d-none');
           let gender = $(this).text();
            $('.gender').val(gender);
             
        })
    });  
</script>
</body>
</html>
