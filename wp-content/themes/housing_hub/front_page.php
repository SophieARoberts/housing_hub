<?php
	/*
	* Template Name: Home
	*/ 
?>
<?php get_header() ?>

<div class="masthead"></div>

<div class="main">
	<div class="search"></div>
	<div class="featured"></div>
	<div class="services">
		<h2>What else do we provide?</h2>
		<div class="service_wrapper">
			<div class="service" id="moving">
				<div class="img"></div>
				<span>Help with moving</span>
			</div>
			<div class="service" id="storage">
				<div class="img"></div>
				<span>Free storage facilities</span>
			</div>
			<div class="service" id="party">
				<div class="img"></div>
				<span>Free opening party</span>				
			</div>
			<div class="service" id="drinks">
				<div class="img"></div>
				<span>Free drinks at the office</span>				
			</div>
			<div class="service" id="printing">
				<div class="img"></div>
				<span>Free printing at the office</span>				
			</div>
			<div class="service" id="binding">
				<div class="img"></div>
				<span>Free binding at the office</span>				
			</div>
			<div class="service" id="post">
				<div class="img"></div>
				<span>Send parcels to the office</span>			
			</div>
			<div class="service" id="fine">
				<div class="img"></div>
				<span>No fines for general wear and tear</span>				
			</div>
		</div>
	</div>
	<div class="contact"></div>

<!--     <?php while ( have_posts() ) : the_post(); ?>
	    <div class="content">
	        <?php the_content(); ?>
	    </div>
	<?php endwhile; ?>
 --></div>

<?php get_footer() ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
