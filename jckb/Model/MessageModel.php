<?php
	
	//网站留言模型

	namespace Model;
	use Think\Model;

	class MessageModel extends Model{
		protected $patchValidate = true;
	    protected $_validate = array(
	    	array('title','require','文章标题必须填写！',0),
	    	array('content1','require','文章内容必须填写！',0),
	    );

	    public function article_list($p){
			// 进行分页数据查询 注意page方法的参数的前面部分是当前的页数使用 $_GET[p]获取
			$list = $this -> where('class=1')->order('rtime desc')->page($p.',10')->select();
			$count = $this->where('class=1')->count();// 查询满足要求的总记录数
			$Page = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数
			$show = $Page->show();// 分页显示输出
			$data = array('list'=>$list,'show'=>$show);
			return $data;	
	    }

	    public function add_article($title,$content,$author,$spec,$cover){
	    	$data['tid'] = time().rand(1,1000);
	    	$data['title'] = $title;
	    	$data['content'] = $content;
	    	$data['author'] = $author;
	    	$data['spec'] = $spec;
	    	$data['cover'] = $cover;

	    	$info = $this -> add($data);
	    	return $info;
	    }

	    public function show_article($tid){
	    	$res = $this -> where("tid='".$tid."'") ->select();
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
			$list = $this -> where('class=0')->order('rtime desc')->page($p.',10')->select();
			$count = $this->where('class=0')->count();// 查询满足要求的总记录数
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

	    public function re_article($id){
	    	$this -> class = 1;
	    	$res = $this -> where("tid='".$id."'") -> save();
	    	return $res;
	    }

	    public function search_list($key,$p){
	    	$where['_string']="(title like '%".$key."%')  OR (content like '%".$key."%')";
			$list = $this -> where('class=1')-> where($where) -> order('rtime desc')->page($p.',10')->select();
			$count = $this -> where('class=1') -> where($where)-> count();// 查询满足要求的总记录数
			$Page = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数
			$show = $Page->show();// 分页显示输出
			$data = array('list'=>$list,'show'=>$show);
			return $data;
	    }

	    public function crt_Info($tid,$class,$author){
	    	$data['tid'] = $tid;
	    	if($class == 100){
		    	$data['title'] = '联系我们';
		    }else{
		    	$data['title'] = '公司简介';
		    }
	    	$data['author'] = $author;
	    	$data['content'] = '';
	    	$data['class'] = $class;
	    	$info = $this -> add($data);
	    	return $info;
	    }

	    public function show_index(){
	  		$list = $this -> field('tid,title,spec,content,cover') -> where('class=1') -> order('rtime desc') -> limit(16) -> select();
	  		return $list;
	    }

	    public function get_pushed(){
	    	$list = $this -> field('tid,title,spec,cover') -> where('push=1') -> order('ptime desc') -> limit(4) -> select();
	    	if($list == NULL){
	    		$list = $this -> field('tid,title,spec,cover') -> where('class=1') -> order('rtime desc') -> limit(4) -> select();
	    	}
	    	return $list;
	    }

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

	    public function show_list($p){
	    	$list = $this -> where('class=1') -> order('rtime desc') -> page($p.',9') -> select();
			$count = $this -> where('class=1') -> count();// 查询满足要求的总记录数
			$Page = new \Think\Page($count,9);// 实例化分页类 传入总记录数和每页显示的记录数
			$show = $Page->show();// 分页显示输出
			$data = array('list'=>$list,'show'=>$show);
			return $data;	
	    }
	} 