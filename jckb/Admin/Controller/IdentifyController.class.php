<?php
namespace Admin\Controller;
use Think\Controller;

class IdentifyController extends Controller {
    public function login(){
        if(isset($_SESSION['username']) && time()-$_SESSION['logintime']<3600){
            $this -> redirect("Index/index");
            exit();
        }

        if(!empty($_POST)){
            if(isset($_SESSION['locktime'])){
                $this -> assign("notice",notice(27));
                $this -> assign("sec",3);
                $this -> assign("jump",__MODULE__."/login.html");
                $this -> display('inotice');
                exit();
            }

            $admin = new \Model\AdminModel; // 实例化Admin对象
            if (!$admin -> create()){     // 如果创建失败 表示验证没有通过 输出错误提示信息 
                $this -> assign("err",$admin->getError());
            }else{
                 // 验证通过 可以进行其他数据操作
                $res = $admin -> check_login($_POST['username'],$_POST['password']);
                if($res === false){
                    $this -> assign("notice",notice(1));
                    $this -> assign("sec",2);
                    $this -> assign("jump",__MODULE__."/login.html");
                    $this -> display('inotice');
                    exit();
                }else{
                    session("namewrongtimes",null);
                    session("username",$res['aid']);
                    session("login",1);
                    session("logintime",time());
                    $this -> redirect("Index/index");
                }
            }
        }

    	$this -> display();
    }

    public function jsonCheckLogin(){
        if(!isset($_SESSION['namewrongtimes'])){
            session('namewrongtimes',1);
            session('exptime',time());
        }

        //设置用户名输错记录时间为60分钟，超过重置。
        if(isset($_SESSION['exptime'])){
            if(time()-$_SESSION['exptime']>3600){
                session('namewrongtimes',1);
                session('exptime',null);
            }
        }
        //设置锁定时间1小时
        if(isset($_SESSION['locktime'])){
            if(time()-$_SESSION['locktime']>3600){
                session(null);
            }
        }
        //用户名输错10次锁定
        if($_SESSION['namewrongtimes']>=10){
            session('locktime',time());}
        
        if(isset($_SESSION['locktime'])){
            echo 'lock';
        }else{
            $admin = new \Model\AdminModel;
            $res = $admin -> check_username($_POST['username']);
            if($res == false){
                $_SESSION['namewrongtimes']+=1;
                session('exptime',time()); 
                if($_SESSION['namewrongtimes']>=7){ //剩余3次锁定时给提示
                    echo 10-$_SESSION['namewrongtimes'];
                }else{
                    echo 'wrong';
                }
            }else{
                echo 'right';
            }
        }
    }

    public function logout(){
        if(!isset($_SESSION['username'])){
            $this -> assign("notice",notice(28));
            $this -> assign("sec",2);
            $this -> assign("jump",__MODULE__."/login.html");
            $this -> display('inotice');
            exit();
        }
        session(NULL);
        $this -> assign("notice",notice(3));
                    $this -> assign("sec",3);
                    $this -> assign("jump",__MODULE__."/login.html");
                    $this -> display('inotice');
    }

}