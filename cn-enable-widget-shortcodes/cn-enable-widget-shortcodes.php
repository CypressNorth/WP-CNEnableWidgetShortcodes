<?php
/*
Plugin Name: CN Enable Widget Shortcodes
Plugin URI: https://github.com/CypressNorth/WP-CNEnableWidgetShortcodes
Description: A Wordpress Plugin to enable the use of shortcodes in sidebar widgets
Version: 1.0
Author: Cypress North
Author URI: http://cypressnorth.com
License: GPL2
*/
?>
<?php
/*  Copyright 2014  Cypress North  (email : info@cypressnorth.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

//Remove the filter if it already exists
remove_filter('widget_text', 'do_shortcode');

//Add the filter to apply the shotcode action to widget text
add_filter('widget_text', 'do_shortcode');
?>