<?php
//This will let me get the page name of the current page
$currentPage =  basename($_SERVER['PHP_SELF'],'.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="shortcut icon" href="images/mylogo.ico">
    <title>MarL Mazo</title>
    <meta name="description" content="This is a Portfolio Page of MarL Mazo, a Junior Web Developer, who wants to showcase his ability in web development and loves solving problems and ready to face challenges." />
    <script src="https://kit.fontawesome.com/5d26a78092.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/main.css"/>
    <link rel="stylesheet" type="text/css" href="css/<?= $currentPage ?>.css"/>

</head>
<body>
<a class="skip-link screen-reader-text" href="#<?= $currentPage?>page" tabindex="1">Skip to content</a>