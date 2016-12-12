<?php
/*
Plugin Name: My Name Is
*/
function name_shortcodes_init()
{
    function name_shortcode($atts = [], $content = null)
    {
        
        $content .= "Richard Hildred - 095718310";
        return $content;
    }
    add_shortcode('name-student-plugin', 'name_shortcode');
}
add_action('init', 'name_shortcodes_init');