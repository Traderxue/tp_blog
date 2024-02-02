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
            return $validate->getError();
        };
        $res = $this->where($data)->find;
        if($res){
            return 1;
        }
        return "用户名或密码错误"; 
    }
}