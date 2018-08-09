<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>::Bangla-Chemical::</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>asset/css/style.css" />
	<link rel="stylesheet" href="<?php echo base_url()?>asset/css/main.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>asset/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>asset/css/bootstrap-theme.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>asset/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>asset/css/addvertise_scroll.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
    	// navigation click actions	
    	$('.scroll-link').on('click', function(event){
    		event.preventDefault();
    		var sectionID = $(this).attr("data-id");
    		scrollToID('#' + sectionID, 750);
    	});
    	// scroll to top action
    	$('.scroll-top').on('click', function(event) {
    		event.preventDefault();
    		$('html, body').animate({scrollTop:0}, 'slow'); 		
    	});
    	// mobile nav toggle
    	$('#nav-toggle').on('click', function (event) {
    		event.preventDefault();
    		$('#main-nav').toggleClass("open");
    	});
    });
    // scroll function
    function scrollToID(id, speed){
    	var offSet =100;
    	var targetOffset = $(id).offset().top - offSet;
    	var mainNav = $('#main-nav');
    	$('html,body').animate({scrollTop:targetOffset}, speed);
    	if (mainNav.hasClass("open")) {
    		mainNav.css("height", "1px").removeClass("in").addClass("collapse");
    		mainNav.removeClass("open");
    	}
    }
    if (typeof console === "undefined") {
        console = {
            log: function() { }
        };
    }
</script>   
</head>

<body>

<header class="mobile-navbar" style="z-index:9999999999999999999999999999999999999999999;">
    <div class="navbar-toggle">
        <div class="hamburger-inner"></div>
    </div>
    <a href="<?php echo base_url()?>"><img src="<?php echo base_url()?>asset/images/interface/small-logo.png"></a>
</header>
<div class="side-nav">
    <div class="logo">
        <a href="<?php echo base_url()?>"><img src="<?php echo base_url()?>asset/images/interface/logo.png"></a>
    </div>
</div>
<nav class="left-bar-navbar" role="navigation">
    <ul class="left-side-navbar">
        <li class="nav-item has-submenu"><a href="javascript:;" class="font-medium" data-submenu="about">About Us</a></li>
        <li class="nav-item has-submenu"><a href="javascript:;" class="font-medium" data-submenu="products">Products</a></li>
        <li class="nav-item"><a href="<?php echo base_url()?>page/our_overseas_partner" class="font-medium">Our Overseas Partners</a></li>
        <li class="nav-item"><a href="<?php echo base_url()?>page/associations_membership" class="font-medium">Associations & Memberships</a></li>
        <li class="nav-item"><a href="<?php echo base_url()?>page/affiliated_companies" class="font-medium">Affiliated Companies</a></li>
        <li class="nav-item"><a href="<?php echo base_url()?>page/news_events" class="font-medium">News & Events</a></li>
        <li class="nav-item"><a href="<?php echo base_url()?>archive/our_archive" class="font-medium">Archive</a></li>
        <li class="nav-item has-submenu"><a href="javascript:;" class="font-medium" data-submenu="basement">Our CEO</a></li>
        <li class="nav-item"><a href="<?php echo base_url()?>page/contact_us" class="font-medium">Contact Us</a></li>
    </ul>
</nav>
<!-- Submenus Side Panel -->
<div id="submenus_side" class="side-is-hide">
    <div class="close-submenus submenus--close"></div>
    <ul class="item-submenu is-hide" data-submenu="about">
        <li class=""><a href="<?php echo base_url()?>page/about">About Our Company</a></li>
        <li class=""><a href="<?php echo base_url()?>page/what_we_do">What We Do</a></li>
        <li class=""><a href="<?php echo base_url()?>page/key_personnel">Key Personnel</a></li>
        <li class=""><a href="<?php echo base_url()?>page/intro_bd">Introduction to Bangladesh</a></li>
    </ul>
    <ul class="item-submenu is-hide" data-submenu="products">
        <li class=""><a href="<?php echo base_url()?>page/alphabetic_product">By Alphabetical Order</a></li>
        <li class=""><a href="<?php echo base_url()?>page/group_product">By Various Groups & Markets</a></li>
    </ul>
    <ul class="item-submenu is-hide" data-submenu="basement">
        <li class=""><a href="<?php echo base_url()?>page/life_sketch">Life Sketch of CEO.</a></li>
        <li class=""><a href="<?php echo base_url()?>page/publications_ceo">Publications of CEO.</a></li>
        <li class=""><a href="<?php echo base_url()?>page/works_affiliation">Works & Affiliations</a></li>
    </ul>
</div>