<?php


function warning_success($result) {
    if($result < "1"){
        echo 'img src="/images/button_glossy_yellow.png" width="25%" height="30%"';
    } else {
        echo 'img src="/images/button_glossy_green.png" width="25%" height="30%"';
    }};

function warning_error($result) {
    if($result < "5"){
        echo 'img src="/images/button_glossy_green.png" width="25%" height="30%"';
    } elseif ($result < "15"){
        echo 'img src="/images/button_glossy_yellow.png" width="25%" height="30%"';
    }elseif($result > "14"){
        echo 'img src="/images/button_glossy_red.png" width="25%" height="30%"';
    }};


function warning_error_pendtrans($result) {
    if($result < "5"){
        echo 'img src="/images/button_glossy_green.png" width="25%" height="30%"';
    } elseif ($result < "15"){
        echo 'img src="/images/button_glossy_yellow.png" width="25%" height="30%"';
    }elseif($result > "14"){
        echo 'img src="/images/button_glossy_red.png" width="25%" height="30%"';
    }};


function warning_error_sitehits($result) {
    if($result < "100"){
        echo 'img src="/images/button_glossy_red.png" width="25%" height="30%"';
    } elseif ($result < "250"){
        echo 'img src="/images/button_glossy_yellow.png" width="25%" height="30%"';
    }elseif($result > "249"){
        echo 'img src="/images/button_glossy_green.png" width="25%" height="30%"';
    }};

?>