<?php
	/*
	* Template Name: Facilities
	*/ 
?>
<?php get_header() ?>

<div class="main">
	<h1><?php echo get_the_title(); ?></h1>
    <?php while ( have_posts() ) : the_post(); ?>
	    <div class="content">
	        <?php the_content(); ?>
	    </div>
	<?php endwhile; ?>
</div>


<?php get_footer() ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
