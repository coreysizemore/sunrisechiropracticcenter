<?php

	if( have_rows('conditions') ):

		echo '<div id="conditions_wrapper"><div class="container"><div class="row gutters"><div class="col_12">';
				
		while ( have_rows('conditions') ) : the_row();
		
			$image = get_sub_field('conditions_image');
			$heading = get_sub_field('conditions_heading');
			$link = get_sub_field('conditions_link');
				        
			echo '<div class="conditions">';
			
			echo '<img src="' . $image['url'] . '" alt="' . $image['alt'] . '" />';
			
			echo '<h3>' . $heading . '</h3>';
			
			echo '<a href="' . $link['url'] . '" target="' . $link['target'] . '">' . $link['title'] . '</a>';
			
			echo '</div>';
				
		endwhile;
		
		echo '</div></div></div></div>';
				
	endif;
		
?>