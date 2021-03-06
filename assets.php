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
	
	//<!DOCTYPE> and stuff are created in this class.
	$page_header = new page_header("Assets");
	$page_header->add_stylesheet("css/entypo.css");
	$page_header->add_stylesheet("css/font-awesome.min.css");
	$page_header->add_stylesheet("css/bootstrap.min.css");
	$page_header->add_stylesheet("css/mouldifi-core.css");
	$page_header->add_stylesheet("css/mouldifi-forms.css");
	$page_header->add_stylesheet("css/plugins/datatables/jquery.dataTables.css");
	$page_header->add_stylesheet("js/plugins/datatables/extensions/Buttons/css/buttons.dataTables.css");
	$page_header->export();
?>

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
		<?php quick_nav(); /*Navigation can be modified at php/global.php*/ ?>
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
								<li><div class="bs-example"><a href class="icon-pencil" data-toggle="modal" data-target="#modal-1" title="Edit"></a></div></li>
								<li><a data-rel="reload" href="#"><i class="icon-arrows-ccw" title="Reload"></i></a></li>
								<li><a data-rel="close" href="#"><i class="icon-cancel" title="Close"></i></a></li>
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
			<?php
				$page_header->export_footer();
			?>	
			<!-- /footer -->
			
		</div>
		<!-- /main content -->
	  
		<!--Large modal-->
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
		<!-- /large modal-->

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
<!--Load Datatables-->
<script src="js/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="js/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script src="js/plugins/datatables/extensions/Buttons/js/dataTables.buttons.min.js"></script>
<script src="js/plugins/datatables/jszip.min.js"></script>
<script src="js/plugins/datatables/pdfmake.min.js"></script>
<script src="js/plugins/datatables/vfs_fonts.js"></script>
<script src="js/plugins/datatables/extensions/Buttons/js/buttons.html5.js"></script>
<script src="js/plugins/datatables/extensions/Buttons/js/buttons.colVis.js"></script>
<!--Implementation Specific-->
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
<?php
	$page_header->export_end();
	$conn->close();
?>
