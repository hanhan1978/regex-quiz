<?php
$regex = '/<textarea>.+<\/textarea>/';

$string = "
<textarea>
私は
PHPが好きです。
私はPHPが好きです。
</textarea>
";

if(preg_match_all($regex, $string, $m)){
    if(isset($m[1])){
        echo 'match OK';
        exit;
    }
}
echo 'match NG';
