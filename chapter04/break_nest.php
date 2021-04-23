<?php
  for($i = 1; $i < 10; $i++){
    for($j = 1; $j < 10; $j++){
      $result = $i * $j;
      if($result > 40){break;}
      echo "{$result} \t";
    }
    echo "\n";
  }

  for($i = 1; $i < 10; $i++){
    for($j = 1; $j < 10; $j++){
      $result = $i * $j;
      //breakの横の数字は脱出するループの階層を指定。
      //continueでも階層指定可能。
      if($result > 40){break 2;} 
      echo "{$result} \t";
    }
    echo "\n";
  }

  