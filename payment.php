
<?php 
include('dbConnection.php');
if(!isset($_SESSION))
{
    session_start();
}
?>
<?php
	header("Pragma: no-cache");
	header("Cache-Control: no-cache");
	header("Expires: 0");
?>
<?php
  $user_mobile = $_SESSION['usermobile'];
  $order_id = "ORDS".rand(10000,99999999);
  $sql = "INSERT INTO user(user_order_id) VALUES ('".$order_id."')";
  $sql = "UPDATE user SET user_order_id = '".$order_id."'WHERE user_mo = '".$user_mobile."'";
  $conn->query($sql);
  
  $sql = "SELECT user_price FROM user WHERE user_mo = '".$user_mobile."'";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BingoLooT</title>
    <link rel="icon" type="image/jpeg" href="images/netflixlogo.0.0.jpg"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/mediaelementplayer.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mediaelement/4.2.6/mediaelementplayer.css">
    <link rel="stylesheet" href="./quality/quality.css">
    <link rel="stylesheet" href="css/demo.css">
    <!-- <link rel="stylesheet" href="index.css"> -->
    <link rel="stylesheet" href="index.css">
</head>
<body style="background: #0c111c;">
     <!-- Start Navigation Bar-->
  <header>
    <div class="logoandnav">
        <a href="main.php" class="logo"><img src="images/icons8-netflix-100.png" height="90px" alt=""></a>
    </div>
  </header>

  
  <div>
    <div class="subcribecontainer" id="subcribecontainer">
      <h1>Netflix's Premium Plan</h1>
      
      <div class="subcribelogincontent text-center" style="margin-bottom: 100px;">
        <div class="subcribelogincontentmain container text-white">
        <form method="post" action="./PaytmKit/pgRedirect.php" style="margin-top:20px; text-align:left;">
                <div class="form-group row">
                    <label for="ORDER_ID" style="text-align:right;" class="col-sm-4 col-form-label">Order ID</label>
                    <div class="col-sm-6">
                        <input id="ORDER_ID" class="form-control" tabindex="1" maxlength="20" readonly size="20" name="ORDER_ID" autocomplete="off" value="<?php echo $order_id;?>">
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <label for="CUST_ID"  style="text-align:right;" class="col-sm-4 col-form-label">Subcriber Mobile</label>
                    <div class="col-sm-6">
                        <input id="CUST_ID" class="form-control" tabindex="2" maxlength="12" readonly size="12" name="CUST_ID" autocomplete="off" value="<?php if(isset($user_mobile)){echo $user_mobile;}?>">
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <label for="TXN_AMOUNT"  style="text-align:right;" class="col-sm-4 col-form-label">Amount</label>
                    <div class="col-sm-6">
                        <input id="TXN_AMOUNT" class="form-control" tabindex="10" readonly name="TXN_AMOUNT" autocomplete="off" value="<?php if(isset($row['user_price'])){echo $row['user_price'];}?>">
                    </div>
                </div>
                <div class="form-group row">
                    <!--<label class="col-sm-4 col-form-label" for="INDUSTRY_TYPE_ID">INDUSTRY_TYPE_ID </label>-->
                    <input id="INDUSTRY_TYPE_ID" type="hidden" class="form-control" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail"></td>
                </div>
                <!--<label>Channel ::*</label>-->
                <input id="CHANNEL_ID" type="hidden" tabindex="4" maxlength="12"
                  size="12" name="CHANNEL_ID" autocomplete="off" value="WEB">
      
                <div class="text-center">
                  <br>  <!-- <input value="CheckOut" type="submit" class="btn btn-primary" onclick="">
                     --><input value="Proceed To Payment" type="submit" class="btn continuebtnwith btn-primary" onclick="">
                <br><a href="main.php" class="btn btn-danger">Cancel</a>
                </div>
                
                </form>
               
          <div>
          <!-- <button class="btn btn-primary continuebtnwith" type="submit" id="continuebtnwith">Proceed To Payment</button>
           --></div>
           <br>
          <small class="form-text" style="color:#fff; padding-top: 20px;">Note : Complete Payment By clicking CheckOut Button
          </small>
        </div>
      </div> 
    </div>
    
  </div>


    <script src="js.js"></script>
    <script src="js/all.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    <script src="js/mediaelement-and-player.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mediaelement/4.2.6/mediaelement-and-player.min.js"></script>
    <script src="./quality/quality.js"></script>
    

    <!--  JQuery and Bootstart JS 
    <script src="js/jquery.min.js"></script> 
    <script src="js/pooper.min.js"></script> 
    <script src="js/bootstrap.min.js"></script>  -->

    <!-- <script>
      var price = 0;
      var days = 0;
      var subcription = 'free';
      if(price == 0){
        document.getElementById("continuebtnwith").setAttribute("disabled",true);
      }
      var btn = document.getElementById("freebtn");
      var btn1 = document.getElementById("vipbtn");
      var btn2 = document.getElementById("premiumbtn");
      var visiable = document.getElementsByClassName("visiable");
      btn.onclick = function(){
        console.log("clicked");
        btn.style.background="#184374";
        btn1.style.background="none";
        btn2.style.background="none";
        visiable[0].style.visibility="visible";
        visiable[1].style.visibility="hidden";
        visiable[2].style.visibility="hidden";
        price = 399;
        days = 365;
        subcription = 'vip';
        $("#continuebtnwith").attr("disabled",false);
      }
      btn1.onclick = function(){
        console.log("clicked");
        btn1.style.background="#184374";
        btn.style.background="none";
        btn2.style.background="none";
        visiable[1].style.visibility="visible";
        visiable[0].style.visibility="hidden";
        visiable[2].style.visibility="hidden";
        price = 1499;
        days = 365;
        subcription = 'premium';
        $("#continuebtnwith").attr("disabled",false);
      }
      btn2.onclick = function(){
        console.log("clicked");
        btn2.style.background="#184374";
        btn1.style.background="none";
        btn.style.background="none";
        visiable[2].style.visibility="visible";
        visiable[0].style.visibility="hidden";
        visiable[1].style.visibility="hidden";
        price = 299;
        days = 30; 
        subcription = 'premium';
        $("#continuebtnwith").attr("disabled",false); 
      }
    </script> -->
</body>
</html>


