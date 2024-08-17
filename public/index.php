<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $post = $_POST;
}

require '../app/router.php';