<?php
/*
Plugin Name: Custom 404 Page
Description: Customize your 404 error page.
Version: 0.0.1
Author: thejunghare
*/

function custom_404_page()
{
    if(is_404()){
        echo '<div class="">
                Oops! The page you.'.'re looking for doesn.'.'t exist. Please try another page or use the search bar.
            </div>';
    }
}

add_action('wp', 'custom_404_page')
?>