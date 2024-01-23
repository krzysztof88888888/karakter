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
        if ($passwordFirst == $passwordSecond) {
            return true;
        } else {
            return false;
        }
    }
