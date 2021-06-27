<?php if(!isset($_SESSION)) { session_start(); } ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Bloodbank</title>


  <!-- Custom fonts for this template-->
  <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet"> 
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>
<body id="page-top">


<?php include('function.php'); ?>
<div class="col-12 col-md-12">
 
 <div class="container-fluid col-12 col-md-12">
            <div class="row">
            <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
            <div class="modal-body">
	
	
     <form method="post" enctype="multipart/form-data">
	 <div class="form-group"><h1 style="font-family: 'Itim', cursive;color:black;">ADMIN LOGIN</h1></div>
	<div class="form-group">
	<label>User Name</label><br><input type="text" name="t1" /></div>
	<div class="form-group">
<label>Password</label><br><input type="password"name="t2" />
</div>

<div class="modal-footer">
<input type="submit" value="Log In" name="sbmt"/>
</td></tr>
</div>                
</div>


		
</form>

</div>
</div>
   </div>
</div>
</div>
</div>


<?php
$_SESSION['loginstatus']="";
if(isset($_POST["sbmt"])) 
{
	
	// $cn=mysqli_connect("localhost","root","","bloo");		
	$cn=mysqli_connect("sql104.epizy.com","epiz_28882077","Ym47OhIBki0b","epiz_28882077_bloo");

			$s="select *from users where username='" . $_POST["t1"] . "' and pwd='" .$_POST["t2"] . "'";
			
	$q=mysqli_query($cn,$s);
	$r=mysqli_num_rows($q);
	$data=mysqli_fetch_array($q);
	
	
	mysqli_close($cn);
	if($r>0)
	{
		$_SESSION["username"]=$_POST["t1"];
		$_SESSION["usertype"]=$data[2];
		$_SESSION['loginstatus']="yes";

header("location:index.php");
	}
	else
	{
		echo "<script>alert('Invalid User Name Or Password');</script>";
	}
		
		}	
	

?> 
</body>
</html>