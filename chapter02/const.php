<?php
    // constは定数の宣言。
    // 変数の前に$をつけず、すべて大文字で複数の単語を含む名前を付けたい場合、'_'で区切る。
    const TAX = 1.08;
    $price = 1000;
    $sum = $price * TAX;
    print $sum;