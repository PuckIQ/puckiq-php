<?php
    $json = file_get_contents("config.json");

    $jsonIterator = new RecusiveIteratorIterator(
        new RecusiveArrayIterator(json_decode($json, TRUE)),
        RecusiveIteratorIterator::SELF_FIRST);

    foreach ($jsonIterator as $key => $val) {
        if(is_array($val)) {
            echo "$key:\n";
        } else {
            echo "$key => $val\n";
        }
    }
?>