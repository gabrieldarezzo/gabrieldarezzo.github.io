<?php

function gravaData ($rData) {   
    if ($rData != '') {   
        return (substr($rData,6,4).'-'.substr($rData,3,2).'-'.substr($rData,0,2));   
    }else {
        return '';
    }   
}


echo gravaData('06/10/1992');

