<?php
/*
Plugin Name: Social Icons Plugin
Description: A simple "Social Icons!" plugin.
Version: 0.0.1
Author: thejunghare
*/

function social_icons($icons){
    $buttons = '
    <div class="social-sharing">
        <a href="" . get_permalink() . " target="">Share on Facebook</a>
    </div>';
    
    return $icons . $buttons;
}

add_fliter('the_content', 'social_icons');
?>
