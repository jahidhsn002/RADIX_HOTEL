<?php get_header(); ?>
		<!--Welcome-->
		<div class="content">
			<div class="Welcome-section">
				<div class="container">
					<h2>Welcome to <?php echo bloginfo('name'); ?></h2>
						<div class="Welcome-grids">
							<?php 
								// The Query
								$the_query = new WP_Query( array(
												'post_type' => 'feature',
												'posts_per_page' => 3
											) );

								// The Loop
								if ( $the_query->have_posts() ) {
									while ( $the_query->have_posts() ) {
										$the_query->the_post();
										?>
										
										<div class="col-md-4 welcome-grid">
										<div class="welcome-grid1">
											
											<?php if ( has_post_thumbnail() ) { ?>
												<img src="<?php the_post_thumbnail_url(); ?>" class="img-responsive" alt=""/>
											<?php }else{ ?>
												<img src="<?php echo get_stylesheet_directory_uri()."/images/w1.jpg"; ?>" class="img-responsive" alt=""/>
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
		<!--Welcome-->
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
	<div class="slider1">
		<div class="arrival-grids">			 
			 <ul id="flexiselDemo1">
				<?php 
				// The Query
				$the_query = new WP_Query( array(
								'post_type' => 'gallery',
								'posts_per_page' => 6
							) );

				// The Loop
				if ( $the_query->have_posts() ) {
					while ( $the_query->have_posts() ) {
						$the_query->the_post();
						if ( has_post_thumbnail() ) { ?>
							<li>
								 <a href="<?php the_post_thumbnail_url(); ?>"><img src="<?php the_post_thumbnail_url(); ?>" alt=""/>
								 </a>
							</li>
							<?php }else{ ?>
							
							<li>
								 <a href="<?php echo get_stylesheet_directory_uri(); ?>/images/s1.jpg"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/s1.jpg" alt=""/>
								 </a>
							</li>
							
							<?php 
							} 
						}
						/* Restore original Post Data */
						wp_reset_postdata();
					}
				?>
				</ul>			 
		</div>
	</div>
	<!-- //slider -->
			<!--most-popular-->
			<div class="most-popular">
				<div class="container">	
					<div class="popular-grids">
						<div class="col-md-5 popular-grid">
							<?php dynamic_sidebar('sidebar-2'); ?>
						</div>
						<div class="col-md-7 popular-grid1">
							<?php dynamic_sidebar('sidebar-3'); ?>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<!--most-popular-->
<?php get_footer(); ?>