<?php
	
	//Admin管理员数据模型

	namespace Model;
	use Think\Model;

	class IndexFaceModel extends Model{
		public function ini(){
			$res = $this -> count();
			if(($res!=INDEX_AREA_NUM)){
				$this -> where('1') -> delete();
				for($i=1;$i<=INDEX_AREA_NUM;$i++){
						$dataList[] = array('id'=>$i,'cid'=>$i);
				}					
					$this -> addAll($dataList);
				return 1;
			}else{
				return 0;
			}
		}

		public function show_menu(){
			$res = $this -> select();
			return $res;
		}

		public function upd_ui($cid='',$tid='',$ano=''){
			if($cid != 0){
				$data['cid'] = $cid;
				$data['tid'] = 0;
				$data['single'] = 0;
			}else{
				$data['cid'] = '0';
				$data['tid'] = $tid;
				$data['single'] = '1';		
			}
			$this -> where("id=$ano") -> save($data);
		}
	}
