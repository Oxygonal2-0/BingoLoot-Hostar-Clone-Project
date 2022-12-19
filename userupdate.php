<?php
include('dbconnection.php');
?>
<?php
    if(isset($_REQUEST['id']))
    {

    }
    else{
        echo '<script> location.href = "userview.php";</script>';
    }
?>
<?php
    $content_idp = $_REQUEST['id'];
    $sql = "SELECT * FROM user WHERE user_id='$content_idp'";
    $result = $conn->query($sql);
    if($result==TRUE)
    {
        $row = $result->fetch_assoc();
        /* echo "<script> window.alert('Added Successfully'); </script>"; */
    }
    else
    {
        echo "<script> window.alert('Please Click on right Content'); </script>";
    }

    if(isset($_REQUEST['update'])){
        if(($_REQUEST['content_name']=="")||($_REQUEST['content_desc']=="")||($_FILES['content_poster_p']=="")||
        ($_REQUEST['content_hour']=="")||($_REQUEST['content_min']=="")||($_REQUEST['content_sec']=="")||
        ($_REQUEST['content_year']=="")||($_REQUEST['content_url']=="")||($_FILES['content_poster_l']==""))
        {
            echo "<script> window.alert('Enter all Fields'); </script>";
        }
        else
        {
            $content_id = $_REQUEST['content_id'];
            $content_name = $_REQUEST['content_name']; $content_desc = $_REQUEST['content_desc'];
            $content_type = $_REQUEST['content_type']; $content_status = $_REQUEST['content_status'];
            $content_price = $_REQUEST['content_price']; $content_theme = $_REQUEST['content_theme'];
            $content_hour = $_REQUEST['content_hour']; $content_min = $_REQUEST['content_min'];
            $content_sec = $_REQUEST['content_sec']; $content_year = $_REQUEST['content_year'];
            $content_url = $_REQUEST['content_url'];  $content_lang = $_REQUEST['content_lang'];
            
            $content_poster_p = $_FILES['content_poster_p']['name'];
            $content_poster_p_temp = $_FILES['content_poster_p']['tmp_name'];
            $content_poster_folder = './images/movie/'.$content_poster_p;
            move_uploaded_file($content_poster_p_temp, $content_poster_folder);

            $content_poster_l = $_FILES['content_poster_l']['name'];
            $content_poster_l_temp = $_FILES['content_poster_l']['tmp_name'];
            $content_poster_folder = './images/movie/'.$content_poster_l;
            move_uploaded_file($content_poster_l_temp, $content_poster_folder);

            $sql = "UPDATE newcontent SET 
            content_name = '$content_name', content_desc = '$content_desc',
            content_type = '$content_type', content_status = '$content_status',
            content_price = '$content_price', content_theme = '$content_theme',
            content_hour = '$content_hour', content_min = '$content_min',
            content_sec = '$content_sec', content_year = '$content_year',
            content_url = '$content_url', content_poster_p = '$content_poster_p',
            content_poster_l = '$content_poster_l', content_lang = '$content_lang' 
            WHERE content_id = '$content_id'";
            $result = $conn->query($sql);
            if($result==TRUE)
            {
                echo "<script> window.alert('Update Successfully'); </script>";
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
                    <label for="user_id" class="form-label">User Mobile No</label>
                    <input type="text"  value="<?php if(isset($row['user_id'])){echo $row['user_id'];} ?>" class="form-control" readonly required="required" id="user_id" name="user_id" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                    <label for="user_mobile"  class="form-label">User Mobile No</label>
                    <input type="text" class="form-control" value="<?php if(isset($row['user_mo'])){echo $row['user_mo'];} ?>" required="required" id="user_mobile" name="user_mobile" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="user_email" class="form-label">User Email</label>
                        <input type="email" class="form-control" required id="user_email" name="user_email" aria-describedby="emailHelp"
                        value="<?php if(isset($row['user_email'])){echo $row['user_email'];} ?>">
                    </div>
                    <div class="mb-3">
                        <label for="user_subcription" class="form-label">User Subscription</label>
                        <select name="user_subcription" id="user_subcription" value="<?php if(isset($row['user_status'])){echo $row['user_status'];} ?>" class="form-control">
                            <option value="free">Free</option>
                            <option value="vip">VIP</option>
                            <option value="premium">Premium</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="subscription_days" class="form-label">Subscription Days</label>
                        <input type="text" class="form-control" required name="subscription_days" id="subscription_days" aria-describedby="emailHelp"
                        value="<?php if(isset($row['user_subscription'])){echo $row['user_subscription'];} ?>">
                    </div>
                    <div class="mb-3">
                        <label for="user_age" class="form-label">User Age</label>
                        <input type="text" class="form-control" required name="user_age" id="user_age" 
                        value="<?php if(isset($row['user_age'])){echo $row['user_age'];} ?>" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="user_pass" class="form-label">User Password</label>
                        <input type="text" class="form-control" required name="user_pass" id="user_pass" 
                        value="<?php if(isset($row['user_pass'])){echo $row['user_pass'];} ?>" aria-describedby="emailHelp">
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
    
