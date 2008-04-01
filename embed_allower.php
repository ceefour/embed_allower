<?php
/*
 * Plugin Name: Embed Allower
 * Plugin URI: http://hendyirawan.com/
 * Description: Allows embed, object, and other security risks tags.
 * Version: 1.0
 * Author: Hendy Irawan
 * Author URI: http://hendyirawan.com/
 * */

// For more info see wp-includes/kses.php
if (!CUSTOM_TAGS) {
	$allowedposttags['embed'] = array(
		'style' => array(),
		'type' => array (),
		'id' => array (),
		'height' => array (),
		'width' => array (),
		'src' => array ()
	);
	$allowedposttags['object'] = array(
		'height' => array (),
		'width' => array ()
		'param' => array (
			'name' => array (),
			'value' => array ()
		)
	);
}
