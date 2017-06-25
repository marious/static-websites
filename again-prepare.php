<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $again = $_POST['back_again'];
    $msg = $again . ' : ' . $_SERVER['REMOTE_ADDR'];
    file_put_contents(__DIR__ . '/again.txt', $msg . "\n",FILE_APPEND);
    header('Location: test.php?thanks=true');
    exit;
}

header('Location: test.php');
