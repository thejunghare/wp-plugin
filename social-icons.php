<?php
/*
Plugin Name: Social Icons Plugin
Description: A simple "Social Icons!" plugin.
Version: 0.0.1
Author: thejunghare
*/

function social_icons($icons)
{
    $buttons = '
    <div class="social-sharing">
    <a href="https://www.facebook.com/sharer/sharer.php?u=' . get_permalink() . '" target="_blank">Share on Facebook</a>
    </div>';

    return $icons . $buttons;
}

add_filter('the_content', 'social_icons');
?>