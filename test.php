<?php
//if the cookie matches the hidden field csrf value from the previous page
if($_COOKIE['csrf_token'] == $_POST["csrf_token"]){

    echo "CSRF Token successfully validated";
   }
else{
    // if cookies do not match
   echo "invalid token!";
    }