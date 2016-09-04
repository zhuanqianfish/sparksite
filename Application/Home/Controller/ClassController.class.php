<?php
//由ThinkphpHelper自动生成,请根据需要修改
namespace Home\Controller;
use Think\Controller;

class ClassController extends Controller {
public function all(){
	$classModel = M('Class');
	$count = $classModel->where()->count();
	$Page = new \Think\Page($count,15);	//实例化分页类 传入总记录数和每页显示的记录数(15)
	$show = $Page->show();	//分页显示输出
	$classList = $classModel->where()->limit($Page->firstRow.','.$Page->listRows)->select();	//分页查询
	$this->assign('page',$show);	//赋值分页输出
	$this->assign('classList', $classList);
	$this->display();
}

public function add(){
	if(IS_POST){
		$classModel = M('Class');
		$classModel ->create();
		$flag = $classModel ->add();
		if($flag){
			$this->success('新建成功',U('Class/all')); 
		}else{
			$this->error('新建失败',U('Class/all')); 
		}
	}else{
		$this->display(); 
	}
}

public function edit(){
	$classModel = M('Class');
	if(IS_POST){
		$classModel ->create();
		$flag = $classModel ->save();
		if($flag){
			$this->success('编辑成功',U('Class/all')); 
		}else{
			$this->error('编辑失败',U('Class/all')); 
		}
	}else{
		$id = I('id'); 
		$class = $classModel->find($id);
		$this->assign('class', $class);
		$this->display();
	}
}

public function delete(){
	$classModel = M('class');
	$id = I('id'); 
	$flag = $classModel->where('id='.$id)->delete();
	if($flag){
		$this->success('删除成功', U('Class/all'));
	}else{
		$this->error('删除失败', U('Class/all'));
	}
}

}