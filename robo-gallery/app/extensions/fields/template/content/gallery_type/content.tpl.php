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

echo $type = rbsGalleryUtils::getTypeGallery();

if( $type == false ){
	$url = admin_url('post-new.php?post_type=robo_gallery_table&rsg_gallery_type=grid');
	printf('<script>window.location.replace("%1$s");window.location.href = "%1$s";</script>', $url);
	exit;
}
