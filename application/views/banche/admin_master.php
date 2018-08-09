<!DOCTYPE html>
<html lang="en">
	<head>
		
		<!-- start: Meta -->
		<meta charset="utf-8">
		<title>Bangla Chemical Admin Panel</title>
		<meta name="description" content="Bootstrap Metro Dashboard">
		<meta name="author" content="Dennis Ji">
		<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
		<!-- end: Meta -->
		
		<!-- start: Mobile Specific -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- end: Mobile Specific -->
		
		<!-- start: CSS -->
		<link id="bootstrap-style" href="<?php echo base_url()?>asset/admin_asset/css/bootstrap.min.css" rel="stylesheet">
		<link href="<?php echo base_url()?>asset/admin_asset/css/bootstrap-responsive.min.css" rel="stylesheet">
		<link id="base-style" href="<?php echo base_url()?>asset/admin_asset/css/style.css" rel="stylesheet">
		<link id="base-style-responsive" href="<?php echo base_url()?>asset/admin_asset/css/style-responsive.css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
		<!-- end: CSS -->
		
		<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link id="ie-style" href="<?php echo base_url()?>asset/admin_asset/css/ie.css" rel="stylesheet">
		<![endif]-->
		
		<!--[if IE 9]>
		<link id="ie9style" href="<?php echo base_url()?>asset/admin_asset/css/ie9.css" rel="stylesheet">
		<![endif]-->
		
		<!-- start: Favicon -->
		<link rel="shortcut icon" href="<?php echo base_url()?>asset/admin_asset/img/favicon.ico">
		<!-- end: Favicon -->
		
		
		
		
	</head>
	<body>
		<!-- start: Header -->
		<div class="navbar">
			<div class="navbar-inner">
				<div class="container-fluid">
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>
					<a class="brand" href="<?php echo base_url()?>"><span> Bangla Chemical</span></a>
					
					<!-- start: Header Menu -->
					<div class="nav-no-collapse header-nav">
						<ul class="nav pull-right">
							<!-- start: User Dropdown -->
							<li class="dropdown">
								<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
									<i class="halflings-icon white user"></i>
									<?php echo $this->session->username;?>
									<span class="caret"></span>
								</a>
								<ul class="dropdown-menu">
									<li><a href="<?php echo base_url('admin-logout')?>"><i class="halflings-icon off"></i> Logout</a></li>
								</ul>
							</li>
							<!-- end: User Dropdown -->
						</ul>
					</div>
					<!-- end: Header Menu -->
					
				</div>
			</div>
		</div>
		<!-- start: Header -->
		
		<div class="container-fluid-full">
			<div class="row-fluid">
				
				<!-- start: Main Menu -->
				<div id="sidebar-left" class="span2">
					<div class="nav-collapse sidebar-nav">
						<ul class="nav nav-tabs nav-stacked main-menu">
							<li><a href="<?php echo base_url()?>admin-dashboard"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Dashboard</span></a></li>
							
							<li>
								<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Key Personnel</span></a>
								<ul>
									<li><a href="<?php echo base_url()?>admin/add_key_personnel_form"><i class="icon-picture"></i><span class="hidden-tablet">Add Key Personnel</span></a></li>
									<li><a class="submenu" href="<?php echo base_url()?>admin/manage_key_personnel"><i class="icon-file-alt"></i><span class="hidden-tablet"> Manage Key Personnel</span></a></li>
								</ul>
							</li>

							<li>
								<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Products</span></a>
								<ul>
									<li><a href="<?php echo base_url()?>admin/add_product_form"><i class="icon-picture"></i><span class="hidden-tablet">Add Product</span></a></li>
									<li><a href="<?php echo base_url()?>admin/add_highlighted_product_form"><i class="icon-picture"></i><span class="hidden-tablet">Add highlighted Product</span></a></li>

									<li><a class="submenu" href="<?php echo base_url()?>admin/manage_product"><i class="icon-file-alt"></i><span class="hidden-tablet"> Manage Product</span></a></li>
									<li><a class="submenu" href="<?php echo base_url()?>admin/manage_highlighted_product"><i class="icon-file-alt"></i><span class="hidden-tablet"> Manage highlighted Product</span></a></li>
								</ul>
							</li>

							<li>
								<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Our Overseas Partner</span></a>
								<ul>
									<li><a href="<?php echo base_url()?>admin/add_partner_image_form"><i class="icon-picture"></i><span class="hidden-tablet">Add Partner</span></a></li>
									<li><a class="submenu" href="<?php echo base_url()?>admin/manage_partner_image"><i class="icon-file-alt"></i><span class="hidden-tablet"> Manage Partner</span></a></li>
								</ul>
							</li>
							<li>
								<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Associations & Memberships </span></a>
								<ul>
									<li><a href="<?php echo base_url()?>admin/add_associations_memberships_form"><i class="icon-picture"></i><span class="hidden-tablet">Add Associations & Memberships</span></a></li>
									<li><a class="submenu" href="<?php echo base_url()?>admin/manage_associations_memberships"><i class="icon-file-alt"></i><span class="hidden-tablet">Manage Associations & Memberships</span></a></li>
								</ul>
							</li>
							<li>
								<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Affiliated Companies </span></a>
								<ul>
									<li><a href="<?php echo base_url()?>affiliated_companies/add_affiliated_companies_form"><i class="icon-picture"></i><span class="hidden-tablet">Add Affiliated Companies</span></a></li>
									<li><a class="submenu" href="<?php echo base_url()?>affiliated_companies/manage_affiliated_companies"><i class="icon-file-alt"></i><span class="hidden-tablet">Manage Affiliated Companies</span></a></li>
								</ul>
							</li>
							<li>
								<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> News & Events </span></a>
								<ul>
									<li><a href="<?php echo base_url()?>media/add_news_events_form"><i class="icon-picture"></i><span class="hidden-tablet">Add News & Events</span></a></li>
									<li><a class="submenu" href="<?php echo base_url()?>media/manage_news_events"><i class="icon-file-alt"></i><span class="hidden-tablet">Manage News & Events</span></a></li>
								</ul>
							</li>
							<li>
								<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Archive </span></a>
								<ul>
									<li><a href="<?php echo base_url()?>archive/add_archive_form"><i class="icon-picture"></i><span class="hidden-tablet">Add Archive</span></a></li>
									<li><a class="submenu" href="<?php echo base_url()?>archive/manage_archive"><i class="icon-file-alt"></i><span class="hidden-tablet">Manage Archive</span></a></li>
								</ul>
							</li>
							
							<li>
								<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Books Of CEO </span></a>
								<ul>
									<li><a href="<?php echo base_url()?>books_article/add_published_books_form"><i class="icon-picture"></i><span class="hidden-tablet">Add Published Books</span></a></li>
									<li><a class="submenu" href="<?php echo base_url()?>books_article/manage_published_books"><i class="icon-file-alt"></i><span class="hidden-tablet">Manage Published Books</span></a></li>
								</ul>
							</li>

							<li>
								<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Column & Article Of CEO </span></a>
								<ul>
									<li><a href="<?php echo base_url()?>books_article/add_column_article_form"><i class="icon-picture"></i><span class="hidden-tablet">Add Column & Article</span></a></li>
									<li><a class="submenu" href="<?php echo base_url()?>books_article/manage_column_article"><i class="icon-file-alt"></i><span class="hidden-tablet">Manage Column & Article</span></a></li>
								</ul>
							</li>

							<li>
								<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Works & Affiliation </span></a>
								<ul>
									<li><a href="<?php echo base_url()?>books_article/add_works_affiliation_form"><i class="icon-picture"></i><span class="hidden-tablet">Add Works & Affiliation</span></a></li>
									<li><a class="submenu" href="<?php echo base_url()?>books_article/manage_works_affiliation"><i class="icon-file-alt"></i><span class="hidden-tablet">Manage Works & Affiliation</span></a></li>
								</ul>
							</li>

						</ul>
					</div>
				</div>
				<!-- end: Main Menu -->
				
				<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
				</noscript>
				
				<!-- start: Content -->
				<div id="content" class="span10">
					
					<?php echo $admin_main_content; ?>
					
					</div><!--/.fluid-container-->
					
					<!-- end: Content -->
					</div><!--/#content.span10-->
					</div><!--/fluid-row-->
					
					<div class="modal hide fade" id="myModal">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">×</button>
							<h3>Settings</h3>
						</div>
						<div class="modal-body">
							<p>Here settings can be configured...</p>
						</div>
						<div class="modal-footer">
							<a href="#" class="btn" data-dismiss="modal">Close</a>
							<a href="#" class="btn btn-primary">Save changes</a>
						</div>
					</div>
					
					<div class="clearfix"></div>
					
					<footer>
						<p>
							<span style="text-align:left;float:left">&copy; 2018 <a href="<?php echo base_url()?>" alt="Bootstrap_Metro_Dashboard">Bangla-Chemical Admin Panel</a></span>
							
						</p>
					</footer>
					
					<!-- start: JavaScript-->
					<script src="<?php echo base_url()?>asset/admin_asset/js/jquery-1.9.1.min.js"></script>
					<script src="<?php echo base_url()?>asset/admin_asset/js/jquery-migrate-1.0.0.min.js"></script>
					
					<script src="<?php echo base_url()?>asset/admin_asset/js/jquery-ui-1.10.0.custom.min.js"></script>
					
					<script src="<?php echo base_url()?>asset/admin_asset/js/jquery.ui.touch-punch.js"></script>
					
					<script src="<?php echo base_url()?>asset/admin_asset/js/modernizr.js"></script>
					
					<script src="<?php echo base_url()?>asset/admin_asset/js/bootstrap.min.js"></script>
					
					<script src="<?php echo base_url()?>asset/admin_asset/js/jquery.cookie.js"></script>
					
					<script src='<?php echo base_url()?>asset/admin_asset/js/fullcalendar.min.js'></script>
					
					<script src='<?php echo base_url()?>asset/admin_asset/js/jquery.dataTables.min.js'></script>
					<script src="<?php echo base_url()?>asset/admin_asset/js/excanvas.js"></script>
					<script src="<?php echo base_url()?>asset/admin_asset/js/jquery.flot.js"></script>
					<script src="<?php echo base_url()?>asset/admin_asset/js/jquery.flot.pie.js"></script>
					<script src="<?php echo base_url()?>asset/admin_asset/js/jquery.flot.stack.js"></script>
					<script src="<?php echo base_url()?>asset/admin_asset/js/jquery.flot.resize.min.js"></script>
					
					<script src="<?php echo base_url()?>asset/admin_asset/js/jquery.chosen.min.js"></script>
					
					<script src="<?php echo base_url()?>asset/admin_asset/js/jquery.uniform.min.js"></script>
					
					<script src="<?php echo base_url()?>asset/admin_asset/js/jquery.cleditor.min.js"></script>
					
					<script src="<?php echo base_url()?>asset/admin_asset/js/jquery.noty.js"></script>
					
					<script src="<?php echo base_url()?>asset/admin_asset/js/jquery.elfinder.min.js"></script>
					
					<script src="<?php echo base_url()?>asset/admin_asset/js/jquery.raty.min.js"></script>
					
					<script src="<?php echo base_url()?>asset/admin_asset/js/jquery.iphone.toggle.js"></script>
					
					<script src="<?php echo base_url()?>asset/admin_asset/js/jquery.uploadify-3.1.min.js"></script>
					
					<script src="<?php echo base_url()?>asset/admin_asset/js/jquery.gritter.min.js"></script>
					
					<script src="<?php echo base_url()?>asset/admin_asset/js/jquery.imagesloaded.js"></script>
					
					<script src="<?php echo base_url()?>asset/admin_asset/js/jquery.masonry.min.js"></script>
					
					<script src="<?php echo base_url()?>asset/admin_asset/js/jquery.knob.modified.js"></script>
					
					<script src="<?php echo base_url()?>asset/admin_asset/js/jquery.sparkline.min.js"></script>
					
					<script src="<?php echo base_url()?>asset/admin_asset/js/counter.js"></script>
					
					<script src="<?php echo base_url()?>asset/admin_asset/js/retina.js"></script>
					<script src="<?php echo base_url()?>asset/admin_asset/js/custom.js"></script>
					<!-- end: JavaScript-->
					
				</body>
			</html>