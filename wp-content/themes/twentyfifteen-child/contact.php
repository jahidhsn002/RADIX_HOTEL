<?php /* Template Name: Contact Page */ ?>
<?php get_header() ?>
		<!--about-->
		
			<div class="content">
				<div class="contact">
				<div class="container">
					<h2><?php the_title(); ?></h2>
					<div class="google-map">
						<?php echo dash('main','map','<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d424396.3176723366!2d150.92243255000002!3d-33.7969235!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b129838f39a743f%3A0x3017d681632a850!2sSydney+NSW%2C+Australia!5e0!3m2!1sen!2sin!4v1431587453420"></iframe>'); ?>
					</div>
					<div class="contact-grids">
						<div class="col-md-6 contact-left">
							<?php if ( have_posts() ) {
								while ( have_posts() ) { 
								the_post();
							?>
								<?php the_content(); ?>
							<?php }
							} ?>
						</div>
						<div class="col-md-6 contact-right">
							<?php echo do_shortcode(dash('main','cf7','[contact-form-7 id="117" title="Contact form 1"]')); ?>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			
<?php get_footer(); ?>