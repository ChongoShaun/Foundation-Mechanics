<?php
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
?>