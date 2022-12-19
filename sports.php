<?php
  include('./dbconnection.php');
?>

<?php 
    include('main/header.php');
?>

<?php
  include('./main/carousel.php');
?>

 <!-- Start Parts -->
<section class="trays">
    <!-- Start VIVO IPL-->
    <div class="block1">
        <div class="headings">VIVO IPL</div>
        <div class="maintray">
            <?php
            $sql1 = "SELECT * FROM newcontent WHERE content_theme = 'cricket' AND content_type='sports' LIMIT 6";
            $result1 = $conn->query($sql1);
            if($result1->num_rows > 0)
            {
                while($row = $result1->fetch_assoc())
                {
                ?>
                <div class="mainiteml">
                    <div class="mainimage">
                    <a href="video.php?id=<?php echo $row['content_id']; ?>"><img src="images/movie/<?php echo $row['content_poster_l']; ?>" width="100%" height="100%" alt=""></a>
                    </div>
                    <?php
                    if($row['content_status']=='1')
                    {
                        echo '<div class="mainlive">
                        <span class="live">LIVE</span>
                        </div>';
                    }
                    ?>
                    <div class="maincontent">
                    <div>
                        <div class="showlink1 whitespacelink" style="margin-bottom: 5px;"><a href="video.php?id=<?php echo $row['content_id']; ?>" class="link"><i class="fas fa-play margin"></i> WATCH  </a></div>
                        <div class="showtime"><?php if($row['content_hour'] != '0'){echo $row['content_hour'];?> hr <?php echo $row['content_min'];?> min,<?php }
                        else{echo $row['content_min'];?> min <?php echo $row['content_sec'];?> s,<?php } ?> <span class="capilize"><?php echo $row['content_theme']; ?>,<?php echo $row['content_lang']; ?>,<br><?php echo $row['content_year']; ?></span></div>
                        <div class="showdesc"><?php echo $row['content_desc'];?></div>
                        <div class="showlink1 whitespacelink"></div>
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

    <!-- Start VIVO IPL: The Finals-->
    <div class="block1">
        <div class="headings">VIVO IPL: The Finals</div>
        <div class="maintray">
            <?php
            $sql1 = "SELECT * FROM newcontent LIMIT 6";
            $result1 = $conn->query($sql1);
            if($result1->num_rows > 0)
            {
                while($row = $result1->fetch_assoc())
                {
                ?>
                <div class="mainiteml">
                    <div class="mainimage">
                    <a href="video.php?id=<?php echo $row['content_id']; ?>"><img src="images/movie/<?php echo $row['content_poster_l']; ?>" width="100%" height="100%" alt=""></a>
                    </div>
                    <?php
                    if($row['content_status']=='1')
                    {
                        echo '<div class="mainlive">
                        <span class="live">LIVE</span>
                        </div>';
                    }
                    ?>
                    <div class="maincontent">
                    <div>
                        <div class="showlink1 whitespacelink" style="margin-bottom: 5px;"><a href="video.php?id=<?php echo $row['content_id']; ?>" class="link"><i class="fas fa-play margin"></i> WATCH  </a></div>
                        <div class="showtime"><?php if($row['content_hour'] != '0'){echo $row['content_hour'];?> hr <?php echo $row['content_min'];?> min,<?php }
                        else{echo $row['content_min'];?> min <?php echo $row['content_sec'];?> s,<?php } ?> <span class="capilize"><?php echo $row['content_theme']; ?>,<?php echo $row['content_lang']; ?>,<br><?php echo $row['content_year']; ?></span></div>
                        <div class="showdesc"><?php echo $row['content_desc'];?></div>
                        <div class="showlink1 whitespacelink"></div>
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

    <!-- Start Dream11 IPL 2020: Sixer Merchants-->
    <div class="block1">
        <div class="headings">Dream11 IPL 2020: Sixer Merchants</div>
        <div class="maintray">
            <?php
            $sql1 = "SELECT * FROM newcontent LIMIT 6";
            $result1 = $conn->query($sql1);
            if($result1->num_rows > 0)
            {
                while($row = $result1->fetch_assoc())
                {
                ?>
                <div class="mainiteml">
                    <div class="mainimage">
                    <a href="video.php?id=<?php echo $row['content_id']; ?>"><img src="images/movie/<?php echo $row['content_poster_l']; ?>" width="100%" height="100%" alt=""></a>
                    </div>
                    <?php
                    if($row['content_status']=='1')
                    {
                        echo '<div class="mainlive">
                        <span class="live">LIVE</span>
                        </div>';
                    }
                    ?>
                    <div class="maincontent">
                    <div>
                        <div class="showlink1 whitespacelink" style="margin-bottom: 5px;"><a href="video.php?id=<?php echo $row['content_id']; ?>" class="link"><i class="fas fa-play margin"></i> WATCH  </a></div>
                        <div class="showtime"><?php if($row['content_hour'] != '0'){echo $row['content_hour'];?> hr <?php echo $row['content_min'];?> min,<?php }
                        else{echo $row['content_min'];?> min <?php echo $row['content_sec'];?> s,<?php } ?> <span class="capilize"><?php echo $row['content_theme']; ?>,<?php echo $row['content_lang']; ?>,<br><?php echo $row['content_year']; ?></span></div>
                        <div class="showdesc"><?php echo $row['content_desc'];?></div>
                        <div class="showlink1 whitespacelink"></div>
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

    <!-- Start Dream11 IPL 2020: Biggest Overs-->
    <div class="block1">
        <div class="headings">Dream11 IPL 2020: Biggest Overs</div>
        <div class="maintray">
            <?php
            $sql1 = "SELECT * FROM newcontent LIMIT 6";
            $result1 = $conn->query($sql1);
            if($result1->num_rows > 0)
            {
                while($row = $result1->fetch_assoc())
                {
                ?>
                <div class="mainiteml">
                    <div class="mainimage">
                    <a href="video.php?id=<?php echo $row['content_id']; ?>"><img src="images/movie/<?php echo $row['content_poster_l']; ?>" width="100%" height="100%" alt=""></a>
                    </div>
                    <?php
                    if($row['content_status']=='1')
                    {
                        echo '<div class="mainlive">
                        <span class="live">LIVE</span>
                        </div>';
                    }
                    ?>
                    <div class="maincontent">
                    <div>
                        <div class="showlink1 whitespacelink" style="margin-bottom: 5px;"><a href="video.php?id=<?php echo $row['content_id']; ?>" class="link"><i class="fas fa-play margin"></i> WATCH  </a></div>
                        <div class="showtime"><?php if($row['content_hour'] != '0'){echo $row['content_hour'];?> hr <?php echo $row['content_min'];?> min,<?php }
                        else{echo $row['content_min'];?> min <?php echo $row['content_sec'];?> s,<?php } ?> <span class="capilize"><?php echo $row['content_theme']; ?>,<?php echo $row['content_lang']; ?>,<br><?php echo $row['content_year']; ?></span></div>
                        <div class="showdesc"><?php echo $row['content_desc'];?></div>
                        <div class="showlink1 whitespacelink"></div>
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

    <!-- Start Dream11 IPL 2020: Cliffhangers-->
    <div class="block1">
        <div class="headings">Dream11 IPL 2020: Cliffhangers</div>
        <div class="maintray">
            <?php
            $sql1 = "SELECT * FROM newcontent LIMIT 6";
            $result1 = $conn->query($sql1);
            if($result1->num_rows > 0)
            {
                while($row = $result1->fetch_assoc())
                {
                ?>
                <div class="mainiteml">
                    <div class="mainimage">
                    <a href="video.php?id=<?php echo $row['content_id']; ?>"><img src="images/movie/<?php echo $row['content_poster_l']; ?>" width="100%" height="100%" alt=""></a>
                    </div>
                    <?php
                    if($row['content_status']=='1')
                    {
                        echo '<div class="mainlive">
                        <span class="live">LIVE</span>
                        </div>';
                    }
                    ?>
                    <div class="maincontent">
                    <div>
                        <div class="showlink1 whitespacelink" style="margin-bottom: 5px;"><a href="video.php?id=<?php echo $row['content_id']; ?>" class="link"><i class="fas fa-play margin"></i> WATCH  </a></div>
                        <div class="showtime"><?php if($row['content_hour'] != '0'){echo $row['content_hour'];?> hr <?php echo $row['content_min'];?> min,<?php }
                        else{echo $row['content_min'];?> min <?php echo $row['content_sec'];?> s,<?php } ?> <span class="capilize"><?php echo $row['content_theme']; ?>,<?php echo $row['content_lang']; ?>,<br><?php echo $row['content_year']; ?></span></div>
                        <div class="showdesc"><?php echo $row['content_desc'];?></div>
                        <div class="showlink1 whitespacelink"></div>
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

    <!-- Start India vs England -->
    <div class="block1">
        <div class="headings">India vs England</div>
        <div class="maintray">
            <?php
            $sql1 = "SELECT * FROM newcontent LIMIT 6";
            $result1 = $conn->query($sql1);
            if($result1->num_rows > 0)
            {
                while($row = $result1->fetch_assoc())
                {
                ?>
                <div class="mainiteml">
                    <div class="mainimage">
                    <a href="video.php?id=<?php echo $row['content_id']; ?>"><img src="images/movie/<?php echo $row['content_poster_l']; ?>" width="100%" height="100%" alt=""></a>
                    </div>
                    <?php
                    if($row['content_status']=='1')
                    {
                        echo '<div class="mainlive">
                        <span class="live">LIVE</span>
                        </div>';
                    }
                    ?>
                    <div class="maincontent">
                    <div>
                        <div class="showlink1 whitespacelink" style="margin-bottom: 5px;"><a href="video.php?id=<?php echo $row['content_id']; ?>" class="link"><i class="fas fa-play margin"></i> WATCH  </a></div>
                        <div class="showtime"><?php if($row['content_hour'] != '0'){echo $row['content_hour'];?> hr <?php echo $row['content_min'];?> min,<?php }
                        else{echo $row['content_min'];?> min <?php echo $row['content_sec'];?> s,<?php } ?> <span class="capilize"><?php echo $row['content_theme']; ?>,<?php echo $row['content_lang']; ?>,<br><?php echo $row['content_year']; ?></span></div>
                        <div class="showdesc"><?php echo $row['content_desc'];?></div>
                        <div class="showlink1 whitespacelink"></div>
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

    <!-- Start Ind vs Eng: Highlights -->
    <div class="block1">
        <div class="headings">Ind vs Eng: Highlights</div>
        <div class="maintray">
            <?php
            $sql1 = "SELECT * FROM newcontent LIMIT 6";
            $result1 = $conn->query($sql1);
            if($result1->num_rows > 0)
            {
                while($row = $result1->fetch_assoc())
                {
                ?>
                <div class="mainiteml">
                    <div class="mainimage">
                    <a href="video.php?id=<?php echo $row['content_id']; ?>"><img src="images/movie/<?php echo $row['content_poster_l']; ?>" width="100%" height="100%" alt=""></a>
                    </div>
                    <?php
                    if($row['content_status']=='1')
                    {
                        echo '<div class="mainlive">
                        <span class="live">LIVE</span>
                        </div>';
                    }
                    ?>
                    <div class="maincontent">
                    <div>
                        <div class="showlink1 whitespacelink" style="margin-bottom: 5px;"><a href="video.php?id=<?php echo $row['content_id']; ?>" class="link"><i class="fas fa-play margin"></i> WATCH  </a></div>
                        <div class="showtime"><?php if($row['content_hour'] != '0'){echo $row['content_hour'];?> hr <?php echo $row['content_min'];?> min,<?php }
                        else{echo $row['content_min'];?> min <?php echo $row['content_sec'];?> s,<?php } ?> <span class="capilize"><?php echo $row['content_theme']; ?>,<?php echo $row['content_lang']; ?>,<br><?php echo $row['content_year']; ?></span></div>
                        <div class="showdesc"><?php echo $row['content_desc'];?></div>
                        <div class="showlink1 whitespacelink"></div>
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

    <!-- Start Ind vs Eng: Tops Knocks -->
    <div class="block1">
        <div class="headings">Ind vs Eng: Tops Knocks</div>
        <div class="maintray">
            <?php
            $sql1 = "SELECT * FROM newcontent LIMIT 6";
            $result1 = $conn->query($sql1);
            if($result1->num_rows > 0)
            {
                while($row = $result1->fetch_assoc())
                {
                ?>
                <div class="mainiteml">
                    <div class="mainimage">
                    <a href="video.php?id=<?php echo $row['content_id']; ?>"><img src="images/movie/<?php echo $row['content_poster_l']; ?>" width="100%" height="100%" alt=""></a>
                    </div>
                    <?php
                    if($row['content_status']=='1')
                    {
                        echo '<div class="mainlive">
                        <span class="live">LIVE</span>
                        </div>';
                    }
                    ?>
                    <div class="maincontent">
                    <div>
                        <div class="showlink1 whitespacelink" style="margin-bottom: 5px;"><a href="video.php?id=<?php echo $row['content_id']; ?>" class="link"><i class="fas fa-play margin"></i> WATCH  </a></div>
                        <div class="showtime"><?php if($row['content_hour'] != '0'){echo $row['content_hour'];?> hr <?php echo $row['content_min'];?> min,<?php }
                        else{echo $row['content_min'];?> min <?php echo $row['content_sec'];?> s,<?php } ?> <span class="capilize"><?php echo $row['content_theme']; ?>,<?php echo $row['content_lang']; ?>,<br><?php echo $row['content_year']; ?></span></div>
                        <div class="showdesc"><?php echo $row['content_desc'];?></div>
                        <div class="showlink1 whitespacelink"></div>
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

    <!-- Start Premier League -->
    <div class="block1">
        <div class="headings">Premier League</div>
        <div class="maintray">
            <?php
            $sql1 = "SELECT * FROM newcontent LIMIT 6";
            $result1 = $conn->query($sql1);
            if($result1->num_rows > 0)
            {
                while($row = $result1->fetch_assoc())
                {
                ?>
                <div class="mainiteml">
                    <div class="mainimage">
                    <a href="video.php?id=<?php echo $row['content_id']; ?>"><img src="images/movie/<?php echo $row['content_poster_l']; ?>" width="100%" height="100%" alt=""></a>
                    </div>
                    <?php
                    if($row['content_status']=='1')
                    {
                        echo '<div class="mainlive">
                        <span class="live">LIVE</span>
                        </div>';
                    }
                    ?>
                    <div class="maincontent">
                    <div>
                        <div class="showlink1 whitespacelink" style="margin-bottom: 5px;"><a href="video.php?id=<?php echo $row['content_id']; ?>" class="link"><i class="fas fa-play margin"></i> WATCH  </a></div>
                        <div class="showtime"><?php if($row['content_hour'] != '0'){echo $row['content_hour'];?> hr <?php echo $row['content_min'];?> min,<?php }
                        else{echo $row['content_min'];?> min <?php echo $row['content_sec'];?> s,<?php } ?> <span class="capilize"><?php echo $row['content_theme']; ?>,<?php echo $row['content_lang']; ?>,<br><?php echo $row['content_year']; ?></span></div>
                        <div class="showdesc"><?php echo $row['content_desc'];?></div>
                        <div class="showlink1 whitespacelink"></div>
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

    <!-- Women's Senior One Day Trophy -->
    <div class="block1">
        <div class="headings">Women's Senior One Day Trophy</div>
        <div class="maintray">
            <?php
            $sql1 = "SELECT * FROM newcontent LIMIT 6";
            $result1 = $conn->query($sql1);
            if($result1->num_rows > 0)
            {
                while($row = $result1->fetch_assoc())
                {
                ?>
                <div class="mainiteml">
                    <div class="mainimage">
                    <a href="video.php?id=<?php echo $row['content_id']; ?>"><img src="images/movie/<?php echo $row['content_poster_l']; ?>" width="100%" height="100%" alt=""></a>
                    </div>
                    <?php
                    if($row['content_status']=='1')
                    {
                        echo '<div class="mainlive">
                        <span class="live">LIVE</span>
                        </div>';
                    }
                    ?>
                    <div class="maincontent">
                    <div>
                        <div class="showlink1 whitespacelink" style="margin-bottom: 5px;"><a href="video.php?id=<?php echo $row['content_id']; ?>" class="link"><i class="fas fa-play margin"></i> WATCH  </a></div>
                        <div class="showtime"><?php if($row['content_hour'] != '0'){echo $row['content_hour'];?> hr <?php echo $row['content_min'];?> min,<?php }
                        else{echo $row['content_min'];?> min <?php echo $row['content_sec'];?> s,<?php } ?> <span class="capilize"><?php echo $row['content_theme']; ?>,<?php echo $row['content_lang']; ?>,<br><?php echo $row['content_year']; ?></span></div>
                        <div class="showdesc"><?php echo $row['content_desc'];?></div>
                        <div class="showlink1 whitespacelink"></div>
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

    <!-- Popular in Cricket -->
    <div class="block1">
        <div class="headings">Popular in Cricket</div>
        <div class="maintray">
            <?php
            $sql1 = "SELECT * FROM newcontent LIMIT 6";
            $result1 = $conn->query($sql1);
            if($result1->num_rows > 0)
            {
                while($row = $result1->fetch_assoc())
                {
                ?>
                <div class="mainiteml">
                    <div class="mainimage">
                    <a href="video.php?id=<?php echo $row['content_id']; ?>"><img src="images/movie/<?php echo $row['content_poster_l']; ?>" width="100%" height="100%" alt=""></a>
                    </div>
                    <?php
                    if($row['content_status']=='1')
                    {
                        echo '<div class="mainlive">
                        <span class="live">LIVE</span>
                        </div>';
                    }
                    ?>
                    <div class="maincontent">
                    <div>
                        <div class="showlink1 whitespacelink" style="margin-bottom: 5px;"><a href="video.php?id=<?php echo $row['content_id']; ?>" class="link"><i class="fas fa-play margin"></i> WATCH  </a></div>
                        <div class="showtime"><?php if($row['content_hour'] != '0'){echo $row['content_hour'];?> hr <?php echo $row['content_min'];?> min,<?php }
                        else{echo $row['content_min'];?> min <?php echo $row['content_sec'];?> s,<?php } ?> <span class="capilize"><?php echo $row['content_theme']; ?>,<?php echo $row['content_lang']; ?>,<br><?php echo $row['content_year']; ?></span></div>
                        <div class="showdesc"><?php echo $row['content_desc'];?></div>
                        <div class="showlink1 whitespacelink"></div>
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

    <!-- Popular in Football -->
    <div class="block1">
        <div class="headings">Popular in Football</div>
        <div class="maintray">
            <?php
            $sql1 = "SELECT * FROM newcontent LIMIT 6";
            $result1 = $conn->query($sql1);
            if($result1->num_rows > 0)
            {
                while($row = $result1->fetch_assoc())
                {
                ?>
                <div class="mainiteml">
                    <div class="mainimage">
                    <a href="video.php?id=<?php echo $row['content_id']; ?>"><img src="images/movie/<?php echo $row['content_poster_l']; ?>" width="100%" height="100%" alt=""></a>
                    </div>
                    <?php
                    if($row['content_status']=='1')
                    {
                        echo '<div class="mainlive">
                        <span class="live">LIVE</span>
                        </div>';
                    }
                    ?>
                    <div class="maincontent">
                    <div>
                        <div class="showlink1 whitespacelink" style="margin-bottom: 5px;"><a href="video.php?id=<?php echo $row['content_id']; ?>" class="link"><i class="fas fa-play margin"></i> WATCH  </a></div>
                        <div class="showtime"><?php if($row['content_hour'] != '0'){echo $row['content_hour'];?> hr <?php echo $row['content_min'];?> min,<?php }
                        else{echo $row['content_min'];?> min <?php echo $row['content_sec'];?> s,<?php } ?> <span class="capilize"><?php echo $row['content_theme']; ?>,<?php echo $row['content_lang']; ?>,<br><?php echo $row['content_year']; ?></span></div>
                        <div class="showdesc"><?php echo $row['content_desc'];?></div>
                        <div class="showlink1 whitespacelink"></div>
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
    include('main/footer.php');
?>