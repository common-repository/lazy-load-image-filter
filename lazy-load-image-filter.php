<?php

/**
 * @package Lazy Load Image Filter
 */
/*
Plugin Name: Lazy Load Image Filter 
Description: The Lazy Load Image Filter plugin makes every image in your  site use lazy loading to drasticly increase performance!
Version: 1.0.5
Author: Chris Kroon
Author URI: https://github.com/chriskroon
License: GPLv2 or later
Text Domain: Lazy Load Image Filter
*/

/*
Lazy Load Image Filter is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 2 of the License, or
any later version.

Lazy Load Image Filter is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.

You should have received a copy of the GNU General Public License along with Lazy Load Image Filter.
*/

if ( ! defined( 'ABSPATH' ) ) exit;
class LazyLoadImageFilter {
    function __construct(){
      if (!is_admin()){
        add_action('init', array( $this, 'buffer_start'));
        add_action('shutdown', array( $this, 'buffer_end'));
      }
    }

    function callback($buffer) {
      $result = str_replace('<img', '<img loading="lazy"', $buffer);
      return $result;
    }

    function buffer_start() { 
      ob_start(array($this, "callback"));     
    }

    function buffer_end() { 
      if (ob_get_contents()){
        ob_end_flush();
      } 

    }
}
new LazyLoadImageFilter();
?>