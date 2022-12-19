<?php
  include('./dbconnection.php');
?>

<?php
  include('./main/header.php');
?>

<!-- <?php
  //include('./main/carousel.php');
?>  -->

<!-- Start Carousel -->
  <section class="banner">
    <div class="maincarousel" style="background: none !important;">
        <!-- <div class="carousel1">
            <div class="leftdiv1">
              <img src="google2.0.0.jpg" id="leftdiv" height="400px" width="100%" alt="">
            </div>
            <div class="maindiv" > 
                <a href="image.php"><img src="google2.0.0.jpg" id="maindiv" height="400px" width="100%" alt=""></a>
                <div class="maincarouselcontent">
                  <div class="moviename capilize"><?php echo $row['content_name']; ?></div>
                  <div class="movietitle capilize"><span><?php echo $row['content_lang']; ?> . </span> <span><?php echo $row['content_theme']; ?> . </span> <span><?php echo $row['content_year']; ?></span> </div>
                  <div class="moviedesc2"><?php echo $row['content_desc']; ?></div>
                  <div class=""><a href="video.php?id=<?php echo $row['content_id']; ?>" class="link watchmovie"><i class="fas fa-play margindesc"></i> WATCH MOVIE </a></div>
                </div>
                <div class="maincarouselcontent3">
                </div>
            </div>
            <div class="rightdiv1">
              <img src="google2.0.0.jpg" id="rightdiv" height="400px" width="100%" alt="">
            </div>
        </div> -->

        <div class="center">
          <div class="carousel"  data-flickity='{ "autoPlay": true , "wrapAround": true}'>
            <div class="carousel-cell">
                <?php 
                    $sql = "SELECT * FROM newcontent WHERE content_id=16";
                    $result1 = $conn->query($sql);
                    $row = $result1->fetch_assoc();
                ?>
              <div class="marginpadding">
                <div class="maindiv" > 
                    <div class="maincarouselimage"><a href="image.php?id=<?php echo $row['content_id']; ?>"><img src="images/movie/<?php echo $row['content_poster_l']; ?>" id="maindiv" height="400px" width="100%" alt=""></a></div>
                    <div class="maincarouselcontent" href="image.php?id=<?php echo $row['content_id']; ?>">
                      <div class="moviename capilize"><?php echo $row['content_name']; ?></div>
                      <div class="movietitle capilize"><span><?php echo $row['content_lang']; ?> . </span> <span><?php echo $row['content_theme']; ?> . </span> <span><?php echo $row['content_year']; ?></span> </div>
                      <div class="moviedesc2"><?php echo $row['content_desc']; ?></div>
                      <div class=""><a href="video.php?id=<?php echo $row['content_id']; ?>" class="link watchmovie"><i class="fas fa-play margindesc"></i> <?php if($row['content_type'] == 'movie'){echo ' WATCH MOVIE ';}else{ echo ' WATCH ';} ?> </a></div>
                    </div>
                    <div class="maincarouselcontent3">
                    </div>
                </div>
              </div>
            </div>
            <div class="carousel-cell">
                <?php 
                    $sql = "SELECT * FROM newcontent WHERE content_id=20";
                    $result1 = $conn->query($sql);
                    $row = $result1->fetch_assoc();
                ?>
              <div class="marginpadding">
                <div class="maindiv" > 
                    <div class="maincarouselimage"><a href="image.php?id=<?php echo $row['content_id']; ?>"><img src="images/movie/<?php echo $row['content_poster_l']; ?>" id="maindiv" height="400px" width="100%" alt=""></a></div>
                    <div class="maincarouselcontent" href="image.php?id=<?php echo $row['content_id']; ?>">
                      <div class="moviename capilize"><?php echo $row['content_name']; ?></div>
                      <div class="movietitle capilize"><span><?php echo $row['content_lang']; ?> . </span> <span><?php echo $row['content_theme']; ?> . </span> <span><?php echo $row['content_year']; ?></span> </div>
                      <div class="moviedesc2"><?php echo $row['content_desc']; ?></div>
                      <div class=""><a href="video.php?id=<?php echo $row['content_id']; ?>" class="link watchmovie"><i class="fas fa-play margindesc"></i> <?php if($row['content_type'] == 'movie'){echo ' WATCH MOVIE ';}else{ echo ' WATCH ';} ?> </a></div>
                    </div>
                    <div class="maincarouselcontent3">
                    </div>
                </div>
              </div>
            </div>
            <div class="carousel-cell">
                <?php 
                    $sql = "SELECT * FROM newcontent WHERE content_id=30";
                    $result1 = $conn->query($sql);
                    $row = $result1->fetch_assoc();
                ?>
              <div class="marginpadding">
                <div class="maindiv" > 
                    <div class="maincarouselimage"><a href="image.php?id=<?php echo $row['content_id']; ?>"><img src="images/movie/<?php echo $row['content_poster_l']; ?>" id="maindiv" height="400px" width="100%" alt=""></a></div>
                    <div class="maincarouselcontent" href="image.php?id=<?php echo $row['content_id']; ?>">
                      <div class="moviename capilize"><?php echo $row['content_name']; ?></div>
                      <div class="movietitle capilize"><span><?php echo $row['content_lang']; ?> . </span> <span><?php echo $row['content_theme']; ?> . </span> <span><?php echo $row['content_year']; ?></span> </div>
                      <div class="moviedesc2"><?php echo $row['content_desc']; ?></div>
                      <div class=""><a href="video.php?id=<?php echo $row['content_id']; ?>" class="link watchmovie"><i class="fas fa-play margindesc"></i> <?php if($row['content_type'] == 'movie'){echo ' WATCH MOVIE ';}else{ echo ' WATCH ';} ?> </a></div>
                    </div>
                    <div class="maincarouselcontent3">
                    </div>
                </div>
              </div>
            </div>
            <div class="carousel-cell">
                <?php 
                    $sql = "SELECT * FROM newcontent WHERE content_id=45";
                    $result1 = $conn->query($sql);
                    $row = $result1->fetch_assoc();
                ?>
              <div class="marginpadding">
                <div class="maindiv" > 
                    <div class="maincarouselimage"><a href="image.php?id=<?php echo $row['content_id']; ?>"><img src="images/movie/<?php echo $row['content_poster_l']; ?>" id="maindiv" height="400px" width="100%" alt=""></a></div>
                    <div class="maincarouselcontent" href="image.php?id=<?php echo $row['content_id']; ?>">
                      <div class="moviename capilize"><?php echo $row['content_name']; ?></div>
                      <div class="movietitle capilize"><span><?php echo $row['content_lang']; ?> . </span> <span><?php echo $row['content_theme']; ?> . </span> <span><?php echo $row['content_year']; ?></span> </div>
                      <div class="moviedesc2"><?php echo $row['content_desc']; ?></div>
                      <div class=""><a href="video.php?id=<?php echo $row['content_id']; ?>" class="link watchmovie"><i class="fas fa-play margindesc"></i> <?php if($row['content_type'] == 'movie'){echo ' WATCH MOVIE ';}else{ echo ' WATCH ';} ?> </a></div>
                    </div>
                    <div class="maincarouselcontent3">
                    </div>
                </div>
              </div>
            </div>
            <div class="carousel-cell">
                <?php 
                    $sql = "SELECT * FROM newcontent WHERE content_id=66";
                    $result1 = $conn->query($sql);
                    $row = $result1->fetch_assoc();
                ?>
              <div class="marginpadding">
                <div class="maindiv" > 
                    <div class="maincarouselimage"><a href="image.php?id=<?php echo $row['content_id']; ?>"><img src="images/movie/<?php echo $row['content_poster_l']; ?>" id="maindiv" height="400px" width="100%" alt=""></a></div>
                    <div class="maincarouselcontent" href="image.php?id=<?php echo $row['content_id']; ?>">
                      <div class="moviename capilize"><?php echo $row['content_name']; ?></div>
                      <div class="movietitle capilize"><span><?php echo $row['content_lang']; ?> . </span> <span><?php echo $row['content_theme']; ?> . </span> <span><?php echo $row['content_year']; ?></span> </div>
                      <div class="moviedesc2"><?php echo $row['content_desc']; ?></div>
                      <div class=""><a href="video.php?id=<?php echo $row['content_id']; ?>" class="link watchmovie"><i class="fas fa-play margindesc"></i> <?php if($row['content_type'] == 'movie'){echo ' WATCH MOVIE ';}else{ echo ' WATCH HIGHLIGHT';} ?> </a></div>
                    </div>
                    <div class="maincarouselcontent3">
                    </div>
                </div>
              </div>
            </div>

            <!-- <div class="carousel-cell">
              <div class="marginpadding">
                <div class="maindiv" > 
                    <div class="maincarouselimage"><a href="image.php"><img src="google2.0.0.jpg" id="maindiv" height="400px" width="100%" alt=""></a></div>
                    <div class="maincarouselcontent">
                      <div class="moviename capilize"><?php echo $row['content_name']; ?></div>
                      <div class="movietitle capilize"><span><?php echo $row['content_lang']; ?> . </span> <span><?php echo $row['content_theme']; ?> . </span> <span><?php echo $row['content_year']; ?></span> </div>
                      <div class="moviedesc2"><?php echo $row['content_desc']; ?></div>
                      <div class=""><a href="video.php?id=<?php echo $row['content_id']; ?>" class="link watchmovie"><i class="fas fa-play margindesc"></i> WATCH MOVIE </a></div>
                    </div>
                    <div class="maincarouselcontent3">
                    </div>
                </div>
              </div>
            </div>
            <div class="carousel-cell">
              <div class="marginpadding">
                <div class="maindiv" > 
                    <div class="maincarouselimage"><a href="image.php"><img src="google2.0.0.jpg" id="maindiv" height="400px" width="100%" alt=""></a></div>
                    <div class="maincarouselcontent">
                      <div class="moviename capilize"><?php echo $row['content_name']; ?></div>
                      <div class="movietitle capilize"><span><?php echo $row['content_lang']; ?> . </span> <span><?php echo $row['content_theme']; ?> . </span> <span><?php echo $row['content_year']; ?></span> </div>
                      <div class="moviedesc2"><?php echo $row['content_desc']; ?></div>
                      <div class=""><a href="video.php?id=<?php echo $row['content_id']; ?>" class="link watchmovie"><i class="fas fa-play margindesc"></i> WATCH MOVIE </a></div>
                    </div>
                    <div class="maincarouselcontent3">
                    </div>
                </div>
              </div>
            </div>
            <div class="carousel-cell">
              <div class="marginpadding">
                <div class="maindiv" > 
                    <div class="maincarouselimage"><a href="image.php"><img src="google2.0.0.jpg" id="maindiv" height="400px" width="100%" alt=""></a></div>
                    <div class="maincarouselcontent">
                      <div class="moviename capilize"><?php echo $row['content_name']; ?></div>
                      <div class="movietitle capilize"><span><?php echo $row['content_lang']; ?> . </span> <span><?php echo $row['content_theme']; ?> . </span> <span><?php echo $row['content_year']; ?></span> </div>
                      <div class="moviedesc2"><?php echo $row['content_desc']; ?></div>
                      <div class=""><a href="video.php?id=<?php echo $row['content_id']; ?>" class="link watchmovie"><i class="fas fa-play margindesc"></i> WATCH MOVIE </a></div>
                    </div>
                    <div class="maincarouselcontent3">
                    </div>
                </div>
              </div>
            </div>
            <div class="carousel-cell">
              <div class="marginpadding">
                <div class="maindiv" > 
                    <div class="maincarouselimage"><a href="image.php"><img src="google2.0.0.jpg" id="maindiv" height="400px" width="100%" alt=""></a></div>
                    <div class="maincarouselcontent">
                      <div class="moviename capilize"><?php echo $row['content_name']; ?></div>
                      <div class="movietitle capilize"><span><?php echo $row['content_lang']; ?> . </span> <span><?php echo $row['content_theme']; ?> . </span> <span><?php echo $row['content_year']; ?></span> </div>
                      <div class="moviedesc2"><?php echo $row['content_desc']; ?></div>
                      <div class=""><a href="video.php?id=<?php echo $row['content_id']; ?>" class="link watchmovie"><i class="fas fa-play margindesc"></i> WATCH MOVIE </a></div>
                    </div>
                    <div class="maincarouselcontent3">
                    </div>
                </div>
              </div>
            </div> -->
          </div>
        </div>
        <!-- <div class="carouselleftbtn">
            <span href="" class="carouselleftbtn zoom"><i class="fas fa-chevron-circle-left fa-2x"></i></span>
        </div>
        <div class="carouselrightbtn1">
            <span class="carouselrightbtn1 zoom" onclick="next()"><i class="fas fa-chevron-circle-right fa-2x"></i></span>
        </div> -->
    </div>
  </section>

<section class="trays">
    <!-- Latest & Trending -->
    <div class="block1">
        <div class="headings">Latest & Trending</div>
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
    
    <!--Start Shows Recommended For You -->
    <div class="block1">
        <div class="headings">Shows Recommended For You</div>
        <div class="maintray">

        <?php  
            $sql1 = "SELECT * FROM newcontent LIMIT 8,8" ;
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
            $sql1 = "SELECT * FROM newcontent WHERE content_type='channels' LIMIT 8" ;
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

    <!--Start Popular Shows -->
    <div class="block1">
        <div class="headings">Popular Shows</div>
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

    <!--Start Movies Recommended For You -->
    <div class="block1">
        <div class="headings">Movies Recommended For You</div>
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

    
</section>

<!-- <?php
  include('./main/footer.php');
?> -->
