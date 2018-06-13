<?php
namespace app\index\controller;

use think\Controller;
use think\Request;
use think\Db;

class Show extends Controller
{
    public function show()
    { 

        return $this->fetch();
      
    }



}