﻿<!DOCTYPE html>
<html lang="en">
<head>
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
	$page_header = new page_header("Dashboard");
	$page_header->add_stylesheet("css/entypo.css");
	$page_header->add_stylesheet("css/font-awesome.min.css");
	$page_header->add_stylesheet("css/bootstrap.min.css");
	$page_header->add_stylesheet("css/mouldifi-core.css");
	$page_header->add_stylesheet("css/mouldifi-forms.css");
	$page_header->add_stylesheet("css/plugins/select2/select2.css");
	$page_header->export();
?>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Mouldifi - A fully responsive, HTML5 based admin theme">
<meta name="keywords" content="Responsive, HTML5, admin theme, business, professional, Mouldifi, web design, CSS3">
<title>Mouldifi | Detailed View</title>
<!-- Site favicon -->
<link rel='shortcut icon' type='image/x-icon' href='images/favicon.ico' />
<!-- /site favicon -->


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
		  <div class="site-logo"><a href="index.html"><img src="images/logo.png" alt="Mouldifi" title="Mouldifi"></a></div>
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
			  <li class="notifications dropdown">
				<a data-close-others="true" data-hover="dropdown" data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="icon-mail"></i><span class="badge badge-secondary">12</span></a>
				<ul class="dropdown-menu pull-right">
					<li class="first">
						<div class="dropdown-content-header"><i class="fa fa-pencil-square-o pull-right"></i> Messages</div>
					</li>
					<li>
						<ul class="media-list">
							<li class="media">
								<div class="media-left"><img alt="" class="img-circle img-sm" src="images/domnic-brown.png"></div>
								<div class="media-body">
									<a class="media-heading" href="#">
										<span class="text-semibold">Domnic Brown</span>
										<span class="media-annotation pull-right">Tue</span>
									</a>
									<span class="text-muted">Your product sounds interesting I would love to check this ne...</span>
								</div>
							</li>
							<li class="media">
								<div class="media-left"><img alt="" class="img-circle img-sm" src="images/john-smith.png"></div>
								<div class="media-body">
									<a class="media-heading" href="#">
										<span class="text-semibold">John Smith</span>
										<span class="media-annotation pull-right">12:30</span>
									</a>
									<span class="text-muted">Thank you for posting such a wonderful content. The writing was outstanding...</span>
								</div>
							</li>
							<li class="media">
								<div class="media-left"><img alt="" class="img-circle img-sm" src="images/stella-johnson.png"></div>
								<div class="media-body">
									<a class="media-heading" href="#">
										<span class="text-semibold">Stella Johnson</span>
										<span class="media-annotation pull-right">2 days ago</span>
									</a>
									<span class="text-muted">Thank you for trusting us to be your source for top quality sporting goods...</span>
								</div>
							</li>
							<li class="media">
								<div class="media-left"><img alt="" class="img-circle img-sm" src="images/alex-dolgove.png"></div>
								<div class="media-body">
									<a class="media-heading" href="#">
										<span class="text-semibold">Alex Dolgove</span>
										<span class="media-annotation pull-right">10:45</span>
									</a>
									<span class="text-muted">After our Friday meeting I was thinking about our business relationship and how fortunate...</span>
								</div>
							</li>
							<li class="media">
								<div class="media-left"><img alt="" class="img-circle img-sm" src="images/domnic-brown.png"></div>
								<div class="media-body">
									<a class="media-heading" href="#">
										<span class="text-semibold">Domnic Brown</span>
										<span class="media-annotation pull-right">4:00</span>
									</a>
									<span class="text-muted">I would like to take this opportunity to thank you for your cooperation in recently completing...</span>
								</div>
							</li>
						</ul>
					</li>
					<li class="external-last"> <a class="danger" href="#">All Messages</a> </li>
				</ul>
			  </li>
			  <!-- /messages -->
			  
			</ul>
			<!-- /user alerts -->
			
		</div>
      </div>
    </div>
	<!-- /main header -->
	
	<!-- Secondary header -->
	<div class="header-secondary row">
		<div class="col-lg-12">
			<div class="page-heading clearfix">
				<h1 class="page-title pull-left">Users</h1><button class="btn btn-primary btn-sm btn-add">Add New</button>
			</div>
			<!-- Breadcrumb -->
			<ol class="breadcrumb breadcrumb-2"> 
				<li><a href="index.html"><i class="fa fa-home"></i>Home</a></li> 
				<li><a href="short-view.html">Grid Views</a></li> 
				<li class="active"><strong>Users</strong></li> 
			</ol>
			<div class="tab-wrapper clearfix">
				<ul class="nav nav-pills nav-pills-default pull-left">
				  <li role="presentation"><a href="short-view.html">STYLE 1</a></li>
				  <li class="active" role="presentation"><a href="detailed-view.html">STYLE 2</a></li>
				  <li role="presentation"><a href="detailed-view-2.html">STYLE 3</a></li>
				</ul>
				<ul class="nav nav-pills nav-icons pull-right">
				  <li class="active" role="presentation"><a href="#"><i class="icon-layout"></i></a></li>
				  <li role="presentation"><a href="#"><i class="icon-list"></i></a></li>
				  <li role="presentation"><a href="#" class="toggle-filter" data-block-id="filter-box"><i class="fa fa-filter"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
	<!-- /secondary header -->
	
	<!-- Filter wrapper -->
	<div class="row filter-wrapper visible-box" id="filter-box">
		<div class="col-lg-12">
			<div class="filter-header">
				<button aria-label="Close" class="close toggle-filter" type="button" data-block-id="filter-box"><i class="icon-cancel"></i></button>
				<h3 class="title">Filter Members</h3>
			</div>
			<form class="form-inline">
				<div class="form-group">
					<label class="form-label">Keywords</label>
					<input type="text" placeholder="Separate by commas..." class="form-control">
				</div>
				<div class="form-group">
					<label class="form-label">Member Since</label>
					<select class="select2 form-control">
						<option>2008</option>
						<option>2009</option>
						<option>2015</option>
					</select>
				</div>
				<div class="form-group">
					<label class="form-label">User Roles</label>
					<div class="checkbox-group">
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="admin">
							<label for="admin">Admin</label>
						</div>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="operator">
							<label for="operator">Operator</label>
						</div>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="customer">
							<label for="customer">Customer</label>
						</div>
					</div>
				</div>
				<div class="form-group filter-btn">
					<button class="btn btn-default">Filter</button>
				</div>
			</form>
		</div>
	</div>
	<!-- /filter wrapper -->
	
	<!-- Main content -->
	<div class="main-content">
	
		<!-- List header -->
		<div class="row datatable-wrapper form-inline">
			<div class="col-lg-12">
				<div class="data-col-first clearfix">
					<div class="col-checkbox">
						<div class="form-checkbox">
							<input type="checkbox" value="" name=""> <span class="check"><i class="fa fa-check"></i></span>
						</div>
					</div>
					<div class="col-selectbox">
						<select class="form-control input-sm">
							<option>Bulk Action</option>
							<option>Bulk Action</option>
							<option>Bulk Action</option>
						</select>&nbsp;
						<button class="btn btn-primary btn-sm">Go</button>
					</div>
				</div>
				<div class="data-col-last clearfix">
					<div class="col-selectbox">
						<select class="form-control input-sm">
							<option>Sort By</option>
							<option>Sort By</option>
							<option>Sort By</option>
						</select>
					</div>
					<div class="col-selectbox">
						<select class="form-control input-sm">
							<option>25 Records</option>
							<option>10 Records</option>
							<option>50 Records</option>
						</select>
					</div>
				</div>
			</div>
		</div>
		<!-- /list header -->
		
		<!-- Card grid view -->
		<div class="cards-container grid-view">
			<div class="row">
				<div class="col-lg-3 col-sm-6">
				
					<!-- Card -->
					<div class="card primary-view">
					
						<!-- Card header -->
						<div class="card-header">
						
							<!-- Card photo -->
							<div class="card-photo">
								<img title="John Smith" alt="John Smith" src="images/man-3.jpg" class="img-circle avatar">
							</div>
							<!-- /card photo -->
							
							<!-- Card short description -->
							<div class="card-short-description">
								<h5><span class="user-name"><a href="#/">John Smith</a></span></h5>
								<p class="uppercase">Agent</p>
							</div>
							<!-- /card short description -->
							
							<!-- Card action dropdown -->
							<div class="action-dropdown dropdown">
								<a data-toggle="dropdown" href="#/" aria-expanded="true"><i class="icon-dot-3 icon-more"></i></a>
								<ul class="dropdown-menu dropdown-menu-right">
									<li><a href="">Change Setting</a></li>
									<li><a href="">View Profile</a></li>
									<li><a href="">Send Message</a></li>
								</ul>
							</div>
							<!-- /card action dropdown -->
							
						</div>
						<!-- /card header -->
						
						<!-- Card content -->
						<div class="card-content">
							<p>Member Since 2008</p>
							<p>Bio data about the user. It could contain what he does, who he is, and much more.</p>
 							<p>More could be listed here.</p>
						</div>
						<!-- /card content -->
						
					</div>
					<!-- /card -->
					
				</div>
				<div class="col-lg-3 col-sm-6">
				
					<!-- Card -->
					<div class="card primary-view">
					
						<!-- Card header -->
						<div class="card-header">
						
							<!-- Card photo -->
							<div class="card-photo">
								<img title="John Smith" alt="John Smith" src="images/man-3.jpg" class="img-circle avatar">
							</div>
							<!-- /card photo -->
							
							<!-- Card short description -->
							<div class="card-short-description">
								<h5><span class="user-name"><a href="#/">John Smith</a></span></h5>
								<p class="uppercase">Agent</p>
							</div>
							<!-- /card short description -->
							
							<!-- Card action dropdown -->
							<div class="action-dropdown dropdown">
								<a data-toggle="dropdown" href="#/" aria-expanded="true"><i class="icon-dot-3 icon-more"></i></a>
								<ul class="dropdown-menu dropdown-menu-right">
									<li><a href="">Change Setting</a></li>
									<li><a href="">View Profile</a></li>
									<li><a href="">Send Message</a></li>
								</ul>
							</div>
							<!-- /card action dropdown -->
							
						</div>
						<!-- /card header -->
						
						<!-- Card content -->
						<div class="card-content">
							<p>Member Since 2008</p>
							<p>Bio data about the user. It could contain what he does, who he is, and much more.</p>
 							<p>More could be listed here.</p>
						</div>
						<!-- /card content -->
						
					</div>
					<!-- /card -->
					
				</div>
				<div class="col-lg-3 col-sm-6">
				
					<!-- Card -->
					<div class="card primary-view">
					
						<!-- Card header -->
						<div class="card-header">
						
							<!-- Card photo -->
							<div class="card-photo">
								<img title="John Smith" alt="John Smith" src="images/man-3.jpg" class="img-circle avatar">
							</div>
							<!-- /card photo -->
							
							<!-- Card short description -->
							<div class="card-short-description">
								<h5><span class="user-name"><a href="#/">John Smith</a></span></h5>
								<p class="uppercase">Agent</p>
							</div>
							<!-- /card short description -->
							
							<!-- Card action dropdown -->
							<div class="action-dropdown dropdown">
								<a data-toggle="dropdown" href="#/" aria-expanded="true"><i class="icon-dot-3 icon-more"></i></a>
								<ul class="dropdown-menu dropdown-menu-right">
									<li><a href="">Change Setting</a></li>
									<li><a href="">View Profile</a></li>
									<li><a href="">Send Message</a></li>
								</ul>
							</div>
							<!-- /card action dropdown -->
							
						</div>
						<!-- /card header -->
						
						<!-- Card content -->
						<div class="card-content">
							<p>Member Since 2008</p>
							<p>Bio data about the user. It could contain what he does, who he is, and much more.</p>
 							<p>More could be listed here.</p>
						</div>
						<!-- /card content -->
						
					</div>
					<!-- /card -->
					
				</div>
				<div class="col-lg-3 col-sm-6">
				
					<!-- Card -->
					<div class="card primary-view">
					
						<!-- Card header -->
						<div class="card-header">
						
							<!-- Card photo -->
							<div class="card-photo">
								<img title="John Smith" alt="John Smith" src="images/man-3.jpg" class="img-circle avatar">
							</div>
							<!-- /card photo -->
							
							<!-- Card short description -->
							<div class="card-short-description">
								<h5><span class="user-name"><a href="#/">John Smith</a></span></h5>
								<p class="uppercase">Agent</p>
							</div>
							<!-- /card short description -->
							
							<!-- Card action dropdown -->
							<div class="action-dropdown dropdown">
								<a data-toggle="dropdown" href="#/" aria-expanded="true"><i class="icon-dot-3 icon-more"></i></a>
								<ul class="dropdown-menu dropdown-menu-right">
									<li><a href="">Change Setting</a></li>
									<li><a href="">View Profile</a></li>
									<li><a href="">Send Message</a></li>
								</ul>
							</div>
							<!-- /card action dropdown -->
							
						</div>
						<!-- /card header -->
						
						<!-- Card content -->
						<div class="card-content">
							<p>Member Since 2008</p>
							<p>Bio data about the user. It could contain what he does, who he is, and much more.</p>
 							<p>More could be listed here.</p>
						</div>
						<!-- /card content -->
						
					</div>
					<!-- /card -->
					
				</div>
			</div>
			<div class="row">
				<div class="col-lg-3 col-sm-6">
				
					<!-- Card -->
					<div class="card primary-view">
					
						<!-- Card header -->
						<div class="card-header">
						
							<!-- Card photo -->
							<div class="card-photo">
								<img title="John Smith" alt="John Smith" src="images/man-3.jpg" class="img-circle avatar">
							</div>
							<!-- /card photo -->
							
							<!-- Card short description -->
							<div class="card-short-description">
								<h5><span class="user-name"><a href="#/">John Smith</a></span></h5>
								<p class="uppercase">Agent</p>
							</div>
							<!-- /card short description -->
							
							<!-- Card action dropdown -->
							<div class="action-dropdown dropdown">
								<a data-toggle="dropdown" href="#/" aria-expanded="true"><i class="icon-dot-3 icon-more"></i></a>
								<ul class="dropdown-menu dropdown-menu-right">
									<li><a href="">Change Setting</a></li>
									<li><a href="">View Profile</a></li>
									<li><a href="">Send Message</a></li>
								</ul>
							</div>
							<!-- /card action dropdown -->
							
						</div>
						<!-- /card header -->
						
						<!-- Card content -->
						<div class="card-content">
							<p>Member Since 2008</p>
							<p>Bio data about the user. It could contain what he does, who he is, and much more.</p>
 							<p>More could be listed here.</p>
						</div>
						<!-- /card content -->
						
					</div>
					<!-- /card -->
					
				</div>
				<div class="col-lg-3 col-sm-6">
				
					<!-- Card -->
					<div class="card primary-view">
					
						<!-- Card header -->
						<div class="card-header">
						
							<!-- Card photo -->
							<div class="card-photo">
								<img title="John Smith" alt="John Smith" src="images/man-3.jpg" class="img-circle avatar">
							</div>
							<!-- /card photo -->
							
							<!-- Card short description -->
							<div class="card-short-description">
								<h5><span class="user-name"><a href="#/">John Smith</a></span></h5>
								<p class="uppercase">Agent</p>
							</div>
							<!-- /card short description -->
							
							<!-- Card action dropdown -->
							<div class="action-dropdown dropdown">
								<a data-toggle="dropdown" href="#/" aria-expanded="true"><i class="icon-dot-3 icon-more"></i></a>
								<ul class="dropdown-menu dropdown-menu-right">
									<li><a href="">Change Setting</a></li>
									<li><a href="">View Profile</a></li>
									<li><a href="">Send Message</a></li>
								</ul>
							</div>
							<!-- /card action dropdown -->
							
						</div>
						<!-- /card header -->
						
						<!-- Card content -->
						<div class="card-content">
							<p>Member Since 2008</p>
							<p>Bio data about the user. It could contain what he does, who he is, and much more.</p>
 							<p>More could be listed here.</p>
						</div>
						<!-- /card content -->
						
					</div>
					<!-- /card -->
					
				</div>
				<div class="col-lg-3 col-sm-6">
				
					<!-- Card -->
					<div class="card primary-view">
					
						<!-- Card header -->
						<div class="card-header">
						
							<!-- Card photo -->
							<div class="card-photo">
								<img title="John Smith" alt="John Smith" src="images/man-3.jpg" class="img-circle avatar">
							</div>
							<!-- /card photo -->
							
							<!-- Card short description -->
							<div class="card-short-description">
								<h5><span class="user-name"><a href="#/">John Smith</a></span></h5>
								<p class="uppercase">Agent</p>
							</div>
							<!-- /card short description -->
							
							<!-- Card action dropdown -->
							<div class="action-dropdown dropdown">
								<a data-toggle="dropdown" href="#/" aria-expanded="true"><i class="icon-dot-3 icon-more"></i></a>
								<ul class="dropdown-menu dropdown-menu-right">
									<li><a href="">Change Setting</a></li>
									<li><a href="">View Profile</a></li>
									<li><a href="">Send Message</a></li>
								</ul>
							</div>
							<!-- /card action dropdown -->
							
						</div>
						<!-- /card header -->
						
						<!-- Card content -->
						<div class="card-content">
							<p>Member Since 2008</p>
							<p>Bio data about the user. It could contain what he does, who he is, and much more.</p>
 							<p>More could be listed here.</p>
						</div>
						<!-- /card content -->
						
					</div>
					<!-- /card -->
					
				</div>
				<div class="col-lg-3 col-sm-6">
				
					<!-- Card -->
					<div class="card primary-view">
					
						<!-- Card header -->
						<div class="card-header">
						
							<!-- Card photo -->
							<div class="card-photo">
								<img title="John Smith" alt="John Smith" src="images/man-3.jpg" class="img-circle avatar">
							</div>
							<!-- /card photo -->
							
							<!-- Card short description -->
							<div class="card-short-description">
								<h5><span class="user-name"><a href="#/">John Smith</a></span></h5>
								<p class="uppercase">Agent</p>
							</div>
							<!-- /card short description -->
							
							<!-- Card action dropdown -->
							<div class="action-dropdown dropdown">
								<a data-toggle="dropdown" href="#/" aria-expanded="true"><i class="icon-dot-3 icon-more"></i></a>
								<ul class="dropdown-menu dropdown-menu-right">
									<li><a href="">Change Setting</a></li>
									<li><a href="">View Profile</a></li>
									<li><a href="">Send Message</a></li>
								</ul>
							</div>
							<!-- /card action dropdown -->
							
						</div>
						<!-- /card header -->
						
						<!-- Card content -->
						<div class="card-content">
							<p>Member Since 2008</p>
							<p>Bio data about the user. It could contain what he does, who he is, and much more.</p>
 							<p>More could be listed here.</p>
						</div>
						<!-- /card content -->
						
					</div>
					<!-- /card -->
					
				</div>
			</div>
		</div>
		
		<!-- Footer -->
		<footer class="footer-main"> 
			&copy; 2016 <strong>Mouldifi</strong> Admin Theme by <a target="_blank" href="#/">G-axon</a> 
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
<!-- Select2-->
<script src="js/plugins/select2/select2.full.min.js"></script>
<script src="js/functions.js"></script>
<script>
	$(document).ready(function () {
		$(".select2").select2();
	});
</script>
</body>
</html>
