<?php
	header("content-type:text/html;charset=utf-8");	
	//define("APP_DEBUG",true);
	define("S_PATH",'/gcsx');
	define("HOME_IMAGE_URL",S_PATH."/public/Home/image/");
	define("HOME_JS_URL",S_PATH."/public/Home/js/");
	define("ATTACHED_IMG_URL",S_PATH."/public/Attached/image/");
	define("ATTACHED_FLASH_URL",S_PATH."/public/Attached/flash/");
	define("ATTACHED_MEDIA_URL",S_PATH."/public/Attached/media/");
	define("ADMIN_IMAGE_URL",S_PATH."/public/Admin/image/");
	define("ADMIN_JS_URL",S_PATH."/public/Admin/js/");
	define("EDITOR_URL",S_PATH."/Plugin/kindeditor/");
	define("PLAYER_URL",S_PATH."/Plugin/ckplayer/");
	define("TITLE_MAX_WORD","40");
	define("INDEX_AREA_NUM","6");
	
	include "../ThinkPHP/ThinkPHP.php";