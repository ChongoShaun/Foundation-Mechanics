	<!-- Footer
	================================================== -->
	<div class="big-container footer">
		<footer>
			<div class="container">
				<div class="twelve columns">
					&copy; 2015 Foundation Mechanics      773.654.1368     info@foundationmech.com
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
		});	


			
	</script>
	
<!-- End Document
================================================== -->
</body>
</html>
