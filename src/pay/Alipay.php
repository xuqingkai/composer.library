<?php
namespace xuqingkai\pay

class Alipay{
  
  protected $alipay=[];
  
  public function __construct($config=[]){
    $this->config($config);
  }
  public function config(){
    $arg = func_get_args();
    if(count($arg)==0){
      return $this->alipay;
    }elseif(is_array($arg[0])){
      $this->alipay=array_merge($this->alipay, $arg[0]);
      return $arg[0];
    }elseif(count($arg)==1){
      return $this->alipay[$arg[0]];
    }else{
      $this->alipay[$arg[0]]=$arg[1];
      return $arg[1];
    }
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
