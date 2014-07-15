<?php

/*
Plugin Name: Frame Breaker
Version: 1.0
Description: Save your content from illegal use, break out of frames with Frame Breaker.
Author: Kumar Abhisek
Author URI: http://increasy.com/
Plugin URI: http://increasy.com/
License: GPLv2

 Copyright 2014 Kumar Abhisek (email:meabhi[at]outlook dot com)
 
 This program is free software; you can redistribute it and/or modify
 it under the terms of the GNU General Public License version 2,
 as published by the Free Software Foundation.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.See the
 GNU General Public License for more details.
 
 The license for this software can likely be found here:
 http://www.gnu.org/licenses/gpl-2.0.html

*/

add_action( 'wp_footer', 'wp_frame_breaker', -10 );

function wp_frame_breaker( ) {

if (current_user_can('level_10') || is_admin())
	return;	
	
echo 
'<script type="text/javascript">

if (top.location!= self.location) {
   top.location = self.location.href;
}

</script>';
}
