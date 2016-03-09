<?php

$recepient = "southjuniper@gmail.com";
$sitename = "Название сайта";

$name = trim($_POST["name_form"]);
$phone = trim($_POST["phone_form"]);
$text = trim($_POST["title_form"]);
$message = "Имя: $name \nТелефон: $phone \nТекст: $text";

$pagetitle = "Новая заявка с сайта \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");