<?php

$target = '/storage/app/public/public/images';
$link = '/public/storage';
symlink($target, $link);

echo readlink($link);