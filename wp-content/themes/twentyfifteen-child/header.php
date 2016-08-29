<!DOCTYPE HTML>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="<?php echo dash('main', 'key', 'Hotel'); ?>" />
<meta name="description" content="<?php echo dash('main', 'description', 'Details'); ?>">

<meta property="og:title" content="<?php echo dash('main', 'title', get_bloginfo('name')); ?>">
<meta property="og:type" content="hotel" />
<meta property="og:url" content="<?php echo site_url(); ?>">
<meta property="og:image" content="<?php echo dash('main', 'image', get_stylesheet_directory_uri() . '/images/logo.png'); ?>">
<meta property="og:description" content="<?php echo dash('main', 'details', 'Details'); ?>">

<meta name="twitter:card" content="Visite Us" />
<meta name="twitter:title" content="<?php echo dash('main', 'title', get_bloginfo('name')); ?>">
<meta name="twitter:type" content="hotel" />
<meta name="twitter:url" content="<?php echo site_url(); ?>">
<meta name="twitter:image" content="<?php echo dash('main', 'image', get_stylesheet_directory_uri() . '/images/logo.png'); ?>">
<meta name="twitter:description" content="<?php echo dash('main', 'details', 'Details'); ?>">

<?php wp_head(); ?>

<?php if( is_home() ) { ?>

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

</script>

<?php }else{ ?>

<style>.header {min-height: inherit;}.slider {display: none;}</style>

<?php } ?>
</head>
<body>
		<!--header-->
			<div class="header">
				<div class="container">
					<div class="header-top">
						<nav class="navbar navbar-default">
							<div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
								<div class="navbar-header">
									  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
											<span class="sr-only">Toggle navigation</span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
									  </button>
									<div class="navbar-brand">
										<h1><a href="<?php echo get_bloginfo('url'); ?>"><img class="logo" src="<?php echo dash('main', 'logo', get_stylesheet_directory_uri() . '/images/logo.png'); ?>" alt="logo"><?php echo get_bloginfo('name'); ?></a></h1>
									</div>
								</div>

    <!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<?php 
									$args = array('theme_location' => 'primary', 
										'container_class' => 'site_nav_top navbar-collapse collapse', 
										'menu_class' => 'nav navbar-nav',
										'fallback_cb' => '',
										'menu_id' => 'main-menu',
										'walker' => new Upbootwp_Walker_Nav_Menu()); 
									wp_nav_menu($args);
								?>
							  
							</div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
						</nav>

					</div>

		<div class="slider">
			<div class="callbacks_container">
				<ul class="rslides" id="slider">
					 <li>	          
						<h3>great choice of  <span>hotels</span> </h3>
					 </li>
					 <li>	          
						<h3>best rates  <span>guaranteed</span> </h3>  
					 </li>
					 <li>	          
						 <h3>the best place to <span>relax</span> </h3>
					</li>
				</ul>
			</div>
		</div>
			
		</div>
	</div>
<!--header-->