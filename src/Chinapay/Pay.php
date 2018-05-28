<?php
namespace DdvPhp\Chinapay;


class Pay
{
  // 魔术方法
  public function __construct($config = null)
  {

    isset($config) && is_array($config) && $this->setConfig($config);
  }
  public function setConfig($config = null){
  	if (!is_array($config)) {
  		return;
  	}
  	if (!empty($config['mchId'])) {
  		$this->setMchId($config['mchId']);
  	}
  }



}
