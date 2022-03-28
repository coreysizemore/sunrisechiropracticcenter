<?php

	if( have_rows('treatments') ):

		echo '<div id="treatments_wrapper"><div class="container"><div class="row gutters"><div class="col_12">';
				
		while ( have_rows('treatments') ) : the_row();
		
			$image = get_sub_field('treatments_image');
			$heading = get_sub_field('treatments_heading');
			$link = get_sub_field('treatments_link');
				        
			echo '<div class="treatments">';
			
			echo '<img src="' . $image['url'] . '" alt="' . $image['alt'] . '" />';
			
			echo '<h3>' . $heading . '</h3>';
			
// 			echo '<a href="' . $link['url'] . '" target="' . $link['target'] . '">' . $link['title'] . '</a>';
			
			echo '</div>';
				
		endwhile;
		
		echo '</div></div></div></div>';
				
	endif;
		
?>