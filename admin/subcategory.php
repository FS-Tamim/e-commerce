<?php
session_start();
include('../includes/config.php');

if(isset($_POST['submit']))
{
	$category=$_POST['category'];
	$subcat=$_POST['subcategory'];
$sql=mysqli_query($con,"insert into subcategory(categoryid,subcategory) values('$category','$subcat')");
$_SESSION['msg']="SubCategory Created !!";

}

if(isset($_GET['del']))
		  {
		          mysqli_query($con,"delete from subcategory where id = '".$_GET['id']."'");
                  $_SESSION['delmsg']="SubCategory deleted !!";
		  }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin| SubCategory</title>
    <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link type="text/css" href="css/theme.css" rel="stylesheet">
    <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
    <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
        rel='stylesheet'>
        <style>
        .module-body{
            background-color: #282828 ;
            color: orange;
            font-weight: bold;
        }
        .module-body{
            background-color: #282828 ;
            
        }
        label{
            color: orange;
            font-weight: bold !important;
        }
        input,textarea{
            background-color: #404040 !important;
            color: white !important;
            text-decoration: none !important;
        }
         .table,.module-head,th,td{
            background-color:#303030;
            color: white;
        }
        select{
            text-decoration: none !important;
            background-color: #404040 !important;
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
        .control-group .controls  input:focus {
                outline: none !important;
                border:1px solid #181818;
                box-shadow: 0 0 2px #FFD300;
            }
        .control-group .controls .span8 .option{
            text-decoration: none !important;
            outline: none !important;
                border:1px solid #181818;
                box-shadow: 0 0 2px #FFD300;
            
        }
        .btn{
           background-color: #FFD300;
           font-weight: bold !important;
           color: #181818;
        }
       .btn:hover{
            background-color: #ffdb4d;
        }
        .control-group{
    margin-bottom: 1.5% !important;
}

    </style>
</head>

<body>
    <header>
        <?php include('include/header.php');?>
    </header>
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <?php include('include/sidebar.php');?>
                <div class="span9">
                    <div class="content">

                        <div class="module">
                            <div class="module-head">
                                <h3>Sub Category</h3>
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


                                <?php if(isset($_GET['del']))
{?>
                                <div class="alert alert-error">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong>Oh snap!</strong>
                                    <?php echo htmlentities($_SESSION['delmsg']);?><?php echo htmlentities($_SESSION['delmsg']="");?>
                                </div>
                                <?php } ?>

                                <br />

                                <form class="form-horizontal row-fluid" name="subcategory" method="post">

                                    <div class="control-group">
                                        <label class="control-label" for="basicinput">Category</label>
                                        <div class="controls">
                                            <select name="category" class="span8 tip" required>
                                                <option value="">Select Category</option>
                                              <div class="option">
                                              <?php $query=mysqli_query($con,"select * from category");
while($row=mysqli_fetch_array($query))
{?>
                                              </div>

                                                <option value="<?php echo $row['id'];?>">
                                                    <?php echo $row['categoryName'];?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>


                                    <div class="control-group">
                                        <label class="control-label" for="basicinput">SubCategory Name</label>
                                        <div class="controls">
                                            <input type="text" placeholder="Enter SubCategory Name" name="subcategory"
                                                class="span8 tip" required>
                                        </div>
                                    </div>



                                    <div class="control-group">
                                        <div class="controls">
                                            <button type="submit" name="submit" class="btn">Create</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>


                        <div class="module">
                            <div class="module-head">
                                <h3>Sub Category</h3>
                            </div>
                            <div class="module-body table">
                                <table cellpadding="0" cellspacing="0" border="0"
                                    class="datatable-1 table table-bordered  display" width="100%">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Category</th>
                                            <th>Description</th>

                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php $query=mysqli_query($con,"select subcategory.id,category.categoryName,subcategory.subcategory from subcategory join category on category.id=subcategory.categoryid");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>
                                        <tr>
                                            <td><?php echo htmlentities($cnt);?></td>
                                            <td><?php echo htmlentities($row['categoryName']);?></td>
                                            <td><?php echo htmlentities($row['subcategory']);?></td>

                                            <td>
                                                <a href="edit-subcategory.php?id=<?php echo $row['id']?>"><i
                                                        class="icon-edit"></i></a>
                                                <a href="subcategory.php?id=<?php echo $row['id']?>&del=delete"
                                                    onClick="return confirm('Are you sure you want to delete?')"><i
                                                        class="icon-remove-sign"></i></a>
                                            </td>
                                        </tr>
                                        <?php $cnt=$cnt+1; } ?>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
 </div>
 
    <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
</body>
<footer>
    <?php include('include/footer.php');?>
</footer>