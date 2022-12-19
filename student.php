<?php
session_start();
if(isset($_SESSION['is_login']))
{
    $user_mo123456 = $_SESSION['usermobile'];
}

include('./dbconnection.php');
?>

<!-- Payment -->
<?php
    if(isset($_REQUEST['checkdays'])&& isset($_REQUEST['days'])  && isset($_REQUEST['price']) && isset($_REQUEST['subcription']))
    {
        $user_number =  $_SESSION['usermobile'];
        $user_subscription = $_REQUEST['days'];
        $user_status = $_REQUEST['subcription'];
        $user_price = $_REQUEST['price'];
        $sql = "UPDATE user SET user_subscription='".$user_subscription."', user_status='".$user_status."',user_price='".$user_price."' WHERE user_mo ='".$user_number."'";
        $result = $conn->query($sql);
        if($result == TRUE)
        {
            $row = "OK";
            echo json_encode($row);
        }
        else{
            $row = "failed";
            echo json_encode($row);
        }
    }
?>

<!-- Log In -->
<?php
    if(!isset($_SESSION['is_login'])){
        if(isset($_REQUEST['checkLogemail']) && $_REQUEST['usermobile'] && isset($_REQUEST['userpass']))
        {
            $user_mobile = $_REQUEST['usermobile'];
            $user_pass = $_REQUEST['userpass'];
            $sql = "SELECT user_mo, user_pass FROM user WHERE user_mo = '".$user_mobile."' AND user_pass = '".$user_pass."'"  ;
            $resultlog = $conn->query($sql);
            $rowlog = $resultlog->num_rows;
            if($rowlog == 1){
                $_SESSION['is_login'] = true;
                $_SESSION['usermobile'] = $user_mobile;
            }
            echo $rowlog;
        }
    }
    
?>

<!-- Sign Up -->
<?php
    if(isset($_REQUEST['usermobile']) && isset($_REQUEST['userpass']) && 
    isset($_REQUEST['useremail']) && isset($_REQUEST['userage']) &&  isset($_REQUEST['price']) &&
    isset($_REQUEST['subcription']) && isset($_REQUEST['days']) && isset($_REQUEST['usercheck']))
    {
        $user_mobile = $_REQUEST['usermobile']; 
        $user_subcription = $_REQUEST['subcription'];
        $user_email = $_REQUEST['useremail']; 
        $user_age = $_REQUEST['userage']; 
        $user_pass = $_REQUEST['userpass'];
        $subscription_days = $_REQUEST['days'];
        $user_price = $_REQUEST['price'];
        
        $sql = "INSERT INTO user (user_email, user_pass, user_mo, user_age, user_subscription, user_status, user_price) VALUES
            ('$user_email','$user_pass','$user_mobile','$user_age',
            '$subscription_days','$user_subcription','$user_price')";
        
        
        if($conn->query($sql))
        {
            $_SESSION['is_login'] = true;
            $_SESSION['usermobile'] = $user_mobile;
        }
        $check = 1;
        echo json_encode($check);
    }
?>