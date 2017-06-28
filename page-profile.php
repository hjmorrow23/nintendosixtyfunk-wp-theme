<?php 
	
	/*
		Template Name: Profiles
	*/
	
?>

<?php get_header(); ?>
	<div class="main-heading"><?php the_title(); ?></div>          
</div>

<!-- Body -->
		<div class="main-content">
			<div class="single-col">
					
				<?php 	
					$args = array(
						'post_type' => 'profiles',
						'order' => 'asc'
					);
					
					$query = new WP_Query( $args );
					
					if ($query->have_posts() ) : while( $query->have_posts()) : $query->the_post();
				?>
			
				<div class='profile'>
					<h2 class='main-col-header'><?php the_title(); ?></h2> 
					<div class='image-wrapper'><img src='<?php the_post_thumbnail_url(); ?>'></div>
					<div class='description'>
						<p><?php the_content(); ?></p>
					</div>
				</div>
				<div class='break'>
			          <hr>
			    </div>
			    <?php endwhile; endif; wp_reset_postdata(); ?>
			
			</div>
		</div>
			    	
<?php get_footer(); ?>