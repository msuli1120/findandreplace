<?php
  class Change {

    function doIt ($input_in, $input_change, $input_phrase){

      $in = strtolower($input_in);
      $change = strtolower($input_change);
      $phrase = strtolower($input_phrase);

      $in_array = explode(',', $in);
      $change_array = explode(',', $change);

      return str_replace($in_array, $change_array, $phrase);

    }


  }
?>
