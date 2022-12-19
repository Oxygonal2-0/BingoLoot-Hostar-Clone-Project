<?php
    include_once('./dbconnection.php');
?>

<?php
    if(isset($_REQUEST['checkmail']) && isset($_REQUEST['useremail']))
    {
        $user_email = $_REQUEST['useremail'];
        $sql = "SELECT * FROM user WHERE user_email ='".$user_email."'";
        $result = $conn->query($sql);
        $row = $result->num_rows;
        echo $row;
    }
?>

<?php
    if(isset($_REQUEST['checkmobile']) && isset($_REQUEST['usermobile']))
    {
        $user_mo = $_REQUEST['usermobile'];
        $sql = "SELECT * FROM user WHERE user_mo ='".$user_mo."'";
        $result = $conn->query($sql);
        $row = $result->num_rows;
        echo $row;
    }
?>