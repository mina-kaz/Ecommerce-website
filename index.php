<?php wp_head(); 
	  get_header();
?>

<?php 
	// array for blog list
	$args = array(
	'post_type' => 'post',
	'posts_per_page' => '3',
	);
	$blogPosts = new WP_Query($args);
	echo '<div class="container"><div class="row">';
	// loop the follow for all posts
	while ($blogPosts->have_posts()) {
		$blogPosts->the_post();
		

?>
		<div class="col-xs-12 col-md-4 col-lg cardStyle">
			<div class="card cardCustom">
				<!-- link it to the full blog post -->
				<a href="<?php the_permalink(get_the_ID()); ?>">
					<!-- get thumbnail -->
					<img class="card-img-top" src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="Card image cap">
					<div class="card-body">
						<!-- get title -->
						<h3><?php the_title(); ?></h3>
						<!-- do not show the full text -->
						<p class="card-text"><?php the_excerpt(); ?></p>
					</div>
				</a>
			</div>
		</div>
		<?php }
			wp_reset_query();
			echo'</div></div>';
		?>
<?php
	  wp_footer(); 
	  get_footer();
