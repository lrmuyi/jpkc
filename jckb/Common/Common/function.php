<?php
    
    //获取验证码验证信息并传给ajax
    function check_verifyCode($code, $id = ''){    
		$verify = new \Think\Verify();
		echo json_encode($verify->check($code, $id));
	}

    //清除所有HTML缓存文件
    function reCache(){
        $dirName=HTML_PATH;
        if ( $handle = opendir( "$dirName" ) ) {  
            while ( false !== ( $item = readdir( $handle ) ) ) {  
                if ( $item != "." && $item != ".." ) {  
                    if ( is_dir( "$dirName/$item" ) ) {  
                        delFileUnderDir( "$dirName/$item" );  
                    } else {  
                        if(!unlink( "$dirName/$item" ))die("无法清除缓存文件： $dirName/$item<br />\n");  
                    }  
                 }  
            }
        closedir( $handle );  
        }
    } 

    //错误提示信息
    function notice($msgNo){
    	if($msgNo == 1){
    		return "用户名或密码错误，请查证后再试！";
    	}

    	if($msgNo == 2){
    		return "您已登录成功，立即跳转！";
    	}

        if($msgNo == 3){
            return "您的账号已经安全退出！";
        }

        if($msgNo == 4){
            return "您尚未登录系统或登陆超时，请登录后再试！";
        }

        if($msgNo == 5){
            return "原始密码验证失败，请重新输入！";
        }

        if($msgNo == 6){
            return "密码修改成功，请重新登陆！";
        }

        if($msgNo == 7){
            return "密码修改失败，请联系管理员！";
        }

        if($msgNo == 8){
            return "文章已添加成功！";
        }

        if($msgNo == 9){
            return "内部错误，文章添加失败！";
        }

        if($msgNo == 10){
            return "所选文章全部删除成功！";
        }

        if($msgNo == 11){
            return "所选文章部分删除成功！";
        }

        if($msgNo == 12){
            return "文章删除失败！";
        }

        if($msgNo == 13){
            return "文章已彻底删除！";
        }

        if($msgNo == 14){
            return "抱歉，没有找到您想要的结果";
        }

        if($msgNo == 15){
            return "抱歉，没有找到您要修改的文章";
        }

        if($msgNo == 16){
            return "文章修改成功！";
        }

        if($msgNo == 17){
            return "抱歉，文章无变化或修改失败！";
        }

        if($msgNo == 18){
            return "内部错误！无法显示";
        }

        if($msgNo == 19){
            return "隐藏失败，请联系管理员";
        }

        if($msgNo == 20){
            return "网站主导航修改成功！";
        }

        if($msgNo == 21){
            return "网站主导航未做修改！";
        }

        if($msgNo == 22){
            return "该条导航删除成功！";
        }

        if($msgNo == 23){
            return "友情链接修改成功！";
        }

        if($msgNo == 24){
            return "友情链接未做任何修改！";
        }

        if($msgNo == 25){
            return "友情链接删除成功！";
        }

        if($msgNo == 26){
            return "删除失败！";
        }

        if($msgNo == 27){
            return "用户名尝试次数过多，请1小时后再试！";
        }

        if($msgNo == 28){
            return "您尚未登录，无需退出！";
        }

        if($msgNo == 29){
            return "网站地图生成成功！";
        }

        if($msgNo == 30){
            return "网站分类已更新成功！";
        }

        if($msgNo == 31){
            return "分类删除成功！";
        }

        if($msgNo == 32){
            return "分类未做任何修改！";
        }

        if($msgNo == 33){
            return "分类删除失败！";
        }

        if($msgNo == 34){
            return "分类修改失败！";
        }

        if($msgNo == 35){
            return "分类信息已更新！";
        }

        if($msgNo == 36){
            return "信息未修改或修改失败！";
        }

        if($msgNo == 37){
            return "站点信息已更新！";
        }

        if($msgNo == 38){
            return "首页栏目已修改！";
        }

        if($msgNo == 39){
            return "首页栏目未做修改！";
        }

        if($msgNo == 40){
            return "您要查找的分类不存在或者已删除！";
        }

        if($msgNo == 41){
            return "您要查找的文章不存在或者已删除！";
        }
    }
