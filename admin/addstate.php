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
<body id="page-top">

<?php
if($_SESSION['loginstatus']=="")
{
	header("location:admimlogin.php");
}
?>
<?php include('function.php'); ?>
   <!-- Page Wrapper -->
  <div id="wrapper"style="backgound-color:black;">

<!-- Sidebar -->
<ul style="backgound:black;"class="navbar-nav bg-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fa fa-heartbeat" color="red"></i>
    </div>
    
    <div class="sidebar-brand-text mx-3" style="font-family: 'Itim', cursive;">Admin_panel</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">


  <!-- Divider -->
  <hr class="sidebar-divider">
  <li class="nav-item active ">

  <a  class="nav-link"class="btn btn-danger" href="adduser.php"style="font-family: 'Itim', cursive;">Add user</a>
</a> 
  <hr class="sidebar-divider">
  <li class="nav-item active">
    <a class="nav-link" href="upuser.php"style="font-family: 'Itim', cursive;"> Update User</a>
    
</li>
<hr class="sidebar-divider">
  <li class="nav-item active">
    <a class="nav-link"href="deluser.php"style="font-family: 'Itim', cursive;">Delete User</a>
    
     
      
</li>


 



  <!-- Divider -->
  <hr class="sidebar-divider">
  <li class="nav-item active">
  <a class="nav-link"href="addcity.php"style="font-family: 'Itim', cursive;"> Add City</a>
     
 
  </li>
  <hr class="sidebar-divider">
  <li class="nav-item active">
    <a class="nav-link" href="updatecity.php"style="font-family: 'Itim', cursive;">Update City</a>
    
  </li>
  <hr class="sidebar-divider">
  <li class="nav-item active">
    <a class="nav-link" href="deletecity.php"style="font-family: 'Itim', cursive;">Delete City</a>
    
  </li>
  <hr class="sidebar-divider">
  <li class="nav-item active">
    <a class="nav-link" href=" addstate.php"style="font-family: 'Itim', cursive;"> Add State </a>
    
  </li>
  <hr class="sidebar-divider">
  <li class="nav-item active">
    <a class="nav-link" href="updatestate.php"style="font-family: 'Itim', cursive;">Update State</a>
    
  </li>
  <hr class="sidebar-divider">
  <li class="nav-item active">
    <a class="nav-link" href=" deletestate.php"style="font-family: 'Itim', cursive;">Delete State</a>
    
  </li>
  <hr class="sidebar-divider">
  <li class="nav-item active">
    <a class="nav-link" href="addcamp.php"style="font-family: 'Itim', cursive;">Add Camp</a>
    
  </li>
  <hr class="sidebar-divider">
  <li class="nav-item active">
    <a class="nav-link" href="updatecamp.php"style="font-family: 'Itim', cursive;">Update Camp</a>
    
  </li>
  <hr class="sidebar-divider">
  <li class="nav-item active">
    <a class="nav-link" href=" deletecamp.php"style="font-family: 'Itim', cursive;">Delete Camp</a>
    
  </li>
  <hr class="sidebar-divider">
  <li class="nav-item active">
    <a class="nav-link" href="addbloodgroup.php"style="font-family: 'Itim', cursive;">Add Blood Group</a>
    
  </li>
  <hr class="sidebar-divider">
  <li class="nav-item active">
    <a class="nav-link" href="upbloodgroup.php"style="font-family: 'Itim', cursive;">Update Blood Group</a>
    
  </li>
  <hr class="sidebar-divider">
  <li class="nav-item active">
    <a class="nav-link" href="deletebloodgroup.php"style="font-family: 'Itim', cursive;">Delete Blood Group</a>
    
  </li>
  <hr class="sidebar-divider">
  <li class="nav-item active">
    <a class="nav-link" href="viewcity.php"style="font-family: 'Itim', cursive;">View City</a>
    
  </li>
  <hr class="sidebar-divider">
  <li class="nav-item active">
    <a class="nav-link" href="viewstate.php"style="font-family: 'Itim', cursive;">View State</a>
    
  </li>
  <hr class="sidebar-divider">
  <li class="nav-item active">
    <a class="nav-link" href="viewbloodgroup.php"style="font-family: 'Itim', cursive;">View Blood Group</a>
    
  </li>
  <hr class="sidebar-divider">
  <li class="nav-item active">
    <a class="nav-link" href="viewcamp.php"style="font-family: 'Itim', cursive;">View camps</a>
    
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
      

        
          <div class="col-12 col-sm-12 col-md-12 col-lg-12"> 
         
       <form method="post">
<table border="0" align="center" width="400" height="300px" class="shaddoww">
<tr><td colspan="2" align="center" class="toptd">Add State </td></tr>
<tr><td colspan="2">&nbsp;</td></tr>
<tr><td class="lefttd">State Name</td><td><input type="text" name="t1"  required="required" pattern="[a-zA-Z1 _]{5,15}" title="please enter only character and numbers between 5 to 15 for state name"/></td></tr>

<tr><td>&nbsp;</td><td><input type="submit" value="SAVE" name="sbmt"></td></tr>
</table>
</form>
          </div>
         
    
          <?php
if(isset($_POST["sbmt"]))
{
	// $cn=mysqli_connect("localhost","root","","bloo");
  $cn=mysqli_connect("sql104.epizy.com","epiz_28882077","Ym47OhIBki0b","epiz_28882077_bloo");
	$s="insert into state(state_name) values('" . $_POST["t1"] . "')";
	mysqli_query($cn,$s);
	mysqli_close($cn);
	echo "<script>alert('Record Save');</script>";
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


<!--donar registration-->



  <!-- Footer -->
  


</body>

</html>
<?php include('scripts.php');?>


