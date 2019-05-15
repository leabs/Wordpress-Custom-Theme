<?php

$posts = get_posts(array(
	'numberposts' => -1,
	'post_type' => 'event',
	'meta_key' => 'project_platform',
	'meta_value' => 'NXP Rapiod IoT'
));

if($posts)
{
	echo '<ul>';

	foreach($posts as $post)
	{
		echo '<li><a href="' . get_permalink($post->ID) . '">' . get_the_title($post->ID) . '</a></li>';
	}

	echo '</ul>';
}

?>