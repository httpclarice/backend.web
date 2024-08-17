<?php

function dd($value) : void {
    echo '<pre>' . var_dump($value) . '</pre>';
    die();
}