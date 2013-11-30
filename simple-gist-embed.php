<?php
/*
	Plugin Name: Gist Simple Embed
	Plugin URI: https://github.com/felixmc/wordpress-gist-simple-embed
	Description: Simple Wordpress plugin that implements the following jquery plugin: https://github.com/blairvanderhoof/gist-embed
	Version: 0.1
	Author: Felix Milea-Ciobanu
 */

function gist_shortcode ($atts) {
	$gist_attrs = array("id", "hide-line-numbers", "hide-footer", "file", "line");
	$attributes = "";

	foreach ($atts as $key => $value) {
		if (in_array($key, $gist_attrs)) {
			$key = "data-gist-" . $key;
		}

		$attributes .= " " . $key . '="' . $value . '"';
	}

	return "<code". $attributes ."></code>";
}

add_shortcode('gist', 'gist_shortcode');

wp_enqueue_script("gist-embed", "//cdnjs.cloudflare.com/ajax/libs/gist-embed/1.3/gist-embed.min.js", array('jquery'), "1.3", true);