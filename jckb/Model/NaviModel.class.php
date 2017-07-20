<?php
	
	//Admin管理员数据模型

	namespace Model;
	use Think\Model;

	class NaviModel extends Model{
		public function show_navi(){
			$list = $this -> order('ord,ctime') -> select();
	  		return $list;
		}

		public function show_index_nav(){
			$list = $this -> where("class='1'") -> order('ord,ctime') -> select();
	  		return $list;
		}

		public function add_navi($ord='',$title,$url,$del='1'){
			$data['ord']   = $ord;
			$data['title'] = $title;
			$data['url']   = $url;
			$data['del'] = $del;
			$res = $this -> add($data);
			return $res;
		}

		public function add_if_not_exist(){
			$flag=0;
			$list = $this -> getField('del',true);
			for($i=0;$i<count($list);$i++){
				if($list[$i]==0){
					$flag = 1;
					break;
				}
			}
			if($flag==0){
				$this -> add_navi('0','首页',U('/','','',true),'0');
			}
		}

		public function set_navi($nid,$ord,$title,$url){
			$this -> ord = $ord;
			$this -> title = $title;
			$this -> url = $url;
			$res = $this -> where("nid='".$nid."'") -> save();
			return $res;
		}

		public function set_hidd($nid = array()){
			$res = $this -> field('nid') -> where("class='0'") -> order('nid asc') -> select();
			for($i=0;$i<count($nid);$i++){
				for($j=$i+1;$j<count($nid);$j++){
					if($nid[$i]>$nid[$j]){
						$t=$nid[$i];
						$nid[$i]=$nid[$j];
						$nid[$j]=$t;
					}
				}
			}
			$flag=1;
			if(count($res)==count($nid)){
				for($i=0;$i<count($nid);$i++){
					if($res[$i]['nid']==$nid[$i]){
						$flag=0;
						continue;
					}else{
						$flag=1;
						break;
					}
				}
			}
			if($flag == 0){
				return 0;
			}
			$this -> class = '1';
			$this -> where("class='0'") -> save();
			for($i=0;$i<count($nid);$i++){
				$this -> class = '0';
				$res = $this -> where("nid='".$nid[$i]."'") -> save();
			}
			return true;
		}

		public function no_hidd(){
			$res = $this -> field('nid') -> where("class='0'") -> select();
			if(!empty($res)){
				$this -> class = '1';
				$this -> where("class='0'") -> save();
				return 1;
			}else{
				return 0;
			}
		}

		public function del_navi($nid){
			$res = $this -> where("nid='".$nid."'") -> delete();
			return $res;
		}
	} 
