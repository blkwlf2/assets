﻿<?php
	require("php/global.php");
	require("php/index_functions.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Mouldifi - A fully responsive, HTML5 based admin theme">
<meta name="keywords" content="Responsive, HTML5, admin theme, business, professional, Mouldifi, web design, CSS3">
<title>TF Visuals | Dashboard</title>
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

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
<![endif]-->

<!--[if lte IE 8]>
	<script src="js/plugins/flot/excanvas.min.js"></script>
<![endif]-->
</head>
<body>

<!-- Page container -->
<div class="page-container">

	<!-- Page Sidebar -->
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
			<li class="has-sub active"><a href="index.php"><i class="icon-gauge"></i><span class="title">Dashboard</span></a>
				<ul class="nav">
					<li class="active"><a href="index.php"><span class="title">Home</span></a></li>
					<li><a href="assets.php"><span class="title">Assets</span></a></li>
				</ul>
			</li>
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
			<h1 class="page-title">Dashboard</h1>
			<div class="row">
				<div class="col-lg-6">
					<div class="row">
						<div class="col-md-6">
							<div class="panel minimal panel-default">
								<div class="panel-heading clearfix"> 
									<div class="panel-title">Signups</div> 
									<ul class="panel-tool-options"> 
										<li class="dropdown">
											<a data-toggle="dropdown" class="dropdown-toggle" href="#" aria-expanded="false"><i class="icon-cog"></i></a>
											<ul class="dropdown-menu dropdown-menu-right">
												<li><a href="#"><i class="icon-arrows-ccw"></i> Update data</a></li>
												<li><a href="#"><i class="icon-list"></i> Detailed log</a></li>
												<li><a href="#"><i class="icon-chart-pie"></i> Statistics</a></li>
												<li class="divider"></li>
												<li><a href="#"><i class="icon-cancel"></i> Clear list</a></li>
											</ul>
										 </li>
									</ul> 
								</div> 
								<!-- panel body --> 
								<div class="panel-body">
									<div class="row col-with-divider">
										<div class="col-xs-6 text-center stack-order"> 
											<h1 class="no-margins">#</h1>
											<small># of assets</small>
										</div>
										<div class="col-xs-6 text-center stack-order"> 
											<h1 class="no-margins">#</h1>
											<small>Value of Assets</small>
										</div>
									</div>
								</div> 
							</div>
						</div>
						<div class="col-md-6">
							<div class="panel minimal panel-default">
								<div class="panel-heading clearfix"> 
									<div class="panel-title">Purchases in Fiscal Year</div> 
									<ul class="panel-tool-options"> 
										<li class="dropdown">
											<a data-toggle="dropdown" class="dropdown-toggle" href="#" aria-expanded="false"><i class="icon-cog"></i></a>
											<ul class="dropdown-menu dropdown-menu-right">
												<li><a href="#"><i class="icon-arrows-ccw"></i> Update data</a></li>
												<li><a href="#"><i class="icon-list"></i> Detailed log</a></li>
												<li><a href="#"><i class="icon-chart-pie"></i> Statistics</a></li>
												<li class="divider"></li>
												<li><a href="#"><i class="icon-cancel"></i> Clear list</a></li>
											</ul>
										 </li>
									</ul>  
								</div> 
								<!-- panel body --> 
								<div class="panel-body"> 
									<div class="stack-order">
										<h1 class="no-margins">$$$$$</h1>
										<small># of Purchases</small>
									</div>
									<div class="bar-chart-icon"></div>
								</div> 
							</div>
						</div>
					</div>
					<div class="row">
					</div>
					<div class="row">
					</div>
					<div class="row">
						<div class="col-lg-12">
							<div class="panel panel-default">
								<div class="panel-heading no-border clearfix"> 
									<h3 class="panel-title">Asset Value</h3><br>
									<small>by category</small>
									<small>This chart will pull data of money spent per category; Lighitng, video, etc, based on the category the asset is put in when added in.
									<ul class="panel-tool-options"> 
										<li class="dropdown">
											<a data-toggle="dropdown" class="dropdown-toggle" href="#" aria-expanded="false"><i class="icon-cog icon-2x"></i></a>
											<ul class="dropdown-menu dropdown-menu-right">
												<li><a href="#"><i class="icon-arrows-ccw"></i> Update data</a></li>
												<li><a href="#"><i class="icon-list"></i> Detailed log</a></li>
												<li><a href="#"><i class="icon-chart-pie"></i> Statistics</a></li>
												<li class="divider"></li>
												<li><a href="#"><i class="icon-cancel"></i> Clear list</a></li>
											</ul>
										 </li>
									</ul> 
								</div> 
								<!-- panel body --> 
								<div class="panel-body"> 
									<div class="canvas-chart has-doughnut-legend">
										<canvas id="doughnutChart" width="408" height="300"></canvas>
									</div>
									<div class="height-13"></div>
								</div> 
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="panel-group">
					</div>
					<div class="panel panel-default no-border">
						<div class="panel-heading no-border clearfix"> 
							<h2 class="panel-title">Latest Activities(This Includes; adding,updating, assets, events, new hires(future implementation)etc...</h2>
							<ul class="panel-tool-options"> 
								<li class="dropdown">
									<a data-toggle="dropdown" class="dropdown-toggle" href="#" aria-expanded="false"><i class="icon-cog icon-2x"></i></a>
									<ul class="dropdown-menu dropdown-menu-right">
										<li><a href="#"><i class="icon-arrows-ccw"></i> Update data</a></li>
										<li><a href="#"><i class="icon-list"></i> Detailed log</a></li>
										<li><a href="#"><i class="icon-chart-pie"></i> Statistics</a></li>
										<li class="divider"></li>
										<li><a href="#"><i class="icon-cancel"></i> Clear list</a></li>
									</ul>
								 </li>
							</ul>
						</div>	 
						<div class="panel-body">
							<ul class="list-item">
								<li>
									<div class="feed-element">
										<div class="feed-head"><a href="#/">Jassica</a> commented on <a href="#/">4 keys to make your business unique</a></div>
										<div class="feed-content">
											<p>Thank you for posting such a wonderful content. The writing was outstanding. Subscribed to latest from you as well :)</p>
										</div>	
									</div>
								</li>
								<li>
									<div class="feed-element">
										<div class="feed-head"><a href="#/">Jassica</a> commented on <a href="#/">4 keys to make your business unique</a></div>
										<div class="feed-content">
											<p>Thank you for posting such a wonderful content. The writing was outstanding. Subscribed to latest from you as well :)</p>
										</div>	
									</div>
								</li>
								<li>
									<div class="feed-element">
										<div class="feed-head"><a href="#/">Morrise</a> added 3 new photos to the gallery <a href="#/">Australia Trip</a></div>
										<div class="feed-content">
											<div class="media-inline">
												<img src="images/media-1.jpg" alt="Media" title="Media">
												<img src="images/media-2.jpg" alt="Media" title="Media">
												<img src="images/media-3.jpg" alt="Media" title="Media">
											</div>
										</div>	
									</div>
								</li>
								<li>
									<div class="feed-element">
										<div class="feed-head"><a href="#/">Stella Johnson</a> is now connected with <a href="#/">Tom Brown</a></div>
										<div class="feed-content">
											<div class="connected-users">
												<img class="pull-left img-circle avatar" src="images/stella-johnson.png" alt="">
												<i class="pull-left icon-shareable icon-2x"></i>
												<img class="pull-left img-circle avatar" src="images/man-3.jpg" alt="">
											</div>
										</div>	
									</div>
								</li>
								<li>
									<div class="feed-element">
										<div class="feed-head"><a href="#/">Domnic</a> is feeling <a href="#/">blessed</a></div>
										<div class="feed-content">
											<p>Today I’m blessed with a baby girl. Its not easy to express the feelings :)</p>
										</div>	
									</div>
								</li>
							</ul>
						</div>
						<button class="btn btn-primary btn-block btn-2x">SHOW MORE</button>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4">
					<div class="panel panel-default">
						<div class="panel-heading no-border clearfix"> 
							<h2 class="panel-title">Events coming up</h2>
							<ul class="panel-tool-options"> 
								<li class="dropdown">
									<a data-toggle="dropdown" class="dropdown-toggle" href="#" aria-expanded="false"><i class="icon-cog icon-2x"></i></a>
									<ul class="dropdown-menu dropdown-menu-right">
										<li><a href="#"><i class="icon-arrows-ccw"></i>Add event</a></li>
										<li><a href="#"><i class="icon-list"></i> Delete an Events</a></li>
										<li><a href="#"><i class="icon-chart-pie"></i> Update an Event</a></li>
									</ul>
								 </li>
							</ul> 
						</div> 
						<!-- panel body --> 
						<div class="panel-body">
						Events goes here, taken from database
							<div class="more">
								<button class="btn btn-primary">Click More</button>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="panel panel-default">
						<div class="panel-heading no-border clearfix"> 
							<h2 class="panel-title">New Messages</h2>
							<ul class="panel-tool-options"> 
								<li class="dropdown">
									<a data-toggle="dropdown" class="dropdown-toggle" href="#" aria-expanded="false"><i class="icon-cog icon-2x"></i></a>
									<ul class="dropdown-menu dropdown-menu-right">
										<li><a href="#"><i class="icon-arrows-ccw"></i> Update data</a></li>
										<li><a href="#"><i class="icon-list"></i> Detailed log</a></li>
										<li><a href="#"><i class="icon-chart-pie"></i> Statistics</a></li>
										<li class="divider"></li>
										<li><a href="#"><i class="icon-cancel"></i> Clear list</a></li>
									</ul>
								 </li>
							</ul> 
						</div> 
						<!-- panel body --> 
						<div class="panel-body">
							<ul class="list-item message-list">
								<li>
									<i class="icon-mail icon-2x"></i>
									<div class="message-body">
										<h5>Messages people send from tfvisuals.com main site</h5>
										<p>This will be a list off messages that people send from tf visuals.com, instead of sending through E-Mail. This can be implemented later.</p>
									</div>
								</li>
							<div class="more">
								<button class="btn btn-primary">Click More</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Footer -->
			<footer class="footer-main"> 
				&copy; 2017 <strong>TF Visuals</strong> -Asset Management-
			</footer>	
			<!-- /footer -->
		
	  </div>
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
<script>
	$(document).ready(function () {
		var $checkbox = $('.todo-list .checkbox input[type=checkbox]');

		$checkbox.change(function () {
			if ($(this).is(':checked')) {
				$(this).parent().addClass('checked');
			} else {
				$(this).parent().removeClass('checked');
			}
		});

		$checkbox.each(function (index) {
			if ($(this).is(':checked')) {
				$(this).parent().addClass('checked');
			} else {
				$(this).parent().removeClass('checked');
			}
		});

		// charts
		var monthNames = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];

		var previousPoint = null;
		$('#graph-bars, #graph-lines').bind('plothover', function (event, pos, item) {
			if (item) {
				if (previousPoint != item.dataIndex) {
					previousPoint = item.dataIndex;
					$('#flotTip').remove();
					var x = item.datapoint[0],
							y = item.datapoint[1];

					var color = item.series.color;
					var day = new Date(x).getDate();
					var month = monthNames[new Date(x).getMonth()];
					var year = new Date(x).getFullYear();
					showTooltip(item.pageX,
							item.pageY,
							day + ' ' + month + ',' + year
							+ " : <strong>" + y +
							" visitors</strong>");

					/*content = item.series.label + ' = ' + item.datapoint[1];
					 showTooltip(item.pageX, item.pageY, content);
					 showTooltip(item.pageX, item.pageY, y + ' visitors at ' + x + '.00h');*/

				}
			} else {
				$('#flotTip').remove();
				previousPoint = null;
			}
		});

		var graphData = [{
				// Visits
				data: [[1196463600000, 45], [1196550000000, 30], [1196636400000, 98], [1196722800000, 37], [1196809200000, 95], [1196895600000, 45], [1196982000000, 65],
					[1197068400000, 120], [1197154800000, 90], [1197241200000, 65], [1197327600000, 50]],
				color: '#ef193c'
			}, {
				// Returning Visits
				data: [[1196463600000, 100], [1196550000000, 170], [1196636400000, 260], [1196722800000, 127], [1196809200000, 240], [1196895600000, 180], [1196982000000, 160],
					[1197068400000, 210], [1197154800000, 270], [1197241200000, 120], [1197327600000, 85]],
				color: '#2196d4',
			}
		];
		// Bars

		<?php
			
			//Pie graph data generation.
			$pie = new pie_graph_data("doughnutData");
			
						 //Data, Color,		Highlight, Label
			$pie->add_item(5742, "#22b66f", "#12a65f", "Only Visited");
			$pie->add_item(2496, "#f3c111", "#e7b505", "Purchased");
			$pie->add_item(1762, "#ef193c", "#e81235", "Bounced");
			
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
			//String - A legend template
			legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>"
		};

		var canvas = document.getElementById("doughnutChart");
		var helpers = Chart.helpers;
		//var ctx = document.getElementById("doughnutChart").getContext("2d");
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
</body>
</html>
