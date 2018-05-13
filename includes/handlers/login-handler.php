<?php
/**
 * Created by PhpStorm.
 * User: ajayashok
 * Date: 13/05/18
 * Time: 5:26 AM
 */

if(isset($_POST['login']))
{
    echo "Hi".$_POST['login-username'];

    echo "Hi".$_POST['login-password'];
}