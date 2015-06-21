<?php
	if (get_row_layout() == 'two_column_image_and_text' ):
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
	endif;
?>	