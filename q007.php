<?php
$regex = '/192.168.0.[0-9]+/';

$string = "192.168.0.1 hoge 555
192.168.0.2 192.168.0.5 hoge 222
192.168.0.4 hoge 111
";

if(preg_match_all($regex, $string, $m)){
    if(count($m[0]) != 3){
        echo 'match NG';
        exit;
    }
    foreach($m[0] as $n){
        if(!preg_match('/192.168.0.[124]{1}/', $n)){
            echo 'match NG';
            exit;
        }
    }
    echo 'match OK';
    exit;
}
echo 'match NG';
