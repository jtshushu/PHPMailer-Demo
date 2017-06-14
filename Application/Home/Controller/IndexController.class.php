<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    /**邮箱*/
    public function index(){
        if(!IS_POST){
            $this->display('index');
        }else{
            $name = I("post.name");
            $email = I("post.email");
            $data = D("Member")->create();
            $data['password'] = md5(I('post.password'));
            $res = D("Member")->add($data);
            think_send_mail("$email","尊敬的$name","欢迎使用邮箱验证方式，请点击下面的链接进行邮箱的验证！","http://thinkphp/index.php/Home/Index/verify/m_id/".$res);
        }
    }

    /**验证用户邮箱验证*/
    public function verify(){
        $w['m_id'] = I("get.m_id");
        $data['type'] = 1;
        $res = D('Member')->where($w)->save($data);
        if($res){
            $this->success("验证成功，赶快去登陆吧！");
        }else{
            $this->error("验证失败！请联系管理员！");
        }
    }
}