<?php 
	
	/*
		Template Name: Contact
	*/
	
?>
<?php get_header(); ?>
	<div class="main-heading"><?php the_title(); ?></div>          
</div>

<div class="main-content">
	<div class="single-col">
		<h2 class="single-col-header">Wanna see what all the buzz is about?</h2>
		<div class="intro">
		 <p>We always have a good time when we play and we promise anyone who comes will too. If you would like to book us please fill out this form below with for contact info and we will get right back to you to see if we can make it happen!</p>
        </div>	        
	    <div id="contact">
			<form method="post" action="https://formspree.io/skyler.n.adams@gmail.com">
	           <span class="form-block"><label for="location_name">Location Name</label>
	           <input type="text" id="location_name" name="location_name" /></span>	
	           <span class="form-block"><label for="location_name">Location Address</label>
	           <input type="text" id="location_name" name="location_name" /></span>	
	           <span class="form-block"><label for="contact_name">Contact Name</label>
	           <input type="text" id="contact_name" name="contact_name" /></span>		            
	           <span class="form-block"><label for="email">Contact Email</label>
	           <input type="text" id="email" name="_replyto" /></span>
	           <span class="form-block"><label for="date">Desired Performance Date and Time</label>
	           <input type="text" id="date" name="date" /></span>	
		       <span class="form-block"><label for="name">Venue Details</label>
			   <textarea name="details" id="details"></textarea></span>
			   <input type="hidden" name="_next" />
	            <div style="display:none">
	                <label for="address">Address</label>
	                <input type="text" id="address" name="address" />
	                <p>Please leave this field blank</p>
	            </div>
	            <input type="submit" value="Send" />
	        </form>		
        </div>		
	</div>
</div>
