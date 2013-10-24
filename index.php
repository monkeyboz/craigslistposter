<?php
	error_reporting(E_ALL);
	ini_set('display_errors', '1');
	
	if(!isset($_GET['page'])){
		$_GET['page'] = 'home';
	}
	include_once('classes/db.php');
	$pages = explode('/', $_GET['page']);
	
	include('classes/'.$pages[0].'.php');
	$content = new $pages[0]($pages);
	
	if(!isset($_GET['ajax'])){
		include_once('views/'.$content->display);
	} else {
		$content->contents;
	}
?>