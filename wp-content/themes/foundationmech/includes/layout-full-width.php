<?php
if (get_row_layout() == 'full_width_text' ):
	?>
	<div class="container full-width">
		<div class="twelve columns">
			<?php the_sub_field('text'); ?>
		</div>
	</div>
	<?php
endif;
?>