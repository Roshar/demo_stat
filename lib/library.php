<?php

function checkUrl($num)
{
    $list = require_once __DIR__.'/listurl.php';
    return $list[$num];
}