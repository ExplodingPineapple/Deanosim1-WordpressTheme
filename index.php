<?php get_header(); ?>
<div class="container">
		<div class="avatar-logo">
			<img src="<?php bloginfo('template_directory');?>/ExplodingPineappleFBProfilePhoto.png" />
		</div>
			<div class="content">
				<div class="row">
					<div class="col-md-8 content-inner">
					
					<!--start wordpress code-->
					<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
  <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="author author-box"><?php echo get_avatar( get_the_author_meta( 'user_email' ), '50' ); ?> by <?php the_author(); ?></div>
  
  <div class="post-content">
    <div class="post-header">
		<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
        <div class="date"><?php the_time( 'M j Y g:i a' ); ?></div>
    </div><!--end post header-->
    <div class="entry clear">
        <?php if ( function_exists( 'add_theme_support' ) ) the_post_thumbnail(); ?>
        <?php the_content(); ?>
        <?php edit_post_link(); ?>
        <?php wp_link_pages(); ?>
    </div><!--end entry-->
    <div class="post-footer">
        <div class="comments"><?php comments_popup_link( 'Leave a Comment', '1 Comment', '% Comments' ); ?></div>
    </div><!--end post footer-->
  </div><!--end post-->
  </div>
<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
  <div class="navigation index">
    <div class="alignleft"><?php next_posts_link( 'Older Entries' ); ?></div>
    <div class="alignright"><?php previous_posts_link( 'Newer Entries' ); ?></div>
  </div><!--end navigation-->
<?php  else :  ?>
<?php  endif;  ?>
<!--end wordpress code-->
					</div>
					<?php get_sidebar(); ?>
					</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
