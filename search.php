<?php
  include('./dbconnection.php');
  ?>
  
  <?php
    include('./main/header.php');
  ?>
  
  <?php
    //include('./main/carousel.php');
  ?>
 
  
    
    <section class="banner">
      <section class="traysp">

      <?php
          $search = $_REQUEST['search'];
          echo "<script> console.log('$search')</script>";
          $sql1 = "SELECT * FROM newcontent WHERE content_id LIKE '%$search%'";
          $sql2 = "SELECT * FROM newcontent WHERE content_name LIKE '%$search%'";
          $sql3 = "SELECT * FROM newcontent WHERE content_desc LIKE '%$search%'";
          $sql4 = "SELECT * FROM newcontent WHERE content_type LIKE '%$search%'";
          $sql5 = "SELECT * FROM newcontent WHERE content_status LIKE '%$search%'";
          $sql6 = "SELECT * FROM newcontent WHERE content_price LIKE '%$search%'";
          $sql7 = "SELECT * FROM newcontent WHERE content_theme LIKE '%$search%'";
          $sql8 = "SELECT * FROM newcontent WHERE content_year LIKE '%$search%'";
          $sql9 = "SELECT * FROM newcontent WHERE content_lang LIKE '%$search%'";  
          //$sql1 = "SELECT * FROM newcontent WHERE content_id LIKE '%$search%'";
          $result1 = $conn->query($sql1);
          $result2 = $conn->query($sql2);
          $result3 = $conn->query($sql3);
          $result4 = $conn->query($sql4);
          $result5 = $conn->query($sql5);
          $result6 = $conn->query($sql6);
          $result7 = $conn->query($sql7);
          $result8 = $conn->query($sql8);
          $result9 = $conn->query($sql9);
          /* $result1 = $conn->query($sql1); */
          if(($result1 == TRUE) || ($result2 == TRUE) || ($result3 == TRUE) || ($result4 == TRUE) || 
          ($result5 == TRUE) || ($result6 == TRUE) || ($result7 == TRUE) || ($result8 == TRUE) || ($result9 == TRUE))
          {
            ?>
            <div class="block1">
              <?php
                if(($result1->num_rows > 0) || ($result2->num_rows > 0) || ($result3->num_rows > 0) || ($result4->num_rows > 0) ||
                ($result5->num_rows > 0) || ($result6->num_rows > 0) || ($result7->num_rows > 0) || ($result8->num_rows > 0) || ($result9->num_rows > 0))
                {
              ?>
                  <div class="headingsp">Showing all result for <i class="opacity"><?php echo $search;?></i></div>
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
                  <?php
                  while($row = $result2->fetch_assoc())
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
                  <?php
                  while($row = $result3->fetch_assoc())
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
                  <?php
                  while($row = $result4->fetch_assoc())
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
                  <?php
                  while($row = $result5->fetch_assoc())
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
                  <?php
                  while($row = $result6->fetch_assoc())
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
                  <?php
                  while($row = $result7->fetch_assoc())
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
                  <?php
                  while($row = $result8->fetch_assoc())
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
                  <?php
                  while($row = $result9->fetch_assoc())
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
                        else{echo $row['content_min'];?> min <?php echo $row['content_sec'];?> s,<?php } ?> <span class="capilize"><?php echo $row['content_theme']; ?>, <?php echo $row['content_lang']; ?>,<br><?php echo $row['content_year']; ?></span></div>
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
        <!-- <div class="block1">
          <div class="headingsp">Showing all result for <i class="opacity">Search</i></div>
          <div class="maintrayp">
            <div class="mainitemp">
              <div class="mainimage">
                <a href="#"><img src="images/Avenger INFI portrait.jpg" width="100%" height="100%" alt=""></a>
              </div>
              <div class="maincontent">
                <div>
                  <div class="showname">Show Name</div>
                <div class="showtime">1 hr 25 min, Documentary, Hindi, Marathi, Tamil, Kannada,<br>2021</div>
                <div class="showdesc">Hi This movie Belogs to New Type</div>
                <div class="showlink1 whitespacelink"><a href="#" class="link"><i class="fas fa-play margin"></i> WATCH MOVIE </a></div>
                <div class="showlink2 whitespacelink"><a href="#" class="link"><i class="fas fa-plus margin"></i> ADD TO WATCHLIST </a></div>
                </div>
              </div>
            </div>
            <div class="mainitemp">
              <div class="mainimage">
                <a href="#"><img src="images/Avenger INFI portrait.jpg" width="100%" height="100%" alt=""></a>
              </div>
              <div class="maincontent">
                <div>
                  <div class="showname">Show Name</div>
                <div class="showtime">1 hr 25 min, Documentary, Hindi, Marathi, Tamil, Kannada,<br>2021</div>
                <div class="showdesc">Hi This movie Belogs to New Type</div>
                <div class="showlink1 whitespacelink"><a href="#" class="link"><i class="fas fa-play margin"></i> WATCH MOVIE </a></div>
                <div class="showlink2 whitespacelink"><a href="#" class="link"><i class="fas fa-plus margin"></i> ADD TO WATCHLIST </a></div>
                </div>
              </div>
            </div>
            <div class="mainitemp">
              <div class="mainimage">
                <a href="#"><img src="images/Avenger INFI portrait.jpg" width="100%" height="100%" alt=""></a>
              </div>
              <div class="maincontent">
                <div>
                  <div class="showname">Show Name</div>
                <div class="showtime">1 hr 25 min, Documentary, Hindi, Marathi, Tamil, Kannada,<br>2021</div>
                <div class="showdesc">Hi This movie Belogs to New Type</div>
                <div class="showlink1 whitespacelink"><a href="#" class="link"><i class="fas fa-play margin"></i> WATCH MOVIE </a></div>
                <div class="showlink2 whitespacelink"><a href="#" class="link"><i class="fas fa-plus margin"></i> ADD TO WATCHLIST </a></div>
                </div>
              </div>
            </div>
            <div class="mainitemp">
              <div class="mainimage">
                <a href="#"><img src="images/Avenger INFI portrait.jpg" width="100%" height="100%" alt=""></a>
              </div>
              <div class="maincontent">
                <div>
                  <div class="showname">Show Name</div>
                <div class="showtime">1 hr 25 min, Documentary, Hindi, Marathi, Tamil, Kannada,<br>2021</div>
                <div class="showdesc">Hi This movie Belogs to New Type</div>
                <div class="showlink1 whitespacelink"><a href="#" class="link"><i class="fas fa-play margin"></i> WATCH MOVIE </a></div>
                <div class="showlink2 whitespacelink"><a href="#" class="link"><i class="fas fa-plus margin"></i> ADD TO WATCHLIST </a></div>
                </div>
              </div>
            </div>
            <div class="mainitemp">
              <div class="mainimage">
                <a href="#"><img src="images/Avenger INFI portrait.jpg" width="100%" height="100%" alt=""></a>
              </div>
              <div class="maincontent">
                <div>
                  <div class="showname">Show Name</div>
                <div class="showtime">1 hr 25 min, Documentary, Hindi, Marathi, Tamil, Kannada,<br>2021</div>
                <div class="showdesc">Hi This movie Belogs to New Type</div>
                <div class="showlink1 whitespacelink"><a href="#" class="link"><i class="fas fa-play margin"></i> WATCH MOVIE </a></div>
                <div class="showlink2 whitespacelink"><a href="#" class="link"><i class="fas fa-plus margin"></i> ADD TO WATCHLIST </a></div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="block1">
          <div class="headingsp">Showing all result for <i class="opacity">Search</i></div>
          <div class="maintrayp">
            <div class="mainitemp">
              <div class="mainimage">
                <a href="#"><img src="images/Avenger INFI portrait.jpg" width="100%" height="100%" alt=""></a>
              </div>
              <div class="maincontent">
                <div>
                  <div class="showname">Show Name</div>
                <div class="showtime">1 hr 25 min, Documentary, Hindi, Marathi, Tamil, Kannada,<br>2021</div>
                <div class="showdesc">Hi This movie Belogs to New Type</div>
                <div class="showlink1 whitespacelink"><a href="#" class="link"><i class="fas fa-play margin"></i> WATCH MOVIE </a></div>
                <div class="showlink2 whitespacelink"><a href="#" class="link"><i class="fas fa-plus margin"></i> ADD TO WATCHLIST </a></div>
                </div>
              </div>
            </div>
            <div class="mainitemp">
              <div class="mainimage">
                <a href="#"><img src="images/Avenger INFI portrait.jpg" width="100%" height="100%" alt=""></a>
              </div>
              <div class="maincontent">
                <div>
                  <div class="showname">Show Name</div>
                <div class="showtime">1 hr 25 min, Documentary, Hindi, Marathi, Tamil, Kannada,<br>2021</div>
                <div class="showdesc">Hi This movie Belogs to New Type</div>
                <div class="showlink1 whitespacelink"><a href="#" class="link"><i class="fas fa-play margin"></i> WATCH MOVIE </a></div>
                <div class="showlink2 whitespacelink"><a href="#" class="link"><i class="fas fa-plus margin"></i> ADD TO WATCHLIST </a></div>
                </div>
              </div>
            </div>
            <div class="mainitemp">
              <div class="mainimage">
                <a href="#"><img src="images/Avenger INFI portrait.jpg" width="100%" height="100%" alt=""></a>
              </div>
              <div class="maincontent">
                <div>
                  <div class="showname">Show Name</div>
                <div class="showtime">1 hr 25 min, Documentary, Hindi, Marathi, Tamil, Kannada,<br>2021</div>
                <div class="showdesc">Hi This movie Belogs to New Type</div>
                <div class="showlink1 whitespacelink"><a href="#" class="link"><i class="fas fa-play margin"></i> WATCH MOVIE </a></div>
                <div class="showlink2 whitespacelink"><a href="#" class="link"><i class="fas fa-plus margin"></i> ADD TO WATCHLIST </a></div>
                </div>
              </div>
            </div>
            <div class="mainitemp">
              <div class="mainimage">
                <a href="#"><img src="images/Avenger INFI portrait.jpg" width="100%" height="100%" alt=""></a>
              </div>
              <div class="maincontent">
                <div>
                  <div class="showname">Show Name</div>
                <div class="showtime">1 hr 25 min, Documentary, Hindi, Marathi, Tamil, Kannada,<br>2021</div>
                <div class="showdesc">Hi This movie Belogs to New Type</div>
                <div class="showlink1 whitespacelink"><a href="#" class="link"><i class="fas fa-play margin"></i> WATCH MOVIE </a></div>
                <div class="showlink2 whitespacelink"><a href="#" class="link"><i class="fas fa-plus margin"></i> ADD TO WATCHLIST </a></div>
                </div>
              </div>
            </div>
            <div class="mainitemp">
              <div class="mainimage">
                <a href="#"><img src="images/Avenger INFI portrait.jpg" width="100%" height="100%" alt=""></a>
              </div>
              <div class="maincontent">
                <div>
                  <div class="showname">Show Name</div>
                <div class="showtime">1 hr 25 min, Documentary, Hindi, Marathi, Tamil, Kannada,<br>2021</div>
                <div class="showdesc">Hi This movie Belogs to New Type</div>
                <div class="showlink1 whitespacelink"><a href="#" class="link"><i class="fas fa-play margin"></i> WATCH MOVIE </a></div>
                <div class="showlink2 whitespacelink"><a href="#" class="link"><i class="fas fa-plus margin"></i> ADD TO WATCHLIST </a></div>
                </div>
              </div>
            </div>
          </div>
        </div> -->
      </section>
    </section>
   
  <?php
    include('./main/footer.php');
  ?> 
  