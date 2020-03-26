<?php

namespace App\parsing;


class emerald_parsing
{

  public $xml; 
  public $url = "http://www.emeraldgrouppublishing.com/authors/writing/calls.xml";
  
  public function __construct(){

      $this->xml = simplexml_load_file("emerald.xml",null,true);

  }
  //fonction utilisée pour le résume 
  public function strip_tags_content($text, $tags = '', $invert = FALSE) {

      preg_match_all('/<(.+?)[\s]*\/?[\s]*>/si', trim($tags), $tags);
      $tags = array_unique($tags[1]);
    
      if(is_array($tags) AND count($tags) > 0) {
        if($invert == FALSE) {
          return preg_replace('@<(?!(?:'. implode('|', $tags) .')\b)(\w+)\b.*?>.*?</\1>@si', '', $text);
        }
        else {
          return preg_replace('@<('. implode('|', $tags) .')\b.*?>.*?</\1>@si', '', $text);
        }
      }
      elseif($invert == FALSE) {
        return preg_replace('@<(\w+)\b.*?>.*?</\1>@si', '', $text);
      }
      return $text;
  }
}
?>