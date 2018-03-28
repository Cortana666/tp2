<?php
    function jiequ($arr, $num) {
      for ($i=0; $i < $num; $i++) {
        $newarr[$i] = $arr[$i];
      }
      return $newarr;
    }
    $array = array(2, 4, 6, 8, 10, 12);
    $newarray = jiequ($array, 3);
    var_dump($newarray);
?>
