<?php
/*
★
★★
○○○
★★★★
★★★★★
★★★★
○○○
★★
★
出力*/

$symbol=array("★","★★","○○○","★★★★","★★★★★","★★★★","○○○","★★","★");
    foreach($symbol as $value){
    echo $value."\n";
    }
  
    $star="★";
    echo $star."\n";
    $star .="★";
    echo $star."\n";
    $circle="○○○";
    echo $circle."\n";
    $star .="★★";
    echo $star."\n";
    $star .="★";
    echo $star."\n";
    $stars = str_replace('★★★★★', '★★★★', $star);
    echo $stars."\n";
    echo $circle."\n";
    $stars = str_replace('★★★★★', '★★', $star);
    echo $stars."\n";
    $stars = str_replace('★★★★★', '★', $star);
    echo $stars;