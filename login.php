<style>
.logincontainer{
    background-color: #181818;
    width:50% !important;
    margin-top: 1%;
    margin-bottom: 3%;
    padding:10px;
    border-radius: 5px;
    box-shadow: 0 0 3px  gray;
}
.logincontainer form{
    padding: 3%;
}
.logincontainer label,h3{
    color: #FFD300;
}
.logincontainer input{
    background-color: #282828;
    color: white;
}
.logincontainer input:focus{
    background-color: #282828;
    color: white;
    
}
.logincontainer input:focus {
    outline: none !important;
    border:1px solid #181818;
    box-shadow: 0 0 2px #FFD300;
}
.botton-line{
    color: white;
}
.botton-line a:hover{
    color: yellow;
}


</style>


<header>
<?php include('includes/top-header.php');?>
</header>

<div class="container logincontainer">
    <h3 class="text-center">Welcome to Bazar! Please login</h3>
<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Remember Me</label>
  </div>
  <button type="submit" class="btn btn-warning">Submit</button>
</form>
<p class="botton-line text-center">New in bazar!!   <a href="signup.php" >Register</a>  now</p>
</div>

<footer>
<?php include('includes/footer.php');?>
</footer>








