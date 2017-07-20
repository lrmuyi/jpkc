<?php
	
	//Admin管理员数据模型

	namespace Model;
	use Think\Model;

	class LinkModel extends Model{
		public function show_link(){
			$list = $this -> order('ord,ltime desc') -> select();
	  		return $list;
		}

		public function add_link($ord='',$title,$url){
			$data['ord']   = $ord;
			$data['title'] = $title;
			$data['url']   = $url;
			$res = $this -> add($data);
			return $res;
		}

		public function set_link($lid,$ord,$title,$url){
			$this -> ord = $ord;
			$this -> title = $title;
			$this -> url = $url;
			$res = $this -> where("lid='".$lid."'") -> save();
			return $res;
		}

		public function del_link($lid){
			$res = $this -> where("lid='".$lid."'") -> delete();
			return $res;
		}
	} 
