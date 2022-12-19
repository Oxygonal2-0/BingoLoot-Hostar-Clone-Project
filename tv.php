<?php
  include('./dbconnection.php');
?>

<?php 
    include('main/header.php');
?>

<?php
    if(isset($_GET['tv']))
    {
        $tv = $_GET['tv'];
    ?>
    <section class="banner">
      <section class="traysp">

      <?php
         
          $sql1 = "SELECT * FROM newcontent";
          $result1 = $conn->query($sql1);
          
          if($result1 == TRUE)
          {
            ?>
            <div class="block1">
              <?php
                if($result1->num_rows > 0)
                {
              ?>
                  <div class="headingsp capilize"><?php echo $tv; ?> </div>
                  <div class="maintrayp">
                  <?php
                  while($row = $result1->fetch_assoc())
                  {
                  ?>
                    <div class="mainitemp">
                      <div class="mainimage">
                        <a href="image.php?id=<?php echo $row['content_id'];?>"><img src="images/movie/<?php echo $row['content_poster_l']; ?>" width="100%" height="100%" alt=""></a>
                      </div>
                      <div class="maincontent">
                        <div>
                          <div class="showname"><?php echo $row['content_name'];?></div>
                        <div class="showtime"><?php if($row['content_hour'] != '0'){echo $row['content_hour'];?> hr <?php echo $row['content_min'];?> min,<?php }
                        else{echo $row['content_min'];?> min <?php echo $row['content_sec'];?> s,<?php } ?> <span class="capilize"><?php echo $row['content_theme']; ?>,<?php echo $row['content_lang']; ?>,<br><?php echo $row['content_year']; ?></span></div>
                        <div class="showdesc"><?php echo $row['content_desc']; ?></div>
                        <div class="showlink1 whitespacelink">
                        <?php
                            if($row['content_type'] == 'movie')
                            {
                            ?>
                            <a href="video.php?id=<?php echo $row['content_id']; ?>" class="link"><i class="fas fa-play margin"></i> WATCH MOVIE</a>
                            <?php
                           }
                           ?>  
                        
                        </div>
                        <div class="showlink2 whitespacelink"><a href="#" class="link"><i class="fas fa-plus margin"></i> ADD TO WATCHLIST </a></div>
                        </div>
                      </div>
                    </div>
                  <?php
                  }
                  ?>
                  </div>
              <?php
                }
                else{
                  echo '<div class="headingsp">No result Found</div>';
                }
              ?>
            </div>
          <?php
          }
          ?>
      </section>
    </section>
    <?php
    }
    else{
        include('./main/carousel.php');
    ?>
        <section class="trays">
            <!-- Start Top Picks For You -->
            <div class="block1">
                <div class="headings">Top Picks For You</div>
                <div class="maintray">

                <?php  
                    $sql1 = "SELECT * FROM newcontent LIMIT 8" ;
                    $result1 = $conn->query($sql1);
                    if($result1->num_rows > 0)
                    {
                        while($row = $result1->fetch_assoc())
                        {
                    ?>
                        <div class="mainitem">
                            <div class="mainimage">
                                <a href="image.php?id=<?php echo $row['content_id']; ?>"><img src="images/movie/<?php echo $row['content_poster_p']; ?>" width="100%" height="100%" alt=""></a>
                            </div>
                            <div class="maincontent">
                                <div>
                                <div class="showname"><?php echo $row['content_name']; ?></div>
                                <div class="showtime"><?php if($row['content_hour'] != '0'){echo $row['content_hour'];?> hr <?php echo $row['content_min'];?> min,<?php }
                                else{echo $row['content_min'];?> min <?php echo $row['content_sec'];?> s,<?php } ?> <span class="capilize"><?php echo $row['content_theme']; ?>,<?php echo $row['content_lang']; ?>,<br><?php echo $row['content_year']; ?></span></div>
                                <div class="showdesc"><?php echo $row['content_desc']; ?></div>
                                <div class="showlink1 whitespacelink">
                                    <?php
                                    if($row['content_type'] == 'movie')
                                    {
                                    ?>
                                    <a href="video.php?id=<?php echo $row['content_id']; ?>" class="link"><i class="fas fa-play margin"></i> WATCH MOVIE </a>
                                    <?php }?>
                                </div>
                                <div class="showlink2 whitespacelink"><a href="#" class="link"><i class="fas fa-plus margin"></i> ADD TO WATCHLIST </a></div>
                                </div>
                            </div>
                        </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
            
            <!--Start Popular Movies -->
            <div class="block1">
                <div class="headings">Popular Movies</div>
                <div class="maintray">

                <?php  
                    $sql1 = "SELECT * FROM newcontent LIMIT 8" ;
                    $result1 = $conn->query($sql1);
                    if($result1->num_rows > 0)
                    {
                        while($row = $result1->fetch_assoc())
                        {
                    ?>
                        <div class="mainitem">
                            <div class="mainimage">
                                <a href="image.php?id=<?php echo $row['content_id']; ?>"><img src="images/movie/<?php echo $row['content_poster_p']; ?>" width="100%" height="100%" alt=""></a>
                            </div>
                            <div class="maincontent">
                                <div>
                                <div class="showname"><?php echo $row['content_name']; ?></div>
                                <div class="showtime"><?php if($row['content_hour'] != '0'){echo $row['content_hour'];?> hr <?php echo $row['content_min'];?> min,<?php }
                                else{echo $row['content_min'];?> min <?php echo $row['content_sec'];?> s,<?php } ?> <span class="capilize"><?php echo $row['content_theme']; ?>,<?php echo $row['content_lang']; ?>,<br><?php echo $row['content_year']; ?></span></div>
                                <div class="showdesc"><?php echo $row['content_desc']; ?></div>
                                <div class="showlink1 whitespacelink">
                                    <?php
                                    if($row['content_type'] == 'movie')
                                    {
                                    ?>
                                    <a href="video.php?id=<?php echo $row['content_id']; ?>" class="link"><i class="fas fa-play margin"></i> WATCH MOVIE </a>
                                    <?php }?>
                                </div>
                                <div class="showlink2 whitespacelink"><a href="#" class="link"><i class="fas fa-plus margin"></i> ADD TO WATCHLIST </a></div>
                                </div>
                            </div>
                        </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>

            <!--Start Female Leads -->
            <div class="block1">
                <div class="headings">Female Leads</div>
                <div class="maintray">

                <?php  
                    $sql1 = "SELECT * FROM newcontent LIMIT 8" ;
                    $result1 = $conn->query($sql1);
                    if($result1->num_rows > 0)
                    {
                        while($row = $result1->fetch_assoc())
                        {
                    ?>
                        <div class="mainitem">
                            <div class="mainimage">
                                <a href="image.php?id=<?php echo $row['content_id']; ?>"><img src="images/movie/<?php echo $row['content_poster_p']; ?>" width="100%" height="100%" alt=""></a>
                            </div>
                            <div class="maincontent">
                                <div>
                                <div class="showname"><?php echo $row['content_name']; ?></div>
                                <div class="showtime"><?php if($row['content_hour'] != '0'){echo $row['content_hour'];?> hr <?php echo $row['content_min'];?> min,<?php }
                                else{echo $row['content_min'];?> min <?php echo $row['content_sec'];?> s,<?php } ?> <span class="capilize"><?php echo $row['content_theme']; ?>,<?php echo $row['content_lang']; ?>,<br><?php echo $row['content_year']; ?></span></div>
                                <div class="showdesc"><?php echo $row['content_desc']; ?></div>
                                <div class="showlink1 whitespacelink">
                                    <?php
                                    if($row['content_type'] == 'movie')
                                    {
                                    ?>
                                    <a href="video.php?id=<?php echo $row['content_id']; ?>" class="link"><i class="fas fa-play margin"></i> WATCH MOVIE </a>
                                    <?php }?>
                                </div>
                                <div class="showlink2 whitespacelink"><a href="#" class="link"><i class="fas fa-plus margin"></i> ADD TO WATCHLIST </a></div>
                                </div>
                            </div>
                        </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>

            <!--Start New on Netflix -->
            <div class="block1">
                <div class="headings">New on Netflix</div>
                <div class="maintray">

                <?php  
                    $sql1 = "SELECT * FROM newcontent LIMIT 8" ;
                    $result1 = $conn->query($sql1);
                    if($result1->num_rows > 0)
                    {
                        while($row = $result1->fetch_assoc())
                        {
                    ?>
                        <div class="mainitem">
                            <div class="mainimage">
                                <a href="image.php?id=<?php echo $row['content_id']; ?>"><img src="images/movie/<?php echo $row['content_poster_p']; ?>" width="100%" height="100%" alt=""></a>
                            </div>
                            <div class="maincontent">
                                <div>
                                <div class="showname"><?php echo $row['content_name']; ?></div>
                                <div class="showtime"><?php if($row['content_hour'] != '0'){echo $row['content_hour'];?> hr <?php echo $row['content_min'];?> min,<?php }
                                else{echo $row['content_min'];?> min <?php echo $row['content_sec'];?> s,<?php } ?> <span class="capilize"><?php echo $row['content_theme']; ?>,<?php echo $row['content_lang']; ?>,<br><?php echo $row['content_year']; ?></span></div>
                                <div class="showdesc"><?php echo $row['content_desc']; ?></div>
                                <div class="showlink1 whitespacelink">
                                    <?php
                                    if($row['content_type'] == 'movie')
                                    {
                                    ?>
                                    <a href="video.php?id=<?php echo $row['content_id']; ?>" class="link"><i class="fas fa-play margin"></i> WATCH MOVIE </a>
                                    <?php }?>
                                </div>
                                <div class="showlink2 whitespacelink"><a href="#" class="link"><i class="fas fa-plus margin"></i> ADD TO WATCHLIST </a></div>
                                </div>
                            </div>
                        </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>

            <!--Start Multiplex Movies -->
            <div class="block1">
                <div class="headings">Multiflex Movies</div>
                <div class="maintray">

                <?php  
                    $sql1 = "SELECT * FROM newcontent LIMIT 8" ;
                    $result1 = $conn->query($sql1);
                    if($result1->num_rows > 0)
                    {
                        while($row = $result1->fetch_assoc())
                        {
                    ?>
                        <div class="mainitem">
                            <div class="mainimage">
                                <a href="image.php?id=<?php echo $row['content_id']; ?>"><img src="images/movie/<?php echo $row['content_poster_p']; ?>" width="100%" height="100%" alt=""></a>
                            </div>
                            <div class="maincontent">
                                <div>
                                <div class="showname"><?php echo $row['content_name']; ?></div>
                                <div class="showtime"><?php if($row['content_hour'] != '0'){echo $row['content_hour'];?> hr <?php echo $row['content_min'];?> min,<?php }
                                else{echo $row['content_min'];?> min <?php echo $row['content_sec'];?> s,<?php } ?> <span class="capilize"><?php echo $row['content_theme']; ?>,<?php echo $row['content_lang']; ?>,<br><?php echo $row['content_year']; ?></span></div>
                                <div class="showdesc"><?php echo $row['content_desc']; ?></div>
                                <div class="showlink1 whitespacelink">
                                    <?php
                                    if($row['content_type'] == 'movie')
                                    {
                                    ?>
                                    <a href="video.php?id=<?php echo $row['content_id']; ?>" class="link"><i class="fas fa-play margin"></i> WATCH MOVIE </a>
                                    <?php }?>
                                </div>
                                <div class="showlink2 whitespacelink"><a href="#" class="link"><i class="fas fa-plus margin"></i> ADD TO WATCHLIST </a></div>
                                </div>
                            </div>
                        </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>

            <!--Start Latest TV Shows -->
            <div class="block1">
                <div class="headings">Latesh TV Shows</div>
                <div class="maintray">

                <?php  
                    $sql1 = "SELECT * FROM newcontent LIMIT 8" ;
                    $result1 = $conn->query($sql1);
                    if($result1->num_rows > 0)
                    {
                        while($row = $result1->fetch_assoc())
                        {
                    ?>
                        <div class="mainitem">
                            <div class="mainimage">
                                <a href="image.php?id=<?php echo $row['content_id']; ?>"><img src="images/movie/<?php echo $row['content_poster_p']; ?>" width="100%" height="100%" alt=""></a>
                            </div>
                            <div class="maincontent">
                                <div>
                                <div class="showname"><?php echo $row['content_name']; ?></div>
                                <div class="showtime"><?php if($row['content_hour'] != '0'){echo $row['content_hour'];?> hr <?php echo $row['content_min'];?> min,<?php }
                                else{echo $row['content_min'];?> min <?php echo $row['content_sec'];?> s,<?php } ?> <span class="capilize"><?php echo $row['content_theme']; ?>,<?php echo $row['content_lang']; ?>,<br><?php echo $row['content_year']; ?></span></div>
                                <div class="showdesc"><?php echo $row['content_desc']; ?></div>
                                <div class="showlink1 whitespacelink">
                                    <?php
                                    if($row['content_type'] == 'movie')
                                    {
                                    ?>
                                    <a href="video.php?id=<?php echo $row['content_id']; ?>" class="link"><i class="fas fa-play margin"></i> WATCH MOVIE </a>
                                    <?php }?>
                                </div>
                                <div class="showlink2 whitespacelink"><a href="#" class="link"><i class="fas fa-plus margin"></i> ADD TO WATCHLIST </a></div>
                                </div>
                            </div>
                        </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>

            <!--Start Popular in Reality -->
            <div class="block1">
                <div class="headings">Popular In Reality</div>
                <div class="maintray">

                <?php  
                    $sql1 = "SELECT * FROM newcontent LIMIT 8" ;
                    $result1 = $conn->query($sql1);
                    if($result1->num_rows > 0)
                    {
                        while($row = $result1->fetch_assoc())
                        {
                    ?>
                        <div class="mainitem">
                            <div class="mainimage">
                                <a href="image.php?id=<?php echo $row['content_id']; ?>"><img src="images/movie/<?php echo $row['content_poster_p']; ?>" width="100%" height="100%" alt=""></a>
                            </div>
                            <div class="maincontent">
                                <div>
                                <div class="showname"><?php echo $row['content_name']; ?></div>
                                <div class="showtime"><?php if($row['content_hour'] != '0'){echo $row['content_hour'];?> hr <?php echo $row['content_min'];?> min,<?php }
                                else{echo $row['content_min'];?> min <?php echo $row['content_sec'];?> s,<?php } ?> <span class="capilize"><?php echo $row['content_theme']; ?>,<?php echo $row['content_lang']; ?>,<br><?php echo $row['content_year']; ?></span></div>
                                <div class="showdesc"><?php echo $row['content_desc']; ?></div>
                                <div class="showlink1 whitespacelink">
                                    <?php
                                    if($row['content_type'] == 'movie')
                                    {
                                    ?>
                                    <a href="video.php?id=<?php echo $row['content_id']; ?>" class="link"><i class="fas fa-play margin"></i> WATCH MOVIE </a>
                                    <?php }?>
                                </div>
                                <div class="showlink2 whitespacelink"><a href="#" class="link"><i class="fas fa-plus margin"></i> ADD TO WATCHLIST </a></div>
                                </div>
                            </div>
                        </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>

            <!--Start Popular in Drama -->
            <div class="block1">
                <div class="headings">Popular In Drama</div>
                <div class="maintray">

                <?php  
                    $sql1 = "SELECT * FROM newcontent LIMIT 8" ;
                    $result1 = $conn->query($sql1);
                    if($result1->num_rows > 0)
                    {
                        while($row = $result1->fetch_assoc())
                        {
                    ?>
                        <div class="mainitem">
                            <div class="mainimage">
                                <a href="image.php?id=<?php echo $row['content_id']; ?>"><img src="images/movie/<?php echo $row['content_poster_p']; ?>" width="100%" height="100%" alt=""></a>
                            </div>
                            <div class="maincontent">
                                <div>
                                <div class="showname"><?php echo $row['content_name']; ?></div>
                                <div class="showtime"><?php if($row['content_hour'] != '0'){echo $row['content_hour'];?> hr <?php echo $row['content_min'];?> min,<?php }
                                else{echo $row['content_min'];?> min <?php echo $row['content_sec'];?> s,<?php } ?> <span class="capilize"><?php echo $row['content_theme']; ?>,<?php echo $row['content_lang']; ?>,<br><?php echo $row['content_year']; ?></span></div>
                                <div class="showdesc"><?php echo $row['content_desc']; ?></div>
                                <div class="showlink1 whitespacelink">
                                    <?php
                                    if($row['content_type'] == 'movie')
                                    {
                                    ?>
                                    <a href="video.php?id=<?php echo $row['content_id']; ?>" class="link"><i class="fas fa-play margin"></i> WATCH MOVIE </a>
                                    <?php }?>
                                </div>
                                <div class="showlink2 whitespacelink"><a href="#" class="link"><i class="fas fa-plus margin"></i> ADD TO WATCHLIST </a></div>
                                </div>
                            </div>
                        </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>

            <!--Start Popular in Crime -->
            <div class="block1">
                <div class="headings">Popular In Crime</div>
                <div class="maintray">

                <?php  
                    $sql1 = "SELECT * FROM newcontent LIMIT 8" ;
                    $result1 = $conn->query($sql1);
                    if($result1->num_rows > 0)
                    {
                        while($row = $result1->fetch_assoc())
                        {
                    ?>
                        <div class="mainitem">
                            <div class="mainimage">
                                <a href="image.php?id=<?php echo $row['content_id']; ?>"><img src="images/movie/<?php echo $row['content_poster_p']; ?>" width="100%" height="100%" alt=""></a>
                            </div>
                            <div class="maincontent">
                                <div>
                                <div class="showname"><?php echo $row['content_name']; ?></div>
                                <div class="showtime"><?php if($row['content_hour'] != '0'){echo $row['content_hour'];?> hr <?php echo $row['content_min'];?> min,<?php }
                                else{echo $row['content_min'];?> min <?php echo $row['content_sec'];?> s,<?php } ?> <span class="capilize"><?php echo $row['content_theme']; ?>,<?php echo $row['content_lang']; ?>,<br><?php echo $row['content_year']; ?></span></div>
                                <div class="showdesc"><?php echo $row['content_desc']; ?></div>
                                <div class="showlink1 whitespacelink">
                                    <?php
                                    if($row['content_type'] == 'movie')
                                    {
                                    ?>
                                    <a href="video.php?id=<?php echo $row['content_id']; ?>" class="link"><i class="fas fa-play margin"></i> WATCH MOVIE </a>
                                    <?php }?>
                                </div>
                                <div class="showlink2 whitespacelink"><a href="#" class="link"><i class="fas fa-plus margin"></i> ADD TO WATCHLIST </a></div>
                                </div>
                            </div>
                        </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>

            <!--Start Popular in Mythology -->
            <div class="block1">
                <div class="headings">Popular In Mythology</div>
                <div class="maintray">

                <?php  
                    $sql1 = "SELECT * FROM newcontent LIMIT 8" ;
                    $result1 = $conn->query($sql1);
                    if($result1->num_rows > 0)
                    {
                        while($row = $result1->fetch_assoc())
                        {
                    ?>
                        <div class="mainitem">
                            <div class="mainimage">
                                <a href="image.php?id=<?php echo $row['content_id']; ?>"><img src="images/movie/<?php echo $row['content_poster_p']; ?>" width="100%" height="100%" alt=""></a>
                            </div>
                            <div class="maincontent">
                                <div>
                                <div class="showname"><?php echo $row['content_name']; ?></div>
                                <div class="showtime"><?php if($row['content_hour'] != '0'){echo $row['content_hour'];?> hr <?php echo $row['content_min'];?> min,<?php }
                                else{echo $row['content_min'];?> min <?php echo $row['content_sec'];?> s,<?php } ?> <span class="capilize"><?php echo $row['content_theme']; ?>,<?php echo $row['content_lang']; ?>,<br><?php echo $row['content_year']; ?></span></div>
                                <div class="showdesc"><?php echo $row['content_desc']; ?></div>
                                <div class="showlink1 whitespacelink">
                                    <?php
                                    if($row['content_type'] == 'movie')
                                    {
                                    ?>
                                    <a href="video.php?id=<?php echo $row['content_id']; ?>" class="link"><i class="fas fa-play margin"></i> WATCH MOVIE </a>
                                    <?php }?>
                                </div>
                                <div class="showlink2 whitespacelink"><a href="#" class="link"><i class="fas fa-plus margin"></i> ADD TO WATCHLIST </a></div>
                                </div>
                            </div>
                        </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>

            <!--Start Popular in Action -->
            <div class="block1">
                <div class="headings">Popular In Action</div>
                <div class="maintray">

                <?php  
                    $sql1 = "SELECT * FROM newcontent LIMIT 8" ;
                    $result1 = $conn->query($sql1);
                    if($result1->num_rows > 0)
                    {
                        while($row = $result1->fetch_assoc())
                        {
                    ?>
                        <div class="mainitem">
                            <div class="mainimage">
                                <a href="image.php?id=<?php echo $row['content_id']; ?>"><img src="images/movie/<?php echo $row['content_poster_p']; ?>" width="100%" height="100%" alt=""></a>
                            </div>
                            <div class="maincontent">
                                <div>
                                <div class="showname"><?php echo $row['content_name']; ?></div>
                                <div class="showtime"><?php if($row['content_hour'] != '0'){echo $row['content_hour'];?> hr <?php echo $row['content_min'];?> min,<?php }
                                else{echo $row['content_min'];?> min <?php echo $row['content_sec'];?> s,<?php } ?> <span class="capilize"><?php echo $row['content_theme']; ?>,<?php echo $row['content_lang']; ?>,<br><?php echo $row['content_year']; ?></span></div>
                                <div class="showdesc"><?php echo $row['content_desc']; ?></div>
                                <div class="showlink1 whitespacelink">
                                    <?php
                                    if($row['content_type'] == 'movie')
                                    {
                                    ?>
                                    <a href="video.php?id=<?php echo $row['content_id']; ?>" class="link"><i class="fas fa-play margin"></i> WATCH MOVIE </a>
                                    <?php }?>
                                </div>
                                <div class="showlink2 whitespacelink"><a href="#" class="link"><i class="fas fa-plus margin"></i> ADD TO WATCHLIST </a></div>
                                </div>
                            </div>
                        </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>

            <!--Start Popular in thriller -->
            <div class="block1">
                <div class="headings">Popular In Thriller</div>
                <div class="maintray">

                <?php  
                    $sql1 = "SELECT * FROM newcontent LIMIT 8" ;
                    $result1 = $conn->query($sql1);
                    if($result1->num_rows > 0)
                    {
                        while($row = $result1->fetch_assoc())
                        {
                    ?>
                        <div class="mainitem">
                            <div class="mainimage">
                                <a href="image.php?id=<?php echo $row['content_id']; ?>"><img src="images/movie/<?php echo $row['content_poster_p']; ?>" width="100%" height="100%" alt=""></a>
                            </div>
                            <div class="maincontent">
                                <div>
                                <div class="showname"><?php echo $row['content_name']; ?></div>
                                <div class="showtime"><?php if($row['content_hour'] != '0'){echo $row['content_hour'];?> hr <?php echo $row['content_min'];?> min,<?php }
                                else{echo $row['content_min'];?> min <?php echo $row['content_sec'];?> s,<?php } ?> <span class="capilize"><?php echo $row['content_theme']; ?>,<?php echo $row['content_lang']; ?>,<br><?php echo $row['content_year']; ?></span></div>
                                <div class="showdesc"><?php echo $row['content_desc']; ?></div>
                                <div class="showlink1 whitespacelink">
                                    <?php
                                    if($row['content_type'] == 'movie')
                                    {
                                    ?>
                                    <a href="video.php?id=<?php echo $row['content_id']; ?>" class="link"><i class="fas fa-play margin"></i> WATCH MOVIE </a>
                                    <?php }?>
                                </div>
                                <div class="showlink2 whitespacelink"><a href="#" class="link"><i class="fas fa-plus margin"></i> ADD TO WATCHLIST </a></div>
                                </div>
                            </div>
                        </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>

            <!--Start Popular in comedy -->
            <div class="block1">
                <div class="headings">Popular In Comedy</div>
                <div class="maintray">

                <?php  
                    $sql1 = "SELECT * FROM newcontent LIMIT 8" ;
                    $result1 = $conn->query($sql1);
                    if($result1->num_rows > 0)
                    {
                        while($row = $result1->fetch_assoc())
                        {
                    ?>
                        <div class="mainitem">
                            <div class="mainimage">
                                <a href="image.php?id=<?php echo $row['content_id']; ?>"><img src="images/movie/<?php echo $row['content_poster_p']; ?>" width="100%" height="100%" alt=""></a>
                            </div>
                            <div class="maincontent">
                                <div>
                                <div class="showname"><?php echo $row['content_name']; ?></div>
                                <div class="showtime"><?php if($row['content_hour'] != '0'){echo $row['content_hour'];?> hr <?php echo $row['content_min'];?> min,<?php }
                                else{echo $row['content_min'];?> min <?php echo $row['content_sec'];?> s,<?php } ?> <span class="capilize"><?php echo $row['content_theme']; ?>,<?php echo $row['content_lang']; ?>,<br><?php echo $row['content_year']; ?></span></div>
                                <div class="showdesc"><?php echo $row['content_desc']; ?></div>
                                <div class="showlink1 whitespacelink">
                                    <?php
                                    if($row['content_type'] == 'movie')
                                    {
                                    ?>
                                    <a href="video.php?id=<?php echo $row['content_id']; ?>" class="link"><i class="fas fa-play margin"></i> WATCH MOVIE </a>
                                    <?php }?>
                                </div>
                                <div class="showlink2 whitespacelink"><a href="#" class="link"><i class="fas fa-plus margin"></i> ADD TO WATCHLIST </a></div>
                                </div>
                            </div>
                        </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>

            <!--Start Popular in family -->
            <div class="block1">
                <div class="headings">Popular In Family</div>
                <div class="maintray">

                <?php  
                    $sql1 = "SELECT * FROM newcontent LIMIT 8" ;
                    $result1 = $conn->query($sql1);
                    if($result1->num_rows > 0)
                    {
                        while($row = $result1->fetch_assoc())
                        {
                    ?>
                        <div class="mainitem">
                            <div class="mainimage">
                                <a href="image.php?id=<?php echo $row['content_id']; ?>"><img src="images/movie/<?php echo $row['content_poster_p']; ?>" width="100%" height="100%" alt=""></a>
                            </div>
                            <div class="maincontent">
                                <div>
                                <div class="showname"><?php echo $row['content_name']; ?></div>
                                <div class="showtime"><?php if($row['content_hour'] != '0'){echo $row['content_hour'];?> hr <?php echo $row['content_min'];?> min,<?php }
                                else{echo $row['content_min'];?> min <?php echo $row['content_sec'];?> s,<?php } ?> <span class="capilize"><?php echo $row['content_theme']; ?>,<?php echo $row['content_lang']; ?>,<br><?php echo $row['content_year']; ?></span></div>
                                <div class="showdesc"><?php echo $row['content_desc']; ?></div>
                                <div class="showlink1 whitespacelink">
                                    <?php
                                    if($row['content_type'] == 'movie')
                                    {
                                    ?>
                                    <a href="video.php?id=<?php echo $row['content_id']; ?>" class="link"><i class="fas fa-play margin"></i> WATCH MOVIE </a>
                                    <?php }?>
                                </div>
                                <div class="showlink2 whitespacelink"><a href="#" class="link"><i class="fas fa-plus margin"></i> ADD TO WATCHLIST </a></div>
                                </div>
                            </div>
                        </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>

            <!--Start Popular in crime -->
            <div class="block1">
                <div class="headings">Popular In Crime</div>
                <div class="maintray">

                <?php  
                    $sql1 = "SELECT * FROM newcontent LIMIT 8" ;
                    $result1 = $conn->query($sql1);
                    if($result1->num_rows > 0)
                    {
                        while($row = $result1->fetch_assoc())
                        {
                    ?>
                        <div class="mainitem">
                            <div class="mainimage">
                                <a href="image.php?id=<?php echo $row['content_id']; ?>"><img src="images/movie/<?php echo $row['content_poster_p']; ?>" width="100%" height="100%" alt=""></a>
                            </div>
                            <div class="maincontent">
                                <div>
                                <div class="showname"><?php echo $row['content_name']; ?></div>
                                <div class="showtime"><?php if($row['content_hour'] != '0'){echo $row['content_hour'];?> hr <?php echo $row['content_min'];?> min,<?php }
                                else{echo $row['content_min'];?> min <?php echo $row['content_sec'];?> s,<?php } ?> <span class="capilize"><?php echo $row['content_theme']; ?>,<?php echo $row['content_lang']; ?>,<br><?php echo $row['content_year']; ?></span></div>
                                <div class="showdesc"><?php echo $row['content_desc']; ?></div>
                                <div class="showlink1 whitespacelink">
                                    <?php
                                    if($row['content_type'] == 'movie')
                                    {
                                    ?>
                                    <a href="video.php?id=<?php echo $row['content_id']; ?>" class="link"><i class="fas fa-play margin"></i> WATCH MOVIE </a>
                                    <?php }?>
                                </div>
                                <div class="showlink2 whitespacelink"><a href="#" class="link"><i class="fas fa-plus margin"></i> ADD TO WATCHLIST </a></div>
                                </div>
                            </div>
                        </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
            
            <!--Start Popular in biopic -->
            <div class="block1">
                <div class="headings">Popular In Biopic</div>
                <div class="maintray">

                <?php  
                    $sql1 = "SELECT * FROM newcontent LIMIT 8" ;
                    $result1 = $conn->query($sql1);
                    if($result1->num_rows > 0)
                    {
                        while($row = $result1->fetch_assoc())
                        {
                    ?>
                        <div class="mainitem">
                            <div class="mainimage">
                                <a href="image.php?id=<?php echo $row['content_id']; ?>"><img src="images/movie/<?php echo $row['content_poster_p']; ?>" width="100%" height="100%" alt=""></a>
                            </div>
                            <div class="maincontent">
                                <div>
                                <div class="showname"><?php echo $row['content_name']; ?></div>
                                <div class="showtime"><?php if($row['content_hour'] != '0'){echo $row['content_hour'];?> hr <?php echo $row['content_min'];?> min,<?php }
                                else{echo $row['content_min'];?> min <?php echo $row['content_sec'];?> s,<?php } ?> <span class="capilize"><?php echo $row['content_theme']; ?>,<?php echo $row['content_lang']; ?>,<br><?php echo $row['content_year']; ?></span></div>
                                <div class="showdesc"><?php echo $row['content_desc']; ?></div>
                                <div class="showlink1 whitespacelink">
                                    <?php
                                    if($row['content_type'] == 'movie')
                                    {
                                    ?>
                                    <a href="video.php?id=<?php echo $row['content_id']; ?>" class="link"><i class="fas fa-play margin"></i> WATCH MOVIE </a>
                                    <?php }?>
                                </div>
                                <div class="showlink2 whitespacelink"><a href="#" class="link"><i class="fas fa-plus margin"></i> ADD TO WATCHLIST </a></div>
                                </div>
                            </div>
                        </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
            
            <!--Start Popular in Documentary -->
            <div class="block1">
                <div class="headings">Popular In Documentary</div>
                <div class="maintray">

                <?php  
                    $sql1 = "SELECT * FROM newcontent LIMIT 8" ;
                    $result1 = $conn->query($sql1);
                    if($result1->num_rows > 0)
                    {
                        while($row = $result1->fetch_assoc())
                        {
                    ?>
                        <div class="mainitem">
                            <div class="mainimage">
                                <a href="image.php?id=<?php echo $row['content_id']; ?>"><img src="images/movie/<?php echo $row['content_poster_p']; ?>" width="100%" height="100%" alt=""></a>
                            </div>
                            <div class="maincontent">
                                <div>
                                <div class="showname"><?php echo $row['content_name']; ?></div>
                                <div class="showtime"><?php if($row['content_hour'] != '0'){echo $row['content_hour'];?> hr <?php echo $row['content_min'];?> min,<?php }
                                else{echo $row['content_min'];?> min <?php echo $row['content_sec'];?> s,<?php } ?> <span class="capilize"><?php echo $row['content_theme']; ?>,<?php echo $row['content_lang']; ?>,<br><?php echo $row['content_year']; ?></span></div>
                                <div class="showdesc"><?php echo $row['content_desc']; ?></div>
                                <div class="showlink1 whitespacelink">
                                    <?php
                                    if($row['content_type'] == 'movie')
                                    {
                                    ?>
                                    <a href="video.php?id=<?php echo $row['content_id']; ?>" class="link"><i class="fas fa-play margin"></i> WATCH MOVIE </a>
                                    <?php }?>
                                </div>
                                <div class="showlink2 whitespacelink"><a href="#" class="link"><i class="fas fa-plus margin"></i> ADD TO WATCHLIST </a></div>
                                </div>
                            </div>
                        </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>

            <!--Start Popular in Science -->
            <div class="block1">
                <div class="headings">Popular In Science</div>
                <div class="maintray">

                <?php  
                    $sql1 = "SELECT * FROM newcontent LIMIT 8" ;
                    $result1 = $conn->query($sql1);
                    if($result1->num_rows > 0)
                    {
                        while($row = $result1->fetch_assoc())
                        {
                    ?>
                        <div class="mainitem">
                            <div class="mainimage">
                                <a href="image.php?id=<?php echo $row['content_id']; ?>"><img src="images/movie/<?php echo $row['content_poster_p']; ?>" width="100%" height="100%" alt=""></a>
                            </div>
                            <div class="maincontent">
                                <div>
                                <div class="showname"><?php echo $row['content_name']; ?></div>
                                <div class="showtime"><?php if($row['content_hour'] != '0'){echo $row['content_hour'];?> hr <?php echo $row['content_min'];?> min,<?php }
                                else{echo $row['content_min'];?> min <?php echo $row['content_sec'];?> s,<?php } ?> <span class="capilize"><?php echo $row['content_theme']; ?>,<?php echo $row['content_lang']; ?>,<br><?php echo $row['content_year']; ?></span></div>
                                <div class="showdesc"><?php echo $row['content_desc']; ?></div>
                                <div class="showlink1 whitespacelink">
                                    <?php
                                    if($row['content_type'] == 'movie')
                                    {
                                    ?>
                                    <a href="video.php?id=<?php echo $row['content_id']; ?>" class="link"><i class="fas fa-play margin"></i> WATCH MOVIE </a>
                                    <?php }?>
                                </div>
                                <div class="showlink2 whitespacelink"><a href="#" class="link"><i class="fas fa-plus margin"></i> ADD TO WATCHLIST </a></div>
                                </div>
                            </div>
                        </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>

            <!--Start Popular in Wildlife -->
            <div class="block1">
                <div class="headings">Popular In Wildlife</div>
                <div class="maintray">

                <?php  
                    $sql1 = "SELECT * FROM newcontent LIMIT 8" ;
                    $result1 = $conn->query($sql1);
                    if($result1->num_rows > 0)
                    {
                        while($row = $result1->fetch_assoc())
                        {
                    ?>
                        <div class="mainitem">
                            <div class="mainimage">
                                <a href="image.php?id=<?php echo $row['content_id']; ?>"><img src="images/movie/<?php echo $row['content_poster_p']; ?>" width="100%" height="100%" alt=""></a>
                            </div>
                            <div class="maincontent">
                                <div>
                                <div class="showname"><?php echo $row['content_name']; ?></div>
                                <div class="showtime"><?php if($row['content_hour'] != '0'){echo $row['content_hour'];?> hr <?php echo $row['content_min'];?> min,<?php }
                                else{echo $row['content_min'];?> min <?php echo $row['content_sec'];?> s,<?php } ?> <span class="capilize"><?php echo $row['content_theme']; ?>,<?php echo $row['content_lang']; ?>,<br><?php echo $row['content_year']; ?></span></div>
                                <div class="showdesc"><?php echo $row['content_desc']; ?></div>
                                <div class="showlink1 whitespacelink">
                                    <?php
                                    if($row['content_type'] == 'movie')
                                    {
                                    ?>
                                    <a href="video.php?id=<?php echo $row['content_id']; ?>" class="link"><i class="fas fa-play margin"></i> WATCH MOVIE </a>
                                    <?php }?>
                                </div>
                                <div class="showlink2 whitespacelink"><a href="#" class="link"><i class="fas fa-plus margin"></i> ADD TO WATCHLIST </a></div>
                                </div>
                            </div>
                        </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </section>
    <?php
    }
?>

<?php 
    include('main/footer.php');
?>