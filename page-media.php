<?php 
	
	/*
		Template Name: Media
	*/
	
?>

<?php get_header(); ?>
	<div class="main-heading"><?php the_title(); ?></div>          
</div>

<!-- Body -->
		<div class="main-content">
			<div class="intro">
					<h1 class="intro-header">Media</h1>
					<p>Check out some of our music and videos updated regularly!</p>
			</div>
			<div class="single-col centered">
				<?php 	
					$args = array(
						'post_type' => 'videos',
						'order' => 'asc'
					);
					
					$query = new WP_Query( $args );
					
					if ($query->have_posts() ) : while( $query->have_posts()) : $query->the_post();
				?>
			
				<h3 class="centered"><?php the_title(); ?></h3>
    		    <p><?php the_date(); ?></p>
				<div class="video-wrapper"><?php the_content(); ?></div>
				<div class="break">
		          <hr>
		        </div>
			    <?php endwhile; endif; wp_reset_postdata(); ?>
			
			</div>
		</div>
			    	
<?php get_footer(); ?>