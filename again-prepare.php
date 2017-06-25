<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $again = $_POST['back_again'];
    file_put_contents(__DIR__ . '/again.txt', $again . "\n",FILE_APPEND);
    header('Location: index.php?msg=thanks');
}

header('Location: index.php');
