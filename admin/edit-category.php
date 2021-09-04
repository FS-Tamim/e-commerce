<?php
session_start();
include('../includes/config.php');



if(isset($_POST['submit']))
{
	$category=$_POST['category'];
	$description=$_POST['description'];
	$id=intval($_GET['id']);
$sql=mysqli_query($con,"update category set categoryName='$category',categoryDescription='$description',updationDate='$currentTime' where id='$id'");
$_SESSION['msg']="Category Updated !!";

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin| Category</title>
    <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link type="text/css" href="css/theme.css" rel="stylesheet">
    <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
    <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
        rel='stylesheet'>
        <style>
            
         .table,.module-head,th,td{
            background-color:#303030;
            color: white;
        }
        th:hover{
            background-color: #383838;
        }
        .module-head h3{
            color: white !important;
            font-weight: bold;
            font-size: 30px;
        }
        .icon-edit{
            color: green;
        }
        .icon-remove-sign{
            color: red;
        }
        .control-group{
    margin-bottom: 1.5% !important;
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
                                <h3>Category</h3>
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
$query=mysqli_query($con,"select * from category where id='$id'");
while($row=mysqli_fetch_array($query))
{
?>
                                    <div class="control-group">
                                        <label class="control-label" for="basicinput">Category Name</label>
                                        <div class="controls">
                                            <input type="text" placeholder="Enter category Name" name="category"
                                                value="<?php echo  htmlentities($row['categoryName']);?>"
                                                class="span8 tip" required>
                                        </div>
                                    </div>


                                    <div class="control-group">
                                        <label class="control-label" for="basicinput">Description</label>
                                        <div class="controls">
                                            <textarea class="span8" name="description"
                                                rows="5"><?php echo  htmlentities($row['categoryDescription']);?></textarea>
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
                    <!--/.content-->
                </div>
                <!--/.span9-->
            </div>
        </div>
        <!--/.container-->
    </div>
    <!--/.wrapper-->

    <?php include('include/footer.php');?>

    <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
    
</body>