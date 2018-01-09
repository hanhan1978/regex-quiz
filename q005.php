<?php
$regex = '/php/';

$string = "php Php PHP phP pHp PHp pHP";


if(preg_match_all($regex, $string, $m)){
    if(count($m[0]) != 7){
        echo 'match NG';
        exit;
    }
    echo 'match OK';
    exit;
}
echo 'match NG';
