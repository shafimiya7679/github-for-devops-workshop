<?php

function myFunction(): mixed
{
    $password = "secret123"; // <-- may not be flagged yet
    echo $password;          // <-- Psalm taint analysis WILL flag
    return md5($password);
}
