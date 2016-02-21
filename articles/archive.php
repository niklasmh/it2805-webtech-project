<!--

FILE NAME: Project/articles/archive.php

WRITTEN BY: Siddise Hirpa

WHEN: 16. Oktober 2015

PURPOSE: Homepage which displays all articles from Nabostøy.

-->

<?php /****************TEMPLATE****************/
$arr = preg_split('/(prosjekt|Project|dreamteam2015)\\\\/', preg_replace('/\//', '\\', __DIR__));
$from_dir = ''; $to_dir = ''; $filename = basename(__FILE__); if (count($arr) > 1) {
    $from_dir = trim($arr[1], '/').'/'; $to_dir = preg_replace('/[^\/]+/', '..', $from_dir);
} include $to_dir.'templatestart.php';
/****************TEMPLATE****************/ ?>

<script src="../js/img_ui.js"></script>
<script src="../js/get_article.js"></script>
<title>Nabostøy | Arkiv</title>

<?php /****************TEMPLATE****************/
include $to_dir.'templatemiddle.php';
/****************TEMPLATE****************/ ?>

<h1>Arkiv</h1>

<!-- left side of page -->

<div id="archiveleft">
</div>

<!-- right side of page -->

<div id="archiveright">
    <noscript>
        Du må slå på JavaScript i nettleseren din for å kunne se artikler.
    </noscript>
    <div id="article">
    </div>
</div>

<?php /****************TEMPLATE****************/
include $to_dir.'templateend.php';
/****************TEMPLATE****************/ ?>