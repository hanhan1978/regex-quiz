<?php
$regex = '/<.+>/';

$string = "<div><span>this is a <span>regex</span> test</span></div>";



if(preg_match_all($regex, $string, $m)){
    if(count($m[0]) != 6){
        echo 'match NG';
        exit;
    }
    foreach($m[0] as $n){
        if(!preg_match('/<.+>/', $n)){
            echo 'match NG';
            exit;
        }
    }
    echo 'match OK';
    exit;
}
echo 'match NG';
