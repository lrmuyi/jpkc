<?php
	
	//Admin管理员数据模型

	namespace Model;
	use Think\Model;

	class ArticleModel extends Model{
		protected $patchValidate = true;
	    protected $_validate = array(
	    	array('title','require','文章标题必须填写！',0),
	    	array('content1','require','文章内容必须填写！',0),
	    	array('pid','require','请选择正确的分类!',0),
	    );

	    public function article_list($p,$id){
			// 进行分页数据查询 注意page方法的参数的前面部分是当前的页数使用 $_GET[p]获取
			if($id == 0){
				$list = $this -> where("class='1' and single='0'")->order('rtime desc')->page($p.',10')->select();
				$count = $this->where("class='1' and single='0'")->count();// 查询满足要求的总记录数
				$Page = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数
				$show = $Page->show();// 分页显示输出
				$data = array('list'=>$list,'show'=>$show);
				return $data;
			}else{
				$list = $this -> where("class='1' and single='0' and category='".$id."'")->order('rtime desc')->page($p.',10')->select();
				$count = $this->where("class='1' and single='0' and category='".$id."'")->count();// 查询满足要求的总记录数
				$Page = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数
				$show = $Page->show();// 分页显示输出
				$data = array('list'=>$list,'show'=>$show);
				return $data;
			}	
	    }

	    public function add_article($title,$content,$author,$cover,$pid){
	    	$data['tid'] = time().rand(1,1000);
	    	$data['title'] = $title;
	    	$data['content'] = $content;
	    	$data['author'] = $author;
	    	$data['category'] = $pid;
	    	$data['cover'] = $cover;

	    	$info = $this -> add($data);
	    	return $info;
	    }

	    public function add_single($title,$content,$author,$cover){
	    	$data['tid'] = time().rand(1,1000);
	    	$data['title'] = $title;
	    	$data['content'] = $content;
	    	$data['author'] = $author;
	    	$data['cover'] = $cover;
	    	$data['pid'] = '0';
	    	$data['single'] = '1';

	    	$info = $this -> add($data);
	    	return $info;
	    }

	    public function show_article($tid){
	    	$res = $this -> where("tid='".$tid."'") ->select();
	    	return $res;
	    }

	    public function index_article($tid){
	    	$res = $this -> field("title,content,cover") -> where("tid='".$tid."'") ->select();
	    	return $res;
	    }

	    public function push_article($tid){
	    	$data['tid'] = $tid;
	    	$data['push'] = 1;
	    	$data['ptime'] = date('Y-m-d H:i:s');
	    	$info = $this -> save($data); 
	    }

	    public function upd_article($args){
	    	$info = $this -> save($args);
	    	return $info;
	    }

	    public function del_article($id){
	    	$flag = 0;
	    	$total = count($id);
	    	for($i=0;$i<$total;$i++){
	    		$this -> class = 0;
	    		$res = $this -> where("tid='".$id[$i]."'") -> save();
	    		if($res == 1){
	    			$flag++;
	    		}
	    	}
	    	if($flag == $total){
	    		return 1;
	    	}else if($flag == 0){
	    		return 0;
	    	}else{
	    		return 2;
	    	}
	    }

	    public function recycle_list($p){
			// 进行分页数据查询 注意page方法的参数的前面部分是当前的页数使用 $_GET[p]获取
			$list = $this -> where("class='0' and single='0'")->order('rtime desc')->page($p.',10')->select();
			$count = $this->where("class=0 and single='0'")->count();// 查询满足要求的总记录数
			$Page = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数
			$show = $Page->show();// 分页显示输出
			$data = array('list'=>$list,'show'=>$show);
			return $data;	
	    }
	    //单页回收站
	    public function recycle_sp_list(){
	    	// 进行分页数据查询 注意page方法的参数的前面部分是当前的页数使用 $_GET[p]获取
			$list = $this -> where("class=0 and single='1'")->order('rtime desc')->page($p.',10')->select();
			$count = $this -> where("class=0 and single='1'")->count();// 查询满足要求的总记录数
			$Page = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数
			$show = $Page->show();// 分页显示输出
			$data = array('list'=>$list,'show'=>$show);
			return $data;	
	    }

	    public function deep_delete($id){
	    	$flag = 0;
	    	$total = count($id);
	    	for($i=0;$i<$total;$i++){
	    		$res = $this -> where('tid='.$id[$i]) -> delete();
	    		if($res == 1){
	    			$flag++;
	    		}
	    	}
	    	if($flag == $total){
	    		return 1;
	    	}else if($flag == 0){
	    		return 0;
	    	}else{
	    		return 2;
	    	}
	    }

	    public function re_article($id,$cate){
	    	$this -> class = 1;
	    	$this -> category = $cate;
	    	$res = $this -> where("tid='".$id."'") -> save();
	    	return $res;
	    }

	    public function re_single($id){
	    	$this -> class = 1;
	    	$res = $this -> where("tid='".$id."'") -> save();
	    	return $res;
	    }

	    public function search_list($key,$cate,$p){
	    	if($cate == 0){
	    		$category = ')';
	    	}else if($cate == -1){
	    		$category = ") AND (single = '1')";
	    	}else{
	    		$category = ") AND (category = '".$cate."')";
	    	}
	    	$where['_string']="((title like '%".$key."%')  OR (content like '%".$key."%')".$category;
			$list = $this -> where('class=1')-> where($where) -> order('rtime desc')->page($p.',10')->select();
			$count = $this -> where('class=1') -> where($where)-> count();// 查询满足要求的总记录数
			$Page = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数
			$show = $Page->show();// 分页显示输出
			$data = array('list'=>$list,'show'=>$show);
			return $data;
	    }

	    //显示单页
	    public function show_single_page_list($p){
	    	$list = $this -> where("class != '0' and single = '1'") -> order('rtime desc') -> page($p.',10') -> select();
	    	$count = $this -> where("class != '0' and single = '1'") -> count();
	    	$Page = new \Think\Page($count,10);
	    	$show = $Page->show();
	    	$data = array('list'=>$list,'show'=>$show);
	    	return $data;
	    }
	    //未用：
	    public function show_index(){
	  		$list = $this -> field('tid,title,content,cover') -> where('class=1') -> order('rtime desc') -> limit(16) -> select();
	  		return $list;
	    }

	    public function get_pushed(){
	    	$list = $this -> field('tid,title,cover') -> where('push=1') -> order('ptime desc') -> limit(16) -> select();
	    	if($list == NULL){
	    		$list = $this -> field('tid,title,cover') -> where('class=1') -> order('rtime desc') -> limit(16) -> select();
	    	}
	    	return $list;
	    }
	    //未用：
	    public function get_brief(){
	    	$list = $this -> field('cover,content') -> where('class=101') -> select();
	    	return $list;
	    }

	    public function show_detail($tid){
	    	$list = $this -> getbytid("$tid");
	    	return $list;
	    }

	    public function set_crate($tid){
	    	$res = $this -> field('crate') -> where("tid='".$tid."'") ->select();
	    	$crate = $res[0]['crate']+1;
	    	$this -> crate = $crate;
	    	$res = $this -> where("tid='".$tid."'") -> save();
	    	return $crate;
	    }

	    public function show_list($cate,$p){
	    	$list = $this -> where("class='1' and category='".$cate."' and single='0'") -> order('rtime desc') -> page($p.',9') -> select();
			$count = $this -> where("class='1' and category='".$cate."' and single='0'") -> count();// 查询满足要求的总记录数
			$Page = new \Think\Page($count,9);// 实例化分页类 传入总记录数和每页显示的记录数
			$show = $Page->show();// 分页显示输出
			$data = array('list'=>$list,'show'=>$show);
			return $data;	
	    }

	    public function get_article_by_cate($id){
	    	$article = $this ->field("tid,title,rtime") -> where("category='".$id."'  and single = '0' and class != '0'") -> select();
	    	return $article;
	    }

	    public function move_cate_art($tid){
	    	$this -> class = 0;
	    	$this -> category = 0;
	    	$res = $this -> where("tid='".$tid."'") -> save();
	    	return $res;
	    }

	    public function show_singles(){
	    	$single = $this -> where("class !=0 and single = 1") -> order('rtime desc') ->select();
	    	return $single;
	    }

	    public function show_all(){
	    	$single = $this -> where("class !=0") -> order('rtime desc') ->select();
	    	return $single;
	    }
	} 