<?php 
session_start();
error_reporting(0);
include('includes/config.php');
if(isset($_GET['action']) && $_GET['action']=="add"){
	$id=intval($_GET['id']);
	if(isset($_SESSION['cart'][$id])){
		$_SESSION['cart'][$id]['quantity']++;
	}else{
		$sql_p="SELECT * FROM products WHERE id={$id}";
		$query_p=mysqli_query($con,$sql_p);
		if(mysqli_num_rows($query_p)!=0){
			$row_p=mysqli_fetch_array($query_p);
			$_SESSION['cart'][$row_p['id']]=array("quantity" => 1, "price" => $row_p['productPrice']);
			header('location:index.php');
		}else{
			$message="Product ID is invalid";
		}
	}
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Portal Home Page</title>
<!-- Bootstrap Core CSS -->
 <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">  -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  -->


<!-- Customizable CSS -->
<link rel="stylesheet" href="assets/css/owl.carousel.css">
<link rel="stylesheet" href="assets/css/owl.transitions.css">
<link rel="stylesheet" href="assets/css/owl.theme.css">
	    
		
		
		




<!-- Demo Purpose Only. Should be removed in production -->

<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
<style>


.slider img{
    height:300px!important;
}
.product-info .name a {
        color: #000000;
        text-decoration: none;
    }

    .product-info .name a:hover {
        color: #000000;
        text-decoration: none;
    }

    .btn {
        background-color: #181818 !important;
        color: #FFD300 !important;
		
        
        font-weight: bold !important;

    }

    /* .btn:hover {
        color: #cc0000 !important;
    } */

    .product-price {
        font-size: 15px !important;
    }

    .price-before-discount {
        text-decoration: line-through;

    }

    .sidebar .category-item {
        font-size: 15px !important;
    }
	.new-product-title{
		font-weight: bold !important;
		margin-top: 5%;
		margin-bottom: 4%;
		font-size: 25px !important;
		
	}

</style>




</head>
<body>
    <header>
     <?php include('includes/top-header.php');?>
    </header>
    <div class="body-content">
	    <div class="container">
          <div class="furniture-container homepage-container">  
          <!---row START-->
		    <div class="row">
		
			    <div class="col-xs-12 col-sm-12 col-md-3 sidebar">
			
	                <?php include('includes/side-menu.php');?>

			    </div>
			
			    <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder">
				
			
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <!-- <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol> -->
  <div class="carousel-inner">
    <div class="carousel-item slider active">
      <img src="./assets/images/sliders/slider1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item slider">
      <img src="./assets/images/sliders/slider2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item slider">
      <img src="./assets/images/sliders/slider3.jpg" class="d-block w-100" alt="...">
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
            <!--row END-->
			<!--Product Display starts-->
			<div id="product-tabs-slider" class="scroll-tabs inner-bottom-vs  wow fadeInUp">
			<div class="more-info-tab clearfix">
			   <h3 class="new-product-title pull-left">Featured Products</h3>
				<ul class="nav nav-tabs nav-tab-line pull-right" id="new-products-1">
					<li class="active"><a href="#all" data-toggle="tab">All</a></li>
					<li><a href="#books" class="" data-toggle="tab">Books</a></li>
					<li><a href="#furniture" data-toggle="tab">Furniture</a></li>
				</ul><!-- /.nav-tabs -->
			</div>

			<div class="tab-content outer-top-xs">
				<div class="tab-pane in active" id="all">			
					<div class="product-slider">
						<div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4">
<?php
$ret=mysqli_query($con,"select * from products");
while ($row=mysqli_fetch_array($ret)) 
{
	# code...


?>

						    	
		<div class="item item-carousel">
			<div class="products">
				
	<div class="product">		
		<div class="product-image">
			<div class="image">
				<a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>">
				<img  src="./admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>" data-echo="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>"  width="180" height="300" alt=""/></a>
			</div><!-- /.image -->			

			                        		   
		</div><!-- /.product-image -->
			
		
		<div class="product-info text-left">
			<h3 class="name"><a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($row['productName']);?></a></h3>
			<div class="rating rateit-small"></div>
			<div class="description"></div>

			<div class="product-price">	
				<span class="price">
					Tk.<?php echo htmlentities($row['productPrice']);?>			</span>
										     <span class="price-before-discount">Tk.<?php echo htmlentities($row['productPriceBeforeDiscount']);?>	</span>
									
			</div><!-- /.product-price -->
			
		</div><!-- /.product-info -->
					<div class="action"><a href="index.php?page=product&action=add&id=<?php echo $row['id']; ?>" class="btn "><i
                                                                            class="fa fa-shopping-cart inner-right-vs"></i> add to cart</a></div>
			</div><!-- /.product -->
      
			</div><!-- /.products -->
		</div><!-- /.item -->
	<?php } ?>

			</div><!-- /.home-owl-carousel -->
					</div><!-- /.product-slider -->
				</div>




	<div class="tab-pane" id="books">
					<div class="product-slider">
						<div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
		<?php
$ret=mysqli_query($con,"select * from products where category=3");
while ($row=mysqli_fetch_array($ret)) 
{
	# code...


?>

						    	
		<div class="item item-carousel">
			<div class="products">
				
	<div class="product">		
		<div class="product-image">
			<div class="image">
				<a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>">
				<img  src="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>" data-echo="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>"  width="180" height="300" alt=""></a>
			</div><!-- /.image -->			

			                        		   
		</div><!-- /.product-image -->
			
		
		<div class="product-info text-left">
			<h3 class="name"><a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($row['productName']);?></a></h3>
			<div class="rating rateit-small"></div>
			<div class="description"></div>

			<div class="product-price">	
				<span class="price">
					Tk.<?php echo htmlentities($row['productPrice']);?>			</span>
										     <span class="price-before-discount">Tk.<?php echo htmlentities($row['productPriceBeforeDiscount']);?></span>
									
			</div><!-- /.product-price -->
			
		</div><!-- /.product-info -->
					<div class="action"><a href="index.php?page=product&action=add&id=<?php echo $row['id']; ?>" class="btn"><i
                                                                            class="fa fa-shopping-cart inner-right-vs"></i> add to cart</a></div>
			</div><!-- /.product -->
      
			</div><!-- /.products -->
		</div><!-- /.item -->
	<?php } ?>
	
		
								</div><!-- /.home-owl-carousel -->
					</div><!-- /.product-slider -->
				</div>






		<div class="tab-pane" id="furniture">
					<div class="product-slider">
						<div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
		<?php
$ret=mysqli_query($con,"select * from products where category=5");
while ($row=mysqli_fetch_array($ret)) 
{
?>

						    	
		<div class="item item-carousel">
			<div class="products">
				
	<div class="product">		
		<div class="product-image">
			<div class="image">
				<a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>">
				<img  src="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>" data-echo="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>"  width="180" height="300" alt=""></a>
			</div>		

			                        		   
		</div>
			
		
		<div class="product-info text-left">
			<h3 class="name"><a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($row['productName']);?></a></h3>
			<div class="rating rateit-small"></div>
			<div class="description"></div>

			<div class="product-price">	
				<span class="price">
					Tk.<?php echo htmlentities($row['productPrice']);?>			</span>
										     <span class="price-before-discount">Tk.<?php echo htmlentities($row['productPriceBeforeDiscount']);?></span>
									
			</div>
			
		</div>
					<div class="action"><a href="index.php?page=product&action=add&id=<?php echo $row['id']; ?>" class="btn"><i
                                                                            class="fa fa-shopping-cart inner-right-vs"></i> add to cart</a></div>
			</div>
      
			</div>
		</div>
	<?php } ?>
	
		
								</div>
					</div>
				</div>
			</div>
		</div>
		    
	
	<!--Product Display ends-->
	<!--2nd-->
	<div class="sections prod-slider-small outer-top-small">
				<div class="row">
					<div class="col-md-6">
	                   <section class="section">
	                   	<h3 class="section-title new-product-title">Smart Phones</h3>
	                   	<div class="owl-carousel homepage-owl-carousel custom-carousel outer-top-xs owl-theme" data-item="2">
	   
<?php
$ret=mysqli_query($con,"select * from products where category=4 and subCategory=4");
while ($row=mysqli_fetch_array($ret)) 
{
?>



		<div class="item item-carousel">
			<div class="products">
				
	<div class="product">		
		<div class="product-image">
			<div class="image">
				<a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>"><img  src="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>" data-echo="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>"  width="180" height="300"></a>
			</div><!-- /.image -->			                        		   
		</div><!-- /.product-image -->
			
		
		<div class="product-info text-left">
			<h3 class="name"><a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($row['productName']);?></a></h3>
			<div class="rating rateit-small"></div>
			<div class="description"></div>

			<div class="product-price">	
				<span class="price">
					Tk.<?php echo htmlentities($row['productPrice']);?>			</span>
										     <span class="price-before-discount">Tk.<?php echo htmlentities($row['productPriceBeforeDiscount']);?></span>
									
			</div>
			
		</div>
					<div class="action"><a href="index.php?page=product&action=add&id=<?php echo $row['id']; ?>" class="btn"><i
                                                                            class="fa fa-shopping-cart inner-right-vs"></i> add to cart</a></div>
			</div>
			</div>
		</div>
<?php }?>

	
			                   	</div>
	                   </section>
					</div>
					<div class="col-md-6">
						<section class="section">
							<h3 class="section-title new-product-title">Laptops</h3>
		                   	<div class="owl-carousel homepage-owl-carousel custom-carousel outer-top-xs owl-theme" data-item="2">
	<?php
$ret=mysqli_query($con,"select * from products where category=4 and subCategory=6");
while ($row=mysqli_fetch_array($ret)) 
{
?>



		<div class="item item-carousel">
			<div class="products">
				
	<div class="product">		
		<div class="product-image">
			<div class="image">
				<a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>"><img  src="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>" data-echo="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>"  width="300" height="300"></a>
			</div><!-- /.image -->			                        		   
		</div><!-- /.product-image -->
			
		
		<div class="product-info text-left">
			<h3 class="name"><a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($row['productName']);?></a></h3>
			<div class="rating rateit-small"></div>
			<div class="description"></div>

			<div class="product-price">	
				<span class="price">
					Tk.<?php echo htmlentities($row['productPrice']);?>			</span>
										     <span class="price-before-discount">Tk.<?php echo htmlentities($row['productPriceBeforeDiscount']);?></span>
									
			</div>
			
		</div>
					<div class="action"><a href="index.php?page=product&action=add&id=<?php echo $row['id']; ?>" class="btn"><i
                                                                            class="fa fa-shopping-cart inner-right-vs"></i> add to cart</a></div>
			</div>imary
			</div>
		</div>
<?php }?>

		
	
				                   	</div>
	                   </section>

					</div>
				</div>
			</div>
	<!--2nd-->
	<!--3rd-->
	<section class="section featured-product inner-xs wow fadeInUp">
		<h3 class="section-title new-product-title">Fashion</h3>
		<div class="owl-carousel best-seller custom-carousel owl-theme outer-top-xs">
			<?php
$ret=mysqli_query($con,"select * from products where category=6");
while ($row=mysqli_fetch_array($ret)) 
{
	# code...


?>
				<div class="item">
					<div class="products">




												<div class="product">
							<div class="product-micro">
								<div class="row product-micro-row">
									<div class="col col-xs-6">
										<div class="product-image">
											<div class="image">
												<a href="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>" data-lightbox="image-1" data-title="<?php echo htmlentities($row['productName']);?>">
													<img src="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>" width="170" height="174" alt=""/>
													<div class="zoom-overlay"></div>
												</a>					
											</div><!-- /.image -->

										</div><!-- /.product-image -->
									</div><!-- /.col -->
									<div class="col col-xs-6">	
										<div class="product-info">
											<h3 class="name"><a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($row['productName']);?></a></h3>
											<div class="rating rateit-small"></div>
											<div class="product-price">	
												<span class="price">
													Tk.<?php echo htmlentities($row['productPrice']);?>
												</span>

											</div><!-- /.product-price -->
											<div class="action"><a href="index.php?page=product&action=add&id=<?php echo $row['id']; ?>" class="btn "><i
                                                                            class="fa fa-shopping-cart inner-right-vs"></i> add to cart</a></div>
										</div>
									</div><!-- /.col -->
								</div><!-- /.product-micro-row -->
							</div><!-- /.product-micro -->
						</div>


											</div>
				</div><?php } ?>
				
							</div>
		</section>
	<!--3rd-->
         </div> 
        </div>
    </div>
	<script src="assets/js/jquery-1.11.1.min.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>


	
    
<script>
$(document).ready(function () {
$('.home-owl-carousel').each(function(){

var owl = $(this);
var  itemPerLine = owl.data('item');
if(!itemPerLine){
	itemPerLine = 4;
}
owl.owlCarousel({
	items : itemPerLine,
	itemsTablet:[768,2],
	navigation : true,
	pagination : false,

	navigationText: ["", ""]
});
});

$('.homepage-owl-carousel').each(function(){

var owl = $(this);
var  itemPerLine = owl.data('item');
if(!itemPerLine){
	itemPerLine = 4;
}
owl.owlCarousel({
	items : itemPerLine,
	itemsTablet:[768,2],
	itemsDesktop : [1199,2],
	navigation : true,
	pagination : false,

	navigationText: ["", ""]
});
});

$(".best-seller").owlCarousel({
    items : 3,
    navigation : true,
    itemsDesktopSmall :[979,2],
    itemsDesktop : [1199,2],
    slideSpeed : 300,
    pagination: false,
    paginationSpeed : 400,
    navigationText: ["", ""]
});


});
</script>
	
    
    

	<!-- For demo purposes – can be removed on production -->
	
	
	
 

</body>
     <footer>
     <?php include('includes/footer.php');?>
    </footer>

</html>