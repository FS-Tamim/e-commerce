<?php 
session_start();
error_reporting(0);
include('includes/config.php');
?>
<header>
<?php include('includes/top-header.php');?>
</header>

<body>
<div class="body-content outer-top-xs" id="top-banner-and-menu">
	    <div class="container">
          <div class="furniture-container homepage-container">  
		    <div class="row">
			    <div class="col-xs-12 col-sm-12 col-md-2 sidebar">
	                <?php include('includes/side-menu.php');?>
			    </div>
			    <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder">

				
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./assets/images/sliders/slider1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./assets/images/sliders/slider4.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./assets/images/sliders/slider5.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
                </div>
            </div>
         </div> 
        </div>
    </div>
</body>

<footer>
<?php include('includes/footer.php');?>
</footer>





