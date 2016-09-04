<?php

namespace Home\Controller;
use Think\Controller;

class MakefileController extends Controller {
	public function makeIndex(){
		$indexPath = SITE_BASE_PATH.'index.html';//生成文件的路径
		$indexTemplateFileName = 'index';	//首页模板文件名
		$configModel = M('Config');
		$theme = $configModel->where("name='activeTheme'")->getField('value');
		$configList = $configModel->select();
		$this->assign('configList', $configList);
		
		$articleModel = M('Article');
		$articleList  = $articleModel->select();
		$this->assign('articleList', $articleList);
		
		$classModel = M('Class');
		$classList = $classModel->select();
		$this->assign('classList', $classList);
		
		$htmlContent = $this->display('./Themes/Default/index.html');
		FileUtil::createFile($indexPath, $htmlContent,true);
		echo '<p>done</p>';
	}


}