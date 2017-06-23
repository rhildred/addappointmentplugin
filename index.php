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
        <style>
        input{
            float: right;
            clear: right;
            width:40%;
            }
            </style>
            <form method="post" action="/slim/api/appointment">
Name: <input name ="name"/><br />
Date: <input name="date" type="date" min="$mindate"/><br />
Phone: <input name="phone" type="tel"/><br />
<input type="submit" />
</form>

EOT;
        return $content;
    }
    add_shortcode('appointment-plugin', 'appointment_shortcode');
}
add_action('init', 'appointment_shortcodes_init');