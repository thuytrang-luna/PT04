<?php 
/* 
*      Robo Gallery     
*      Version: 3.1.16 - 28519
*      By Robosoft
*
*      Contact: https://robogallery.co/ 
*      Created: 2021
*      Licensed under the GPLv2 license - http://opensource.org/licenses/gpl-2.0.php

 */

if ( ! defined( 'WPINC' ) ) exit;

include_once plugin_dir_path( __FILE__ ).'class.addons.php';

new rbsGalleryAddons( ROBO_GALLERY_TYPE_POST );