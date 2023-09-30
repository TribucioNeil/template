<?php

namespace App\Controllers;

class Home extends BaseController
{
  private $product;   
  public function __construct()
   {
       $this->product = new \App\Models\ProductModel();
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
      if(isset($_POST['login'])){

        $data = [
          'email' -> $this->request->getVar('email'),
          'password' -> $this->request->getVar('password')
        ];
        
      }else{
        return view ('login');
      }
      
    }
    
}
