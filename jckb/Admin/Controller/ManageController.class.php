<?php
namespace Admin\Controller;
use Think\Controller;

class ManageController extends Controller {

    public function category(){
        $this -> checkLogin();
        $category = new \Model\CategoryModel;
        $res = $category -> get_category();
        $this -> assign('cate',$res);
        //本页修改项
        if(!empty($_POST)){
            $flag=0;
            $title = $_POST['title'];
            //添加新分类
            if(!empty($_POST['ntitle'])){
                for($i=0;$i<count($_POST['pid']);$i++){
                    $pid = htmlspecialchars($_POST['pid'][$i], ENT_QUOTES);
                    $ntitle = htmlspecialchars($_POST['ntitle'][$i], ENT_QUOTES);
                    $category -> add_category($pid,$ntitle);
                    $flag++;
                }
            }
            //顺序设置
            for($i=0;$i<count($_POST['cateord']);$i++){
                $ord = htmlspecialchars($_POST['cateord'][$i], ENT_QUOTES);
                if($ord!=$res[$i]['ord']){
                    $r = $category -> set_cate_order($_POST['id'][$i],$ord);
                    if($r==1){
                        $flag++;
                    }
                }
            }
            
            //设置隐藏
            if(isset($_POST['hidd'])){
                $r = $category -> set_hidd($_POST['hidd']);
                if($r==1){
                    $flag++;
                }
            }else{
                $r=$category -> no_hidd();
                if($r==1){
                    $flag++;
                }
            }

            for($i=0;$i<count($title);$i++){
                $title[$i] = htmlspecialchars($title[$i], ENT_QUOTES);
                if($title[$i] !== $res[$i]['title'] && $title[$i] != ''){
                    $category -> set_cate_name($res[$i]['id'],$title[$i]);
                    $flag++;
                }
            }

            if($flag != 0){
                reCache();
                $this -> assign("notice",notice(30));
                $this -> assign("sec",2);
                $this -> assign("jump",__MODULE__."/Manage/category");
                $this -> display('notice');
                exit();
            }else{
                $this -> assign("notice",notice(32));
                $this -> assign("sec",2);
                $this -> assign("jump",__MODULE__."/Manage/category");
                $this -> display('notice');
                exit(); 
            }
        }
        $this -> display();
    }

    public function modCate(){
        $this -> checkLogin();
        $cate = new \Model\CategoryModel;
        if($_GET['id']){
            $res = $cate -> show_cate($_GET['id']);
            $all = $cate -> get_category();
            $this -> assign("cate",$res[0]);
            $this -> assign("all",$all);

            if(!empty($_POST)){
                $post = $_POST;
                if($post['title']){
                    $title = htmlspecialchars($post['title'], ENT_QUOTES);
                    if($title != $res[0]['title']){
                        $data['title'] = $title;
                    }

                    if($post['pid']){
                        $pid=htmlspecialchars($post['pid'], ENT_QUOTES);
                        if($pid != $res[0]['pid']){
                            $data['pid'] = $pid;
                        }
                    }

                    if(isset($post['enable'])){
                        $enable = htmlspecialchars($post['enable'], ENT_QUOTES);
                        if($enable != $res[0]['class']){
                            $data['class'] = $enable;
                        }
                    }

                    if($post['style']){
                        $style = htmlspecialchars($post['style'], ENT_QUOTES);
                        if($style != $res[0]['style']){
                            $data['style'] = $style;
                        }
                    }

                    if(!empty($data)){
                        $rst = $cate -> upd_cate($_GET['id'],$data);
                        if($rst != 1){
                            $this -> assign("notice",notice(34));
                            $this -> assign("sec",2);
                            $this -> assign("jump",__MODULE__."/Manage/category");
                            $this -> display('notice');
                            exit();
                        }else{
                            $this -> assign("notice",notice(35));
                            $this -> assign("sec",2);
                            $this -> assign("jump",__MODULE__."/Manage/category");
                            $this -> display('notice');
                            exit();
                        }
                    }
                }   

            }

        }else{
            die('Access Denied!');
        }
        $this -> display();
    }

    public function delCate(){
        $this -> checkLogin();
        $cate = new \Model\CategoryModel;
        $article = new \Model\ArticleModel;

        if($_GET['id']){
            $artId = $article -> get_article_by_cate($_GET['id']);
            for($i=0;$i<count($artId);$i++){
                $article -> move_cate_art($artId[$i]['tid']);
            }
            $res = $cate -> del_cate($_GET['id']);
            if($res == 1){
                $this -> assign("notice",notice(31));
                $this -> assign("sec",2);
                $this -> assign("jump",__MODULE__."/Manage/category");
                $this -> display('notice');
                exit();
            }else{
                $this -> assign("notice",notice(33));
                $this -> assign("sec",2);
                $this -> assign("jump",__MODULE__."/Manage/category");
                $this -> display('notice');
                exit();
            }
        }else{
            die('Access Denied!');
        }
    }

    public function article(){
		$this -> checkLogin();
        if(!$_GET['p']){
            $p = 1;
        }else{
            $p = $_GET['p'];
        }
        if(isset($_GET['id'])){
            $id = $_GET['id'];
        }else{
            die('Access Denied!');
        }
        $cate = new \Model\CategoryModel;
        $article = new \Model\ArticleModel;
        $allCate = $cate -> get_category();
        $rst = $article -> article_list($p,$id);
        $this -> assign('id',$id);
        $this -> assign('all',$allCate);
        $this -> assign('list',$rst['list']);// 赋值数据集
        $this -> assign('show',$rst['show']);// 赋值分页输出
    	$this -> display();
    }

    public function addArticle(){
        $this -> checkLogin();
        $cate = new \Model\CategoryModel;//分类信息
        $allCate = $cate -> get_category(); 
        $this -> assign("all",$allCate);
        if($_GET['id']){
            $id = $_GET['id'];
        }else{
            $id = 0;
        }
        $this -> assign("id",$id);
        if(!empty($_POST)){
            $article = new \Model\ArticleModel; // 实例化Admin对象
            if (!$article -> create()){     // 如果创建失败 表示验证没有通过 输出错误提示信息 
                $this -> assign("err",$article -> getError());
                $this -> assign("temp",$_POST);
            }else{
                $title = htmlspecialchars($_POST['title'], ENT_QUOTES);
                $pid = htmlspecialchars($_POST['pid'], ENT_QUOTES);
                $content = $_POST['content1'];
                preg_match('/<img.*?src=\".*?\/public\/Attached\/image\/(.+?)\".*?>/',$content,$cover);               
                $res = $article -> add_article($title,$content,$_SESSION['username'],$cover[1],$pid);
                if($res == 1){
                    reCache();
                    $this -> assign("notice",notice(8));
                    $this -> assign("sec",2);
                    $this -> assign("jump",__MODULE__."/Manage/article/id/$pid");
                    $this -> display('notice');
                    exit();
                }else{
                    $this -> assign("notice",notice(9));
                    $this -> assign("sec",2);
                    $this -> assign("jump",__MODULE__."/Manage/addArticle");
                    $this -> display('notice');
                    exit();
                }
            }
        }
        $this -> display();
    }

    public function addSingle(){
        $this -> checkLogin();
        if(!empty($_POST)){
            $article = new \Model\ArticleModel; // 实例化Admin对象
            if (!$article -> create()){     // 如果创建失败 表示验证没有通过 输出错误提示信息 
                $this -> assign("err",$article -> getError());
                $this -> assign("temp",$_POST);
            }else{
                $title = htmlspecialchars($_POST['title'], ENT_QUOTES);
                $content = $_POST['content1'];
                preg_match('/<img.*?src=\".*?\/public\/Attached\/image\/(.+?)\".*?>/',$content,$cover);               
                $res = $article -> add_single($title,$content,$_SESSION['username'],$cover[1]);
                if($res == 1){
                    reCache();
                    $this -> assign("notice",notice(8));
                    $this -> assign("sec",2);
                    $this -> assign("jump",__MODULE__."/Manage/singlePage");
                    $this -> display('notice');
                    exit();
                }else{
                    $this -> assign("notice",notice(9));
                    $this -> assign("sec",2);
                    $this -> assign("jump",__MODULE__."/Manage/addSingle");
                    $this -> display('notice');
                    exit();
                }
            }
        }
        $this -> display();
    }

    public function delArticle(){
        $this -> checkLogin();
        if(!empty($_POST)){
            $article = new \Model\ArticleModel;
            $res = $article -> del_article($_POST['delflag']);
            $temp = explode('/',$_SERVER['HTTP_REFERER']);
            $cid = $temp[count($temp)-1];
            if($res == 1){
                reCache();
                $this -> assign("notice",notice(10));
                $this -> assign("sec",2);
                $this -> assign("jump",__MODULE__."/Manage/article/id/".$cid);
                $this -> display('notice');
                exit();
            }else if($res == 2){
                $this -> assign("notice",notice(11));
                $this -> assign("sec",2);
                $this -> assign("jump",__MODULE__."/Manage/article/id/".$cid);
                $this -> display('notice');
                exit();
            }else{
                $this -> assign("notice",notice(12));
                $this -> assign("sec",2);
                $this -> assign("jump",__MODULE__."/Manage/article/id/".$cid);
                $this -> display('notice');
                exit();
            }
        }
    }

    public function delSingle(){
        $this -> checkLogin();
        if(!empty($_POST)){
            $article = new \Model\ArticleModel;
            $res = $article -> del_article($_POST['delflag']);
            if($res == 1){
                reCache();
                $this -> assign("notice",notice(10));
                $this -> assign("sec",2);
                $this -> assign("jump",__MODULE__."/Manage/singlePage");
                $this -> display('notice');
                exit();
            }else if($res == 2){
                $this -> assign("notice",notice(11));
                $this -> assign("sec",2);
                $this -> assign("jump",__MODULE__."/Manage/singlePage");
                $this -> display('notice');
                exit();
            }else{
                $this -> assign("notice",notice(12));
                $this -> assign("sec",2);
                $this -> assign("jump",__MODULE__."/Manage/singlePage");
                $this -> display('notice');
                exit();
            }
        }
    }

    public function recycleArticle(){
        $this -> checkLogin();
        if(!$_GET['p']){
            $p = 1;
        }else{
            $p = $_GET['p'];
        }

        $article = new \Model\ArticleModel;
        $cate = new \Model\CategoryModel;
        $rst = $article -> recycle_list($p);
        $all = $cate -> get_category();
        $this -> assign('all',$all);
        $this -> assign('list',$rst['list']);// 赋值数据集
        $this -> assign('show',$rst['show']);// 赋值分页输出
        $this -> assign('page',$p); 
        
        if($_GET['re']){
            if(empty($_GET['cate'])){
                echo "分类出错，请重试！";
                exit();
            }
            $res = $article -> re_article($_GET['re'],$_GET['cate']);
            if($res == 1){
                reCache();
                echo 'true';
                exit();
            }
        }

        if(!empty($_POST)){
            $res = $article -> deep_delete($_POST['delflag']);
            if($res == 1){
                $this -> assign("notice",notice(13));
                $this -> assign("sec",2);
                $this -> assign("jump",__MODULE__."/Manage/recycleArticle");
                $this -> display('notice');
                exit();
            }else if($res == 2){
                $this -> assign("notice",notice(11));
                $this -> assign("sec",2);
                $this -> assign("jump",__MODULE__."/Manage/recycleArticle");
                $this -> display('notice');
                exit();
            }else{
                $this -> assign("notice",notice(12));
                $this -> assign("sec",2);
                $this -> assign("jump",__MODULE__."/Manage/recycleArticle");
                $this -> display('notice');
                exit();
            }
        }
        $this->display();
    }

    public function recycleSingle(){
        $this -> checkLogin();
        if(!$_GET['p']){
            $p = 1;
        }else{
            $p = $_GET['p'];
        }

        $article = new \Model\ArticleModel;
        $rst = $article -> recycle_sp_list($p);
        $this -> assign('list',$rst['list']);// 赋值数据集
        $this -> assign('show',$rst['show']);// 赋值分页输出
        $this -> assign('page',$p); 
        
        if($_GET['re']){
            $res = $article -> re_single($_GET['re']);
            if($res == 1){
                reCache();
                echo 'true';
                exit();
            }
        }

        if(!empty($_POST)){
            $res = $article -> deep_delete($_POST['delflag']);
            if($res == 1){
                $this -> assign("notice",notice(13));
                $this -> assign("sec",2);
                $this -> assign("jump",__MODULE__."/Manage/recycleArticle");
                $this -> display('notice');
                exit();
            }else if($res == 2){
                $this -> assign("notice",notice(11));
                $this -> assign("sec",2);
                $this -> assign("jump",__MODULE__."/Manage/recycleArticle");
                $this -> display('notice');
                exit();
            }else{
                $this -> assign("notice",notice(12));
                $this -> assign("sec",2);
                $this -> assign("jump",__MODULE__."/Manage/recycleArticle");
                $this -> display('notice');
                exit();
            }
        }
        $this->display();
    }

    public function modArticle(){
        $this -> checkLogin();
        $article = new \Model\ArticleModel; // 实例化Admin对象
        $cate = new \Model\CategoryModel;
        $rst = $article -> show_article($_GET['tid']);
        $all = $cate -> get_category();
        if($rst != null){
            $this -> assign("all",$all);
            $this -> assign("data",$rst[0]);
        }else{
            $this -> assign("notice",notice(15));
            $this -> assign("sec",2);
            $this -> assign("jump",__MODULE__."/Manage/article/id/0");
            $this -> display('notice');
            exit();
        }

        if(!empty($_POST)){
            //show_dump($_POST);
            $info = array('tid'=>$_GET['tid']);
            $title = htmlspecialchars($_POST['title'], ENT_QUOTES);
            $pid = htmlspecialchars($_POST['pid'], ENT_QUOTES);

            if($title != $rst[0]['title'] && $title!=''){
                $info['title'] = $title;
            }else{
                $info['title'] = $rst[0]['title'];
            }
            if($pid != $rst[0]['pid']){
                $info['category'] = $pid;
            }
            if($_POST['content1'] !== $rst[0]['content'] && $_POST['content1'] != ''){
                $info['content'] = $_POST['content1'];
                preg_match('/<img.*?src=\".*?\/public\/Attached\/image\/(.+?)\".*?>/',$_POST['content1'],$cover);
                if($cover[1] != $rst[0]['cover']){
                    $info['cover'] = $cover[1];
                }                 
            }else{
                $info['content'] = $rst[0]['content'];
            }

            $res = $article -> upd_article($info);
            if($res == 1){
                reCache();
                $this -> assign("notice",notice(16));
                $this -> assign("sec",2);
                $this -> assign("jump",__MODULE__."/Manage/article/id/".$pid);
                $this -> display('notice');
                exit();
            }else{
                $this -> assign("notice",notice(17));
                $this -> assign("sec",2);
                $this -> assign("jump",__MODULE__."/Manage/article/id/".$pid);
                $this -> display('notice');
                exit();
            }
        }
        $this -> display();
    }

    public function modSingle(){
        $this -> checkLogin();
        if(!$_GET['tid']){
            die('Access Denied');
        }
        $article = new \Model\ArticleModel; // 实例化Admin对象
        $rst = $article -> show_article($_GET['tid']);
        if($rst != null){
            $this -> assign("data",$rst[0]);
        }else{
            $this -> assign("notice",notice(15));
            $this -> assign("sec",2);
            $this -> assign("jump",__MODULE__."/Manage/singlePage");
            $this -> display('notice');
            exit();
        }

        if(!empty($_POST)){
            //show_dump($_POST);
            $info = array('tid'=>$_GET['tid']);
            $title = htmlspecialchars($_POST['title'], ENT_QUOTES);

            if($title != $rst[0]['title'] && $title!=''){
                $info['title'] = $title;
            }else{
                $info['title'] = $rst[0]['title'];
            }
            if($_POST['content1'] !== $rst[0]['content'] && $_POST['content1'] != ''){
                $info['content'] = $_POST['content1'];
                preg_match('/<img.*?src=\".*?\/public\/Attached\/image\/(.+?)\".*?>/',$_POST['content1'],$cover);
                if($cover[1] != $rst[0]['cover']){
                    $info['cover'] = $cover[1];
                }                 
            }else{
                $info['content'] = $rst[0]['content'];
            }

            $res = $article -> upd_article($info);
            if($res == 1){
                reCache();
                $this -> assign("notice",notice(16));
                $this -> assign("sec",2);
                $this -> assign("jump",__MODULE__."/Manage/singlePage");
                $this -> display('notice');
                exit();
            }else{
                $this -> assign("notice",notice(17));
                $this -> assign("sec",2);
                $this -> assign("jump",__MODULE__."/Manage/singlePage");
                $this -> display('notice');
                exit();
            }
        }
        $this -> display();
    }

    public function indexFace(){
        $this -> checkLogin();
        $cate = new \Model\CategoryModel;
        $single = new \Model\ArticleModel;
        $ui = new \Model\IndexFaceModel;
        $siteInfo = new \Model\SiteinfoModel;
        $allc = $cate -> get_category();
        $s = $single -> show_all();
        $ui -> ini();
        $bann = $siteInfo -> getBanner();
        $res = $ui -> show_menu();
        $this -> assign("c",$allc);
        $this -> assign("s",$s);
        $this -> assign("ui",$res);
        $this -> assign("banner",$bann[0]['content']);

        if(!empty($_POST)){
            $flag=0;
            if(isset($_POST['bannReset'])&&$bann[0]['content']!=''){
                $siteInfo -> banner_reset();
                $flag++;
            }
            if($_FILES['banner']['error']!=4){
                $r = $siteInfo -> banner_upload($_FILES['banner']);
                if($r == 1){
                    $flag++;
                }else{
                    var_dump($r);
                }
            }
            $buffer = array();
            $countSingle = 0;
            for($i=0;$i<INDEX_AREA_NUM;$i++){
                if ($_POST['cate'][$i]!=$res[$i]['cid']){
                    $rst = $ui -> upd_ui($_POST['cate'][$i],$_POST['single'][$i],$i+1);
                    $flag++;
                }
                if($_POST['cate'][$i] == 0){
                	$buffer[$i] = $_POST['single'][$countSingle++];
                }
                if($_POST['cate'][$i] == 0 && ($buffer[$i] !=0 && $buffer[$i] != $res[$i]['tid'])){
                    $rst = $ui -> upd_ui($_POST['cate'][$i],$buffer[$i],$i+1);
                    $flag++;
                }
            }
            if($flag>0){
                reCache();
                $this -> assign("notice",notice(38));
                $this -> assign("sec",2);
                $this -> assign("jump",__MODULE__."/Manage/indexFace");
                $this -> display('notice');
                exit();
            }else{
                $this -> assign("notice",notice(39));
                $this -> assign("sec",2);
                $this -> assign("jump",__MODULE__."/Manage/indexFace");
                $this -> display('notice');
                exit();
            }
        }
        $this -> display();
    }

    public function searchRes(){
        $this -> checkLogin();
        if(!$_GET['p']){
            $p = 1;
        }else{
            $p = $_GET['p'];
        }
        $cate = new \Model\CategoryModel;
        $all = $cate -> get_category();
        $this -> assign('all',$all);

        if(!empty($_GET)){
            if(!isset($_GET['pid'])){
                die('Access Denied!');
            }
            $cate = htmlspecialchars($_GET['pid'], ENT_QUOTES);
            $this -> assign('parentid',$cate);
            $keyword = htmlspecialchars($_GET['search'], ENT_QUOTES);
            $article = new \Model\ArticleModel;
            $rst = $article -> search_list($keyword,$cate,$p);
            if($rst['list'] != null){
                $this -> assign('list',$rst['list']);// 赋值数据集
                $this -> assign('show',$rst['show']);// 赋值分页输出
            }else{
                $this -> assign('notice',notice(14));
            }
            $this -> display();
        }else{
            $this -> assign('notice',notice(14));
            $this -> display();
        }
    }

    public function pushArticle(){
        if(!isset($_SESSION['username'])){
            die('非法操作');
        }

        if($_GET['tid']){
            $article = new \Model\ArticleModel;
            $res = $article -> push_article($_GET['tid']);
            if($res !== false){
                echo json_encode(true);
                reCache();
            }else{
                echo json_encode(false);
            }
        }
    }

    public function singlePage(){
        $this -> checkLogin();
        if(!$_GET['p']){
            $p = 1;
        }else{
            $p = $_GET['p'];
        }
        $article = new \Model\ArticleModel;
        $rst = $article -> show_single_page_list($p);
        
        $this -> assign('list',$rst['list']);// 赋值数据集
        $this -> assign('show',$rst['show']);// 赋值分页输出
        $this -> display();
    }

    public function friendLink(){
        $this -> checkLogin();

        $link = new \Model\LinkModel;
        $res = $link -> show_link();
        $this -> assign("link",$res);
        $left=array();
        for($i=0;$i<(10-count($res));$i++){
            $left[$i]=$i;
        }
        $this -> assign("left",$left);
        if(!empty($_POST)){
            $ord = $_POST['ord'];
            $title = $_POST['title'];
            $url = $_POST['url'];
            $flag = 0;
            $i=0;

            for($i=0;$i<count($ord);$i++){
                //去掉所有特殊字符
                $ord[$i]=htmlspecialchars($ord[$i], ENT_QUOTES);
                $title[$i]=htmlspecialchars($title[$i], ENT_QUOTES);
                $url[$i]=htmlspecialchars($url[$i], ENT_QUOTES);
            
                if($title[$i] != '' && $url[$i] != ''){
                    if($ord[$i] != $res[$i]['ord']){
                       $rst = $link -> set_link($res[$i]['lid'],$ord[$i]);
                       $flag++;
                    }
                    if($title[$i] != $res[$i]['title'] || $url[$i] != $res[$i]['url']){
                        if(empty($res[$i]['lid'])){      //新增
                            $res = $link -> add_link($ord[$i],$title[$i],$url[$i]);
                        }
                        $rst = $link -> set_link($res[$i]['lid'],$ord[$i],$title[$i],$url[$i]);
                        $flag++;
                    }
                }else{
                    if(($title[$i] == '' && $res[$i]['title'] != '')||($url[$i] == '' && $res[$i]['url'] != '')){
                        $link -> del_link($res[$i]['lid']);
                        $flag++;
                    }
                }
            }
            if($flag != 0){
                reCache();
                $this -> assign("notice",notice(23));
                $this -> assign("sec",2);
                $this -> assign("jump",__MODULE__."/Manage/friendLink");
                $this -> display('notice');
                exit();
            }else{
                $this -> assign("notice",notice(24));
                $this -> assign("sec",2);
                $this -> assign("jump",__MODULE__."/Manage/friendLink");
                $this -> display('notice');
                exit(); 
            }
        }
        $this -> display();
    }

    public function delLink(){
        $this -> checkLogin();
        if(isset($_GET['lid'])){
            $link = new \Model\LinkModel;
            $res = $link -> del_link($_GET['lid']);
            if($res == true){
                reCache();
                $this -> assign("notice",notice(25));
                $this -> assign("sec",2);
                $this -> assign("jump",__MODULE__."/Manage/friendLink");
                $this -> display('notice');
                exit(); 
            }else{
                $this -> assign("notice",notice(26));
                $this -> assign("sec",2);
                $this -> assign("jump",__MODULE__."/Manage/friendLink");
                $this -> display('notice');
                exit(); 
            }
        }
    }

    public function navigation(){
        $this -> checkLogin();

        $navi = new \Model\NaviModel;

        $navi -> add_if_not_exist();
        $res = $navi -> show_navi();
        $this -> assign("navi",$res);
        
        if(!empty($_POST)){
            $ord = $_POST['ord'];
            $title = $_POST['title'];
            $url = $_POST['url'];
            @$hidd = $_POST['hidd'];
            $flag = 0;
            $i=0;
            //判断隐藏项
            if(isset($_POST['hidd'])){
                $r = $navi -> set_hidd($hidd);
                if($r==1){
                    $flag++;
                }
            }else{
                $r = $navi -> no_hidd();
                if($r==1){
                    $flag++;
                }
            }
            for($i=0;$i<count($ord);$i++){
                //去掉所有特殊字符
                $ord[$i]=htmlspecialchars($ord[$i], ENT_QUOTES);
                $title[$i]=htmlspecialchars($title[$i], ENT_QUOTES);
                $url[$i]=htmlspecialchars($url[$i], ENT_QUOTES);
                
                if($title[$i] != '' && $url[$i] != ''){
                    if($ord[$i] != $res[$i]['ord']){
                       $rst = $navi -> set_navi($res[$i]['nid'],$ord[$i]);
                       $flag++;
                    }
                    if($title[$i] != $res[$i]['title'] || $url[$i] != $res[$i]['url']){
                        if(empty($res[$i]['nid'])){      //新增
                            $res = $navi -> add_navi($ord[$i],$title[$i],$url[$i]);
                        }
                        $rst = $navi -> set_navi($res[$i]['nid'],$ord[$i],$title[$i],$url[$i]);
                        $flag++;
                    }
                }else{
                    if(($title[$i] == '' && $res[$i]['title'] != '')||($url[$i] == '' && $res[$i]['url'] != '')){
                        $navi -> del_navi($res[$i]['nid']);
                        $flag++;
                    }
                }
            }
            if($flag != 0){
                reCache();
                $this -> assign("notice",notice(20));
                $this -> assign("sec",2);
                $this -> assign("jump",__MODULE__."/Manage/navigation");
                $this -> display('notice');
                exit();
            }else{
                $this -> assign("notice",notice(21));
                $this -> assign("sec",2);
                $this -> assign("jump",__MODULE__."/Manage/navigation");
                $this -> display('notice');
                exit(); 
            }
        }
        $this -> display();
    }

    public function delNavi(){
        $this -> checkLogin();
        if(isset($_GET['nid'])){
            $navi = new \Model\NaviModel;
            $res = $navi -> del_navi($_GET['nid']);
            if($res == true){
                reCache();
                $this -> assign("notice",notice(22));
                $this -> assign("sec",2);
                $this -> assign("jump",__MODULE__."/Manage/navigation");
                $this -> display('notice');
                exit(); 
            }else{
                $this -> assign("notice",notice(26));
                $this -> assign("sec",2);
                $this -> assign("jump",__MODULE__."/Manage/navigation");
                $this -> display('notice');
                exit(); 
            }
        }
    }

    public function siteInfo(){
        $this -> checkLogin();

        $siteInfo = new \Model\SiteinfoModel;
        $siteInfo ->set_all_siteinfo();
        $res = $siteInfo -> get_siteinfo();
        $this -> assign('info',$res);
        if(!empty($_POST)){
            $flag = 0;
            if($_POST['siteName']!=$res[0]['content']){
                $siteName = htmlspecialchars($_POST['siteName'], ENT_QUOTES);
                $siteInfo -> set_siteinfo($siteName,$res[0]['inid']);
                $flag++;
            }
            if($_POST['websName']!=$res[1]['content']){
                $websName = htmlspecialchars($_POST['websName'], ENT_QUOTES);
                $siteInfo -> set_siteinfo($websName,$res[1]['inid']);
                $flag++;
            }
            if($_POST['sitedesc']!=$res[2]['content']){
                $sitedesc = htmlspecialchars($_POST['sitedesc'], ENT_QUOTES);
                $siteInfo -> set_siteinfo($sitedesc,$res[2]['inid']);
                $flag++;
            }
            if($_POST['keywords']!=$res[3]['content']){
                $keywords = htmlspecialchars($_POST['keywords'], ENT_QUOTES);
                $siteInfo -> set_siteinfo($keywords,$res[3]['inid']);
                $flag++;
            }
            if($_POST['siteUrl']!=$res[4]['content']){
                $siteUrl = htmlspecialchars($_POST['siteUrl'], ENT_QUOTES);
                $siteInfo -> set_siteinfo($siteUrl,$res[4]['inid']);
                $flag++;
            }
            if($_POST['icp']!=$res[5]['content']){
                $icp = htmlspecialchars($_POST['icp'], ENT_QUOTES);
                $siteInfo -> set_siteinfo($icp,$res[5]['inid']);
                $flag++;
            }
            if($_POST['tempclose']!=$res[6]['content']){
                $tempclose = htmlspecialchars($_POST['tempclose'], ENT_QUOTES);
                $siteInfo -> set_siteinfo($tempclose,$res[6]['inid']);
                $flag++;
            }
            if($_POST['cnotice']!=$res[7]['content']){
                $cnotice = htmlspecialchars($_POST['cnotice'], ENT_QUOTES);
                $siteInfo -> set_siteinfo($cnotice,$res[7]['inid']);
                $flag++;
            }
            if($flag == 0){
                $this -> assign("notice",notice(36));
                $this -> assign("sec",2);
                $this -> assign("jump",__MODULE__."/Manage/siteInfo");
                $this -> display('notice');
                exit(); 
            }else{
                $this -> assign("notice",notice(37));
                $this -> assign("sec",2);
                $this -> assign("jump",__MODULE__."/Manage/siteInfo");
                $this -> display('notice');
                exit(); 
            }
        }       
        $this -> display();
    }

    public function adminPsw(){
        $this -> checkLogin();
        if(!empty($_POST)){
            $admin = new \Model\AdminModel; // 实例化Admin对象
            $c = $admin -> create();
            if (count($c)!=0){     // 如果创建失败 表示验证没有通过 输出错误提示信息
                $this -> assign("err",$admin->getError());
            }else{      //验证原始密码
                $res = $admin -> check_login($_SESSION['username'],$_POST['oldPwd']);
                if($res == false){
                    echo $res;
                    $this -> assign("info",notice(5));
                }else{      //插入新密码
                    $data['aid'] = $_SESSION['username'];
                    $data['password'] = md5($_POST['newPwd']."www.lutcte.com");
                    $rst = $admin -> save($data);
                    if($rst == 1){
                        session(NULL);
                        $this -> assign("notice",notice(6));
                        $this -> assign("sec",2);
                        $this -> assign("jump",__MODULE__."/login.html");
                        $this -> display('Identify/inotice');
                        exit();
                    }else{
                        $this -> assign("info",notice(7));
                    }
                }
            }
        }
        $this -> display();
    }

    public function refreshCache(){
        $this -> checkLogin();
        if($_POST){
            reCache();
            $this -> assign('msg','缓存更新成功！');
        }
        $this -> display();
    }

    private function checkLogin(){
        //设置登陆超时时间半小时
        if(!isset($_SESSION['username']) || time()-$_SESSION['logintime']>1800){
            session('username',null);
            session('login',null);
            session('logintime',null);
            $this -> assign("notice",notice(4));
            $this -> assign("sec",2);
            $this -> assign("jump",__MODULE__."/login.html");
            $this -> display('Identify/inotice');
            exit();
        }else{      //更新登录时间
            session("logintime",time());
        }
    }

    public function sitemap() {
        if(!isset($_SESSION['username'])){
            die('非法操作!');
        }
        $list = M('Article')->field('tid,title,rtime')->order('tid desc')->limit(10000)->select();
        $sitemap = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\r\n<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\"
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xsi:schemaLocation=\"http://www.sitemaps.org/schemas/sitemap/0.9
       http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd\">\r\n";
        foreach($list as $k=>$v){
            $sitemap .= "<url>\r\n"."<loc>http://".$_SERVER [ 'SERVER_NAME' ].U('/Home',array('Article'=>$v['tid']))."</loc>\r\n"."<priority>0.6</priority>\r\n<lastmod>".date('Y-m-d',strtotime($v['rtime']))."</lastmod>\r\n<changefreq>weekly</changefreq>\r\n</url>\r\n";
        }
        $sitemap .= '</urlset>';
        $file = fopen("sitemap.xml","w");
        fwrite($file,$sitemap);
        fclose($file);
        $this -> assign("notice",notice(29));
        $this -> assign("sec",2);
        $this -> assign("jump",__MODULE__."/Index/index");
        $this -> display('Identify/inotice');
    }
}