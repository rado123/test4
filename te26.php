<?php

function fa() {
    $args = func_get_args();
//    echo "num arg". (string) func_num_args() .PHP_EOL
    var_dump($args);
}

fa("adfadfs", "bbbbb");
