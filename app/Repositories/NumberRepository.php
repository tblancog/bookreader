<?php
class NumberRepository{

  public static function isPrime($number){
    for($x=2; $x<$n; $x++){
      if($n % $x == 0){
  		   return false;
  		}
    }
    return true;
  }
}
