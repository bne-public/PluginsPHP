<?php

/**
 * Utils implementation.
 *
 * @package    BNE
 * @subpackage BNE/public;lib
 * @author     Fabrício Pereira<fabriciopereira@bne.com.br>
 */
class BNE_Util 
{
  
  public static function Try_Get_InArray($array, $keys){
    if(!is_array($array)){
      return null;
    }

    $return = $array;
    foreach ($keys as $key => $value) {
      if(!array_key_exists($value, $return)){
        return null;
      }
      $return = $return[$value];
    }
    return $return;
  }

  public static function Try_Get_Int_Bigger_Than_Zero_InArray($array, $keys){
    
    $return = BNE_Util::Try_Get_InArray($array, $keys);

    if(!is_int($return) || $return <= 0){
      return null;
    }

    return $return;

  }

  public static function Try_Get_Date_InArray($array, $keys){
    
    $value = BNE_Util::Try_Get_InArray($array, $keys);

    if($value == null){
      return null;
    }

    try{
      $value = date_create($value);
      if($value === false){
        return null;
      }
      return date_format($value, 'd/m/Y');
    }catch(Exception $e){
      return null;
    }

  }

  public static function Try_Get_Currency_InArray($array, $keys){
    
    $value = BNE_Util::Try_Get_InArray($array, $keys);

    if($value <= 0){
      return null;
    }

    try{
      return number_format( $value, 2);
    }catch(Exception $e){
      return null;
    }

  }

  public static function Try_Get_Boolean_InArray($array, $keys){
    $value = BNE_Util::Try_Get_InArray($array, $keys);

    if($value === true || $value === 1 || $value === "1" || $value === "true" || $value === "on"){
      return true;
    }

    if($value === false || $value === 0 || $value === "0" || $value === "false" || $value === "off"){
      return false;
    }

    return null;
  }

  public static function Split_Telefone($telefone){
    
    $telefone = preg_replace("/[^()0-9]/", "", $telefone);
    $reTelefone = '/(?P<ddd>\([0-9]{2}\))(?P<numero>[0-9]{8,9})/';
    $matches = array();
    preg_match($reTelefone, $telefone, $matches);

    $return = array();
    if(array_key_exists('ddd', $matches)){
      $return['ddd'] = preg_replace("/[^0-9]/", "", $matches['ddd']);
    }
    if(array_key_exists('numero', $matches)){
      $return['numero'] = $matches['numero'];
    }
    
    return $return;
  }

  public static function GetJsonFormatDate($date){
    
    $split = explode("/", $date);

    if(count($split) != 3 ){
      return null;
    }

    $dn = "{$split[2]}-{$split[1]}-{$split[0]}";
    return $dn;
  }

  public static function GetJsonFormatCurrency($value){
    
    $value = str_replace(".","",$value);
    $value = str_replace(",",".",$value);
    return $value;

  }

}