<?php
	
	//Admin管理员数据模型

	namespace Model;
	use Think\Model;

	class SiteinfoModel extends Model{
		public function set_all_siteinfo(){
			//class = 1 站点信息
			//站点名 sitename、网站名 websname、关键词 keywords、网址 url、备案号 icp、关闭网站 tempclose、关闭时提示 cnotice
			$res = $this -> where("class = 1") -> select();
			if(count($res)<9){
				$this -> where("class = 1") -> delete();
				$data[0]['name'] = 'sitename';
				$data[0]['content'] = 'GX Content Management System';
				$data[1]['name'] = 'websname';
				$data[1]['content'] = 'GXCMS';
				$data[2]['name'] = 'sitedesc';
				$data[2]['content'] = 'GXCMS is a Content Management System, fast and easy';
				$data[3]['name'] = 'keywords';
				$data[3]['content'] = 'GXCMS,CMS,gx,gongxiang,content,management,system';
				$data[4]['name'] = 'url';
				$data[4]['content'] = U('/','','',true);
				$data[5]['name'] = 'icp';
				$data[5]['content'] = '';
				$data[6]['name'] = 'tempclose';
				$data[6]['content'] = '0';
				$data[7]['name'] = 'cnotice';
				$data[7]['content'] = 'Website Unavailable!';
				$data[8]['name'] = 'banner';
				$data[8]['content'] = '';
				for($i=0;$i<count($data);$i++){
					$data[$i]['ord'] = $i;
					$this -> data($data[$i])-> add();
				}
			}
		}

		public function get_siteinfo(){
			$res = $this -> where("class = 1") -> order('ord') -> select();
			return $res;
		}

		public function set_siteinfo($content,$inid){
			$data['content'] = $content;
			$this -> where("inid='".$inid."'") -> save($data);
		}

		public function getBanner(){
			$res = $this -> field('content') -> where("name='banner'") -> select();
			return $res;
		}

		public function banner_reset(){
			$data['content'] = '';
	        $res = $this -> where("name='banner'") -> save($data);
	        return $res;
		}

		public function banner_upload($file){
		    $upload = new \Think\Upload();// 实例化上传类
		    $upload->maxSize   =     3145728 ;// 设置附件上传大小    
		    $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型    
		    $upload->rootPath  =  './'; //保存根路径
		    $upload->savePath  =     "/public/Attached/banner/"; // 设置附件上传目录 
		    $upload->saveName  = 	 'banner'.time(); 
		    // 上传文件
		    $info   =   $upload->uploadOne($file);
	        if(!$info) {// 上传错误提示错误信息
	            return array('status' => 0, 'msg' => $upload->getError());
	        }else{// 上传成功
	        	$data['content'] = $info['savepath'].$info['savename'];
	        	$this -> where("name='banner'") -> save($data);
	        	return 1;
        	}
	    }
	} 
