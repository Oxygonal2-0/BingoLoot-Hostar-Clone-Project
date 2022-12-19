<?php
  session_start();
  include('dbconnection.php');
  if(isset($_SESSION['is_login']))
  {
    echo "<script>location.href = 'payment.php';</script>";
  }
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
    <!-- <span class="subscribeloginbtn" data-bs-toggle="modal" data-bs-target="#exampleModal">Log In</span>    
   --></header>

  
  <div>
    <div class="subcribecontainer" id="subcribecontainer">
      <h1>Subscribe to get more out of Netflix</h1>
      <div class="subcribelogincontent text-center" style="margin-bottom: 100px;">
        <div class="subcribelogincontentmain container text-white">
          <div class="subcribecontentmaindiv">
            <div style="visibility: hidden;">trgfvf</div>
            <div><span class="freebadge">FREE</span></div>
            <div><span class="vipbadge">VIP</span></div>
            <div><span class="premiumbadge">PREMIUM</span></div>
          </div>
          <div class="subcribecontentmaindiv">
            <div class="subcribecontentmaindivpadding" style="text-align: left;">Unlimited Live Sports</div>
            <div><i class="fas fa-times"></i></div>
            <div><i class="fas fa-check"></i></div>
            <div><i class="fas fa-check"></i></div>
          </div>
          <div class="subcribecontentmaindiv">
            <div class="subcribecontentmaindivpadding" style="text-align: left;">Netflix Specials & Star serials before TV</div>
            <div><i class="fas fa-times"></i></div>
            <div><i class="fas fa-check"></i></div>
            <div><i class="fas fa-check"></i></div>
          </div>
          <div class="subcribecontentmaindiv">
            <div class="subcribecontentmaindivpadding" style="text-align: left;">Multiplex & new Indian movies</div>
            <div><i class="fas fa-times"></i></div>
            <div><i class="fas fa-check"></i></div>
            <div><i class="fas fa-check"></i></div>
          </div>
          <div class="subcribecontentmaindiv">
            <div class="subcribecontentmaindivpadding" style="text-align: left;">Disney+ movies, Hollywood movies & Kids content <br>
              <span class="dubbeinglang">Dubbed in <pre > हिन्दी   ಕನ್ನಡ   বাংলা   తెలుగు</pre></span></div>
              <div style="display: flex; align-items: center; justify-content: center;"><i class="fas fa-times"></i></div>
              <div style="display: flex; align-items: center; justify-content: center;" class="smalltext">Only Dubbed</div>
              <div style="display: flex; align-items: center; justify-content: center;" class="smalltext">English + Dubbed</div>
          </div>
          <div class="subcribecontentmaindiv">
            <div class="subcribecontentmaindivpadding" style="text-align: left;">English shows & Disney+ Originals</div>
            <div><i class="fas fa-times"></i></div>
            <div><i class="fas fa-times"></i></div>
            <div><i class="fas fa-check"></i></div>
          </div>
          <div class="subcribecontentmaindiv">
            <div class="subcribecontentmaindivpadding" style="text-align: left;">Ad free entertainment</div>
            <div><i class="fas fa-times"></i></div>
            <div><i class="fas fa-times"></i></div>
            <div><i class="fas fa-check"></i></div>
          </div>
          <div class="subcribecontentmaindiv">
            <div class="subcribecontentmaindivpadding" style="text-align: left;">Video quality</div>
            <div>SD</div>
            <div>HD</div>
            <div>4K</div>
          </div>
          <div class="ratebtn1">
            <div class="freebtn" id="freebtn">
              <div class="subcribeflex">
                <div><span class="vipbadge1">VIP</span></div> <div id="visiable1" class="visiable"><i class="fas fa-check-circle fa-2x"></i></div>
              </div>
              <div class="subcribeitem">
                <span class="subcriberupee">&#8377</span> <span class="subcribemoney">399</span>/Year
              </div>
            </div>
            <div class="freebtn" id="vipbtn">
              <div class="subcribeflex">
                <div><span class="premiumbadge1">PREMIUM</span></div> <div id="visiable1" class="visiable"><i class="fas fa-check-circle fa-2x"></i></div>
              </div>
              <div class="subcribeitem">
                <span class="subcriberupee">&#8377</span> <span class="subcribemoney">1499</span>/Year
              </div>
            </div>
            <div class="freebtn" id="premiumbtn">
              <div class="subcribeflex">
                <div><span class="premiumbadge1">PREMIUM</span></div> <div id="visiable1" class="visiable"><i class="fas fa-check-circle fa-2x"></i></div>
              </div>
              <div class="subcribeitem">
                <span class="subcriberupee">&#8377</span> <span class="subcribemoney">299</span>/Month
              </div>
            </div>
          </div>
          <div>
          <button class="btn btn-primary continuebtnwith" id="continuebtnwith">CONTINUE WITH NETFLIX</button>
          </div>
        </div>
      </div>
    </div>
    <div class="subcribecontainer1" id="subcribecontainer1">
      <h1>You are almost done!</h1>
      <div class="subcribelogincontent text-center" style="margin-bottom: 100px;">
        <div class="subcribelogincontentmain1 container text-white">
          <div id="back" style="text-align: left; cursor: pointer;"><i class="fas fa-arrow-left fa-2x"></i></div>
          <div class="modallogin1" style="text-align: left;">
            <h5 id="exampleModalLabel" class="">Subscribe to continue</h5>
            <form action="" method="post">
              <div style="margin-top: 40px;" id="mobileborder" class="modalinput border-bottom border-primary border-2">
                  +91 | <input type="text" onkeypress="isInputNumber(event)"  placeholder="Enter your mobile number" id="usermobile" name="usermobile">
              </div>
              <div id="mobilestatus">
                
              </div>
              <div id="passborder" class="modalinput modalinputb border-bottom border-primary border-2">
                <i class="fas fa-key" style="margin: 0 7px;"></i> | <input type="text" name="userpass" id="userpass" placeholder="Enter your password">
              </div>
              <div id="passstatus">
              
              </div>
              <div id="emailborder" class="modalinput modalinputb border-bottom border-primary border-2">
                <i class="fas fa-at"  style="margin: 0 7px;"></i> | <input type="email"  name="useremail" id="useremail" placeholder="Enter your email">
              </div>
              <div id="emailstatus">
              
              </div>
              <div id="ageborder" class="modalinput modalinputb border-bottom border-primary border-2">
                <i class="far fa-address-card" style="margin: 0 7px;"></i> | <input type="text" onkeypress="isInputNumber(event)" name="userage" id="userage" placeholder="Enter your age">
              </div>
              <div id="agestatus">
              
               
              </div>                
              <div class="d-grid gap-2 modalinputb" id="addstu">
                <button name="addsubcriber" id="addsubcriber" class="btn btn-primary continuebtnwith">PROCEED TO PAYMENT</button>
              </div>
              <small class="termsandcondition">By Proceeding you agree to the <a href="#" class="termsandconditionlink">Terms of use</a> and <a href="#" class="termsandconditionlink">Privacy policy</a></small>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>



<!-- Start Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content modalcentent">
        <div class="modal-body modalcentent">
          <div class="modalnav text-white">
            <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
            <i class="fas fa-times" style="font-weight: 100; cursor: pointer;" data-bs-dismiss="modal" aria-label="Close"></i>
          </div>
          
          <div class="modallogin">
            <h5 id="exampleModalLabel" class="">Login to continue</h5>
            <form action="" method="post">
              <div style="margin-top: 40px;"class="modalinput border-bottom border-primary border-2">
                 +91 | <input type="text" placeholder="Enter your mobile number" name="username">
              </div>
              <div class="modalinput modalinputb border-bottom border-primary border-2">
                <i class="fas fa-key" style="margin: 0 7px;"></i> | <input type="text" name="userpass" placeholder="Enter your password">
              </div>
              
              <div class="d-grid gap-2 modalinputb">
                <button class="btn btn-primary continuebtn">CONTINUE<i class="fas fa-chevron-right"></i></button>
              </div>
              <small class="termsandcondition">By Proceeding you agree to the <a href="#" class="termsandconditionlink">Terms of use</a> and <a href="#" class="termsandconditionlink">Privacy policy</a></small>
            </form>
          </div>
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

    <script>
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
    </script>

    <script>
      var continuebtnwith = document.getElementById("continuebtnwith");
      var back = document.getElementById("back");
      var addsubcriber = document.getElementById("addsubcriber");
      var subcribecontainer = document.getElementById("subcribecontainer");
      var subcribecontainer1 = document.getElementById("subcribecontainer1");
      continuebtnwith.onclick = function(){
        subcribecontainer.style.display="none";
        subcribecontainer1.style.display="block";
      };
      back.onclick = function(){
        subcribecontainer.style.display="block";
        subcribecontainer1.style.display="none";
      } ;
      
     /*  addsubcriber.onclick = function(){
          $('#mobilestatus').html('<div style="margin-bottom:-5px;"></div>');
          $('#passstatus').html('<div style="margin-bottom:-5px;"></div>');
          $('#emailstatus').html('<div style="margin-bottom:-5px;"></div>');
          $('#agestatus').html('<div style="margin-bottom:-5px;"></div>');

          $("#mobileborder").attr('style','margin-top: 40px;');
          $("#emailborder").attr('style','');
          $("#passborder").attr('style','');
          $("#ageborder").attr('style','');


          var reg = /^[A-Z0-9._%+-]+@([A-Z0-9]+\.)+[A-Z]{2,4}$/i;
          var usermobile = $('#usermobile').val();
          var userpass = $("#userpass").val();
          var useremail = $("#useremail").val();
          var userage = $("#userage").val();

          if(usermobile.trim()=="")
          {
              $("#mobilestatus").html('<div style="color:#f15151; font-size:16px; margin-top:5px; margin-bottom:-25px; display:flex; justify-content:space-between;"><small>Please enter valid mobile number</small> <span><small><i class="fas fa-exclamation-triangle"></i></small></span></div>');
              $("#mobileborder").attr('style','margin-top: 40px; border-bottom:2px solid #f15151 !important;');
              $("#usermobile").focus();
              return false;
          }
          else if(userpass.trim()=="")
          {
              $("#passstatus").html('<div style="color:#f15151; font-size:16px; margin-top:5px; margin-bottom:-25px; display:flex; justify-content:space-between;"><small>Please enter your password</small> <span><small><i class="fas fa-exclamation-triangle"></i></small></span></div>');
              $("#passborder").attr('style','margin-top: 40px; border-bottom:2px solid #f15151 !important;');
              $("#userpass").focus();
              return false;
          }
          else if(useremail.trim()=="")
          {
              $("#emailstatus").html('<div style="color:#f15151; font-size:16px; margin-top:5px; margin-bottom:-25px; display:flex; justify-content:space-between;"><small>Please enter email</small> <span><small><i class="fas fa-exclamation-triangle"></i></small></span></div>');
              $("#emailborder").attr('style','margin-top: 40px; border-bottom:2px solid #f15151 !important;');
              $("#useremail").focus();
              return false;
          } 
          else if(useremail.trim() != "" && !reg.test(useremail))
          {
              $("#emailstatus").html('<div style="color:#f15151; font-size:16px; margin-top:5px; margin-bottom:-25px; display:flex; justify-content:space-between;"><small>Please enter valid email Id</small> <span><small><i class="fas fa-exclamation-triangle"></i></small></span></div>');
              $("#emailborder").attr('style','margin-top: 40px; border-bottom:2px solid #f15151 !important;');
              $("#useremail").focus();
              return false;
          }
          else if(userage.trim()=="")
          {
              $("#agestatus").html('<div style="color:#f15151; font-size:16px; margin-top:5px; margin-bottom:-25px; display:flex; justify-content:space-between;"><small>Please enter age </small> <span><small><i class="fas fa-exclamation-triangle"></i></small></span></div>');
              $("#ageborder").attr('style','margin-top: 40px; border-bottom:2px solid #f15151 !important;');
              $("#userage").focus();
              return false;
          }
          else if(userage.trim() < 18 )
          {
              $("#agestatus").html('<div style="color:#f15151; font-size:16px; margin-top:5px; margin-bottom:-25px; display:flex; justify-content:space-between;"><small>Please enter age above 18</small> <span><small><i class="fas fa-exclamation-triangle"></i></small></span></div>');
              $("#ageborder").attr('style','margin-top: 40px; border-bottom:2px solid #f15151 !important;');
              $("#userage").focus();
              return false;
          }
          $.ajax({
            url:'student.php',
            method:'POST',
            dataType: 'json';
            data:{
              usermobile : usermobile,
              userpass : userpass,
              useremail : useremail,
              userage : userage,
              price : price,
              days : days,
              subcription : subcription,
              usercheck : 'Usercheck',
            },
            success:function(data)
            {
              console.log(data);
              if(data == 'OK')
              {
                location.href = 'payment.php';
              }
            },
          });
      }  */
     
    </script>
    
    <script>
      var addstu = document.getElementById("addsubcriber");
      addstu.onclick= function(){
          $('#mobilestatus').html('<div style="margin-bottom:-5px;"></div>');
          $('#passstatus').html('<div style="margin-bottom:-5px;"></div>');
          $('#emailstatus').html('<div style="margin-bottom:-5px;"></div>');
          $('#agestatus').html('<div style="margin-bottom:-5px;"></div>');

          $("#mobileborder").attr('style','margin-top: 40px;');
          $("#emailborder").attr('style','');
          $("#passborder").attr('style','');
          $("#ageborder").attr('style','');


          var reg = /^[A-Z0-9._%+-]+@([A-Z0-9]+\.)+[A-Z]{2,4}$/i;
          var usermobile = $('#usermobile').val();
          var userpass = $("#userpass").val();
          var useremail = $("#useremail").val();
          var userage = $("#userage").val();

          if(usermobile.trim()=="")
          {
              $("#mobilestatus").html('<div style="color:#f15151; font-size:16px; margin-top:5px; margin-bottom:-25px; display:flex; justify-content:space-between;"><small>Please enter valid mobile number</small> <span><small><i class="fas fa-exclamation-triangle"></i></small></span></div>');
              $("#mobileborder").attr('style','margin-top: 40px; border-bottom:2px solid #f15151 !important;');
              $("#usermobile").focus();
              return false;
          }
          else if(usermobile.length != 10)
          {
              $("#mobilestatus").html('<div style="color:#f15151; font-size:16px; margin-top:5px; margin-bottom:-25px; display:flex; justify-content:space-between;"><small>Please enter valid 10 digit mobile number</small> <span><small><i class="fas fa-exclamation-triangle"></i></small></span></div>');
              $("#mobileborder").attr('style','margin-top: 40px; border-bottom:2px solid #f15151 !important;');
              $("#usermobile").focus();
              return false;
          }
          else if(userpass.trim()=="")
          {
              $("#passstatus").html('<div style="color:#f15151; font-size:16px; margin-top:5px; margin-bottom:-25px; display:flex; justify-content:space-between;"><small>Please enter your password</small> <span><small><i class="fas fa-exclamation-triangle"></i></small></span></div>');
              $("#passborder").attr('style','margin-top: 40px; border-bottom:2px solid #f15151 !important;');
              $("#userpass").focus();
              return false;
          }
          else if(useremail.trim()=="")
          {
              $("#emailstatus").html('<div style="color:#f15151; font-size:16px; margin-top:5px; margin-bottom:-25px; display:flex; justify-content:space-between;"><small>Please enter email</small> <span><small><i class="fas fa-exclamation-triangle"></i></small></span></div>');
              $("#emailborder").attr('style','margin-top: 40px; border-bottom:2px solid #f15151 !important;');
              $("#useremail").focus();
              return false;
          } 
          else if(useremail.trim() != "" && !reg.test(useremail))
          {
              $("#emailstatus").html('<div style="color:#f15151; font-size:16px; margin-top:5px; margin-bottom:-25px; display:flex; justify-content:space-between;"><small>Please enter valid email Id</small> <span><small><i class="fas fa-exclamation-triangle"></i></small></span></div>');
              $("#emailborder").attr('style','margin-top: 40px; border-bottom:2px solid #f15151 !important;');
              $("#useremail").focus();
              return false;
          }
          else if(userage.trim()=="")
          {
              $("#agestatus").html('<div style="color:#f15151; font-size:16px; margin-top:5px; margin-bottom:-25px; display:flex; justify-content:space-between;"><small>Please enter age </small> <span><small><i class="fas fa-exclamation-triangle"></i></small></span></div>');
              $("#ageborder").attr('style','margin-top: 40px; border-bottom:2px solid #f15151 !important;');
              $("#userage").focus();
              return false;
          }
          else if(userage.trim() < 18 )
          {
              $("#agestatus").html('<div style="color:#f15151; font-size:16px; margin-top:5px; margin-bottom:-25px; display:flex; justify-content:space-between;"><small>Please enter age above 18</small> <span><small><i class="fas fa-exclamation-triangle"></i></small></span></div>');
              $("#ageborder").attr('style','margin-top: 40px; border-bottom:2px solid #f15151 !important;');
              $("#userage").focus();
              return false;
          }
         
          $.ajax({
            url:'student.php',
            method:'POST',
            dataType:'json',
            data:{
              usermobile : usermobile,
              userpass : userpass,
              useremail : useremail,
              userage : userage,
              price : price,
              days : days,
              subcription : subcription,
              usercheck : 'Usercheck',
            },
            success:function(data){
              window.location.href = "payment.php";
            },
          });  
      }

      function isInputNumber(evt){
      var ch = String.fromCharCode(evt.which);
            if(!(/[0-9]/.test(ch))){
              evt.preventDefault();
          }
      }


      $(document).ready(function(){
        $("#useremail").on("keypress blur", function(){
          var useremail = $("#useremail").val();
          $.ajax({
            url :'student1.php',
            method: 'POST',
            data:{
              checkmail: "Checkmail",
              useremail : useremail,
            },
            success:function(data){
              console.log(data);
              if(data == 0)
              {
                return true;
              }
              else if(data != 0)
              {
                $("#emailstatus").html('<div style="color:#f15151; font-size:16px; margin-top:5px; margin-bottom:-25px; display:flex; justify-content:space-between;"><small>Email ID already exist</small> <span><small><i class="fas fa-exclamation-triangle"></i></small></span></div>');
                $("#emailborder").attr('style','margin-top: 40px; border-bottom:2px solid #f15151 !important;');
                $("#useremail").focus();
                return false;
              }
            }
          })
        });
      });

      $(document).ready(function(){
        $("#usermobile").on("blur", function(){
          var usermobile = $("#usermobile").val();
          $.ajax({
            url :'student1.php',
            method: 'POST',
            data:{
              checkmobile: "Checkmail",
              usermobile : usermobile,
            },
            success:function(data){
              console.log(data);
              if(data == 0)
              {
                return true;
              }
              else 
              if(data != 0)
              {
                $("#mobilestatus").html('<div style="color:#f15151; font-size:16px; margin-top:5px; margin-bottom:-25px; display:flex; justify-content:space-between;"><small>Mobile number already exist</small> <span><small><i class="fas fa-exclamation-triangle"></i></small></span></div>');
                $("#mobileborder").attr('style','margin-top: 40px; border-bottom:2px solid #f15151 !important;');
                $("#usermobile").focus();
                return false;
              }
            }
          })
        });
      });
    </script>
    
    
</body>
</html>


