<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/*
 * shrinktheweb File Config
 *
 * File     : shrinktheweb.php
 * Created  : Jul 14, 2014 | 4:22:40 PM
 * 
 * Author   : Yacine REZGUI <yacine.yacine@gmail.com>
 */
 
 
	/*** The URL for ShrinkTheWeb API ***/
	$config['ShrinkTheWeb_url']  = 'http://images.shrinktheweb.com/xino.php';

	/*** Access Key ***/
	$config['access_key']        = 'xxxxxxxxxxxxxxxx';

	/*** Secret 'key' ***/
	$config['secret_key']        = 'xxxxx';

	$config['thumbnail_uri']     = 'http://www.yourdomain.com/stw_thumbs/';
	$config['thumbnail_dir']     = 'stw_thumbs/';
	$config['inside_pages']      = false;
	$config['custom_msg_url']    = '';
	$config['cache_days']        = 3;
	$config['quota_image']       = 'quota.jpg';
	$config['bandwidth_image']   = 'bandwidth.jpg';
	$config['no_response_image'] = 'no_response_image.jpg';
	$config['maintenance']       = 'ShrinkTheWeb is temporarily offline for maintenance';


