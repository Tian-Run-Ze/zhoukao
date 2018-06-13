<?php
namespace app\index\controller;

use think\Controller;
use think\Request;
use think\Db;

class Index extends Controller
{
    public function index()
    { 
    	if($_POST)
    	{
    		 $data=$_POST;
    		    // var_dump($data);die;
    		$res=Db::table('liuyan')->insert($data);
             


    		if($res)
    		 {
              $this->redirect('Show/show');
    		}
    		// echo 1;
    	}else{

    		return $this->fetch();
    	}
          
	
    
    }

    public function show()
    {
      return $this->fetch();
      
    }


    public function insert()
    {
     return $this->fetch();
    }
}
