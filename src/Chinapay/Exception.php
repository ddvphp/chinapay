<?php
namespace DdvPhp\ChinaPay;

class Exception extends \DdvPhp\DdvException\Error
{
  // 魔术方法
  public function __construct( $message = 'Chinapay Error', $code = '400', $errorId = 'CHINA_PAY_ERROR' , $errorData = array() )
  {
    parent::__construct( $message , $errorId , $code, $errorData );
  }
}
