<?php 

session_start();
$id=$_SESSION["user"];

	include 'connection.php';
											
										
											$query = "SELECT * FROM regis where email='$id';" ;

																$run_query = mysqli_query($conn, $query) or die(mysqli_error($conn));
																
																
																
																if (mysqli_num_rows($run_query) > 0 ) {
																while ($row = mysqli_fetch_array($run_query))
																	{
																	$id = $row['fname'];
																	//echo $id;
																	$_SESSION["name"]=$id;
																	
																	}
																	}
	?>
																	

<!-- ===== Start of Header Navigation ===== -->
    <header class="header1">
        <nav class="navbar navbar-default navbar-static-top fluid_header centered">
            <div class="container">

                <!-- Logo -->
                <div class="col-md-2 col-sm-6 col-xs-8 nopadding">
                    <a class="navbar-brand nomargin" href="index.php"><img src="logo.png" alt="logo" style="
    height: 69px;
"></a>
                    <!-- INSERT YOUR LOGO HERE -->
                </div>

                <!-- ======== Start of Main Menu ======== -->
                <div class="col-md-10 col-sm-6 col-xs-4 nopadding">
                    <div class="navbar-header page-scroll">
                        <button type="button" class="navbar-toggle toggle-menu menu-right push-body" data-toggle="collapse" data-target="#main-nav" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <!-- Start of Main Nav -->
                    <div class="collapse navbar-collapse cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="main-nav">
                        <ul class="nav navbar-nav pull-right">

                            <!-- Mobile Menu Title -->
                            <li class="mobile-title">
                                <h4>main menu</h4></li>

                            <!-- Simple Menu Item -->
                            <li class="dropdown simple-menu active">
                                <a href="mainpage.php">Home</a>
                               
                            </li>
							
				


							  <li class="dropdown simple-menu">
                                <a href="room.php">Search Room</a>
                               
                            </li>
							  <li class="dropdown simple-menu">
                                <a href="change.php?id=<?php echo $id; ?>">Change Password</a>
                               
                            </li>
							
							  <li class="dropdown simple-menu">
                                <a href="change.php?id=<?php echo $id; ?>">My Booking</a>
                               
                            </li>
							
							  <li class="dropdown simple-menu">
                                <a href="logout.php">Logout (<?php echo $id; ?>)</a>
                               
                            </li>
							
							

							
                        
                          

                        </ul>
                    </div>
                    <!-- End of Main Nav -->
                </div>
                <!-- ======== End of Main Menu ======== -->

            </div>
        </nav>
    </header>
    <!-- ===== End of Header Navigation ===== -->
