<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">
  
  <?php echo css('assets/css/foundation.css') ?>
  <?php echo css('assets/css/app.css') ?>
  <?php echo css('http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css') ?>
  <?php echo js('assets/js/vendor/modernizr.js') ?>  

</head>
<body>

  <header>
    <?php snippet('menu') ?>
  </header>