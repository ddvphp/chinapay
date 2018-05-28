<?php
namespace DdvPhp\ChinaPay;

class Exception extends \DdvPhp\DdvException\Error
{
  // 魔术方法
  public function __construct( $message = 'Chinapay Error', $errorId = 'CHINAPAY_ERROR' , $code = '400', $errorData = array() )
  {
    parent::__construct( $message , $errorId , $code, $errorData );
  }
}
