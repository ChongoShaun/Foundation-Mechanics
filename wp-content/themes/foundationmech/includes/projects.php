<div class="container">
	<div class="twelve columns">
		<h2>PROJECTS</h2>
		<div class="project-filters">
			<?php
				$terms = get_terms( 'project-categories' );
				if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
				 echo '<ul>';
				 echo '<li class="filter" data-filter="all">ALL</li>';
				 foreach ( $terms as $term ) {
				   echo '<li class="filter" data-filter=".'.strtolower($term->name).'">' . $term->name . '</li>';
				    
				 }
				 echo '</ul>';
				}
			?>
		</div>
	</div>
</div>	

<div id="projects" class="clearfix">
	<?php 
	$args = array(
		'post_type' => 'projects',
		);
	$query = new WP_Query( $args ); ?>
	
	<?php if ( $query->have_posts() ) : ?>
		<?php while ( $query->have_posts() ) : $query->the_post(); ?>

		<?php
			$filter_class = "";
			$thumb = get_field('project_thumbnail');
			$client = get_field('clients');

			$filters = get_the_terms( $post->ID, 'project-categories' );
			if ( ! empty( $filters ) && ! is_wp_error( $filters ) ){
				foreach ( $filters as $filter ) {
			 		$filter_class .= strtolower($filter->name) . " ";
			 	}
			}
		?>
			<div class="mix <?php echo $filter_class; ?>">
			<?php
				if( !empty($thumb) ):
					$bgthumb = $thumb['url'];
				else:
					$bgthumb = 'http://placehold.it/700x400';
				endif; 
				
				?>

				<div class="project-box" style="background-image:url(<?php echo $bgthumb; ?>); background-size:cover; background-position:center center; background-repeat:no-repeat;">
					<div class="project-overlay">
						<a href="<?php the_permalink();?>">
							<?php the_title();?><br />
							<span>VIEW DETAIL</span>
						</a>
					</div>
				</div>
			</div>
		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>
	
	<?php else : ?>
		<div class="container">
			<div class="twelve columns">
				<p>
					There are currently no projects listed. Please try again later. 
				</p>
			</div>			
		</div>
	<?php endif; ?>

</div>
