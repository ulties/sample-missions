<?php require __DIR__ . '/../../mission_helper.php';

$password = trim($_POST['password'] ?? '');
if($password === $mission->makePassword()) {
    $mission->complete();
}

die('Incorrect password!');
