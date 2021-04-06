<?php
    $title = 'サーバーサイド';
    // 変数展開やエスケープシーケンスを使用する場合は、ダブルクォートを使用。
    $data1 = "サポートサイト\t「{$title}」へ\n"; 
    $data2 = 'サポートサイト\t「{$title}」へ\n';
    print $data1;
    print $data2;