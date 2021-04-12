<?php
var_dump((int)'0b11');
var_dump((int)'0777');
var_dump((int)'0xFF');
var_dump((int)'1E4');
var_dump(bindec('0b11')); //2進数を10進数に変換
var_dump(octdec('0777')); //8進数を10進数に変換
var_dump(hexdec('0xFF')); //16進数を10進数に変換
var_dump((float)'1E4'); //指数表現はfloat型へのキャストであれば正しく表現される