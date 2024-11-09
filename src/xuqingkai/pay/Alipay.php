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
    return 'http://www.xuqingkai.com/pay/pc';
  }
  public function h5(){
    return 'http://www.xuqingkai.com/pay/h5';
  }
  public function qr(){
    return 'http://www.xuqingkai.com/pay/qr';
  }
  public function scan(){
    return 'http://www.xuqingkai.com/pay/scan';
  }
  public function app(){
    return 'http://www.xuqingkai.com/pay/app';
  }
}
