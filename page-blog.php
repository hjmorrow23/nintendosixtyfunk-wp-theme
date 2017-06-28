<?php 
	
	/*
		Template Name: Blog Home
	*/
?>
<?php get_header(); ?>
		<div class="main-heading"><?php the_title(); ?></div>          
	</div>
	<!-- Body -->
			<div class="main-content">
				
				<div class="intro">
					<h1 class="intro-header">Intro</h1>
					<p>Nintendo Sixty Funk is a 4 member band based in the Holland/Chicago-land area playing a variety of covers, from the 80's - 2000's. The band originated in the summer of 2015, and has been playing Bars, Restaurants, Weddings, Receptions, Parties and church services ever since! Book NSF today!.</p>
				</div>
				<div class="main-col">
					<h2 id="first-col-header">News</h2>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					
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
				
				<?php 	
					$args = array(
						'post_type' => 'events'
					);
					
					$query = new WP_Query( $args );
				?>
				
				<div class="side-col">
					<h3 class="side-col-header">Events</h3>	
				    
				    <?php if ($query->have_posts() ) : while( $query->have_posts()) : $query->the_post(); ?>
					
					<h5 class="event-header"><?php the_title(); ?></h5>		
					<ul>
						<li class="place"><?php the_field('Name'); ?></li>
						<li class="date"><?php the_field('date'); ?></li>
						<li class="time"><?php the_field('time'); ?></li>
					</ul>
					<div class="break">
			          <hr>
			        </div>
										
					<?php endwhile; endif; wp_reset_postdata(); ?>
									</div>
			</div>


<?php get_footer(); ?>
	
?>