<?php
include('dbconnection.php');

if(isset($_REQUEST['upload'])){    
    if(($_REQUEST['user_mobile']=="")||($_REQUEST['user_subcription']=="")||($_REQUEST['user_email']=="")||
    ($_REQUEST['user_age']=="")||($_REQUEST['user_pass']=="") ||($_REQUEST['subscription_days']==""))
    {
        echo "<script> window.alert('Enter all Fields'); </script>";
    }
    else
    {
        $user_mobile = $_REQUEST['user_mobile']; 
        $user_subcription = $_REQUEST['user_subcription'];
        $user_email = $_REQUEST['user_email']; 
        $user_age = $_REQUEST['user_age']; 
        $user_pass = $_REQUEST['user_pass'];
        $subscription_days = $_REQUEST['subscription_days'];
        
        $sql = "INSERT INTO user (user_email, user_pass, user_mo, user_age, user_subscription, user_status) VALUES
            ('$user_email','$user_pass','$user_mobile','$user_age',
            '$subscription_days','$user_subcription')";
        
        $result = $conn->query($sql);
        if($result==TRUE)
        {
            echo "<script> window.alert('Added Successfully'); </script>";
        }
        else
        {
            echo "<script> window.alert('Unable To update'); </script>";
        }
    }
}
    
?>

<?php
  include('./main/adminheader.php');
?>


      <!-- Please exclude main div -->
      <main>
        <div class="main__container">
            <section>
                <form action="" class="" enctype="multipart/form-data" method="POST"> 
                    <div class="mb-3">
                    <label for="user_mobile" class="form-label">User Mobile No</label>
                    <input type="text" class="form-control" required="required" id="user_mobile" name="user_mobile" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="user_email" class="form-label">User Email</label>
                        <input type="email" class="form-control" required id="user_email" name="user_email" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="user_subcription" class="form-label">User Subscription</label>
                        <select name="user_subcription" id="user_subcription"  class="form-control">
                            <option value="free">Free</option>
                            <option value="vip">VIP</option>
                            <option value="premium">Premium</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="subscription_days" class="form-label">Subscription Days</label>
                        <input type="text" class="form-control" required name="subscription_days" id="subscription_days" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="user_age" class="form-label">User Age</label>
                        <input type="text" class="form-control" required name="user_age" id="user_age" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="user_pass" class="form-label">User Password</label>
                        <input type="text" class="form-control" required name="user_pass" id="user_pass" aria-describedby="emailHelp">
                    </div>
                    <button type="submit" name="upload" class="btn btn-primary">Submit</button>
                    <a href="videoview.php" class="btn btn-danger">Back</a>
                </form>
            </section>
        </div>
      </main>

      <?php
        include('./main/adminsidebar.php');
      ?>
      <?php
        include('./main/adminfooter.php');
      ?>
    
