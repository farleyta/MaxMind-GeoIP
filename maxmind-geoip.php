<?php
/*
Plugin Name: MaxMind® GeoIP
Description: This is not really a complete plugin. Activating it will simply expose access to MaxMid®'s GeoIP API (http://www.maxmind.com/app/php) and provide include paths to their free IP databases (GeoLite Country and GeoLite City). And by the way, this plugin is not associated in any way with MaxMind® itself!
Version:     1.0
Author:      Oakwood Creative
Plugin URI:  http://oakwood.se
Author URI:  http://oakwood.se
*/

/**
* Just a easy way to see if the plugin is active by
* running if (function_exists('maxmind_geoip'))
**/
function maxmind_geoip() {};

/**
* Inlcude the library
**/
require_once('lib/geoip.php');
/**
* Provide the paths to the databases in case we want to init the plugin with it
**/
function maxmind_country_database_path(){
	return (WP_PLUGIN_DIR . '/' . basename( dirname( __FILE__ ) ) .'/db/GeoIP.dat' );
}
function maxmind_city_database_path(){
	return (WP_PLUGIN_DIR . '/' . basename( dirname( __FILE__ ) ) .'/db/GeoLiteCity.dat' );
}
function maxmind_countryv6_database_path(){
	return (WP_PLUGIN_DIR . '/' . basename( dirname( __FILE__ ) ) .'/db/GeoIPv6.dat' );
}
function maxmind_cityv6_database_path(){
	return (WP_PLUGIN_DIR . '/' . basename( dirname( __FILE__ ) ) .'/db/GeoLiteCityv6.dat' );
}
?>