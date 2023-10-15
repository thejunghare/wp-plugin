<?php
/*
Plugin Name: Hello World Plugin
Description: A simple "Hello, World!"
Version: 0.0.1
Author: thejunghare
*/
function add_hello_world_message($content) {
    $message = "Hello, World!";
    return $content . "<p>" . $message . "</p>";
}
add_filter('the_content', 'add_hello_world_message');
?>
