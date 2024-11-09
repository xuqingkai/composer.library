<?php
namespace xuqingkai\pay

class Alipay{
  
  protected $alipay;
  
  public function __construct($config=[]){
    $this->config($config);
  }
  public function config(){
    return $this->alipay;
  }
  public function config($data){
    if(is_array($data)){
      $this->alipay=array_merge($this->alipay, $data);
      return $data;
    }else{
      return $this->alipay[$data];
    }
  }
  public function config($key, $value){
    $this->alipay[$key]=$value;
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
