<?php
/*
* Plugin Name: Embed Allower 2
* Plugin URI: http://blogs.voxeo.com/behindtheblog/wp-plugin-embed-allower-2/
* Description: Allows embed, object, and other security risks tags. LGPLv3.
* Version: 1.0
* Author: Dan York
* Author URI: http://blogs.voxeo.com/behindtheblog/
**/
/*
* Based on Embed Allower from Hendy Irawan at http://hendyirawan.com/
*
* WARNING: THERE ARE SERIOUS SECURITY RISKS with allowing these object and
* embed tags, especially in multi-author environments where you don't trust
* your users.  Please make sure you know what you are doing before using
* this.
*
* Dan York and Voxeo Corporation assume absolutely no liability if you have any
* security issues as a result of using this plugin. USE AT YOUR OWN RISK!
*/

// For more info see wp-includes/kses.php
if (!CUSTOM_TAGS) {
	$allowedposttags['embed'] = array(
		'style' => array(),
		'type' => array (),
		'id' => array (),
		'height' => array (),
		'width' => array (),
		'src' => array (),
		'object' => array(
			'height' => array (),
			'width' => array (),
			'param' => array (
				'name' => array (),
				'value' => array ()
			)
		)
	);
	$allowedposttags['object'] = array(
	        'style' => array (),
		'height' => array (),
		'width' => array (),
		'param' => array (
			'name' => array (),
			'value' => array ()
		),
		'embed' => array(
			'style' => array(),
			'type' => array (),
			'id' => array (),
			'height' => array (),
			'width' => array (),
			'src' => array (),
			'allowfullscreen' => array (),
			'allowscriptaccess' => array ()
		)
	);
	$allowedposttags['param'] = array (
	        'name' => array (),
		'value' => array ()
	);
}
?>
