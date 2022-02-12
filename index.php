<?php  
 require_once("baglan.php");

 //session_start(); ob_start();
?>



<!DOCTYPE html>
<html lang="TR">
  <head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link href="css/bootstrap.min"  rel="stylesheet" >
    <link href="css/bootstrap-grid"  rel="stylesheet" >
    <link href="css/bootstrap.rtl"  rel="stylesheet" > 
    <link href="css/bootstrap-grid.min"  rel="stylesheet">  
   
    <link href="css/index.css"  rel="stylesheet" >

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/bootstrap.min.js"></script>


    </head>
  <body>
  <div class="container">
  <div class="row">


    <div class="col-xl-6">


    <form id="contact" action="kaydetUyeOl.php" method="POST" >
        <br>     <br>
          <h3><b>Sign Up</b></h3>
          <br>
        <div class="row mb-3w" >
            <div class="col-sm-10 col-form-label">
            <input type="text" class="form-control" name="ad" placeholder="Name" aria-label="First name">
            </div> 
            <div class="col-sm-10 col-form-label">
            <input type="text" class="form-control" name="soyad" placeholder="Surname" aria-label="Last name">
            </div>
            <div class="col-sm-10 col-form-label">
            <input type="text" class="form-control" name="eposta" placeholder="email address" aria-label="mail name">
            </div>
            <div class="col-sm-10 col-form-label">
            <input type="password" class="form-control" name="sifre" placeholder="Password" aria-label="Last name">
            </div>
            <div class="col-sm-10 col-form-label">
            <input type="password" class="form-control" name="sifretekrar" placeholder="Password again" aria-label="Last name">
            </div>
            <div class="col-sm-10 col-form-label">
            <button type="submit" class="btn btn-primary" type="submit" > Üye Ol!</button>
            </div>
        </div>    
        </form>
     
    </div>

      <div class="col-xl-6" >
    <form id="contact" action="kaydetGiris.php" method="POST" >  
            <br>     <br>
          <h3><b>Log in</b></h3>
          <br>
            <div class="row mb-3w" >
            <div class="col-sm-10 col-form-label">
          
            <div class="col-sm-10 col-form-label">
            <input type="text" class="form-control" name="GelenEposta" placeholder="email address" aria-label="mail name">
            </div>
            <div class="col-sm-10 col-form-label">
            <input type="password" class="form-control" name="GelenSifre" placeholder="Password" aria-label="Last name">
            </div>
            <div class="col-sm-10 col-form-label">
            <button type="submit" class="btn btn-primary" type="submit" > Giriş Yap</button>
            </div>
            
           </div>
        </form>
       </div>
      </div>
</div>

  </div> 
  </body>
</html>
<?php 
 
   $db = null; 
 
?>