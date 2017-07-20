<?php
namespace Admin\Controller;
use Think\Controller;

class CheckCodeController extends Controller {
    public function checkCode(){
    	$config =    array(    
        'fontSize'    =>    20,    // 验证码字体大小
        'length'      =>    4,     // 验证码位数  
        'imageW'      =>    150,//验证码宽度 设置为0为自动计算 
        'imageH'      =>    40
  
        //'useNoise'    =>    false, // 关闭验证码杂点
        );
        $Verify =  new \Think\Verify($config);
    	return $Verify -> entry();
    }

    public function jsonVarify($id = ''){
        if(isset($_SESSION['locktime'])){
            if(time()-$_SESSION['locktime']>3600){
                session(null);
            }else{
                echo "lock";
            }
        }else{
            $code=$_GET['checkcode'];
            $verify = new \Think\Verify();    
            echo json_encode($verify->check($code, $id));
        }
    }
}