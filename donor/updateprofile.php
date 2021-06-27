<?php if(!isset($_SESSION)) {session_start();}  ?>
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

<body id="page-top"style="backgound-color:black;">

<?php

if($_SESSION['donorstatus']=="")
{
	header("location:../login.php");
}
?>
<?php include('function.php'); ?>
<?php
			
	// $cn=mysqli_connect("localhost","root","","bloo");
  $cn=mysqli_connect("sql104.epizy.com","epiz_28882077","Ym47OhIBki0b","epiz_28882077_bloo");
			$s="select * from donarregistration where email='" . $_SESSION["email"] . "'";
			
	$q=mysqli_query($cn,$s);
	$r=mysqli_num_rows($q);
	
	$data=mysqli_fetch_array($q);
	$name=$data[1];
	$gender=$data[2];
	$age=$data[3];
	$mobile=$data[4];
	$pic=$data[8];
	//echo $name;
	mysqli_close($cn);
	
		
		
	
	

?> 

  <!-- Page Wrapper -->
  <div id="wrapper"style="backgound-color:black;">

    <!-- Sidebar -->
    <ul style="backgound:black;"class="navbar-nav bg-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fa fa-heartbeat" color="red"></i>
        </div>
		
        <div class="sidebar-brand-text mx-3" style="font-family: 'Itim', cursive;">USER_PROFILE</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

    
      <!-- Divider -->
      <hr class="sidebar-divider">
      <li class="nav-item active ">
    
	  <a  class="nav-link"class="btn btn-danger" href="chngpwd.php"style="font-family: 'Itim', cursive;">Change Password</a>
</a> 
      <hr class="sidebar-divider">
      <li class="nav-item active">
        <a class="nav-link" href="updateprofile.php"style="font-family: 'Itim', cursive;">Update Profile</a>
        
</li>
<hr class="sidebar-divider">
      <li class="nav-item active">
        <a class="nav-link"href="blooddonated.php"style="font-family: 'Itim', cursive;">Blood Donated</a>
        
         
          
</li>
    

     

      <!-- Nav Item - Utilities Collapse Menu
	  
	
		<ul class="nav">
			
			<li><a </li>            
			<li></li>
            <li><a </a></li>
            <li><a </li>
            <li></li>
</ul>
       -->

      <!-- Divider -->
      <hr class="sidebar-divider">
      <li class="nav-item active">
      <a class="nav-link"href="viewdonations.php"style="font-family: 'Itim', cursive;">View Donations</a>
         
     
      </li>
      <hr class="sidebar-divider">
      <li class="nav-item active">
        <a class="nav-link" href="viewrequest.php"style="font-family: 'Itim', cursive;">View Requestes</a>
        
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

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-warning border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-warning" type="button">
                    
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

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
            <li class="nav-item ">
            <li class="nav-item active">
        <a class="nav-link"href="logout.php"><b style="font-family: 'Itim', cursive;color:black;">log Out</b><i class="fa fa-signout"></i></a>
       
      </li>
      
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
           
          </div>
         
         
          <div class="container-fluid">
            <div class="row">
            <div class="modal-body">


  

 
            <form method="post">

  <div class="card-img">
   <img src="../doner_pic/<?php echo @$pic; ?>" width="50%" height="50%" style="margin:auto;border-radius:10px;" /></div>



      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="font-family: 'Itim', cursive;">Update details</h5>
       
      </div>
<div class="card-content">
	<div class="form-group">
  <label  style="font-family: 'Itim', cursive;">  Name:</label><br>
    <input type="text"  style="font-family: 'Itim', cursive;" name="t1" value="<?php echo @$name;  ?>"  required="required" pattern="[a-zA-Z _]{5,15}" title="please enter only character  between 5 to 15 for  name" />
      </div>
	  
	<div class="form-group">
  <label  style="font-family: 'Itim', cursive;"> Gender:</label><br>
<input name="r1" type="radio" value="male"  <?php if($gender=="male"){ echo "checked" ;}  ?>> <label style="font-family: 'Itim', cursive;">Male</label><input name="r1"type="radio" value="female" <?php if($gender=="female"){ echo "checked" ;}  ?> /><label style="font-family: 'Itim', cursive;"> Female</label>
        </div>
		  
	<div class="form-group">
  <label style="font-family: 'Itim', cursive;">Age:</label><br>
        <input type="text" name="t2"  required="required" pattern="[0-9]{2,2}" title="please enter only numbers  between 2 to 2 for age" value="<?php echo @$age;?>" /></td></tr>
        </div>
				  
	<div class="form-group">
  <label style="font-family: 'Itim', cursive;">Mobile No:</label><br>
          <input type="text" name="t3" value="<?php echo @$mobile;?>"  pattern="[0-9]{10,12}" title="please enter only numbers between 10 to 12 for mobile no." /></td></tr>
         </div>
         <div class="modal-footer"><a href="index.php">
	<input style="font-family: 'Itim', cursive;" type="submit" class="btn btn-warning" value="Update" name="sbmt" /></a>
        </div>
       </div>
    </div>
		</form>
</div>
 </div>


<?php
	
	if(isset($_POST["sbmt"])) 
	{
		$cn=makeconnection();
		
		
					$s="update donarregistration set name='" .$_POST["t1"]. "' ,gender='" .$_POST["r1"]."' , age='" .$_POST["t2"]. "',mobile='" .$_POST["t3"]. "' where email='" .$_SESSION["email"]. "'";
		
$i=mysqli_query($cn,$s);
	mysqli_close($cn);
	echo "<script>alert('Record update');</script>";
	
}
?> 

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

 
  
  
</body>

</html>
<?php include('scripts.php');?>

	


