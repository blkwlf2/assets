﻿<?php

	require("php/global.php");
	require("php/index_functions.php"); 

	$servername = "localhost";
	$username = "admin";
	$password = "2million";
	$dbname = "tfvisuals";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	// Check connection
	if ($conn->connect_error)
	{
		die("Connection failed: " . $conn->connect_error);
	}
	
	//<!DOCTYPE> and stuff are created in this class.
	$page_header = new page_header("Dashboard");
	$page_header->add_stylesheet("css/entypo.css");
	$page_header->add_stylesheet("css/font-awesome.min.css");
	$page_header->add_stylesheet("css/bootstrap.min.css");
	$page_header->add_stylesheet("css/mouldifi-core.css");
	$page_header->add_stylesheet("css/mouldifi-forms.css");
	$page_header->export();
?>
<script src="js/jquery.min.js"></script>
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
					<li class="profile-info dropdown">
						<a data-toggle="dropdown" class="dropdown-toggle" href="#" aria-expanded="false"> 
						<img width="44" class="img-circle avatar" alt="" src="images/man-3.jpg">John Henderson 
						<span class="caret"></span>
						</a>
			  
						<!-- User action menu -->
						<?php
							$drop = new typical_dropdown();
							$drop->clear();
							$drop->add_item("#","user","My profile");
							$drop->add_item("#","mail","Messages");
							$drop->add_item("#","clipboard","Tasks");
							$drop->add_divider();
							$drop->add_item("#","cog","Account settings");
							$drop->add_item("#","logout","Logout");
							$drop->export();
						 ?>
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
			<h1 class="page-title">Dashboard</h1>
			<div class="row">
				<div class="col-lg-6">
					<div class="row">
						
						<!-- Asset information panel -->
						<div class="col-md-6">
							<div class="panel minimal panel-default">
								<div class="panel-heading clearfix"> 
									<div class="panel-title">Asset Information</div> 
									<ul class="panel-tool-options"> 
										<?php
											$drop = new typical_dropdown();
											$drop->export_gear();
										?>
									</ul> 
								</div>
								<div class="panel-body">
									<div class="row col-with-divider">
										<div class="col-xs-6 text-center stack-order"> 
											<h1 class="no-margins">
												<?php
													//Query to get amount of assets.
													if ($result = $conn->query("SELECT id FROM assets ORDER BY id"))
													{
														$row_cnt = $result->num_rows;
														echo $row_cnt;
														$result->close();
													}

												?>
											</h1>
											<small># of assets</small>
										</div>
										<div class="col-xs-6 text-center stack-order"> 
											<h1 class="no-margins">
												<?php
													//Query to get cost of assets.
													$sql = "SELECT SUM(cost) AS value_sum FROM assets LIMIT 1";
													$result = $conn->query($sql);

													if ($result->num_rows > 0)
													{
														$row = $result->fetch_assoc();
														echo "$" . $row["value_sum"];
													}
													else
													{
														echo "0 results";
													}
												?>
											</h1>
											<small>Value of Assets</small>
										</div>
									</div>
								</div> 
							</div>
						</div>
						<!-- /asset information panel-->
						
						<!-- Purchases panel -->
						<div class="col-md-6">
							<div class="panel minimal panel-default">
								<div class="panel-heading clearfix"> 
									<div class="panel-title">Purchases in Fiscal Year</div> 
									<ul class="panel-tool-options"> 
										<?php
											$drop = new typical_dropdown();
											$drop->export_gear();
										?>
									</ul>  
								</div> 
								<div class="panel-body"> 
									<div class="stack-order">
										<h1 class="no-margins"><?php
													//Query to get cost of assets.
													$sql = "SELECT SUM(cost) AS value_sum FROM assets LIMIT 1";
													$result = $conn->query($sql);

													if ($result->num_rows > 0)
													{
														$row = $result->fetch_assoc();
														echo "$" . $row["value_sum"];
													}
													else
													{
														echo "0 results";
													}
												?></h1>
										<small><?php
													//Query to get amount of assets.
													if ($result = $conn->query("SELECT id FROM assets ORDER BY id"))
													{
														$row_cnt = $result->num_rows;
														echo $row_cnt;
														$result->close();
													}

												?> Purchases</small>
									</div>
									<div class="bar-chart-icon"></div>
								</div> 
							</div>
						</div>
						<!-- /purchases panel -->
						
					</div>
					
					<!-- Pie chart panel -->
					<div class="row">
						<div class="col-lg-12">
							<div class="panel panel-default">
								<div class="panel-heading no-border clearfix"> 
									<h3 class="panel-title">Asset Value by Category</h3><br>
									<small>This chart will pull data of money spent per category; Lighting, Video, and Poop-shit; based on the category the asset is put in when added.</small>
									<ul class="panel-tool-options"> 
										<?php
											$drop = new typical_dropdown();
											$drop->export_gear();
										?>
									</ul>
								</div>
								<div class="panel-body"> 
									<div class="canvas-chart has-doughnut-legend">
										<canvas id="doughnutChart" width="408" height="300"></canvas>
									</div>
									<div class="height-13"></div>
								</div>
							</div>
						</div>
					</div>
					<!-- /pie chart panel -->
					
				</div>
				
				<!-- Latest activities panel -->
				<div class="col-lg-6">
					<div class="panel panel-default">
						<div class="panel-heading no-border clearfix"> 
							<h2 class="panel-title">Latest Activities</h2> <!--(This Includes; adding, updating, assets, events, new hires(future implementation), etc...-->
							<ul class="panel-tool-options"> 
								<?php
									$drop = new typical_dropdown();
									$drop->export_gear();
								?>
							</ul>
						</div>
						<div class="panel-body">
						<?php
							//Sql Query To Fetch News Feed From Database
							$sql = "Select * from latest";
							$result = $result=mysqli_query($conn,$sql);
							
							if ($result->num_rows > 0)
								{
									while($row =  $result->fetch_assoc())
									{
									echo("<ul class='list-item'>");
									echo("<li>");
									echo("<div class='feed-element'>");
									echo("<div class='feed-head'>" . $row['title'] . "</div>");
									echo("<p><div class='feed-content'>" . $row['body'] . "</p></div>");
									echo("</div></li>");
								}
								}
						?>
						</div>
						<button class="btn btn-primary btn-block btn-2x">SHOW MORE</button>
					</div>
				</div>
				<!-- /latest activities panel -->
				
				<!-- New messages panel -->
				<div class="col-lg-6">
					<div class="panel panel-default">
						<div class="panel-heading no-border clearfix"> 
							<h2 class="panel-title">New Messages</h2>
							<ul class="panel-tool-options"> 
								<?php
									$drop = new typical_dropdown();
									$drop->export_gear();
								?>
							</ul> 
						</div> 
						<!-- panel body --> 
						<div class="panel-body">
							<ul class="list-item message-list">
								<li>
									<i class="icon-mail icon-2x"></i>
									<div class="message-body">
										<h5>Messages people send from tfvisuals.com main site</h5>
										<p>This will be a list of messages that people send from tfvisuals.com, instead of sending through E-Mail. This can be implemented later.</p>
									</div>
								</li>
							</ul>
							<div class="more">
								<button class="btn btn-primary">Click More</button>
							</div>
						</div>
					</div>
				</div>
				<!-- /new messages panel -->
				
				<!-- Upcoming events panel -->
				<div class="col-lg-6">
					<div class="panel panel-default">
						<div class="panel-heading no-border clearfix"> 
							<h2 class="panel-title">Upcoming Events</h2>
							<ul class="panel-tool-options"> 
								<?php
									$drop = new typical_dropdown();
									$drop->clear();
									$drop->add_item("#modal-1","arrows-ccw","Add event");
									$drop->add_item("#","list","Delete an event");
									$drop->add_item("#","chart-pie","Update an event");
									$drop->export_gear();
								?>
							</ul> 
						</div> 
						<!-- panel body --> 
						<div class="panel-body">
							Events go here, taken from database
							<div class="more">
								<A href="events.php"><button class="btn btn-primary">Click More</button></a>
							</div>
						</div>
					</div>
				</div>
				<!-- /upcoming events panel -->
				
			</div>
			<!-- /.row -->
			
			<!-- Footer -->
			<?php
				$page_header->export_footer();
			?>
			<!-- /footer -->
		
		</div>
		<!-- /main content -->
	  
	</div>
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
	<!-- /main container -->
  
</div>
<!-- /page container -->

<!--Load JQuery-->
<script src="js/bootstrap.min.js"></script>
<script src="js/plugins/metismenu/jquery.metisMenu.js"></script>
<script src="js/plugins/blockui-master/jquery-ui.js"></script>
<script src="js/plugins/blockui-master/jquery.blockUI.js"></script>
<!--Float Charts-->
<script src="js/plugins/flot/jquery.flot.min.js"></script>
<script src="js/plugins/flot/jquery.flot.tooltip.min.js"></script>
<script src="js/plugins/flot/jquery.flot.resize.min.js"></script>
<script src="js/plugins/flot/jquery.flot.selection.min.js"></script>        
<script src="js/plugins/flot/jquery.flot.pie.min.js"></script>
<script src="js/plugins/flot/jquery.flot.time.min.js"></script>
<script src="js/functions.js"></script>
<!--ChartJs-->
<script src="js/plugins/chartjs/Chart.min.js"></script>
<!--Implementation Specific-->
<script>
	$(document).ready(function () {
		
		<?php
			
			//Pie graph data generation.
			$pie = new pie_graph_data("doughnutData");
			
			//Data, Color, Highlight, Label
			$pie->add_item(5742, "#22b66f", "#12a65f", "Video");
			$pie->add_item(2496, "#f3c111", "#e7b505", "Lighting");
			$pie->add_item(1762, "#ef193c", "#e81235", "Poop-Shit");
			
			$pie->export();
			
		?>

		var doughnutOptions = {
			segmentShowStroke: true,
			segmentStrokeColor: "transparent",
			segmentStrokeWidth: 0,
			percentageInnerCutout: 60, // This is 0 for Pie charts
			animationSteps: 100,
			animationEasing: "easeOutBounce",
			animateRotate: true,
			animateScale: false,
			responsive: true,
			legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>"
		};

		var canvas = document.getElementById("doughnutChart");
		var helpers = Chart.helpers;
		var moduleDoughnut = new Chart(canvas.getContext("2d")).Doughnut(doughnutData, doughnutOptions);
		var legendHolder = document.createElement('div');
		legendHolder.innerHTML = moduleDoughnut.generateLegend();
		
		helpers.each(legendHolder.firstChild.childNodes, function (legendNode, index) {
			helpers.addEvent(legendNode, 'mouseover', function () {
				var activeSegment = moduleDoughnut.segments[index];
				activeSegment.save();
				activeSegment.fillColor = activeSegment.highlightColor;
				moduleDoughnut.showTooltip([activeSegment]);
				activeSegment.restore();
			});
		});
		
		helpers.addEvent(legendHolder.firstChild, 'mouseout', function () {
			moduleDoughnut.draw();
		});
		
		canvas.parentNode.parentNode.appendChild(legendHolder.firstChild);
	});
</script>
<?php
	$page_header->export_end();
	$conn->close();
?>