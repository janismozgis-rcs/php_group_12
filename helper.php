<?php
session_start();

function dd($attr) {
    echo '<pre>';
    var_dump($attr);
    die;
}
