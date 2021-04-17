<?php
  $message = null;
  print $message ?? 'ノーコメント';
  //null合体演算子(??)はnull値がnullの場合だけ式2２を出力する。