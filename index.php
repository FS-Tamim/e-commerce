<?php 
session_start();
error_reporting(0);
include('includes/config.php');
?>

<style>
body {
	font-family: "Open Sans", sans-serif;
}
h2 {
	color: #000;
	font-size: 26px;
	font-weight: 300;
	text-align: center;
	text-transform: uppercase;
	position: relative;
	margin: 30px 0 80px;
}
h2 b {
	color: #ffc000;
}
h2::after {
	content: "";
	width: 100px;
	position: absolute;
	margin: 0 auto;
	height: 4px;
	background: rgba(0, 0, 0, 0.2);
	left: 0;
	right: 0;
	bottom: -20px;
}
.carousel {
	margin: 50px auto;
	padding: 0 70px;
}
.carousel .carousel-item {
	min-height: 330px;
	text-align: center;
	overflow: hidden;
}
.carousel .carousel-item .img-box {
	height: 160px;
	width: 100%;
	position: relative;
}
.carousel .carousel-item img {	
	max-width: 100%;
	max-height: 100%;
	display: inline-block;
	position: absolute;
	bottom: 0;
	margin: 0 auto;
	left: 0;
	right: 0;
}
.carousel .carousel-item h4 {
	font-size: 18px;
	margin: 10px 0;
}
.carousel .carousel-item .btn {
	color: #333;
	border-radius: 0;
	font-size: 11px;
	text-transform: uppercase;
	font-weight: bold;
	background: none;
	border: 1px solid #ccc;
	padding: 5px 10px;
	margin-top: 5px;
	line-height: 16px;
}
.carousel .carousel-item .btn:hover, .carousel .carousel-item .btn:focus {
	color: #fff;
	background: #000;
	border-color: #000;
	box-shadow: none;
}
.carousel .carousel-item .btn i {
	font-size: 14px;
	font-weight: bold;
	margin-left: 5px;
}
.carousel .thumb-wrapper {
	text-align: center;
}
.carousel .thumb-content {
	padding: 15px;
}
.carousel-control-prev, .carousel-control-next {
	height: 100px;
	width: 40px;
	background: none;
	margin: auto 0;
	background: rgba(0, 0, 0, 0.2);
}
.carousel-control-prev i, .carousel-control-next i {
	font-size: 30px;
	position: absolute;
	top: 50%;
	display: inline-block;
	margin: -16px 0 0 0;
	z-index: 5;
	left: 0;
	right: 0;
	color: rgba(0, 0, 0, 0.8);
	text-shadow: none;
	font-weight: bold;
}
.carousel-control-prev i {
	margin-left: -3px;
}
.carousel-control-next i {
	margin-right: -3px;
}
.carousel .item-price {
	font-size: 13px;
	padding: 2px 0;
}
.carousel .item-price strike {
	color: #999;
	margin-right: 5px;
}
.carousel .item-price span {
	color: #86bd57;
	font-size: 110%;
}	
.carousel .carousel-indicators {
	bottom: -50px;
}
.carousel-indicators li, .carousel-indicators li.active {
	width: 10px;
	height: 10px;
	margin: 4px;
	border-radius: 50%;
	border-color: transparent;
	border: none;
}
.carousel-indicators li {	
	background: rgba(0, 0, 0, 0.2);
}
.carousel-indicators li.active {	
	background: rgba(0, 0, 0, 0.6);
}
.star-rating li {
	padding: 0;
}
.star-rating i {
	font-size: 14px;
	color: #ffc000;
}
</style>
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
	


	<div class="row">
		<div class="col-md-12">
			<h2>Trending <b>Products</b></h2>
			<div id="carousel-example" class="carousel slide hidden-xs" data-ride="carousel">
		 
			<!-- Wrapper for carousel items -->
			<?php $ret=mysqli_query($con,"select * from products");
						         $row = mysqli_fetch_array($ret); // Products retreived from database
								 $is_active = true; // Only true for the first iteration
								 $i = 0;
                                //  while ($row=mysqli_fetch_array($ret)) 
                                //     {
	                                     # code...
                            ?>
			<div class="carousel-inner">
			<?php foreach($row as $p):?>
			   <?php if ($i % 4 == 0): ?>

			   
				<div class="item <?php if ($is_active) echo ' active'?>">
			             <?php endif?>

						 
					<div class="row">
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
								<a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>">
				                <img   src="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>" data-echo="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>" 	  width="180" height="300" alt=""></a>
								</div>
								<div class="thumb-content">
									<h4><a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($row['productName']);?></a></h4>
									<p class="item-price"> <span>Rs.<?php echo htmlentities($row['productPrice']);?>	</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
									<a href="index.php?page=product&action=add&id=<?php echo $row['id']; ?>" class="lnk btn btn-primary">Add to Cart</a>
								</div>						
							</div>
						</div>
					</div>
					<?php if (($i+1) % 4 == 0 || $i == count($row)-1):?>
				</div>
<?php
$i++;
if ($is_active) $is_active = false;
endif
?>
<?php endforeach?>


				
			</div>
			<!-- Carousel controls -->
			<a class="carousel-control left" href="#myCarousel" data-slide="prev">
				<i class="fa fa-angle-left"></i>
			</a>
			<a class="carousel-control right" href="#myCarousel" data-slide="next">
				<i class="fa fa-angle-right"></i>
			</a>
		</div>
		</div>
	</div>

</body>

<footer>
<?php include('includes/footer.php');?>
</footer>


