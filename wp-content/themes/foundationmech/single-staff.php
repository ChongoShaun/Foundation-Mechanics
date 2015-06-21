<?php get_header(); ?>

	<!-- Staff Template
	================================================== -->
	<section>
		<div class="big-container staff-container">
			<div class="container">
				<div class="twelve columns">
					<h2>STAFF BIO</h2>
				</div>
				<div class="twelve columns">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

						<div class="six columns alpha">
							<?php 
							$image = get_field('image');
							
							if( !empty($image) ): ?>
							
								<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="scale-with-grid" />
							
							<?php endif; ?>
						</div>
						<div class="six columns omega">
							<h1><?php the_title();?> - <span><?php the_field('position'); ?></span></h1>
							<div class="entry-content">
								<?php the_content();?>
							</div>
						</div>
					<?php endwhile; endif; ?>
				</div>
			</div>
		</div>
	</section>
	<!-- End Staff Template -->

<?php get_footer(); ?>


