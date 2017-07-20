<?php
namespace App\Repositories;

class NumberRepository{

  public static function isPrime($number){
    if($number == 1) return false;

    for($x=2; $x < $number; $x++){
      if( $number % $x == 0){
  		   return false;
  		}
    }
    return true;
  }
}
