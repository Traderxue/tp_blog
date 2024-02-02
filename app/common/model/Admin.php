<?php
namespace app\common\model;

use think\Model;
use think\model\concern\SoftDelete;
use app\common\validate\Admin as AdminValidate;

class Admin extends Model{
    protected $table = "tp_admin";

    use SoftDelete;

    public function login($data){
        $validate = new AdminValidate();
        if(!$validate->scene("login")->check($data)){
            return "用户名密码不能为空";
        };
        $res = $data->save();
        if($res){
            return 1;
        }
        return "登录失败";
    }
}