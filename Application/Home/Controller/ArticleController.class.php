<?php
//由ThinkphpHelper自动生成,请根据需要修改
namespace Home\Controller;
use Think\Controller;

class ArticleController extends Controller {
public function all(){
	$articleModel = M('Article');
	$count = $articleModel->where()->count();
	$Page = new \Think\Page($count,15);	//实例化分页类 传入总记录数和每页显示的记录数(15)
	$show = $Page->show();	//分页显示输出
	$articleList = $articleModel->where()->limit($Page->firstRow.','.$Page->listRows)->select();	//分页查询
	$this->assign('page',$show);	//赋值分页输出
	$this->assign('articleList', $articleList);
	$this->display();
}

public function add(){
	if(IS_POST){
		$articleModel = M('Article');
		$articleModel ->create();
		$flag = $articleModel ->add();
		if($flag){
			$this->success('新建成功',U('Article/all')); 
		}else{
			$this->error('新建失败',U('Article/all')); 
		}
	}else{
		$this->display(); 
	}
}

public function edit(){
	$articleModel = M('Article');
	if(IS_POST){
		$articleModel ->create();
		$flag = $articleModel ->save();
		if($flag){
			$this->success('编辑成功',U('Article/all')); 
		}else{
			$this->error('编辑失败',U('Article/all')); 
		}
	}else{
		$id = I('id'); 
		$article = $articleModel->find($id);
		$this->assign('article', $article);
		$this->display();
	}
}

public function delete(){
	$articleModel = M('article');
	$id = I('id'); 
	$flag = $articleModel->where('id='.$id)->delete();
	if($flag){
		$this->success('删除成功', U('Article/all'));
	}else{
		$this->error('删除失败', U('Article/all'));
	}
}

}