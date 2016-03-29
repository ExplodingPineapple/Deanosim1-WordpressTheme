<!DOCTYPE html>
<html>
<head>
	<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php bloginfo('name');?> | <?php bloginfo('description');?></title>
    <!--<style>body {background-image:url("<?php bloginfo('template_directory');?>/ExplodingPineappleFBCoverPhoto.png");}</style>-->
    <style>
        body {
            background-color: #ce9f2c
        }
    </style>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_enqueue_script("jquery"); ?>
	<?php wp_head(); ?>
</head>

<body>
	<div class="container">
		<div class="navbar-wrapper">
        <div class="navbar navbar-inverse navbar-static-top" role="navigation">
            <div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
              <a class="navbar-brand" href="/"><?php bloginfo( 'name' ); ?></a>
            </div>
            <div aria-expanded="true" id=navbar class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <?php wp_list_pages(array('title_li' => '')); ?>
              </ul>
              <ul class="nav navbar-nav navbar-right">
				<?php
					if ( is_user_logged_in() ) {
						$current_user = wp_get_current_user();
						echo 
						'<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Welcome, ' . $current_user->user_login . '! <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else here</a></li>
							<li class="divider"></li>
							<li class="dropdown-header">Nav header</li>
							<li><a href="#">Separated link</a></li>
							<li><a href="/wp-login.php?action=logout">Logout</a></li>
							</ul>
						</li>';
							} else {
						echo 
						'<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Welcome Visitor! <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="/wp-login.php">Sign In</a></li>
							<li><a href="#">Sign Up (Disabled At the Moment)</a></li>
							</ul>
						</li>';
					}
				?>
              </ul>
            </div>
          </div>
        </div>
    </div>