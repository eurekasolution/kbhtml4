<?php

    $keywords = "국민은행,하나은행,kbstar,대한민국,우리나라,컴퓨터,교육,시스템,운영체제,네트워크,학생,선생,교육장,금융,은행,";
 
    $key = $_POST["key"];
    $flag = false;

    $splitKey = explode(",", $keywords);
    // splitKey[0] = "국민은행";
    //          [1] = "하나은행"

    $cnt = 0;
    while(isset($splitKey[$cnt]))
    {
        echo "$splitKey[$cnt] <br>";
        $cnt ++;
    }
   
?>