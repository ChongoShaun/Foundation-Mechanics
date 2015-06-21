<?php get_header(); ?>

	<!-- Staff Template
	================================================== -->
	<section>
		<div class="big-container single-projects-container">
			<div class="container">
				<div class="twelve columns">
					<h2>PROJECT DETAIL</h2>
				</div>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<div class="twelve columns">
						<h1><?php the_title();?></h1>
					</div>
					</div>
					<div class="container clearfix">
						<?php 
						
						$images = get_field('images');
						
						if( $images ): ?>
					        <?php foreach( $images as $image ): ?>
				                     <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="scale-with-grid" />
					        <?php endforeach; ?>
						<?php endif; ?>
					</div>

					<div class="container">
						<div class="six columns">
							<h3>Client:</h3>
							<p><?php the_field('client'); ?></p>							
						</div>
						<div class="six columns">
							<h3>Project Description</h3>
							<?php the_field('project_description'); ?>
						</div>
					</div>
				<?php endwhile; endif; ?>
			</div>
		</div>
	</section>
	<!-- End Staff Template -->

<?php get_footer(); ?>

