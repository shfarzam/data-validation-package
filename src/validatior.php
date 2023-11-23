<?php

namespace DataValidation;

class Validator
{

    public static function validateEmail($email)
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }

    public static function validateURL($url)
    {
        return filter_var($url, FILTER_VALIDATE_URL) !== false;
    }

    public static function validatePassword($password, $minLength = 8)
    {
        // Add password validation logic (e.g., length, complexity checks)
        // Return true if the password meets the criteria, false otherwise
    }

}