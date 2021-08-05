<?php

function dd($par){
    echo "<pre>";
   echo print_r($par,true);
    echo "</pre>";
    die;
}