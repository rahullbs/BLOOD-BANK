

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Bloodbank</title>
  <?php include('admin/function.php'); ?>

  <!-- Custom fonts for this template-->
  <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet"> 
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">


  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-dark sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fa fa-heartbeat" color="red"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Bloodbank <sup>2.0</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fa fa-home"></i>
          <span>Home</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">
      <li class="nav-item active">
    
    <a class="nav-link">
   <button type="button" class="btn btn-danger" data-toggle="modal"data-target="#donars_reg"> <i class="fa fa-plus-square"></i><span>Donar-registration</span></button>

</a> </li>
      <hr class="sidebar-divider">
      <li class="nav-item active">
        <a class="nav-link">
        <button type="button" class="btn btn-danger" data-toggle="modal"data-target="#donars_req">
          <i class="fa fa-paper-plane"></i>
          <span>&nbsp;&nbsp;Send-request&nbsp;&nbsp;&nbsp;&nbsp;</span></button></a>
      </li>
      <hr class="sidebar-divider">
      <li class="nav-item active">
        <a class="nav-link" href="viewrequest.php">
        <button type="button" class="btn btn-danger" data-toggle="modal">
        <i class="fa fa-medkit"></i>
          <span>&nbsp;&nbsp;View-request&nbsp;&nbsp;&nbsp;&nbsp;</span></button></a>
          
          
      </li>
      <hr class="sidebar-divider">
      <li class="nav-item active">
        <a class="nav-link" href="camps.php">
        <button type="button" class="btn btn-danger" data-toggle="modal">
        <i class="fa fa-heart "></i>
          <span>&nbsp;&nbsp;Campus-cliks&nbsp;&nbsp;&nbsp;&nbsp;</span></button></a>
          
</li>
    

      <!-- Nav Item - Utilities Collapse Menu -->
      

      <!-- Divider -->
      <hr class="sidebar-divider">
      <li class="nav-item active">
     
      <a class="nav-link"href="login.php">
       
       <i class="fa fa-cogs"></i>
         <span>&nbsp;&nbsp;Donor-Login&nbsp;&nbsp;&nbsp;&nbsp;</span></a>
        
    
     
      </li>
      <hr class="sidebar-divider">
      <li class="nav-item active">
        <a class="nav-link" href="search.php">
          <i class="fa fa-search"></i>
          <span>Search</span></a>
      </li>
      <hr class="sidebar-divider">
      <li class="nav-item active">
        <a class="nav-link" href="index.html">
          <i class="fa fa-phone"></i>
          <span>Contact-us</span></a>
      </li>
      <hr class="sidebar-divider">
      <li class="nav-item active">
        <a class="nav-link" href="index.html">
          <i class="fa fa-exclamation-triangle"></i>
          <span>About</span></a>
      </li>
   

     
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Login Screens:</h6>
            <a class="collapse-item" href="login.html">Login</a>
            <a class="collapse-item" href="register.html">Register</a>
            <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
            <div class="collapse-divider"></div>
            <h6 class="collapse-header">Other Pages:</h6>
            <a class="collapse-item" href="404.html">404 Page</a>
            <a class="collapse-item" href="blank.html">Blank Page</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Charts -->
      

      <!-- Nav Item - Tables -->
     

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
     

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link-danger d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
       
          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               
                <!-- Counter - Alerts -->
               
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Alerts Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-file-alt text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 12, 2019</div>
                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-success">
                      <i class="fas fa-donate text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 7, 2019</div>
                    $290.29 has been deposited into your account!
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-warning">
                      <i class="fas fa-exclamation-triangle text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 2, 2019</div>
                    Spending Alert: We've noticed unusually high spending for your account.
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
              </div>
            </li>

            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               
                <!-- Counter - Messages -->
             
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"></span>
              
              </a>
              <!-- Dropdown - User Information -->
             
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"></h1>
            
          </div>
          <div class="container-fluid">
            
			<form method="post" enctype="multipart/form-data">
			<div class="card">
  <h5 class="card-header">Select Blood Group</h5>
  <div class="card-body bg-dark">
  
	
	<select  class="btn btn-danger" name="s2" required><option value="">Select</option>

<?php
$cn=makeconnection();
$s="select * from bloodgroup";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	while($data=mysqli_fetch_array($result))
	{
		if(isset($_POST["show"])&& $data[0]==$_POST["s2"])
		{
			echo "<option value=$data[0] selected>$data[1]</option>";
		}
		else
		{
			echo "<option value=$data[0]>$data[1]</option>";
		}
		
		
		
	}
	mysqli_close($cn);

?>



</select>

<?php
if(isset($_POST["show"]))
{
	$cn=makeconnection();
$s="select * from bloodgroup where bg_id='" .$_POST["s2"] ."'";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	$data=mysqli_fetch_array($result);
	$bg_id=$data[0];
	$bg_name=$data[1];
	
		
		
	mysqli_close($cn);
}
?><br><br>
<input type="submit" class="btn btn-danger" value="Search.." name="sbmts" >
  

</form>
  
    <div>
</div>
</div>


        <!-- /.container-fluid -->


      <!-- Footer -->
      
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            
          </div>
        </div>
      
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

 
  <!--donar registration-->
  <div class="modal fade" id="donars_reg" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add donars details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
       
      <form method="post" enctype="multipart/form-data"name="sbmt">
      <div class="modal-body">
    
      <div class="form-group">
         <label>Donor Name:</label><br>
         <input type="text" name="t1" required="required" class="form-control" pattern="[a-zA-Z _]{4,15}" title="please enter only character  between 4 to 15 for donor name" />

      </div>
      <div class="form-group">
      
         <label>Gender:</label><br>
     <input name="r1" type="radio" value="male" checked="checked">Male<input name="r1" type="radio" value="female" >Female
      </div>
      <div class="form-group">
         <label>Age:</label><br>
       <input type="number" name="t2" required="required" class="form-control"pattern="[0-9]{2,2}" title="please enter only  numbers between 2 to 2 for age" />
      </div>
      <div class="form-group">
         <label>  Mobile No:</label><br>
       <input type="number" name="t3" required="required"class="form-control" pattern="[0-9]{10,11}" title="please enter only numbers between 10 to 11 for mobile no." />
      </div>
      <div class="form-group">
         <label>bloodgroup:</label><br>
         <select name="t4" required class="form-control"><option value="select">select</option>
         <?php
$cn=makeconnection();
$s="select * from bloodgroup";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	while($data=mysqli_fetch_array($result))
	{
		if(isset($_POST["show"])&& $data[0]==$_POST["t4"])
		{
			echo "<option value=$data[0] selected>$data[1]</option>";
		}
		else
		{
			echo "<option value=$data[0]>$data[1]</option>";
		}
		
		
		
	}
	mysqli_close($cn);

?></select>
         
      </div>
      <div class="form-group">
         <label> E-Mail:</label><br>
        <input type="email" name="t5" required="required"class="form-control" />
      </div>
      <div class="form-group">
         <label>Password:</label><br>
<input type="password" name="t6" required="required" class="form-control"pattern="[a-zA-Z0-9]{2,10}" title="please enter only character or numbers between 2 to 10 for password" /></td></tr>
      </div>
      <div class="form-group">
         <label>Confirm Password:</label><br>
         <input type="password" name="t7" required="required"class="form-control" pattern="[a-zA-Z0-9 ]{2,10}" title="please enter only character or numbers between 2 to 10 for password" /></td></tr>
      </div>
      <div class="form-group">
  <label> Uplode Pic:</label><br><input type="file" name="t8"class="form-control">
      </div>
     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-dismiss="modal">Cancel</button>
       <input type="submit" value="Register" name="sbmt"class="btn btn-dark">
      </div>
      </form>
    </div>
  </div>
</div>


<!--request-->
<div class="modal fade" id="donars_req" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><center>Request Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        
     
      </div>
    
      <div class="modal-body">
      <form method="post" enctype="multipart/form-data">
    
      <div class="form-group">
         <label>Name:</label><br>
        <input type="text" name="t1" required="required"class="form-control" pattern="[a-zA-Z _]{5,15}" title="please enter only character  between 5 to 15 for donor name" />      </div>
      <div class="form-group">
         <label> Gender:</label><br>
      <input name="r1" type="radio" value="male" checked="checked">Male<input name="r1" type="radio" value="female">Female
      <div class="form-group">
         <label> Age:</label><br>
        <input type="number" name="t2"class="form-control" required="required" pattern="[0-9]{2,2}" title="please enter only  numbers between 2 to 2 for age" />
      </div>
      <div class="form-group">
         <label>Mobile No</label><br>
 <input type="number" name="t3" class="form-control"  required="required" pattern="[0-9]{10,12}" title="please enter only numbers between 10 to 12 for mobile no." />
      </div>
      <div class="form-group">
         <label>Select Blood Group:</label><br>
<select name="t4" class="form-control" required><option value="">Select</option>
<?php
$cn=makeconnection();
$s="select * from bloodgroup";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	while($data=mysqli_fetch_array($result))
	{
		if(isset($_POST["show"])&& $data[0]==$_POST["t4"])
		{
			echo "<option value=$data[0] selected>$data[1]</option>";
		}
		else
		{
			echo "<option value=$data[0]>$data[1]</option>";
		}
		
		
		
	}
	mysqli_close($cn);

?>
</select>

      </div>
      <div class="form-group">
         <label>E-Mail</label><br>
    <input type="email" name="t5"class="form-control" required="required" />
      </div>
      <div class="form-group">
         <label>Till Required Date:</label><br>
         <input type="date" name="year"c lass="form-control"class="form-control" placeholder ="">
      </div>
      <div class="form-group">
         <label>Detail:</label><br>
         </td><td><textarea name="t7"class="form-control"></textarea>
      </div>
      </div>
      <div class="modal-footer">
     <center>
      <input type="submit"name="sbmt3"value="submit"class="btn btn-dark"></center>
      </div>
      </form>
    </div>
  </div>
</div>
<?php
if(isset($_POST["sbmt3"])) 
{
			
		
	$cn=makeconnection();
		
			$s="insert into requestes(name,gender,age,mobile,bgroup,email,reqdate,detail) values('" . $_POST["t1"] ."','" . $_POST["r1"] . "','" . $_POST["t2"] . "','" . $_POST["t3"] . "','" . $_POST["t4"] . "','" . $_POST["t5"] . "','" . $_POST["year"] . "','" .  $_POST["t7"]  ."')";
			
			
	$q=mysqli_query($cn,$s);
	mysqli_close($cn);
	if($q>0)
	{
	echo "<script>alert('Record Save');</script>";
	}
	else
	{echo "<script>alert('Saving Record Failed');</script>";
	}
		
		}	
	

?> 





      <!-- Footer -->
      
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            
          </div>
        </div>
      
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <?php
if(isset($_POST["sbmt"])) 
{
$target_dir = "doner_pic/";
$target_file = $target_dir . basename($_FILES["t8"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image

    $check = getimagesize($_FILES["t8"]["tmp_name"]);
    if($check !== false) {
      //  echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
		?>
		<script>
		alert("File is not an image.");
		</script>
	    <?php
        $uploadOk = 0;
    }

// Check if file already exists
if (file_exists($target_file)) {
	?>
		<script>
		alert("Sorry, file already exists.");
		</script>
	    <?php
     $uploadOk = 0;
}
//aloow certain file formats
	if($imageFileType != "jpg" && $imageFileType !="png" && $imageFileType !="jpeg" && $imageFileType !="gif"){
	    ?>
		<script>
		alert("sorry, only jpg, jpeg, Png & gif files are allowed.");
		</script>
	    <?php
		$uploadok=0;
	}else{
		if(move_uploaded_file($_FILES["t8"]["tmp_name"], $target_file)){
			$cn=makeconnection();
			$s="insert into donarregistration(name,gender,age,mobile,b_id,email,pwd,pic) values('" . $_POST["t1"] ."','" . $_POST["r1"] . "','" . $_POST["t2"] . "','" . $_POST["t3"] . "','" . $_POST["t4"] . "','" . $_POST["t5"] . "','" . $_POST["t6"] .  "','" . basename($_FILES["t8"]["name"])  ."')";
			
			//$s="INSERT INTO donarregistration(name,gender,age,mobile,b_id,email,pswd,pic) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9])"
	mysqli_query($cn,$s);
	mysqli_close($cn);
	if($s>0)
	{
	?><script>alert('Record Save');</script><?php
	}
	else
	{?><script>alert('Record save');</script><?php
	}
		} else{
			?><script>alert("sorry there was an error uploading your file.");</script><?php
			
		}	
	
	}
}
?> 
<div class="modal fade" id="login_page" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
       
      <form method="post" enctype="multipart/form-data"name="sbmtl">
      <div class="modal-body">
    
      <div class="form-group">
         <label>E-mail:</label><br>
         <input type="email" name="t1" required="required"/>

      </div>
      <div class="form-group">
      
         <label>Password:</label><br>
         <input type="password"name="t2"  required="required" pattern="[a-zA-Z0-9]{2,10}" title="please enter only character or numbers between 2 to 10 for password"  />
      </div>
      <div class="modal-footer">
        
       <input type="submit" value="login" name="sbmtl"class="btn btn-dark">
      </div>

      </form>
    </div>
  </div>
</div>

<?php

$_SESSION['donorstatus']="";

if(isset($_POST["sbmtl"])) 
{
	
	$cn=makeconnection();

			$s="select *from donarregistration where email='" . $_POST["t1"] . "' and pwd='" .$_POST["t2"] . "'";
			
	$q=mysqli_query($cn,$s);
	$r=mysqli_num_rows($q);
	mysqli_close($cn);
	if($r>0)
	{
		$_SESSION["email"]=$_POST["t1"];
       $_SESSION['donorstatus']="yes";
//header("location:donor/index.php");
echo "<script>location.replace('donor/index.php');</script>";
	}
	else
	{
		echo "<script>alert('Invalid User Name Or Password');</script>";
	}
		
		}	
?> 
<?php 
if(isset($_POST["sbmts"]))
{
	//header("location:result.php?bg=".$_POST["s2"]);
	echo "<script>location.replace('result.php?bg=". $_POST["s2"] ."');</script>";
}

?>





  
</body>

</html>
<?php 
include('scripts.php');?>
