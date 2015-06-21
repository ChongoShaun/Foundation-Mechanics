<?php
	if (get_row_layout() == 'two_column_text' ):
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
	endif;
?>
