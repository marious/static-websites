<?php
date_default_timezone_set('Africa/Cairo');
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $again = $_POST['back_again'];
    $ip = $_SERVER['HTTP_CLIENT_IP']?$_SERVER['HTTP_CLIENT_IP']:($_SERVER['HTTP_X_FORWARDE‌​D_FOR']?$_SERVER['HTTP_X_FORWARDED_FOR']:$_SERVER['REMOTE_ADDR']);

    $msg = $again . ' : ' . $ip . ' : ' . date('g:i:s a, d-m-Y') . "\n";
    file_put_contents(__DIR__ . '/again.txt', $msg ,FILE_APPEND);
    header('Location: index.php?msg=true');
    exit;
}

header('Location: index.php');
