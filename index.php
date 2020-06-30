<?php
include_once("dbconnect.php");
?>
<?php include_once("include/header.php");?>

  <div class="main-slider-area">
    <div class="container">
      <div class="row">
        <div class="col-md-1 col-xs-1"></div>
        <div class="col-md-10 col-xs-10">
          <!-- Main Slider -->
          <div class="main-slider">
            <div class="slider">
              <div id="mainSlider" class="nivoSlider slider-image">
                <img src="images/slider/s1.PNG" alt="main slider" title="#htmlcaption1"/>
                <img src="images/slider/s2.PNG" alt="main slider" title="#htmlcaption2"/>
                <img src="images/slider/s3.PNG" alt="main slider" title="#htmlcaption2"/>
                <img src="images/slider/s4.PNG" alt="main slider" title="#htmlcaption1"/>
              </div>
              <!-- Slider Caption 1 -->
              <div id="htmlcaption1" class="nivo-html-caption slider-caption-1">
                <div class="slider-progress"></div>
                <div class="slide-text">
                  <div class="middle-text">
                    <div class="cap-dec">
                      <h2 class="cap-dec wow fadeInUp animated" data-wow-duration="1.1s" data-wow-delay="0s">Professional House maids Now Available.</h2>
                      <h1 class="cap-dec wow fadeInUp animated" data-wow-duration="2.3s" data-wow-delay="0s">Discover greate maids today</h1>
                      <!--<p class="cap-dec wow lightSpeedIn hidden-xs" data-wow-duration="1.5s" data-wow-delay="0s"> Loren ipsum dolorsit amet, consectetur adipisicing, sed do eiusmod.</p>-->
                    </div>
                    <div class="cap-readmore wow zoomInRight" data-wow-duration=".9s" data-wow-delay=".5s"> <a href="#">Get House maid Now</a> </div>
                  </div>
                </div>
              </div>
              <!-- Slider Caption 2 -->
              <div id="htmlcaption2" class="nivo-html-caption slider-caption-2">
                <div class="slider-progress"></div>
                <div class="slide-text slide-text-2">
                  <div class="middle-text">
                    <div class="cap-dec">
                      <h2 class="cap-dec wow fadeInUp" data-wow-duration="1.1s" data-wow-delay="0s"><?php echo date('Y');?> </h2>
                      <h1 class="cap-dec wow fadeInUp" data-wow-duration="2.3s" data-wow-delay="0s"> GET YOUR FAMILY A maid NOW</h1>
                      <p class="cap-dec wow lightSpeedIn hidden-xs" data-wow-duration="1.5s" data-wow-delay="0s"> </p>
                    </div>
                    <!--<div class="cap-readmore wow zoomInUp" data-wow-duration="1.3s" data-wow-delay=".3s"> <a href="#">Shop Now</a> </div>-->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End Main Slider -->

        </div>
        <div class="col-md-1 col-xs-1"></div>
      </div>
    </div>
  </div>
  <!-- End Main Slider Area -->

  <!-- Best selling -->
  <div class="container">
    <section class="main-container col1-layout" style="margin-top: 0px">
      <div class="main-container">
        <div class="row">
        <div class="col-md-8" style="background-color: #">
          <h2 style="text-align: center"> <span id="news_scroller" style="visibility: visible;"><marquee>Online Household maid management </marquee> </span></h2>
          
          <p style="font-size: medium">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tincidunt tortor sit amet congue commodo. Donec fermentum mi a massa rhoncus efficitur. Suspendisse risus odio, viverra eget quam ut, posuere auctor nisl. Quisque eget justo tellus. Proin mi quam, placerat eu vestibulum eu, varius nec sapien. Aliquam vel bibendum lacus. Duis id elit commodo orci finibus auctor nec ut massa. Mauris eget iaculis ante, nec pharetra massa. Sed quis rutrum mi, non egestas dolor. Vivamus porta, purus ut congue tempor, mi nunc dignissim nulla, eget consequat quam justo eget ex. Aliquam viverra, diam lacinia luctus commodo, ex ex scelerisque nibh, ut elementum dolor nunc eu purus. Curabitur hendrerit tincidunt viverra. Curabitur eu malesuada purus. Quisque cursus posuere dui at maximus.
            <a href="about_us" class="btn btn-sm btn-info">Read more</a> </p>
          <!--<p style="text-align: center">Kindly Sign Up with us to view our available home maids profiles <a href="register" class="btn btn-sm btn-info"><u>CLICK HERE</u></a></p>-->
        </div>
          <div class="col-md-4">
            <h3>Why trust us?</h3>
            <hr style="border: #ff00ff; border-style: outset">
            <p style="font-size: medium">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tincidunt tortor sit amet congue commodo. Donec fermentum mi a massa rhoncus efficitur. Suspendisse risus odio, viverra eget quam ut, posuere auctor nisl. Quisque eget justo tellus. Proin mi quam, placerat eu vestibulum eu, varius nec sapien. Aliquam vel bibendum lacus. Duis id elit commodo orci finibus auctor nec ut massa. Mauris eget iaculis ante, nec pharetra massa. Sed quis rutrum mi, non egestas dolor. Vivamus porta, purus ut congue tempor, mi nunc dignissim nulla, eget consequat quam justo eget ex. Aliquam viverra, diam lacinia luctus commodo, ex ex scelerisque nibh, ut elementum dolor nunc eu purus. Curabitur hendrerit tincidunt viverra. Curabitur eu malesuada purus. Quisque cursus posuere dui at maximus.</p>
          </div>
        </div>
      </div>
    </section>

    <div class="row">
      <!-- main container -->
      <div class="home-tab">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <!-- Home Tabs  -->

             
             
            </div>

          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- our clients Slider -->
<?php include_once("include/footer.php")?>
