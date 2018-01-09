<?php
$regex = '/([0-9]+)/';

$string = "001 333 456 002";


if(preg_match_all($regex, $string, $m)){
    if(count($m[1]) == 2){
        foreach($m[1] as $n){
            if(!preg_match('/00[12]/', $n)){
                echo 'match NG';
                exit;
            }
        }
        echo 'match OK';
        exit;
    }
}
echo 'match NG';
