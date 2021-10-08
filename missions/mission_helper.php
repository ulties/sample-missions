<?php

/**
 * DO NOT CHANGE THIS FILE!
 *
 * This file replicates some logic provided by our server,
 * this is just to fake it so that you can test it locally
 * while during development. The way these methods are
 * executing is not equal to how it goes on our server.
 */

$mission = new class {
    public function url(): string
    {
        $parts = explode('/', $_SERVER['REQUEST_URI']);

        return $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . '/' . $parts[1] . '/' . $parts[2] . '/' . $parts[3] . '/';
    }

    public function makePassword(int $passwordId = 1): string
    {
        return 'P@ssW0rd' . $passwordId;
    }

    public function complete()
    {
        die('!!!!! MISSION COMPLETE !!!');
    }
};
