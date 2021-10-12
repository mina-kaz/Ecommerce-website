<?php /*
Template Name: Front 
Author: Asimina Kazakou
*/
get_header();
?>
<div class="container">
	<div class="row">
		<!-- Shop Page -->
		<div class="col-xs-12  col-md-4 col-lg cardStyle">
			<!-- link the correct page -->
			<a href="<?php the_permalink('12'); ?>">
				<div class="card cardCustom">
						<!-- get thumbnail -->
						<img class="card-img-top" src="<?php echo get_the_post_thumbnail( '12', 'medium_large' ); ?>" >
						<div class="card-body">
							<!-- get title -->
							<h3 class="text-center"><?php echo get_the_title('12');?></h3>
						</div>
				</div>
			</a>
		</div>
		<!-- News Page -->
		<div class="col-xs-12  col-md-4 col-lg cardStyle">
			<a href="<?php the_permalink('102'); ?>">
				<div class="card cardCustom">
						<img class="card-img-top" src="<?php echo get_the_post_thumbnail( '102', 'medium_large' ); ?>" >
						<div class="card-body">
							<h3 class="text-center"><?php echo get_the_title('102');?></h3>
							<p class="card-text"><?php ?></p>
						</div>
				</div>
			</a>
		</div>
		
		<!-- About Page -->
		<div class="col-xs-12 col-md-4 col-lg cardStyle">
			<a href="<?php the_permalink('176'); ?>">
				<div class="card cardCustom">
						<img class="card-img-top" src=" <?php echo get_the_post_thumbnail( '176', 'medium_large'); ?>" > 
						<div class="card-body">
							<h3 class="text-center"><?php echo get_the_title('176');?></h3>
							<p class="card-text"><?php ?></p>
						</div>
				</div>
			</a>
		</div>
	</div>
</div>
<?php get_footer(); ?>