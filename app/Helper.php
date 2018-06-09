<?php

/**
* Convert price 12.41 to 12
*
* @param    $price
*/
function priceDecimal($price) {
  $hasPoint = str_contains($price, '.');

  if($hasPoint) {
      return intval(str_before($price, '.'));
  }else {
      return $price;
  }
}


/**
* Convert price 12.41 to 41
*
* @param    $price
*/
function priceCentime($price) {
    $hasPoint = str_contains($price, '.');
    $centime  = intval(str_after($price, '.'));
        
    if($hasPoint) {
        if ($centime < 10) {
            return '0'.$centime;
        }else {
            return $centime;
        }
    }else {
        return '00';
    }
}