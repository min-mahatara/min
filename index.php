<?php

$ip = "2a02:4780:b:1270:0:2b97:5732:1";

if($_SERVER['REMOTE_ADDR'] == $ip){
    echo "YES - FIRST";
} elseif($_SERVER['REMOTE_ADDR'] == "2a02:4780:b:1270:0:2b97:5732:1"){
    echo "YES - SECOND";
} else {
    echo "NO ONE";
}