<?php
namespace Admin\Controller;
use Think\Controller;

class IndexController extends Controller {
    public function index(){
        $this -> checkLogin();
        $this -> display();
    }

    public function head(){
        $this -> assign("user",$_SESSION['username']);
        $this -> display();
    }

    public function left(){
        $this -> display();
    }

    public function right(){
        $this->checkLogin();
        //设置提取登录次数及时间cookie
        $logintimes = cookie("logintimes");
        $prev_login = cookie("prev_login");
        $flag = session("login");
        if($flag == 1){
            if($logintimes == null){
                $logintimes = 1;
                session("login",0);
                cookie("logintimes",$logintimes,3600*24*60);
                cookie("prev_login",date('Y-m-d H:i:s',time()),3600*24*60);
            }else{
                $logintimes += 1;
                session("login",0);
                cookie("logintimes",$logintimes,3600*24*60);
                cookie("prev_login",date('Y-m-d H:i:s',time()),3600*24*60);
            }
        }

        $this -> assign("logintimes",$logintimes);
        $this -> assign("prev_login",$prev_login);
        $this -> assign("user",$_SESSION['username']);
        $this -> assign("remoteip",$_SERVER['REMOTE_ADDR']);
        $this -> display();
    }

    private function checkLogin(){
        if(!isset($_SESSION['username']) || time()-$_SESSION['logintime']>1800){
            session('username',null);
            session('login',null);
            session('logintime',null);
            $this -> assign("notice",notice(4));
            $this -> assign("sec",2);
            $this -> assign("jump",__MODULE__."/login.html");
            $this -> display('Identify/inotice');
            exit();
        }
    }
}