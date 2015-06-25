<?php
if( have_rows('hero_section') ):
    while ( have_rows('hero_section') ) : the_row();
		include('layout-hero.php');
	endwhile;
endif;
if( have_rows('services') ):
	?>
	<section id="Services">
		<div class="big-container services-container">
			<?php
		    while ( have_rows('services') ) : the_row();
				include('layout-full-width.php');
				include('layout-two-column.php');
				include('layout-two-column-image.php');
				include('layout-rule.php');
			endwhile;
			?>
		</div>
	</section>
	<?php
endif;
if( have_rows('projects') ):
	?>
	<section id="Projects">
		<div class="big-container projects-container">
			<?php
				include('projects.php');
			?>
		</div>
	</section>
	<?php
endif;
if( have_rows('about') ):
	?>
	<section id="About">
		<div class="big-container about-container">
			<?php
		    while ( have_rows('about') ) : the_row();
				include('layout-full-width.php');
				include('layout-two-column.php');
				include('layout-two-column-image.php');
				include('layout-rule.php');
			endwhile;
			?>
		</div>
	</section>
	<?php
endif;
if( have_rows('contact') ):
	?>
	<section id="Contact">
		<div class="big-container contact-container">
			<?php
		    while ( have_rows('contact') ) : the_row();
				include('layout-full-width.php');
				include('layout-two-column.php');
				include('layout-two-column-image.php');
				include('layout-rule.php');
			endwhile;
			?>
		</div>
	</section>
	<?php
endif;