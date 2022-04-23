<?php
$pagename = "Home";
  include('core/connection.php');
  /*$file1 = 'Chapter 5 Forms of Business Ownership.pdf'; 
$filename = 'Chapter 5 Forms of Business Ownership.pdf'; 
  
  header('Content-type: application/pdf');
  header('Content-Descriptoin:inline;filename="'.$file1.'"');
  header('Content-Transfer-Encoding:binary');
  header('Accept-Ranges:bytes');
  @readfile($file1);*/
  include('inc/header.php'); 
?>
<style type="text/css">
   @media print { 
    #plugin { 
      display:none; 
      } 
    }
    @media print { 
    #iframe{
      display: none;
    } 
    }
    
</style>
  <div class="hero-area">
    <div class="welcome-slides owl-carousel">

      <!-- Single Welcome Slides -->
      <div class="single-welcome-slides bg-img bg-overlay jarallax" style="background-image: url(img/bg-img/back1.jpg);">
        <div class="container h-100">
          <div class="row h-100 align-items-center">
            <div class="col-12 col-lg-10">
              <div class="welcome-content">
                <h2 data-animation="fadeInUp" data-delay="200ms">Welcome</h2>
                <p data-animation="fadeInUp" data-delay="400ms">Ibadan Poly Bookstore</p>
                <a href="#" class="btn famie-btn mt-4" data-animation="bounceInUp" data-delay="600ms">Contact Us</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Single Welcome Slides -->
      <div class="single-welcome-slides bg-img bg-overlay jarallax" style="background-image: url(img/bg-img/bask2.jpg);">
        <div class="container h-100">
          <div class="row h-100 align-items-center">
            <div class="col-12 col-lg-10">
              <div class="welcome-content">
                <h2 data-animation="fadeInUp" data-delay="200ms">Welcome</h2>
                <p data-animation="fadeInUp" data-delay="400ms">Ibadan Poly Bookstore</p>
                <a href="#" class="btn famie-btn mt-4" data-animation="bounceInDown" data-delay="600ms">Contact Us</a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  <!-- ##### Hero Area End ##### -->


  <!-- ##### About Us Area Start ##### -->
  <section class="about-us-area">
    <div class="container">
      <div class="row align-items-center">

        <!-- About Us Content -->
        <div class="col-12 col-md-8">
          <div class="about-us-content mb-100">
            <!-- Section Heading -->
            <div class="section-heading">
              <p>About us</p>
              <h2><span>Let Us</span> Tell You Our Story</h2>
              <img src="img/bg-img/back4.jpg" alt="">
            </div>
            <p>Ibadan Poly Bookstore is very good</p>
            <a href="#" class="btn famie-btn mt-30">Read More</a>
          </div>
        </div>

        <!-- Famie Video Play -->
        <div class="col-12 col-md-4">
          <div class="famie-video-play mb-100">
            <img src="img/bg-img/20.jpg" alt="">
            <!-- Play Icon -->
            <a href="http://www.youtube.com/watch?v=7HKoqNJtMTQ" class="play-icon"><i class="fa fa-play"></i></a>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- ##### About Us Area End ##### -->


  <!-- ##### Our Products Area Start ##### -->
  <?php include('inc/ourproduct.php'); ?>
  <!-- ##### Our Products Area End ##### -->

  <!-- ##### Newsletter Area Start ##### -->
  <section class="newsletter-area section-padding-100 bg-img bg-overlay jarallax" style="background-image: url('img/bg-img/back3.png');">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-lg-10">
          <div class="newsletter-content">
            <!-- Section Heading -->
            <div class="section-heading white text-center">
              <p>What we do</p>
              <h2><span>Our Books</span> Are The Best</h2>
              <img src="img/core-img/sunrise.png" alt="">
            </div>
            <p class="text-white mb-50 text-center">Get the best Knowledge</p>
          </div>
        </div>
      </div>
      <!-- Newsletter Form -->
      <div class="row justify-content-center">
        <div class="col-12 col-lg-6">
          <form action="#" method="post">
            <input type="text" class="form-control" placeholder="Enter your email">
            <button type="submit" class="btn famie-btn">Subscribe</button>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- ##### Newsletter Area End ##### -->




  <!-- ##### News Area Start ##### -->
  <section class="news-area bg-gray section-padding-100-0">
    <div class="container">
      <div class="row">

        <!-- Featured Post Area -->
        <div class="col-12 col-lg-6">
          <div class="featured-post-area mb-100 wow fadeInUp" data-wow-delay="100ms">
            <img src="img/bg-img/back4.jpg" alt="">
            <!-- Post Content -->
            <div class="post-content">
              <h6>Post on <a href="#">18 Aug 2018</a> / <a href="#">Carlos Bacca</a></h6>
              <a href="#" class="post-title">Why if polybookstore good</a>
            </div>
          </div>
        </div>

        <!-- Single Blog Area -->
        <div class="col-12 col-lg-6 mb-100">

          <!-- Single Blog Area -->
          <div class="single-blog-area style-2 wow fadeInUp" data-wow-delay="300ms">
            <!-- Post Content -->
            <div class="post-content">
              <h6>Post on <a href="#">18 Aug 2018</a> / <a href="#">emmanuel</a></h6>
              <a href="#" class="post-title">Ibadan Poly Book store is good for learning</p>
            </div>
          </div>

          <!-- Single Blog Area -->
          <div class="single-blog-area style-2 wow fadeInUp" data-wow-delay="500ms">
            <!-- Post Content -->
            <div class="post-content">
              <h6>Post on <a href="#">18 Aug 2018</a> / <a href="#">emmanuel</a></h6>
              <a href="#" class="post-title">Ibadan Poly Book store is good for learning</p>
            </div>
          </div>

          </div>
      </div>
    </div>
  </section>
  <!-- ##### News Area End ##### -->
 <?php
include('inc/footer.php');
 ?>
 <script type="text/javascript">
$(document).ready(function () {

    //Disable full page
    $("#iframe").on("contextmenu",function(e){
        return false;
        alert('yes');
      });
   
    //Disable full page
    $('#iframe').bind('cut copy paste', function (e) {
        e.preventDefault();
});
 });
</script>