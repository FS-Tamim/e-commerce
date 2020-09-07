<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e-commerce</title>       
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	
	
	<style>
.headermain{	
    background-color: #181818;	
}
nav {
	background-color: #181818;
	position: relative;	 
	margin: 0;
	color: #FFD300;
}
.nav-link:hover{
	color: #F9A602 !important;
	transform: scale(1.1);
}
nav ul li{
	margin: 5px;
}
nav ul li:hover{
	color: #F9A602;
}
a{
	color: #FFD300;
  }
.navbar-toggler-icon {
    background-image: url( 
    "data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgb(255,211,0)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E"); 
  }
.search-bar{
    width:40vw !important;
    border:2px solid  #181818!important;
    border-top-right-radius:0!important;
    border-bottom-right-radius:0!important;
}
.logo{
	width: 250px;
}
.search-bar:focus {
    outline: #FFD300 !important;
}
.search{
	margin-top: -2%;
}
.search-btn{
	background-color: #FFD300;
	color: #181818;
	border-top-left-radius:0!important;
    border-bottom-left-radius:0!important;
}
.search-bar:focus {
    outline: none !important;
    border:1px solid #181818;
    box-shadow: 0 0 7px #FFD300;
}
.dropdown-menu{
	background-color: #181818;
}
.dropdown-item{
	color: #FFD300;
}
</style>


	    
</head>

<body>
<header>

<div class="headermain">
<div class="container">
<nav class="navbar navbar-expand-lg">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="fas fa-sliders-v"></i>
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    
  <ul class="navbar-nav ml-auto">
  <li class="nav-item"> 
		  <a class="nav-link" href="#"><i class="fas fa-store"></i> Sell 
		  </a> 
	  </li>
	  <li class="nav-item"> 
		  <a class="nav-link" href="#"><i class="fas fa-truck"></i> Track Order 
		  </a> 
	  </li>  
	  <li class="nav-item"> 
		  <a class="nav-link" href="#"><i class="fas fa-cart-arrow-down"></i> My Cart 
		  </a> 
	  </li> 
	  <li class="nav-item"> 
		  <a class="nav-link" href="#"><i class="fas fa-heart"></i> Wishlist</a> 
	  </li> 
	  
<?php if(strlen($_SESSION['login']))
    {   ?>
	  <li class="nav-item dropdown"> 
	  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	  <i class="fas fa-user"></i><?php echo htmlentities($_SESSION['username']); ?>
		</a>
		<div class="dropdown-menu" aria-labelledby="navbarDropdown">
		  <a class="dropdown-item" href="logout.php">log out</a>
         
        </div>
		<?php }else{ ?>
		
		<li class="nav-item dropdown"> 
	  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	  <i class="fas fa-user"></i> account
		</a>
		
		<div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="login.php">Login</a>
		  <a class="dropdown-item" href="signup.php">Sign Up</a>
		  <?php }
 ?>
		  
         
        </div>
	  </li> 

  </ul> 
    
  </div>
</nav>

</div>
</div>
<div class="container search">
	<div class="row">
	<div>
		<img class="logo" src="https://1000logos.net/wp-content/uploads/2018/08/Alibaba-logo-768x432.png" alt="">
	</div>
	<form class="form-inline my-2 mr-auto my-lg-0">
      <input class="form-control search-bar ml-4" type="search" placeholder="Search" aria-label="Search">
	  <button class="btn btn-outline-warning my-2 my-sm-0 search-btn" type="submit"><i class="fas fa-search"></i></button>
	  <i class="fas fa-cart-arrow-down ml-5"></i>
	</form>
	</div>
</div>