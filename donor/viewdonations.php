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
	//header("location:../login.php");
	echo "<script>location.replace('donor/index.php');</script>";
}
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
		
        <div class="sidebar-brand-text mx-3"style="font-family: 'Itim', cursive;">USER_PROFILE</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <!-- Divider -->
      <hr class="sidebar-divider">
      <li class="nav-item active ">
    
	  <a  class="nav-link" href="chngpwd.php"style="font-family: 'Itim', cursive;">Change Password</a>
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
           
              <!-- Dropdown - User Information -->
             
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->
        <?php include('function.php'); ?>
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
           
          </div>
          <div class="container-fluid">
            <div class="row">
      
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 ">
			  <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">BloodDonated</h6>
            </div>
			  <div class="card-body">
    <div class="table-responsive">
	<form method="post" enctype="multipart/form-data">
        <table class="table table-bordered" id="datatable"width="100%" cellspacing="0">
            <thead>
                <tr>
                <th>Camp Name</th>
                <th>Date of Donation</th>
                <th>No. of Units</th>
                <th>Email Id	</th>
               </tr>
            </thead>
            <tbody>
			<?php

	
	$cn=makeconnection();			
$s="select * from camp,donation where camp.camp_id=donation.camp_id and donation.email='" . $_SESSION["email"] . "'";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	while($data=mysqli_fetch_array($result))
	{
				echo"<tr><td >$data[1]</td><td>$data[9]</td><td >$data[10]</td><td>$data[12]</td></tr>";
			}
			mysqli_close($cn);
			?>               

		</tbody>
</table>
</form>
    </div>
</div>
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
	
	
	
	
