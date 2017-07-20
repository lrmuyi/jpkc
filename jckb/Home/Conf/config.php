<?php
return array(
	'HTML_CACHE_ON'     =>    true, // 开启静态缓存
	'HTML_CACHE_TIME'   =>    86400,   // 全局静态缓存有效期24小时86400秒
	'HTML_FILE_SUFFIX'  =>    '.shtml', // 设置静态缓存文件后缀
	'HTML_CACHE_RULES'  =>     array(	  // 定义静态缓存规则
	     // 定义格式1 数组方式
	     '*'=>array('_{:action}_{category}_{tid}{p}',86400),)//全局缓存
);