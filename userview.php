<?php
include('dbconnection.php');
?>

<?php
  include('./main/adminheader.php');
?>


      <!-- Please exclude main div -->
      <main>
        <div class="main__container">
            <section class="">
                <div>
                    <form class="d-flex" action="userview.php" method="POST">
                        <input class="form-control mr-5" type="text" name="search" required placeholder="Search">
                        <button class="btn btn-outline-success ml-5" name="show" type="submit">Search</button>
                    </form>
                </div>
                <hr>
                <?php 
                
                if(isset($_REQUEST['delete']))
                {
                    $sql = "DELETE FROM user WHERE user_id={$_REQUEST['id']}";
                    if($conn->query($sql) == TRUE)
                    {
                        echo'<meta http-equiv = "refresh" content="0;URL=?deleted"/>';
                    }
                    else
                    {
                        echo "<script> window.alert('Unable to Delete'); </script>";
                    }
                }
                
                

                if(isset($_REQUEST['show']))
                {
                    $search = $_REQUEST['search'];
                    echo "<script> console.log('$search')</script>";
                    $sql1 = "SELECT * FROM user WHERE user_id LIKE '%$search%'";
                    $sql2 = "SELECT * FROM user WHERE user_mo LIKE '%$search%'";
                    $sql3 = "SELECT * FROM user WHERE user_email LIKE '%$search%'";
                    $sql4 = "SELECT * FROM user WHERE user_status LIKE '%$search%'";
                    //$sql1 = "SELECT * FROM newcontent WHERE content_id LIKE '%$search%'";
                    $result1 = $conn->query($sql1);
                    $result2 = $conn->query($sql2);
                    $result3 = $conn->query($sql3);
                    $result4 = $conn->query($sql4);
                    /* $result1 = $conn->query($sql1); */
                    if(($result1 == TRUE) || ($result2 == TRUE) || ($result3 == TRUE) || ($result4 == TRUE))
                    {
                        ?>
                        <div>
                            <?php
                                if(($result4->num_rows > 0) || ($result1->num_rows > 0) || ($result2->num_rows > 0) || ($result3->num_rows > 0))
                                { ?>
                                
                                    <h1 class="text-center">Results Showing for <i><?php if(isset($search)){echo $search;} ?></i></h1>
                                    <table class="table table-dark table-hover text-center">
                                        <thead>
                                            <tr>
                                                <th> ID</th>
                                                <th> Mobile</th>
                                                <th> Email</th>
                                                <th> Age</th>
                                                <th> Subscription</th>
                                                <th> Subs_Days</th>
                                                <th> Password</th>
                                                <th> Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php while($row = $result1->fetch_assoc()){ ?>
                                            <tr>
                                            <th><?php if(isset($row['user_id'])){echo $row['user_id'];} ?></th>
                                            <td><?php if(isset($row['user_mo'])){echo $row['user_mo'];} ?></td>
                                            <td><?php if(isset($row['user_email'])){echo $row['user_email'];} ?></td>
                                            <td><?php if(isset($row['user_age'])){echo $row['user_age'];} ?></td>
                                            <td><?php if(isset($row['user_status'])){echo $row['user_status'];} ?></td>
                                            <td><?php if(isset($row['user_subscription'])){echo $row['user_subscription'];} ?></td>
                                            <td><?php if(isset($row['user_pass'])){echo $row['user_pass'];} ?></td>
                                            <td scope="row">
                                                <form method="POST" action="userupdate.php"class="d-inline">
                                                    <input type="hidden" name="id" value="<?php if(isset($row['user_id'])){echo $row['user_id'];}?>">
                                                    <button type="submit" class="btn btn-success btn-sm mr-2" name="view" value="View">Edit</button>
                                                </form>
                                                <form method="POST" class="d-inline">
                                                    <input type="hidden" name="id" value="<?php if(isset($row['user_id'])){echo $row['user_id'];}?>">
                                                    <button type="submit" class="btn btn-danger btn-sm" name="delete" value="Delete">Delete</button>
                                                </form>
                                            </td>
                                            </tr>
                                            <?php }
                                            ?>
                                            <?php while($row = $result2->fetch_assoc()){ ?>
                                            <tr>
                                            <tr>
                                            <th><?php if(isset($row['user_id'])){echo $row['user_id'];} ?></th>
                                            <td><?php if(isset($row['user_mo'])){echo $row['user_mo'];} ?></td>
                                            <td><?php if(isset($row['user_email'])){echo $row['user_email'];} ?></td>
                                            <td><?php if(isset($row['user_age'])){echo $row['user_age'];} ?></td>
                                            <td><?php if(isset($row['user_status'])){echo $row['user_status'];} ?></td>
                                            <td><?php if(isset($row['user_subscription'])){echo $row['user_subscription'];} ?></td>
                                            <td><?php if(isset($row['user_pass'])){echo $row['user_pass'];} ?></td>
                                            <td scope="row">
                                                <form method="POST" action="userupdate.php"class="d-inline">
                                                    <input type="hidden" name="id" value="<?php if(isset($row['user_id'])){echo $row['user_id'];}?>">
                                                    <button type="submit" class="btn btn-success btn-sm mr-2" name="view" value="View">Edit</button>
                                                </form>
                                                <form method="POST" class="d-inline">
                                                    <input type="hidden" name="id" value="<?php if(isset($row['user_id'])){echo $row['user_id'];}?>">
                                                    <button type="submit" class="btn btn-danger btn-sm" name="delete" value="Delete">Delete</button>
                                                </form>
                                            </td>
                                            </tr>
                                            <?php }
                                            ?>
                                            <?php while($row = $result3->fetch_assoc()){ ?>
                                            <tr>
                                            <th><?php if(isset($row['user_id'])){echo $row['user_id'];} ?></th>
                                            <td><?php if(isset($row['user_mo'])){echo $row['user_mo'];} ?></td>
                                            <td><?php if(isset($row['user_email'])){echo $row['user_email'];} ?></td>
                                            <td><?php if(isset($row['user_age'])){echo $row['user_age'];} ?></td>
                                            <td><?php if(isset($row['user_status'])){echo $row['user_status'];} ?></td>
                                            <td><?php if(isset($row['user_subscription'])){echo $row['user_subscription'];} ?></td>
                                            <td><?php if(isset($row['user_pass'])){echo $row['user_pass'];} ?></td>
                                            <td scope="row">
                                                <form method="POST" action="userupdate.php"class="d-inline">
                                                    <input type="hidden" name="id" value="<?php if(isset($row['user_id'])){echo $row['user_id'];}?>">
                                                    <button type="submit" class="btn btn-success btn-sm mr-2" name="view" value="View">Edit</button>
                                                </form>
                                                <form method="POST" class="d-inline">
                                                    <input type="hidden" name="id" value="<?php if(isset($row['user_id'])){echo $row['user_id'];}?>">
                                                    <button type="submit" class="btn btn-danger btn-sm" name="delete" value="Delete">Delete</button>
                                                </form>
                                            </td>
                                            </tr>
                                            <?php }
                                            ?>
                                            <?php while($row = $result4->fetch_assoc()){ ?>
                                            <tr>
                                            <th><?php if(isset($row['user_id'])){echo $row['user_id'];} ?></th>
                                            <td><?php if(isset($row['user_mo'])){echo $row['user_mo'];} ?></td>
                                            <td><?php if(isset($row['user_email'])){echo $row['user_email'];} ?></td>
                                            <td><?php if(isset($row['user_age'])){echo $row['user_age'];} ?></td>
                                            <td><?php if(isset($row['user_status'])){echo $row['user_status'];} ?></td>
                                            <td><?php if(isset($row['user_subscription'])){echo $row['user_subscription'];} ?></td>
                                            <td><?php if(isset($row['user_pass'])){echo $row['user_pass'];} ?></td>
                                            <td scope="row">
                                                <form method="POST" action="userupdate.php"class="d-inline">
                                                    <input type="hidden" name="id" value="<?php if(isset($row['user_id'])){echo $row['user_id'];}?>">
                                                    <button type="submit" class="btn btn-success btn-sm mr-2" name="view" value="View">Edit</button>
                                                </form>
                                                <form method="POST" class="d-inline">
                                                    <input type="hidden" name="id" value="<?php if(isset($row['user_id'])){echo $row['user_id'];}?>">
                                                    <button type="submit" class="btn btn-danger btn-sm" name="delete" value="Delete">Delete</button>
                                                </form>
                                            </td>
                                            </tr>
                                            <?php }
                                            ?>

                                            
                                        </tbody>
                                    </table>
                                        <?php
                                }
                                else
                                {
                                    echo '<h1 class="text-center">No record Found</h1>';
                                }
                            ?>

                        </div>
                        <?php
                    }
                    else
                    {
                        echo "<script> window.alert('Query False'); </script>";
                    } ?>
                    
                <?php
            } ?>
            </section>
        </div>
      </main>
                    

      <?php
        include('./main/adminsidebar.php');
      ?>
      <?php
        include('./main/adminfooter.php');
      ?>
    
