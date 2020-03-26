<?php
  error_reporting(0);
  

?>
 

 <html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tvaran2k20 - Payment</title>
    <link rel="stylesheet" href="assests/css/lib/bootstrap.css">
    
    <link rel="stylesheet" href="./assests/css/lib/all.min.css">
</head>
 <style>
     *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;

}
   body{
    background-image: url(./img/bannerr.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    min-height: 100vh;
}
     label{
         color:blue;
     }
     input{
   opacity: .8;
   border: 1px solid #ff9933 !important;

}
    input:focus{
    box-shadow: none !important;
    outline: none !important;
    
}
     
    
    </style>
  <body>
  
    <div class="container-fluid">

        <div class="row">
            
            <div class="col-12 col-md-4 mx-md-auto py-3 my-md-5" style="background:white; border-radius:10px; box-shadow:0px 5px 5px rgba(0,0,0,.4);">
                <h3 class="text-center text-capitalize text-danger">complete transaction</h3>
                <?php if(isset($_GET['status'])  && $_GET['status'] == 0): ?>
                <h4 class="text-center bg-danger py-2">Entered Registration Id is NOT registered.</h4>
                <?php endif ?>
                <form action="./databases/txn.php" method="post">
                     <label for="regno">Registration id*</label>
                     <input type="number" name="sid" id="regno" class="form-control" placeholder="Enter Your Registration id" required>
                     <label for="amount">Amount Paid*</label>
                     <input type="text" name="amount" id="amount" class="form-control" placeholder="Enter Paid Amount" required>
                     <label for="aregno">Others Registration IDs (in case of bulk payments)</label>
                     <input type="text" name="allsid" id="aregno" class="form-control" placeholder="Fill Like 30,34,51,52">
                     <label for="txn">Transaction/UTR Id*</label>
                     <input type="text" name="txn" id="txn" class="form-control" placeholder="Enter Transaction id" required>
                     <?php if(isset($_GET['error'])): ?>
                     <label for="txn" class="text-danger">*Transaction/UTR Id already exist</label><br>
                     <?php endif ?>
                     <label for="date">Payment date*</label>
                    <input type="text" name="date" id="date" class="form-control" placeholder="dd/mm/yyyy" required>
                   
                    <button type="submit" name="submit" class="form-control btn btn-outline-info my-4">Submit</button>
                     <?php if(isset($_GET['status'])  && $_GET['status'] == 1): ?>
                    <h3 class="text-center bg-success py-4">You Have Completed Payment For Tvaran2k20 Successfully.</h3>
                    <a href="./index.php" class="btn btn-primary form-control">Go To Home Page</a>
                    <?php endif ?>
                </form>
            </div>
        </div>
    </div>
     
     
     
     
     
     <script src="./assests/js/lib/jquery.js"></script>
     <script src="./assests/js/lib/bootstrap.min.js"></script>
     <script src="./assests/js/lib/all.min.js"></script>
    </body>
</html>
