<?php get_header(); ?>
		<div class="main-heading"><?php the_title(); ?></div>          
	</div>
	<!-- Body -->
			<div class="main-content">
				
				<div class="intro">
					<?php if (have_posts() ) : while(have_posts()) :the_post(); ?>
					
	 					<h3><?php the_title(); ?></h3>
						<p><?php the_date(); ?></p>
						<p><?php the_content(); ?></p>
						
						<hr>
						
						<p>
							<?php previous_post_link(); ?> - 
							<a href="<?php bloginfo('url'); ?>/blog">Back to blog</a> -
							<?php next_post_link(); ?>
						</p>
					
					<?php endwhile; endif; wp_reset_postdata(); ?>
				</div>
			</div>

<?php get_footer(); ?>
	