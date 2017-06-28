<?php get_header(); ?>
	<div class="main-heading"><?php the_title(); ?></div>          
</div>

<!-- Body -->
			<div class="main-content">
				
				<div class="intro">
					<?php 
						
						$args = array(
							'post-type' => 'news'
						);
						
						$query = new WP_Query( $args );
				    ?>
					<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
					
						<div class='news'> 
							<h4><?php the_title(); ?></h4>
							<p><?php the_content(); ?></p>
							<p><?php the_date(); ?></p>
							<a href='<?php the_permalink(); ?>'>Read More &#62;</a>
						</div>
						<div class='break'>
					        <hr>
					    </div>

					
					<?php endwhile; else : ?>
					
						<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
						
					<?php endif; wp_reset_postdata();?>
				</div>
			</div>
<?php get_footer(); ?>
