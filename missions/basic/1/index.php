<?php require __DIR__ . '/../../mission_helper.php'; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Basic 1(the noob test)</title>
    <base href="<?php echo $mission->url() ?>">
</head>
<body>

    <center>
        <b>Basic 1(the noob test)</b>
    </center>

    <br><br>

    This mission is what we call "The Noob Test", if you can't complete it,
    don't give up on learning all you can, but, don't go begging to someone
    else for the answer, that is one way to get you hated/made fun of.

    <br><br>

    <!-- the first few levels are extremely easy: password is <?php echo $mission->makePassword() ?> -->

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
