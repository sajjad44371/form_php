<?php 
  $num3 = null;

  if(isset($_POST['submit'])){
    $num1 = $_POST['floatingNum1'];
    $num2 = $_POST['floatingNum2'];

    $num3 = $num1*$num2;
  }else{

  }

?>

<!doctype html>
<html lang="en">
  <head>
    <!--meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!--font links-->

    <!--css links-->
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media.css">

    <!--icon links-->
    <title>Form using php</title>
  </head>

  <body>
  
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <!-- form -->
          <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="">
            <div class="form-floating mb-3">
              <input type="number" class="form-control floatingNum1" id="floatingNum1" placeholder="first number" name="floatingNum1" required>
              <label for="floatingNum1">Enter first number</label>
            </div>

            <div class="form-floating">
              <input type="number" class="form-control floatingNum2" id="floatingNum2" placeholder="second number" name="floatingNum2" required>
              <label for="floatingNum2">Enter second number</label>

              <button type="submit" class="btn btn-primary btn_cus" name="submit">Submit</button>
            </div>
          </form>
          <!-- form -->

          <div class="output">
            <h1 class="text-danger">
              <?php 

                echo "$num3";

              ?>
            </h1>
          </div>
        </div>
      </div>
    </div>

    <!--js links-->
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>