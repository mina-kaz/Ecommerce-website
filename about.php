<?php 
/*
Template Name: About Us 
Author: Asimina Kazakou
*/
get_header();
?>

<?php
global $wpdb;
// Store results
$staff = $wpdb->get_results("SELECT * FROM staffMembers");
?>
<div class="container">
	<div class="row">
		<!-- Loop the following for all data rows-->
		<?php foreach($staff as $staff){ ?>
		<div class="col-xs-12 col-md-4 col-lg cardStyle">
			<div class="card cardCustom">
				<!-- get image -->
				<img class="card-img-top" src="<?php echo $staff->staff_image; ?>" alt="<?php echo $staff->staff_name;?>">
				<div class="card-body">
					<!-- get name -->
					<h3><?php echo $staff->staff_name; ?></h3>
					<!-- get game -->
					<p class="card-text"><b>Favorite Game: </b><?php echo $staff->staff_game; ?></p>
					<!-- get description -->
					<p class="card-text"><?php echo $staff->staff_descr; ?></p>
				</div>
			</div>
		</div>
		<?php } ?>
	</div>
	
</div>


<?php 
	  get_footer();
?>

