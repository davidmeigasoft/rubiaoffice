<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config['profile_id']	= '74852265'; // GA profile id
$config['email']		= 'jonas_vf2@hotmail.com'; // GA Account mail
$config['password']		= '27011983'; // GA Account password

$config['cache_data']	= true; // request will be cached
$config['cache_folder']	= FCPATH.'/files/ga_files/'; // read/write
$config['clear_cache']	= array('date', '1 day ago'); // keep files 1 day
	
$config['debug']		= false; // print request url if true