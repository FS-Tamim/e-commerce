<?php
session_start();
include('../includes/config.php');


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin| Users log</title>
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
                                <h3>Manage Users</h3>
                            </div>
                            <div class="module-body table">


                                <table cellpadding="0" cellspacing="0"
                                    class="datatable-1 table table-bordered  display" width="100%">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th> User Email</th>
                                            <th>User IP </th>
                                            <th>Login Time</th>
                                            <th>Logout Time </th>
                                            <th>Status </th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php $query=mysqli_query($con,"select * from userlog");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>
                                        <tr>
                                            <td><?php echo htmlentities($cnt);?></td>
                                            <td><?php echo htmlentities($row['userEmail']);?></td>
                                            <td><?php echo htmlentities($row['userip']);?></td>
                                            <td> <?php echo htmlentities($row['loginTime']);?></td>
                                            <td><?php echo htmlentities($row['logout']); ?></td>
                                            <td><?php $st=$row['status'];

if($st==1)
{
	echo "Successful";
}
else
{
	echo "Failed";
}
										 ?></td>


                                            <?php $cnt=$cnt+1; } ?>

                                </table>
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