<?php require __DIR__ . '/../../mission_helper.php'; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Basic 2</title>
    <base href="<?php echo $mission->url() ?>">
</head>
<body>

    <center>
        <b>Basic 2</b>
    </center>

    <br><br>

    Mark set up a password protection script. He made it load the
    real password from an unencrypted text and compare it to the
    password the user enters. However, he neglected to upload
    the password file...

    <br><br>

    <center>
        <b>password:</b>
        <br>
        <form action="pass.php" method="post">
            <input name="password" type="password">
            <br><br>
            <input value="submit" name="submit" type="submit">
        </form>
    </center>

</body>
</html>
