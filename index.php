<?php
  global $config;
  $json = utf8_encode(file_get_contents('config.json'));
  $config = json_decode($json);
  $pagename = explode("?", basename($_SERVER['REQUEST_URI']))[0] != null ? explode("?", basename($_SERVER['REQUEST_URI']))[0] : 'index';
  $uriquery = explode("?", basename($_SERVER['REQUEST_URI']))[1];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php require("_partials/head.inc.php"); ?>
  <?php require("_pagebase/$pagename/head.inc.php"); ?>

  <!-- Theme style -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.2/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.2/css/skins/<?= $config->site->skin; ?>.min.css">

  <!-- Site wide CSS -->
  <link rel="stylesheet" href="/_public/css/puckiq.css">

  <!-- Page specific CSS-->
  <link rel="stylesheet" href="/_pagebase/<?= $pagename; ?>/iq.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition <?= $config->site->skin; ?> sidebar-mini sidebar-collapse">
  <div class="wrapper">
    <header class="main-header">
      <?php require("_partials/header.inc.php"); ?>
    </header>

    <aside class="main-sidebar">
      <?php require("_partials/left-aside.inc.php"); ?>
    </aside>

    <div class="content-wrapper">
      <?php require("_pagebase/$pagename/iq.inc.php"); ?>
    </div>

    <footer class="main-footer">
      <?php require("_partials/footer.inc.php"); ?>
    </footer>
  </div>

  <?php require("_partials/scripts.inc.php"); ?>
  <?php require("_pagebase/$pagename/scripts.inc.php"); ?>
  <!-- AdminLTE App -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.2/js/adminlte.min.js"></script>
  <!-- PuckIQ Site JS -->
  <script src="/_public/js/puckiq.js"></script>
  <!-- PuckIQ Module JS -->
  <script src="/_pagebase/<?= $pagename; ?>/iq.js"></script>
</body>