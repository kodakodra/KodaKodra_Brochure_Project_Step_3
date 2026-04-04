<?php

/**
 * header.php
 *
 * Reusable header include — outputs the full <head> block and navbar.
 * Include this at the top of every page.
 *
 * Expects $pageTitle to be set before including, e.g:
 *   $pageTitle = 'About';
 *   require_once 'includes/header.php';
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Page title uses $pageTitle if set, falls back to site name alone -->
    <title><?= isset($pageTitle) ? htmlspecialchars($pageTitle) . ' — ' . SITE_NAME : SITE_NAME ?></title>

    <!-- Bootstrap 5 -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <!-- Custom styles -->
    <link href="../style.css" rel="stylesheet">
</head>
<body>

<!-- ===========================
     Navbar
=========================== -->
<nav class="navbar navbar-expand-md fixed-top">
    <div class="container">
        <a class="navbar-brand" href="../index.php"><?= SITE_NAME ?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="nav">
            <ul class="navbar-nav ms-auto">
                <!-- Each nav link checks the current page to apply the active class -->
                <li class="nav-item">
                    <a class="nav-link <?= basename($_SERVER['PHP_SELF']) === 'index.php' ? 'active' : '' ?>" href="../index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= basename($_SERVER['PHP_SELF']) === 'about.php' ? 'active' : '' ?>" href="../about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= basename($_SERVER['PHP_SELF']) === 'services.php' ? 'active' : '' ?>" href="../services.php">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= basename($_SERVER['PHP_SELF']) === 'contact.php' ? 'active' : '' ?>" href="../contact.php">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
