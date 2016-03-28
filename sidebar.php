<div class="col-md-3 content-inner">
<div class="padder">
<?php
					if ( is_user_logged_in() ) {
						$current_user = wp_get_current_user();
						echo '<p><a href="http://deanosim1.net/wp-admin/index.php">Welcome, ' . $current_user->user_login . '!</a></p>';
							} else {
						echo '<p><a href="wp-login.php">Welcome, visitor! Login?</a></p>';
					}
				?>

<?php if ( !function_exists('dynamic_sidebar')
        || !dynamic_sidebar() ) : ?>
	<ul id="sidebar">
 <li id="about">
  <h2>About</h2>
  <p>This is my blog.</p>
 </li>
 <li id="links">
  <h2>Links</h2>
  <ul>
   <li><a href="http://example.com">Example</a></li>
  </ul>
 </li>
<?php endif; ?>
</ul>
</div>
</div>