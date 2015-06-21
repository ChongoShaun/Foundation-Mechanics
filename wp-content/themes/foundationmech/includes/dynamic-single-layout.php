<?php
if( have_rows('hero_section') ):
    while ( have_rows('hero_section') ) : the_row();
        if( get_row_layout() == 'hero' ):
			$hero = get_sub_field('image');
        	?>
			<section>
				<div class="big-container hero-container" style="background-image:url(<?php echo $hero['url']; ?>); background-position: center center; background-size: cover">
					<div class="hero-text-container">
						<div class="container">
							<div class="twelve columns">
								<div class="hero-text">
									<?php the_sub_field('text');?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<?php
		else:
			// Nothing
		endif;
	endwhile;
endif;
if( have_rows('services') ):
	?>
	<section>
		<div class="big-container services-container">
			<?php
		    while ( have_rows('services') ) : the_row();
				if (get_row_layout() == 'full_width_text' ):
					?>
					<div class="container full-width">
						<div class="twelve columns">
							<?php the_sub_field('text'); ?>
						</div>
					</div>
					<?php
				elseif (get_row_layout() == 'two_column_text' ):
					?>
					<div class="container two-column">
						<div class="six columns">
							<?php the_sub_field('column_1');?>
						</div>
						<div class="six columns">
							<?php the_sub_field('column_2');?>							
						</div>						
					</div>
					<?php
				elseif (get_row_layout() == 'two_column_image_and_text' ):
					?>
					<div class="container two-column-image">
						<div class="four columns">
							<?php the_sub_field('column_1');?>
						</div>
						<div class="eight columns">
							<?php the_sub_field('column_2');?>							
						</div>						
					</div>
					<?php		
				elseif (get_row_layout() == 'horizontal_rule' ):
					?>
					<div class="container">
						<div class="twelve columns">
							<hr />
						</div>
					</div>
					<?php		
		
				else:
					// Nothing
				endif;
			endwhile;
			?>
		</div>
	</section>
	<?php
endif;
if( have_rows('projects') ):
	?>
	<section>
		<div class="big-container projects-container">
			<?php
		    while ( have_rows('projects') ) : the_row();
				if (get_row_layout() == 'full_width_text' ):
					?>
					<div class="container full-width">
						<div class="twelve columns">
							<?php the_sub_field('text'); ?>
						</div>
					</div>
					<?php
				elseif (get_row_layout() == 'two_column_text' ):
					?>
					<div class="container two-column">
						<div class="six columns">
							<?php the_sub_field('column_1');?>
						</div>
						<div class="six columns">
							<?php the_sub_field('column_2');?>							
						</div>						
					</div>
					<?php
				elseif (get_row_layout() == 'two_column_image_and_text' ):
					?>
					<div class="container two-column-image">
						<div class="four columns">
							<?php the_sub_field('column_1');?>
						</div>
						<div class="eight columns">
							<?php the_sub_field('column_2');?>							
						</div>						
					</div>
					<?php		
				elseif (get_row_layout() == 'horizontal_rule' ):
					?>
					<div class="container">
						<div class="twelve columns">
							<hr />
						</div>
					</div>
					<?php		
		
				else:
					// Nothing
				endif;
			endwhile;
			?>
		</div>
	</section>
	<?php
endif;
if( have_rows('about') ):
	?>
	<section>
		<div class="big-container about-container">
			<?php
		    while ( have_rows('about') ) : the_row();
				if (get_row_layout() == 'full_width_text' ):
					?>
					<div class="container full-width">
						<div class="twelve columns">
							<?php the_sub_field('text'); ?>
						</div>
					</div>
					<?php
				elseif (get_row_layout() == 'two_column_text' ):
					?>
					<div class="container two-column">
						<div class="six columns">
							<?php the_sub_field('column_1');?>
						</div>
						<div class="six columns">
							<?php the_sub_field('column_2');?>							
						</div>						
					</div>
					<?php
				elseif (get_row_layout() == 'two_column_image_and_text' ):
					?>
					<div class="container two-column-image">
						<div class="four columns">
							<?php the_sub_field('column_1');?>
						</div>
						<div class="eight columns">
							<?php the_sub_field('column_2');?>							
						</div>						
					</div>
					<?php		
				elseif (get_row_layout() == 'horizontal_rule' ):
					?>
					<div class="container">
						<div class="twelve columns">
							<hr />
						</div>
					</div>
					<?php		
		
				else:
					// Nothing
				endif;
			endwhile;
			?>
		</div>
	</section>
	<?php
endif;
if( have_rows('contact') ):
	?>
	<section>
		<div class="big-container contact-container">
			<?php
		    while ( have_rows('contact') ) : the_row();
				if (get_row_layout() == 'full_width_text' ):
					?>
					<div class="container full-width">
						<div class="twelve columns">
							<?php the_sub_field('text'); ?>
						</div>
					</div>
					<?php
				elseif (get_row_layout() == 'two_column_text' ):
					?>
					<div class="container two-column">
						<div class="six columns">
							<?php the_sub_field('column_1');?>
						</div>
						<div class="six columns">
							<?php the_sub_field('column_2');?>							
						</div>						
					</div>
					<?php
				elseif (get_row_layout() == 'two_column_image_and_text' ):
					?>
					<div class="container two-column-image">
						<div class="four columns">
							<?php the_sub_field('column_1');?>
						</div>
						<div class="eight columns">
							<?php the_sub_field('column_2');?>							
						</div>						
					</div>
					<?php		
				elseif (get_row_layout() == 'horizontal_rule' ):
					?>
					<div class="container">
						<div class="twelve columns">
							<hr />
						</div>
					</div>
					<?php		
		
				else:
					// Nothing
				endif;
			endwhile;
			?>
		</div>
	</section>
	<?php
endif;