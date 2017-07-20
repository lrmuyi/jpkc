<?php

    return array(
    	//'配置项'=>'配置值'
    	//'SHOW_PAGE_TRACE' => true,

        'TMPL_ENGINE_TYPE'      =>  'Smarty',
        'TMPL_ENGINE_CONFIG'=>array(
        'left_delimiter'  =>  '<!--{', 
        'right_delimiter' =>  '}-->',
        'caching' => 0,
        ),
        
        'TMPL_EXCEPTION_FILE'   =>  APP_PATH.'Public/Exception/exception.tpl',// 异常页面的模板文件
        /* 错误设置 */
        'ERROR_MESSAGE'         =>  '页面发生错误！请稍后再试',//错误显示信息,非调试模式有效
        /* URL设置 */
        'URL_CASE_INSENSITIVE'  =>  true,   // 默认false 表示URL区分大小写 true则表示不区分大小写
        'URL_MODEL'             =>  2,       // URL访问模式,可选参数0、1、2、3,代表以下四种模式：
        // 0 (普通模式); 1 (PATHINFO 模式); 2 (REWRITE  模式); 3 (兼容模式)  默认为PATHINFO 模式
        'URL_HTML_SUFFIX'       =>  'html',  // URL伪静态后缀设置
        'URL_DENY_SUFFIX'       =>  'conf|ico|jsp|asp|aspx|php', // URL禁止访问的后缀设置

        'URL_ROUTER_ON'         =>  true,
        //路由规则
        'URL_ROUTE_RULES'       =>  array(
        //'default' => array('Index/index','status=1&app_id=5',array('ext'=>'html')),
        'list/:category\d' => array('Article/showList'),
        'Article/:tid\d' => array('Article/detail','status=1&app_id=5',array('ext'=>'html')),
        'login' => array('Identify/login','status=1&app_id=5',array('ext'=>'html')),
        ),
    	//数据库配置
    	'DB_TYPE'               =>  'mysql',     // 数据库类型
        'DB_HOST'               =>  'localhost', // 服务器地址
        'DB_NAME'               =>  'gcsx_gxcms',          // 数据库名
        'DB_USER'               =>  'root',      // 用户名
        'DB_PWD'                =>  'a31b9c18',          // 密码
        'DB_PORT'               =>  '3306',        // 端口
        'DB_PREFIX'             =>  '',    // 数据库表前缀
        'DB_PARAMS'          	=>  array(), // 数据库连接参数    
        'DB_DEBUG'  			=>  TRUE, // 数据库调试模式 开启后可以记录SQL日志
        'DB_FIELDS_CACHE'       =>  true,        // 启用字段缓存
        'DB_CHARSET'            =>  'utf8',      // 数据库编码默认采用utf8
    );