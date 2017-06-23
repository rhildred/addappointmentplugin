<?php
/*
Plugin Name: Add Appointment
*/
function appointment_shortcodes_init()
{
    function appointment_shortcode($atts = [], $content = null)
    {
        $mindate = date("Y-m-d");//"2017-08-09";
        $content .= <<<EOT
Name: <input type="date" min="$mindate"/><br />
Phone: <input /><br />
<input type="submit" />

EOT;
        return $content;
    }
    add_shortcode('appointment-plugin', 'appointment_shortcode');
}
add_action('init', 'appointment_shortcodes_init');