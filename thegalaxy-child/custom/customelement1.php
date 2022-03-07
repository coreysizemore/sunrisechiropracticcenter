<?php

	if( have_rows('call_out_option') ):

		echo '<div id="call_out_option_wrapper"><div class="container"><div class="row gutters">';
				
		while ( have_rows('call_out_option') ) : the_row();
		
			$icon = get_sub_field('call_out_icon');
			$heading = get_sub_field('call_out_heading');
			$description = get_sub_field('call_out_description');
				        
			echo '<div class="col_4"><div class="call_out_option">';
			
			echo $icon;
			
			echo '<h2>' . $heading . '</h2>';
			
			echo '<p>' . $description . '</p>';
			
			echo '</div></div>';
				
		endwhile;
		
		echo '</div></div></div>';
				
	endif;
	
	$car_injury_content = get_field('car_injury_content');
	$car_injury_link = get_field('car_injury_link');
	
	echo '<div id="car_injury_wrapper"><div class="car_injury">';
	
	if( !empty($car_injury_content) ):
	
		echo '<div class="car_injury_content">';
		
		echo $car_injury_content;
		
		if( !empty($car_injury_content) ):
		
			echo '<a href="' . $car_injury_link['url'] . '" target="' . $car_injury_link['target'] . '">' . $car_injury_link['title'] . '</a>';
		
		endif;
		
		echo '</div>';
	
	endif;
	
	echo '</div></div>';
	
	if( have_rows('why_choose_us_items') ):
	
		$content = get_field('why_choose_us_content');

		echo '<div id="why_choose_us_wrapper"><div class="container"><div class="row gutters"><div class="col_4">';
		
		echo '<div class="why_choose_us_content">' . $content . '</div>';
		
		echo '</div><div class="col_8">';
				
		while ( have_rows('why_choose_us_items') ) : the_row();
		
			$icon = get_sub_field('why_choose_us_icon');
			$heading = get_sub_field('why_choose_us_heading');
			$description = get_sub_field('why_choose_us_description');
				        
			echo '<div class="why_choose_us_item">';
			
			echo $icon;
			
			echo '<h3>' . $heading . '</h3>';
			
			echo '<p>' . $description . '</p>';
			
			echo '</div>';
				
		endwhile;
		
		echo '</div></div></div></div>';
				
	endif;
		
?>