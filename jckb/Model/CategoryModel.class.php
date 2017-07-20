<?php
	//分类数据模型

	namespace Model;
	use Think\Model;

	class CategoryModel extends Model{
		//递归显示无限分类
		public function get_category($pid='0',&$result=array(),$indent=0){
			$indent+=1;
			$res = $this -> where("pid = '$pid'") -> order('ord asc') -> select();
			for($i=0;$i<count($res);$i++){
				$res[$i]['indent']=$indent;
				$result[]=$res[$i];
				$this -> get_category($res[$i]['id'],$result,$indent);
			}
			return $result;
		}

		public function cur_cate_tree($cate,&$result=array()){
			if($cate){
				$p = $this -> where("id='".$cate."'") -> order('ord asc') -> select();
				$result[] = $p[0];
				$this -> cur_cate_tree($p[0]['pid'],$result);
			}
			return $result;
		}

		public function add_category($pid,$title){
			$navi = new \Model\NaviModel;
			$data['pid']   = $pid;
			$data['title'] = $title;
			$res = $this -> add($data);
			if($pid == 0){
				$cateid = $this -> field('id') -> where("title='".$title."'") -> select();
				$url = __ROOT__.'/list/'.$cateid[0]['id'].".html";
				$navi -> add_navi('',$title,$url);
			}
			return $res;
		}

		//设置分类顺序
		public function set_cate_order($id,$order='0'){
			$this->ord = $order;
			$res = $this -> where("id='".$id."'") -> save();
			return $res;
		}

		//显示分类详情
		public function show_cate($id){
			$res = $this -> where("id='".$id."'") -> select();
			return $res;
		}

		public function show_cate_style($id){
			$res = $this -> field('style') -> where("id='".$id."'") -> select();
			return $res;
		}

		/*public function add_if_not_exist(){
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
		}*/

		public function set_cate_name($id,$title){
			$this -> title = $title;
			$res = $this -> where("id='".$id."'") -> save();
			return $res;
		}

		public function set_hidd($id = array()){
			$res = $this -> field('id') -> where("class='0'") -> order('id asc') -> select(); 
			for($i=0;$i<count($id);$i++){
				for($j=$i+1;$j<count($id);$j++){
					if($id[$i]>$id[$j]){
						$t=$id[$i];
						$id[$i]=$id[$j];
						$id[$j]=$t;
					}
				}
			}
			$flag=1;
			if(count($res)==count($id)){
				for($i=0;$i<count($id);$i++){
					if($res[$i]['id']==$id[$i]){
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
			for($i=0;$i<count($id);$i++){
				$this -> class = '0';
				$res = $this -> where("id='".$id[$i]."'") -> save();
			}
			return 1;
		}

		public function no_hidd(){
			$res = $this -> field('id') -> where("class='0'") -> select();
			if(!empty($res)){
				$this -> class = '1';
				$this -> where("class='0'") -> save();
				return 1;
			}else{
				return 0;
			}
		}

		public function upd_cate($id,$data){
			$res = $this -> where("id='".$id."'") -> save($data);
			return $res;
		}

		public function del_cate($id){
			$childCate = $this -> field('id') -> where("pid='".$id."'") -> select();
			$parentCate = $this -> field('pid') -> where("id='".$id."'") -> select();
			if($childCate != NULL){
				for($i=0;$i<count($childCate);$i++){
					$this -> pid = $parentCate[0]['pid'];
					$this -> where("id='".$childCate[$i]['id']."'") -> save();
				}
			}
			$res = $this -> where("id='".$id."'") -> delete();
			return $res;
		}
	} 
