<?php
namespace xuqingkai\pay

class Alipay{
  
  protected $config;
  
  public function __construct($config=[]){
    $this->config($config);
  }
  public function config($value){
    $this->config=array_merge($this->config, $value);
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
