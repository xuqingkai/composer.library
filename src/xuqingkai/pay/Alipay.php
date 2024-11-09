<?php
namespace xuqingkai\pay

class Alipay{
  
  protected $alipay;
  
  public function __construct($config=[]){
    $this->config($config);
  }
  public function config($value){
    $this->alipay=array_merge($this->alipay, $value);
  }
  public function pc(){
    
  }
  public function h5(){
    
  }
  public function qr(){
    
  }
  public function scan(){
    
  }
  public function app(){
    
  }
}
