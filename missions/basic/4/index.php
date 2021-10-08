<?php require __DIR__ . '/../../mission_helper.php'; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Basic 4</title>
    <base href="<?php echo $mission->url() ?>">
</head>
<body>

    <center>
        <b>Basic 4</b>
    </center>

    <br><br>

    This time Mark hardcoded the password into the script.
    However, the password is long and complex, and Mark is
    often forgetful. So he wrote a script that would email
    his password to him automatically in case he forgot.
    Here is the script:

    <br>

    <center>
        <form action="form.php" method="post">
            <input name="to" value="skull@hackforums.net" type="hidden">
            <input value="Send password to Mark" name="submit_email" type="submit">
        </form>

        <br><br>

        <b>Password:</b>
        <br>
        <form action="form.php" method="post">
            <input name="password" type="password"><br><br>
            <input value="submit" name="submit" type="submit"></form>
    </center>

</body>
</html>