<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package test_theme
 */
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex">
    <title>test アトレイル株式会社 | test</title>

    <!-- css -->
    <link rel="stylesheet" href="./assets/scss/pages/home.css">
    <!-- js -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Font Icon -->
    <link rel="icon" href="favicon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="./images/favicon.ico">
</head>

<body>
    <header class="l-header">
        <div class="l-header-inner ">
            <div class="l-header-inner--left">
                <img src="./images/logo.png" alt="" srcset="" class="p-header_logo">
                <h1 class="p-header_name">
                    アトレイル株式会社
                </h1>
            </div>
            <div class="l-header-inner--right">
                <div class="l-header-inner--right-left">
                    <p class="p-header-tel">0120-000-000</p>
                    <p class="p-header-teltime">受付時間/9:00～18:00（水曜定休）</p>
                </div>
                <div class="l-header-inner--right-right" style="background-color: black;">
                    <svg xmlns="http://www.w3.org/2000/svg" height="48px" viewBox="0 -960 960 960" width="68px" fill="#fff">
                        <path d="M140-160q-24 0-42-18t-18-42v-520q0-24 18-42t42-18h680q24 0 42 18t18 42v520q0 24-18 42t-42 18H140Zm340-302L140-685v465h680v-465L480-462Zm0-60 336-218H145l335 218ZM140-685v-55 520-465Z" />
                    </svg>
                </div>
            </div>
        </div>
    </header>
    <!----------------------------------
    main
----------------------------------->
    <main class="l-main">