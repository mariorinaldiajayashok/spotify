<?php

function sanitizeUsername($input)
{
    $input = strip_tags($input);

    $input = ucwords(strtolower($input));



}

function sanitizeString($input)
{
    $input = strip_tags($input);

    $input = ucwords(strtolower($input));

    $input = str_replace(" ",'',$input);

}

function sanitizePassword($input)
{
    $input = strip_tags($input);



}

if(isset($_POST['register']))
{

    $username = sanitizeUsername($_POST['register-username']);

    $firstname = sanitizeString(($_POST['register-firstname']));

    $lastname = sanitizeString($_POST['register-lastname']);

    $email = sanitizeString($_POST['register-email']);

    $confirmEmail = sanitizeString($_POST['register-confirmEmail']);

    $password = sanitizePassword($_POST['register-password']);

    $confirmPassword = sanitizePassword($_POST['register-confirmPassword']);

}