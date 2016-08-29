<?php /* Template Name: About Page */ ?>
<?php get_header(); ?>

		<!--about-->
		<div class="content">
			<div class="about-section">
			<div class="container">
				<h2><?php the_title(); ?></h2>
				<?php if ( have_posts() ) {
					while ( have_posts() ) { 
					the_post();
				?>
				<?php if ( has_post_thumbnail() ) { ?>
					<img src="<?php the_post_thumbnail_url(); ?>" class="img-responsive" alt="/">
				<?php }else{ ?>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/p1.jpg" class="img-responsive" alt="/">
				<?php } ?>
				<?php the_content(); ?>
				<?php }
				} ?>
			</div>
		</div>
		<!--about-->
		<!--why-choose-->
		<div class="why-choose">
					<div class="container">
						<h3>Awards & recognitions</h3>
						<div class="choose-grids">
							<?php 
								// The Query
								$the_query = new WP_Query( array(
												'post_type' => 'awards',
												'posts_per_page' => 3
											) );

								// The Loop
								if ( $the_query->have_posts() ) {
									while ( $the_query->have_posts() ) {
										$the_query->the_post();
							?>
							<div class="col-md-4 choose-grid">
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
			<!--why choose-->
			<div class="ourteam">
					<div class="container">
						<h3>our team</h3>
						<div class="team-grids">
						<?php 
							// The Query
							$the_query = new WP_Query( array(
											'post_type' => 'team',
											'posts_per_page' => 4
										) );

							// The Loop
							if ( $the_query->have_posts() ) {
								while ( $the_query->have_posts() ) {
									$the_query->the_post();
						?>
						<div class="col-md-3 team-grid">
							<?php if ( has_post_thumbnail() ) { ?>
								<img src="<?php the_post_thumbnail_url(); ?>" class="img-responsive" alt="" />
							<?php }else{ ?>
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/t1.jpg" class="img-responsive" alt="" />
							<?php } ?>
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
			<!--What We Offer?--
				<div class="whatweoffer">
					<div class="container">
						<h3>What We Offer</h3>
						<div class="offer-grids">
							<div class="col-md-7 offer-grid">
								<h4>Donec leo tellus, porta sit amet auctor id, porttitor</h4>
								<p>Donec leo tellus, porta sit amet auctor id, porttitor scelerisque neque. Mauris varius a massa eu fringilla. Duis tempus lectus pharetra dui posuere eleifend ut et nibh. Proin finibus libero sed augue cursus, non fermentum purus pellentesque. Praesent vel mauris mauris. Lorem ipsum dolor sit amet, consectetur adip.</p>
								<p>Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec ut nunc sagittis velit hendrerit gravida. Proin velit risus, dapibus in purus at, ultricies suscipit neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce consequat diam et nulla commodo tincidunt eget vel massa. Sed mattis ex id orci dictum dictum</p>
							</div>
						<div class="col-md-5 offer-grid1">
							<h4>Fusce interdum metus et turpis</h4>
								<div class="progress">
									<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
											<span class="sr-only">40% Complete (success)</span>
									</div>
								</div>
							<h4>Lacinia fermentum</h4>
								<div class="progress">
									 <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
											<span class="sr-only">20% Complete</span>
									 </div>
								</div>
							<h4>Aenean nec eros luctus</h4>
								<div class="progress">
									<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
										<span class="sr-only">60% Complete (warning)</span>
									</div>
								</div>
							<h4>Vestibulum ante faucibus orci</h4>
								<div class="progress">
									<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
										<span class="sr-only">80% Complete (danger)</span>
									</div>
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
				
				<!--What We Offer?-->

<?php get_footer(); ?>