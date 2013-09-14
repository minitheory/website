<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8" />

  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width" />
  <meta name="description" content="<?php echo $metaDesc; ?>">
  <meta name="keywords" content="User Experience Design, User Interface Design, UX, UI">

  <title><?php echo $title; ?></title>
  
  <!-- Included CSS Files (Uncompressed) -->
  <!--
  <link rel="stylesheet" href="stylesheets/foundation.css">
  -->
  
  <?php
    //define('fullpath','http://localhost:8888/minitheory/');
    define('fullpath','http://minitheory.com/');
  ?>

  <!-- Included CSS Files (Compressed) -->
  <link rel="stylesheet" href="<?php echo fullpath ?>stylesheets/foundation.min.css">
  <link rel="stylesheet" href="<?php echo fullpath ?>stylesheets/style.css">
  <link rel="stylesheet" href="<?php echo fullpath ?>stylesheets/app.css">
  <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700|Varela+Round' rel='stylesheet' type='text/css'>
  <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
  <script src="<?php echo fullpath ?>javascripts/modernizr.foundation.js"></script>

</head>
<body class="<?php if (isset($bodyClass)): echo $bodyClass; endif ?>">
  <header class="contain-to-grid">
    <nav class="top-bar">
      <ul>
        <li class="name"><a href="<?php echo fullpath ?>"><img src="<?php echo fullpath ?>images/minitheory-logo.png" alt="Minitheory"/><img src="<?php echo fullpath ?>images/minitheory.png" /></a></li>
        <li class="toggle-topbar"><a href="#"></a></li>
      </ul>
      <ul class="right main-nav">
        <li class="work <?php if($thisPage == 'work') echo'active' ?>"><a href="<?php echo fullpath ?>work/">Work</a></li>
        <li class="about <?php if($thisPage == 'about') echo'active' ?>"><a href="<?php echo fullpath ?>about">About</a></li>
        <li class="services <?php if($thisPage == 'services') echo'active' ?>"><a href="<?php echo fullpath ?>services">Services</a></li>
        <li class="approach <?php if($thisPage == 'approach') echo'active' ?>"><a href="<?php echo fullpath ?>approach">Approach</a></li>
        <li class="jobs <?php if($thisPage == 'jobs') echo'active' ?>"><a href="<?php echo fullpath ?>jobs">Jobs</a></li>
        <li class="blog"><a href="http://blog.minitheory.com" target="_blank">Blog</a></li>
        <li class="get-in-touch <?php if($thisPage == 'get-in-touch') echo'active' ?>"><a href="<?php echo fullpath ?>get-in-touch">Get In Touch</a></li>
      </ul>
    </nav>
  </header>