<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $article = new \Model\ArticleModel;
    	$navi = new \Model\NaviModel;
        $siteInfo = new \Model\SiteinfoModel;
        $category = new \Model\CategoryModel;
        $index = new \Model\IndexFaceModel;
        $link = new \Model\LinkModel;
        $info = $siteInfo -> get_siteinfo();
        if($info[6]['content'] == 1){
            $this -> assign("notice",$info[7]['content']);
            $this -> display('Common/notice');
            exit();
        }
        $this -> assign('info',$info);
        $nav = $navi -> show_index_nav();
        $this -> assign('nav',$nav);
        $ui = $index -> show_menu();
        for($i=0;$i<count($ui);$i++){
            if($ui[$i]['single'] == 0){
                $cateinfo = $category -> show_cate($ui[$i]['cid']);
                $ui[$i]['info'] = $cateinfo[0];
                $artlist = $article -> get_article_by_cate($ui[$i]['cid']);
                $ui[$i]['artlist'] = $artlist;
            }else{
                $artinfo = $article -> index_article($ui[$i]['tid']);
                $ui[$i]['info'] = $artinfo[0];
            }
        }
        $this -> assign('ui',$ui);
    	$pushed = $article -> get_pushed();
    	$this -> assign('push',$pushed);
        $frd = $link -> show_link();
        $this -> assign('frd',$frd);
        $this -> display();
    }

    public function text(){
        $this -> display();
    }
}