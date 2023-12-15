<?php
namespace shfarzam\DataValidation;

class Validator
{

    /**
     * 
     */
    public static function validateEmail($email)
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }

    /**
     * 
     */
    public static function validateURL($url)
    {
        return filter_var($url, FILTER_VALIDATE_URL) !== false;
    }

    /**
     * validate Password
     * @var string $password
     * @var int $minLenght
     * @var bool $checkComplexity
     */
    public static function validatePassword(string $password, int $minLength = 8, bool $checkComplexity = false)
    {
        // Check if the password meets the minimum length criteria
        if (strlen($password) < $minLength) {
            return false;
        } elseif ($checkComplexity === true) {


            $hasLowercase = false;
            $hasUppercase = false;
            $hasSpecialChar = false;

            // Iterate through each character in the password to check for criteria
            for ($i = 0; $i < strlen($password); $i++) {
                $char = $password[$i];

                // Check for lowercase character
                if ($char >= 'a' && $char <= 'z') {
                    $hasLowercase = true;
                }

                // Check for uppercase character
                if ($char >= 'A' && $char <= 'Z') {
                    $hasUppercase = true;
                }

                // Check for special character
                if (!ctype_alnum($char)) {
                    $hasSpecialChar = true;
                }

                // Break loop if all criteria are met
                if ($hasLowercase && $hasUppercase && $hasSpecialChar) {
                    return true;
                }
            }

            return false; // Return false if criteria not met
        }
        return true;
    }

}
