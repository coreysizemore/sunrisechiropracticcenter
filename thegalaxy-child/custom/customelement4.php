<?php

	$about_us_image = get_field('about_us_image');
	$about_us_description = get_field('about_us_description');
	
	echo '<div id="about_us_wrapper"><div class="container"><div class="row gutters"><div class="col_4">';
	
	if( !empty($about_us_description) ):
	
		echo '<div class="about_us_image">';
		
		if( !empty($about_us_image) ):
		
			echo '<img src="' . $about_us_image['url'] . '" alt="' . $about_us_image['alt'] . '" />';
		
		endif;
		
		echo '</div></div><div class="col_8"><div class="about_us_desc">';
		
		echo $about_us_description;
		
		echo '</div></div>';
	
	endif;
	
	echo '</div></div>';
		
?>