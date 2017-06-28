<?php 
	
	/*
		Template Name: Gallery
	*/
	
?>
<?php get_header(); ?>
	<div class="main-heading"><?php the_title(); ?></div>          
</div>
		<!-- Body -->
		<div class="main-content">
			<div class="image-gallery">
			<?php	
				$args = array(
			        'post_type' => 'attachment',
			        'post_mime_type' => 'image',
			        'orderby' => 'post_date',
			        'order' => 'desc',
			        'posts_per_page' => '30',
			        'post_status'    => 'inherit'
			         );
			
			     $loop = new WP_Query( $args );
			
			while ( $loop->have_posts() ) : $loop->the_post();
			
			$image = wp_get_attachment_image_src( get_the_ID() ); ?>
			
				<div class="image-wrap"><?php echo "<img src='" . $image[0] . "'>"; ?></div>
				
				<?php endwhile; ?>
			</div> 
		</div>	

<?php get_footer(); ?>