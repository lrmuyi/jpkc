<?php
	
	//Admin管理员数据模型

	namespace Model;
	use Think\Model;

	class AdminModel extends Model{
		protected $patchValidate = true;
	    protected $_validate = array(
	    	array('username','require','用户名必须填写！',0),
	        array('checkcode','require','验证码必须填写！',0),
	        array('password','require','密码必须填写！',0),
            array('oldPwd','require','旧密码必须填写',0),
            array('newPwd','require','新密码必须填写',0),
            array('rePwd','require','确认密码必须填写',0),
	        //array('checkcode','check_verify','验证码填写错误！',0,'callback')
            array('newPwd','rePwd','确认密码不正确',0,'confirm'), 
	    );

	    public function check_verify($code, $id = ''){    
    		$verify = new \Think\Verify();
    		return $verify->check($code, $id);
    	}

    	public function check_login($username,$password){
    		$info = $this -> getByAid($username);
    		if($info == NULL){
    			return false;
    		}else{
    			if($info['password'] != md5($password."www.lutcte.com")){
    				return false;
    			}else{
    				return $info;
    			}
    		}
    	}

        public function check_username($username){
            $info = $this -> getByAid($username);
            if($info == NULL){
                return false;
            }else{
                return true;
            }
        }
	}