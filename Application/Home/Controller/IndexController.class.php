<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index()
    {
        if(isset($_POST['submit'])){
            print_r($_POST);
        }
        $this->display();
    }

}