	<!-- Footer
	================================================== -->
	<div class="big-container footer">
		<footer>
			<div class="container">
				<div class="twelve columns">
					<ul>
						<li>&copy; 2015 Foundation Mechanics</li>
						<li>V: 773.234.3087 | F: 815.301.3738</li>
						<li><a href="mailto:info@foundationmech.com">info@foundationmech.com</a></li>
					</ul>
				</div>
			</div>
		</footer>
	</div>
	<?php wp_footer(); ?>
	<!-- End Footer Template -->

	<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.mixitup.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
	
	<script type="text/javascript">
		$(function(){
			$('#projects').mixItUp();  
			$(".project-box").hover(function(){
			    $(this).find("a").stop(true, false).animate({ 
				    bottom: "-20" 
				    }, 500, "easeInOutQuad");
				}, function() {
			    $(this).find("a").stop(true, false).animate({ 
				    bottom: "-230px" 
				    }, 500, "easeInOutQuad");
			});			

			$('#header a[href*=#]:not([href=#])').click(function() {
			    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			      var target = $(this.hash);
			      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			      if (target.length) {
				     $('#header a').removeClass("active");
				     $(this).addClass("active");
			        $('html,body').animate({
			          scrollTop: target.offset().top-75
			        }, 1000,"easeInOutQuad" );
			        return false;
			      }
			    }
			});

		});	


			
	</script>
	
<!-- End Document
================================================== -->
</body>
</html>
