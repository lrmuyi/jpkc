<?php
namespace Home\Controller;
use Think\Controller;

class ArticleController extends Controller {

    public function showList(){
        if(!$_GET['p'] || !preg_match('/^\d+$/i', $_GET['p'])){
            $page = 1;
        }else{
            $page = $_GET['p'];
        }
        if (!$_GET['category'] || !preg_match('/^\d+$/i', $_GET['category'])) {
            die('Access Denied!');
        }
        $cate = $_GET['category'];
        $article = new \Model\ArticleModel;
        $category = new \Model\CategoryModel;
        $navi = new \Model\NaviModel;
        $siteInfo = new \Model\SiteinfoModel;
        $info = $siteInfo -> get_siteinfo();
        if($info[6]['content'] == 1){
            $this -> assign("notice",$info[7]['content']);
            $this -> display('Common/notice');
            exit();
        }
        $this -> assign('info',$info);
        $nav = $navi -> show_index_nav();
        $this -> assign('nav',$nav);
        $p = $category -> cur_cate_tree($cate);
        if(is_null($p[0])){
            $this -> assign("notice",notice(40));
            $this -> assign("sec",3);
            $this -> assign("jump",__ROOT__);
            $this -> display('Common/notice');
            exit();
        }
        $this -> assign('p',$p);
        $aid['id'] = $p[count($p)-1]['id'];
        $aid['title'] = $p[count($p)-1]['title'];
        $this -> assign('aid',$aid);
        $cateTree = $category -> get_category($aid['id']);
        $this -> assign('tree',$cateTree);
        $rst = $article -> show_list($cate,$page);
        $show=preg_replace('/Home\/Article\/showList\/category/i', 'list', $rst['show']);
        $this -> assign('brief',$brief[0]);
        for($i=0;$i<count($rst['list']);$i++){
            $imgSize = getimagesize('http://'.$_SERVER['HTTP_HOST'].ATTACHED_IMG_URL.$rst['list'][$i]['cover']);
            if($imgSize[0]<$imgSize[1]){
                $rst['list'][$i]['covs']=1;
            }else{
                $rst['list'][$i]['covs']=0;
            }
        }
        $this -> assign('list',$rst['list']);// 赋值数据集
        $this -> assign('show',$show);// 赋值分页输出
        $style = $category -> show_cate_style($cate);
        if($style[0]['style']==2){
            $this -> display('showlist_it');
            exit();
        }
        if($style[0]['style']==3){
            $this -> display('showlist_img');
            exit();
        }
        $this -> display();

    }

    public function detail(){
    	if(!empty($_GET) && preg_match('/^\d+$/i', $_GET['tid'])){
    		$tid = $_GET['tid'];
    	}else{
    		die('Access Denied!');
    	}
        $article = new \Model\ArticleModel;
        $category = new \Model\CategoryModel;
        $navi = new \Model\NaviModel;
        $siteInfo = new \Model\SiteinfoModel;
        $info = $siteInfo -> get_siteinfo();
        if($info[6]['content'] == 1){
            $this -> assign("notice",$info[7]['content']);
            $this -> display('Common/notice');
            exit();
        }
        $this -> assign('info',$info);
        $nav = $navi -> show_index_nav();
        $this -> assign('nav',$nav);
		$res = $article -> show_detail($tid);
        preg_match_all('/<embed.*?src=\".*?\/public\/Attached\/flash\/(.+?)\".*?>/',$res['content'],$swf);
        preg_match_all('/<embed.*?src=\".*?\/public\/Attached\/media\/(.+?)\".*?>/',$res['content'],$vedio);
        $cate = $res['category'];
		$this -> assign('data',$res);
        $p = $category -> cur_cate_tree($cate);
        if($res['class'] == 0 || is_null($res)){
            $this -> assign("notice",notice(41));
            $this -> assign("sec",3);
            $this -> assign("jump","/");
            $this -> display('Common/notice');
            exit();
        }
        if($res['single'] == 1){
            $single = $article -> show_singles();
            for($i=0;$i<count($single);$i++){
                $single[$i]['count']=strlen($single[$i]['title']);
            }
            $this -> assign('single','1');
            $this -> assign('sinlist',$single);
        }else{
            $this -> assign('single','0');
        }
        $this -> assign('p',$p);
        $aid['id'] = $p[count($p)-1]['id'];
        $aid['title'] = $p[count($p)-1]['title'];
        $this -> assign('aid',$aid);
        $cateTree = $category -> get_category($aid['id']);
        $this -> assign('tree',$cateTree);
        if(!empty($swf[1])){
            $data = preg_replace('/<embed.*?src=\".*?\/public\/Attached\/flash\/(.+?)\".*?>/','',$res['content']);
            $this -> assign('content',$data);
            $this -> assign('swf',$swf[1]);
            $this -> display('detail_swf');
            exit();
        }
        if(!empty($vedio[1])){
            $data = preg_replace('/<embed.*?src=\".*?\/public\/Attached\/media\/(.+?)\".*?>/','',$res['content']);
            $this -> assign('content',$data);
            $this -> assign('vedio',$vedio[1]);
            $this -> display('detail_player');
            exit();
        }
    	$this -> display();
    }

    public function cRateJson(){
        if(!empty($_POST['tid'])){
            $tid=$_POST['tid'];
            $article = new \Model\ArticleModel;
            echo $article -> set_crate($tid);
        }
    }
}