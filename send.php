<?php

$name = htmlspecialchars($_POST["name"]);
$email = htmlspecialchars($_POST["name"]);
$msg = htmlspecialchars($_POST["name"]);

echo ("Введённое имя: ".$name."\n"."Введённый адрес почты: ".$email."\n"."Введённый комментарий: ".$msg);

?> 

<html>
    <head>
        <meta charset="utf-8">
        <title>HyperStudio | Form successfully sent!
        </title>
    </head>
</html>