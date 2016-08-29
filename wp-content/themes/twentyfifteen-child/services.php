<?php /* Template Name: Services Page */ ?>
<?php get_header() ?>
		<!--services-->
		<div class="content">
			<div class="services">
	<div class="container">
		<div class="services-main">
				<h2><?php the_title(); ?></h2>
			<div class="services1">
				<?php 
				// The Query
				$the_query = new WP_Query( array(
								'post_type' => 'service',
								'posts_per_page' => 2
							) );

				// The Loop
				if ( $the_query->have_posts() ) {
					while ( $the_query->have_posts() ) {
						$the_query->the_post();
				?>
				<div class="col-md-6 services-grid">
					<div class="col-md-5 serv-img">
						<?php if ( has_post_thumbnail() ) { ?>
							<img src="<?php the_post_thumbnail_url(); ?>" alt="" class="img-responsive">
						<?php }else{ ?>
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/p2.jpg" alt="" class="img-responsive">
						<?php } ?>
					</div>
					<div class="col-md-7 serv-text">
						<h4><?php the_title(); ?></h4>
						<div><?php the_content(); ?></div>
					</div>
				  <div class="clearfix"> </div>
				</div>
				<?php
						}
						/* Restore original Post Data */
						wp_reset_postdata();
					}
				?>
			   <div class="clearfix"> </div>
			</div>
			<div class="services2">
				<?php 
				// The Query
				$the_query = new WP_Query( array(
								'post_type' => 'service',
								'posts_per_page' => 2,
								'offset' => 2
							) );

				// The Loop
				if ( $the_query->have_posts() ) {
					while ( $the_query->have_posts() ) {
						$the_query->the_post();
				?>
				<div class="col-md-6 services-grid">
					<div class="col-md-5 serv-img">
						<?php if ( has_post_thumbnail() ) { ?>
							<img src="<?php the_post_thumbnail_url(); ?>" alt="" class="img-responsive">
						<?php }else{ ?>
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/p2.jpg" alt="" class="img-responsive">
						<?php } ?>
					</div>
					<div class="col-md-7 serv-text">
						<h4><?php the_title(); ?></h4>
						<div><?php the_content(); ?></div>
					</div>
				  <div class="clearfix"> </div>
				</div>
				<?php
						}
						/* Restore original Post Data */
						wp_reset_postdata();
					}
				?>
			  <div class="clearfix"> </div>
			</div>
		</div>
	</div>
</div>
	<div class="features">
					<div class="container">
						<h3>Facility</h3>
							<div class="features-grids">
							<?php 
								// The Query
								$the_query = new WP_Query( array(
												'post_type' => 'facility',
												'posts_per_page' => 4
											) );

								// The Loop
								if ( $the_query->have_posts() ) {
									$icon = ['glyphicon glyphicon-user','glyphicon glyphicon-gift','glyphicon glyphicon-camera','glyphicon glyphicon-calendar'];
									$i = 0;
									while ( $the_query->have_posts() ) { 
										$the_query->the_post();
										?>
								
										<div class="col-md-3 feature-grid">
										<div class="feature">
											<div class="feature1">
												<span class="<?php echo $icon[$i]; ?>" aria-hidden="true"></span>
												<h4><?php the_title(); ?></h4>
											</div>
											<div class="feature2">
												<div><?php the_content(); ?></div>
											</div>
										</div>
										</div>
										<?php $i++;
									}
									/* Restore original Post Data */
									wp_reset_postdata();
								}
							?>
							<div class="clearfix"></div>
							</div>
					</div>
				</div>
	<!-- slider -->
				<div class="packages-section">
				<div class="container">
					<h3>our packages</h3>
						<div class="packages-grids">
							<?php 
								// The Query
								$the_query = new WP_Query( array(
												'post_type' => 'package',
												'posts_per_page' => 4
											) );

								// The Loop
								if ( $the_query->have_posts() ) {
									while ( $the_query->have_posts() ) { 
										$the_query->the_post();
								?>
								<div class="col-md-3 packages-grid">
									<div class="packages-grid1">
										<?php if ( has_post_thumbnail() ) { ?>
											<img src="<?php the_post_thumbnail_url(); ?>" class="img-responsive" alt=""/>
										<?php }else{ ?>
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/p6.jpg" class="img-responsive" alt=""/>
										<?php } ?>
									</div>
									<h4><?php the_title(); ?></h4>
									<div><?php the_content(); ?></div>
								</div>
								<?php
									}
									/* Restore original Post Data */
									wp_reset_postdata();
								}
							?>
							<div class="clearfix"></div>
						</div>
				</div>
			</div>
<?php get_footer(); ?>
