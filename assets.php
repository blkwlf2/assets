<?php

	require("php/global.php");
	require("php/index_functions.php"); 

	$servername = "localhost";
	$username = "root";
	$password = "changeme";
	$dbname = "tfvisuals";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	// Check connection
	if ($conn->connect_error)
	{
		die("Connection failed: " . $conn->connect_error);
	}
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Mouldifi - A fully responsive, HTML5 based admin theme">
<meta name="keywords" content="Responsive, HTML5, admin theme, business, professional, Mouldifi, web design, CSS3">
<title>TF Visuals | Assets</title>
<!-- Site favicon -->
<link rel='shortcut icon' type='image/x-icon' href='images/favicon.ico' />
<!-- /site favicon -->

<!-- Entypo font stylesheet -->
<link href="css/entypo.css" rel="stylesheet">
<!-- /entypo font stylesheet -->

<!-- Font awesome stylesheet -->
<link href="css/font-awesome.min.css" rel="stylesheet">
<!-- /font awesome stylesheet -->

<!-- Bootstrap stylesheet min version -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<!-- /bootstrap stylesheet min version -->

<!-- Mouldifi core stylesheet -->
<link href="css/mouldifi-core.css" rel="stylesheet">
<!-- /mouldifi core stylesheet -->

<link href="css/mouldifi-forms.css" rel="stylesheet">
<link href="css/plugins/datatables/jquery.dataTables.css" rel="stylesheet">
<link href="js/plugins/datatables/extensions/Buttons/css/buttons.dataTables.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
<![endif]-->

</head>
<body>

<!-- Page container -->
<div class="page-container">

  	<!-- Page sidebar -->
	<div class="page-sidebar">
	
		<!-- Site header  -->
		<header class="site-header">
		  <div class="site-logo"><a href="index.php"><img src="images/logo.png" alt="Mouldifi" title="Mouldifi"></a></div>
		  <div class="sidebar-collapse hidden-xs"><a class="sidebar-collapse-icon" href="#"><i class="icon-menu"></i></a></div>
		  <div class="sidebar-mobile-menu visible-xs"><a data-target="#side-nav" data-toggle="collapse" class="mobile-menu-icon" href="#"><i class="icon-menu"></i></a></div>
		</header>
		<!-- /site header -->
		
		<!-- Main navigation -->
		<ul id="side-nav" class="main-menu navbar-collapse collapse">
			<li><a href="index.php"><i class="icon-gauge"></i><span class="title">Dashboard</span></a></li>
			<li class="active"><a href="assets.php"><i class="icon-camera"></i><span class="title">Assets</span></a></li>
			<li><a href="activity.php"><i class="icon-clock"></i><span class="title">Activity</span></a></li>
			<li><a href="events.php"><i class="icon-calendar"></i><span class="title">Events</span></a></li>
			<li><a href="finances.php"><i class="icon-chart-area"></i><span class="title">Finances</span></a></li>
			<li><a href="hiring.php"><i class="icon-user-add"></i><span class="title">Hiring</span></a></li>
		</ul>
		<!-- /main navigation -->
  </div>
  <!-- /page sidebar -->
  
  <!-- Main container -->
  <div class="main-container">
  
		<!-- Main header -->
		<div class="main-header row">
		  <div class="col-sm-6 col-xs-7">
		  
			<!-- User info -->
			<ul class="user-info pull-left">          
			  <li class="profile-info dropdown"><a data-toggle="dropdown" class="dropdown-toggle" href="#" aria-expanded="false"> <img width="44" class="img-circle avatar" alt="" src="images/man-3.jpg">John Henderson <span class="caret"></span></a>
			  
				<!-- User action menu -->
				<ul class="dropdown-menu">
				  
				  <li><a href="#/"><i class="icon-user"></i>My profile</a></li>
				  <li><a href="#/"><i class="icon-mail"></i>Messages</a></li>
				  <li><a href="#"><i class="icon-clipboard"></i>Tasks</a></li>
				  <li class="divider"></li>
				  <li><a href="#"><i class="icon-cog"></i>Account settings</a></li>
				  <li><a href="#"><i class="icon-logout"></i>Logout</a></li>
				</ul>
				<!-- /user action menu -->
				
			  </li>
			</ul>
			<!-- /user info -->
			
		  </div>
	  
		  <div class="col-sm-6 col-xs-5">
			<div class="pull-right">
				<!-- User alerts -->
				<ul class="user-info pull-left">
				
				  <!-- Notifications -->
				  <li class="notifications dropdown">
					<a data-close-others="true" data-hover="dropdown" data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="icon-attention"></i><span class="badge badge-info">6</span></a>
					<ul class="dropdown-menu pull-right">
						<li class="first">
							<div class="small"><a class="pull-right danger" href="#">Mark all Read</a> You have <strong>3</strong> new notifications.</div>
						</li>
						<li>
							<ul class="dropdown-list">
								<li class="unread notification-success"><a href="#"><i class="icon-user-add pull-right"></i><span class="block-line strong">New user registered</span><span class="block-line small">30 seconds ago</span></a></li>
								<li class="unread notification-secondary"><a href="#"><i class="icon-heart pull-right"></i><span class="block-line strong">Someone special liked this</span><span class="block-line small">60 seconds ago</span></a></li>
								<li class="unread notification-primary"><a href="#"><i class="icon-user pull-right"></i><span class="block-line strong">Privacy settings have been changed</span><span class="block-line small">2 hours ago</span></a></li>
								<li class="notification-danger"><a href="#"><i class="icon-cancel-circled pull-right"></i><span class="block-line strong">Someone special liked this</span><span class="block-line small">60 seconds ago</span></a></li>
								<li class="notification-info"><a href="#"><i class="icon-info pull-right"></i><span class="block-line strong">Someone special liked this</span><span class="block-line small">60 seconds ago</span></a></li>
								<li class="notification-warning"><a href="#"><i class="icon-rss pull-right"></i><span class="block-line strong">Someone special liked this</span><span class="block-line small">60 seconds ago</span></a></li>
							</ul>
						</li>
						<li class="external-last"> <a href="#" class="danger">View all notifications</a> </li>
					</ul>
				  </li>
				  <!-- /notifications -->
				  
				  <!-- Messages -->
				  <?php
					  $msgs = new message_list();
					  $msgs->add_message("Name1","images/domnic-brown.png","This is a test message.","Tues");
					  $msgs->add_message("Name2","images/domnic-brown.png","This is a test message.","Tues");
					  $msgs->add_message("Name3","images/domnic-brown.png","This is a test message.","Tues");
					  $msgs->add_message("Name4","images/domnic-brown.png","This is a test message.","Tues");
					  $msgs->add_message("Name5","images/domnic-brown.png","This is a test message.","Tues");
					  $msgs->export();
				  ?>
				  <!-- /messages -->
				</ul>
				<!-- /user alerts -->
				
			</div>
		</div>
     </div>
	 <!-- /main header -->
	
	 <!-- Main content -->
	 <div class="main-content">
			<h1 class="page-title">Data Tables</h1>
			<!-- Breadcrumb -->
			<ol class="breadcrumb breadcrumb-2"> 
				<li><a href="index.php"><i class="fa fa-home"></i>Home</a></li> 
				<li class="active"><strong>Data Tables</strong></li> 
			</ol>
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading clearfix">
							<h3 class="panel-title">A BIG BAD TABLE</h3>
							<ul class="panel-tool-options"> 
								<li><div class="bs-example"><a href class="icon-pencil" data-toggle="modal" data-target="#modal-1"></a></li>
								<li><a data-rel="reload" href="#"><i class="icon-arrows-ccw"></i></a></li>
								<li><a data-rel="close" href="#"><i class="icon-cancel"></i></a></li>
							</ul>
						</div>
						<div class="panel-body">
							<div class="table-responsive">
								<table id="assets" class="table table-striped table-bordered table-hover dataTables-example" >
									<thead>
										<tr>
											<th>ID</th>
											<th>Asset ID tag</th>
											<th>Serial</th>
											<th>Cost</th>
											<th>model</th>
											<th>Manufacturer</th>
											<th>Location</th>
											<th>Purchase Date</th>
											<th>Date Created</th>
										</tr>
									</thead>
									<tbody>
										<?php
											$sql = "SELECT * FROM assets";
											$result = $conn->query($sql);

											if ($result->num_rows > 0)
											{
												while($row = $result->fetch_assoc())
												{
													echo "<tr><td>" . $row["id"] . "</td><td>" . 
																	  $row["assettagid"] . "</td><td>" . 
																	  $row["serialnumber"] . "</td><td>" .
																	  $row["cost"] . "</td><td>" .
																	  $row["model"] . "</td><td>" .
																	  $row["manufacturer"] . "</td><td>" .
																	  $row["location"] . "</td><td>" .
																	  $row["purchasedate"] . "</td><td>" . 
																	  $row["datecreated"] . "</td></tr>";
												}
											}
										?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!-- Footer -->
			<footer class="footer-main"> 
				&copy; 2017 <strong>Mouldifi</strong> Admin Theme by <a target="_blank" href="#/">G-axon</a> 
			</footer>	
			<!-- /footer -->
		
	  </div>
	  
<!--Large Modal-->
<div id="modal-1" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Large modal</h4>
      </div>
      <div class="modal-body">
        <p>This is a test</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--End Large Modal-->
	  <!-- /main content -->
	  
  </div>
  <!-- /main container -->
  
</div>
<!-- /page container -->

<!--Load JQuery-->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/plugins/metismenu/jquery.metisMenu.js"></script>
<script src="js/plugins/blockui-master/jquery-ui.js"></script>
<script src="js/plugins/blockui-master/jquery.blockUI.js"></script>
<script src="js/functions.js"></script>

<script src="js/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="js/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script src="js/plugins/datatables/extensions/Buttons/js/dataTables.buttons.min.js"></script>
<script src="js/plugins/datatables/jszip.min.js"></script>
<script src="js/plugins/datatables/pdfmake.min.js"></script>
<script src="js/plugins/datatables/vfs_fonts.js"></script>
<script src="js/plugins/datatables/extensions/Buttons/js/buttons.html5.js"></script>
<script src="js/plugins/datatables/extensions/Buttons/js/buttons.colVis.js"></script>
<script>
	$(document).ready(function () {
		$('.dataTables-example').DataTable({
			dom: '<"html5buttons" B>lTfgitp',
			buttons: [
				{
					extend: 'copyHtml5',
					exportOptions: {
						columns: [ 0, ':visible' ]
					}
				},
				{
					extend: 'excelHtml5',
					exportOptions: {
						columns: ':visible'
					}
				},
				{
					extend: 'pdfHtml5',
					exportOptions: {
						columns: [ 0, 1, 2, 3, 4 ]
					}
				},
				'colvis'
			]
		});
	});
</script>


</body>
</html>

<?php
	$conn->close();
?>
