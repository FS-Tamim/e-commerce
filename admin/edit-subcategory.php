<?php
session_start();
include('../includes/config.php');



if(isset($_POST['submit']))
{
	$category=$_POST['category'];
	$subcat=$_POST['subcategory'];
	$id=intval($_GET['id']);
$sql=mysqli_query($con,"update subcategory set categoryid='$category',subcategory='$subcat' where id='$id'");
$_SESSION['msg']="Sub-Category Updated !!";

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin| Edit SubCategory</title>
    <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link type="text/css" href="css/theme.css" rel="stylesheet">
    <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
    <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
        rel='stylesheet'>
    <style>
        .module-head h3{
            color: white !important;
            font-weight: bold;
            font-size: 30px;
        }
        .module-head{
            background-color: #282828;
        }
            .module-body{
                background-color: #282828 ;
                color: orange;
                font-weight: bold;
            }
            .module-body{
                background-color: #282828 ;
                
            }
            .control-group .controls input:focus {
                outline: none !important;
                border:1px solid #181818;
                box-shadow: 0 0 2px #FFD300;
            }
            input,option,select{
                background-color: #404040 !important;
                color: white !important;
            }
            .control-group{
            margin-bottom: 1.5% !important;
       }   
       .btn{
    background-color: #FFD300;
    font-weight: bold !important;
    color: #181818;
}
.btn:hover{
    background-color: #ffdb4d;
}
</style>
</head>
<body>
    <?php include('include/header.php');?>
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <?php include('include/sidebar.php');?>
                <div class="span9">
                    <div class="content">
                        <div class="module">
                            <div class="module-head">
                                <h3>Edit SubCategory</h3>
                            </div>
                            <div class="module-body">
                                <?php if(isset($_POST['submit']))
{?>
                                <div class="alert alert-success">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong>Well done!</strong>
                                    <?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?>
                                </div>
                                <?php } ?>
                                <br />
                                <form class="form-horizontal row-fluid" name="Category" method="post">
                                    <?php
$id=intval($_GET['id']);
$query=mysqli_query($con,"select category.id,category.categoryName,subcategory.subcategory from subcategory join category on category.id=subcategory.categoryid where subcategory.id='$id'");
while($row=mysqli_fetch_array($query))
{
?>
                                    <div class="control-group">
                                        <label class="control-label" for="basicinput">Category</label>
                                        <div class="controls">
                                            <select name="category" class="span8 tip" required>
                                                <option value="<?php echo htmlentities($row['id']);?>">
                                                    <?php echo htmlentities($catname=$row['categoryName']);?></option>
                                                <?php $ret=mysqli_query($con,"select * from category");
while($result=mysqli_fetch_array($ret))
{
echo $cat=$result['categoryName'];
if($catname==$cat)
{
	continue;
}
else{
?>
                                                <option value="<?php echo $result['id'];?>">
                                                    <?php echo $result['categoryName'];?></option>
                                                <?php } }?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="basicinput">SubCategory Name</label>
                                        <div class="controls">
                                            <input type="text" placeholder="Enter category Name" name="subcategory"
                                                value="<?php echo  htmlentities($row['subcategory']);?>"
                                                class="span8 tip" required>
                                        </div>
                                    </div>
                                    <?php } ?>

                                    <div class="control-group">
                                        <div class="controls">
                                            <button type="submit" name="submit" class="btn">Update</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('include/footer.php');?>
    <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
</body>