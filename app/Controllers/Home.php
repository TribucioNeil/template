<?php

namespace App\Controllers;

class Home extends BaseController
{
  private $product;   
  private $users;
  public function __construct()
   {
       $this->product = new \App\Models\ProductModel();
       $this->users = new \App\Models\UserModel();
   }
    public function index()
    {
     $data = [
       'product' => $this->product->findAll()
       ];
        return view('index',$data);
    }
    public function shop()
    {
     $data = [
       'product' => $this->product->findAll()
       ];
        return view('products',$data);
    }
    public function login()
    {
      if(isset($_POST['login']))
      {
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $check =$this->user->where('email', $email)->where('password', $password)->fisrt();


      }else{
        return view ('login');
      }
      
    }
    
}
