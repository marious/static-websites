<?php
$file = __DIR__ . '/again.txt';
echo str_replace("\n", "<br>", file_get_contents($file));
