<?php /* Template Name: Gallery Page */ ?>
<?php get_header() ?>
		<div class="content">
			<!-- gallery -->
	<div class="gallery-top">
			<!-- container -->
			<div class="container">
				<div class="gallery-info">
					<h2><?php the_title(); ?></h2>
				</div>
				<div class="gallery-grids-top">
					<?php 
						// The Query
						$the_query = new WP_Query( array(
										'post_type' => 'gallery',
										'posts_per_page' => 12
									) );

						// The Loop
						if ( $the_query->have_posts() ) { $i = 0;
							while ( $the_query->have_posts() ) {
								$the_query->the_post();
									if ( $i == 0 ) { ?>
									<div class="gallery-grids">
									<?php }elseif ( $i == 4 ) { ?>
									<div class="clearfix"> </div>
									</div>
									<div class="gallery-grids gallery-grids-middle">
									<?php }elseif ( $i == 8 ) { ?>
									<div class="clearfix"> </div>
									</div>
									<div class="gallery-grids">
									<?php }if ( has_post_thumbnail() ) { ?>
									<div class="col-md-3 gallery-grid">
										<a class="example-image-link" href="<?php the_post_thumbnail_url(); ?>" data-lightbox="example-set" data-title=""><img class="example-image" src="<?php the_post_thumbnail_url(); ?>" alt=""/></a>
									</div>
									<?php }else{ ?>
									<div class="col-md-3 gallery-grid">
										<a class="example-image-link" href="<?php echo get_stylesheet_directory_uri(); ?>/images/g1.jpg" data-lightbox="example-set" data-title=""><img class="example-image" src="<?php echo get_stylesheet_directory_uri(); ?>/images/g1.jpg" alt=""/></a>
									</div>
									<?php }
									$i++;
									
								}
								/* Restore original Post Data */
								wp_reset_postdata();
							}
						?>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
			<!-- //container -->
	</div>
	<!-- //gallery -->
<?php get_footer(); ?>
