<?php

namespace App\parsing;


class elsevier_parsing
{
 
  public $url = 'http://www.elsevier.com/social-sciences-and-humanities/business-management-and-accounting/journals/calls-for-papers?fbclid=IwAR2R-0Popivi8wrvNWUdnoVXXUCjKyMd6n8EYa2TbnMm-JoYBLnETaY9XT0';
  
  public function __construct(){

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