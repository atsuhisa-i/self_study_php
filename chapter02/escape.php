<?php
    // シングル（ダブル）クォートをただの「'」として認識してほしい場合、
    // 「\」でエスケープする。
    $str = 'He\'s "GREAT" teacher.';
    print $str;