<?php

    function hashMyPassword($text)
    {
        return md5($text);
    }

    function doesEmailContainNetmark($email)
    {
        if (strpos($email, '@') !== false) {
            return true;
        } else {
            return false;
        }
    }

    function areEnteredPasswordsIdentical($passwordFirst, $passwordSecond): bool
    {
        // do wglądu na php.net: https://www.php.net/manual/en/function.password-verify.php
        return password_verify($passwordFirst, $passwordSecond);
    }
