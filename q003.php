<?php
$regex = '/[0-9]+/';

$string = "192.168.0.2 192.168.0.5 hoge 222";

if(preg_match($regex, $string, $m)){
    if(!preg_match('/222/', $m[0])){
        echo 'match NG';
        exit;
    }
    echo 'match OK';
    exit;
}
echo 'match NG';
