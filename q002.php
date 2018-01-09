<?php

$regex = '/192.168.0.[0-9]+/';

$string = "192.168.0.2 192.168.0.5 hoge";

if(preg_match_all($regex, $string, $m)){
    if(count($m[0]) != 1 ){
        echo 'match NG';
        exit;
    }
    if(!preg_match('/192.168.0.2/', $m[0][0])){
        echo 'match NG';
        exit;
    }
    echo 'match OK';
    exit;
}
echo 'match NG';
