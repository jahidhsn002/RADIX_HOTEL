<?php /* Template Name: Roome Page */ ?>
<?php get_header() ?>
		<!--rooms-->
			<div class="content">
					<div class="room-section">
						<div class="container">
						<h2>rooms</h2>
						<div class="room-grids">
							<?php if ( have_posts() ) {
								while ( have_posts() ) { 
								the_post();
							?>
							<div class="room1">
								<div class="col-md-5 room-grid">
								<a href="#" class="mask">
									<?php if ( has_post_thumbnail() ) { ?>
												<img src="<?php the_post_thumbnail_url(); ?>" class=" mask img-responsive zoom-img" alt="" />
									<?php }else{ ?>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/r1.jpg" class=" mask img-responsive zoom-img" alt="" />
									<?php } ?>
								</a>
								</div>
								<div class="col-md-7 room-grid1">
									<h4><?php the_title(); ?></h4>
									<div><?php the_content(); ?></div>
								</div>
								<div class="clearfix"></div>
							</div>
							<br/>
							<?php }
							} ?>
						<div class="clearfix"></div>
						</div>
					</div>
				</div>
				<!--rooms-->
<?php get_footer(); ?>