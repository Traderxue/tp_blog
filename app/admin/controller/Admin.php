<?php
namespace app\admin\controller;
use app\BaseController;
use app\common\model\Admin as AdminModel;


class Admin extends BaseController{
    public function login(){

        if(request()->isAjax()){
            $data = [
                "username"=>input("post.username"),
                "password"=>input("post.password")
            ];
            $admin = new AdminModel();

            $res = $admin->login($data);

        }

        return view();
    }
}