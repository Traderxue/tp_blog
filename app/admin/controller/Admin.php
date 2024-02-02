<?php
namespace app\admin\controller;
use app\BaseController;
use app\common\model\Admin as AdminModel;
use app\common\util\Res;


class Admin extends BaseController{

    protected $result;

    public function __construct(\think\App $app){
        $this->result = new Res();
    }
    
    public function login(){

        if(request()->isAjax()){
            $data = [
                "username"=>input("post.username"),
                "password"=>input("post.password")
            ];
            $admin = new AdminModel();

            $res = $admin->login($data);

            if($res==1){
                return $this->result->success("登录成功",$res);
            }
            return $this->result->error("登录失败");
        }
        return view();
    }
}