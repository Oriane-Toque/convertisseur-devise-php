<?php

function checkForm($amount) {

  if(!empty($amount) && is_int($amount) && $amount >= 0) {
    return true;
  }
  return false;
}

function amountToConverted($dev_ent, $dev_sort, $amount) {

  include 'data/data-devises.php';
  
  if($dev_ent === 'euro') {
    switch($dev_sort) {
      case 'dollar':
        return $amount * $euro_devises['dollar'];
        break;
      case 'livre':
        return $amount * $euro_devises['livre'];
        break;
      case 'peso':
        return $amount * $euro_devises['peso'];
        break; 
    }
  }
  elseif($dev_ent === 'dollar') {
    switch($dev_sort) {
      case 'euro':
        return $amount * $euro_devises['euro'];
        break;
      case 'livre':
        return $amount * $euro_devises['livre'];
        break;
      case 'peso':
        return $amount * $euro_devises['peso'];
        break; 
    }
  }
  elseif($dev_ent === 'livre') {
    switch($dev_sort) {
      case 'euro':
        return $amount * $euro_devises['euro'];
        break;
      case 'dollar':
        return $amount * $euro_devises['dollar'];
        break;
      case 'peso':
        return $amount * $euro_devises['peso'];
        break; 
    }
  }
  elseif($dev_ent === 'peso') {
    switch($dev_sort) {
      case 'euro':
        return $amount * $euro_devises['euro'];
        break;
      case 'livre':
        return $amount * $euro_devises['livre'];
        break;
      case 'dollar':
        return $amount * $euro_devises['dollar'];
        break; 
    }
  }
}

?>