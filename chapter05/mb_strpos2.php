<?php
  $str = 'にわにはにわにわとりがいる';
  //下記の等価演算子は!=では、戻り値が0の場合、falseと見なされるため、
  //厳密な等価演算子!==を使う必要がある。
  if(mb_strpos($str, 'にわ') !== false){
    print '文字列が見つかりました。';
  }