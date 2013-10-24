<?php
	print_r($_REQUEST);
	if(!isset($_GET['page'])){
		echo $_GET['page'];
	}
	//$pages = explode('/', $_GET['page']);
	
	//include('classes/'.$pages[0]);
	//$content = new $pages[0]($pages);
	
	/*if($_GET['ajax']){
		include_once $content->display();
	} else {
		$content->contents;
	}*/
?>