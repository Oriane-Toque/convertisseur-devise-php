<?php

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
        return $amount * $dollar_devises['euro'];
        break;
      case 'livre':
        return $amount * $dollar_devises['livre'];
        break;
      case 'peso':
        return $amount * $dollar_devises['peso'];
        break; 
    }
  }
  elseif($dev_ent === 'livre') {
    switch($dev_sort) {
      case 'euro':
        return $amount * $livre_devises['euro'];
        break;
      case 'dollar':
        return $amount * $livre_devises['dollar'];
        break;
      case 'peso':
        return $amount * $livre_devises['peso'];
        break; 
    }
  }
  elseif($dev_ent === 'peso') {
    switch($dev_sort) {
      case 'euro':
        return $amount * $peso_devises['euro'];
        break;
      case 'livre':
        return $amount * $peso_devises['livre'];
        break;
      case 'dollar':
        return $amount * $peso_devises['dollar'];
        break; 
    }
  }
}

?>