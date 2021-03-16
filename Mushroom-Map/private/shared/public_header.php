<!doctype html>

<html lang="en">
  <head>
    <!--
   
    -->
    <title>MushroomID Map<?php if(isset($page_title)) { echo '- ' . h($page_title); } ?></title>
    <meta charset="utf-8">
    <link rel="stylesheet" media="all" href="<?php echo url_for('/stylesheets/public.css'); ?>" />
  </head>

  <body>

    <header>
      <h1><a href="<?php echo url_for('bird.php'); ?>">
          <img class="mushroom" src="<?php echo url_for('/images/amanita.jpg') ?>" />
          MushroomID Map
        </a>
      </h1>
      <ul style="padding-left: 0; text-align: center;">

        <li style="display:<?php if($session->is_logged_in()){echo 'none';}else {echo 'inline-block';}?>";><a href="<?php echo url_for('/bird-staff/login.php'); ?>">Login</a></li>
        <li style="display: <?php if($session->is_logged_in()){echo 'none';}else {echo 'inline-block';}?>"><a href="<?php echo url_for('/signup.php'); ?>">Sign Up</a></li>
				 <?php if($session->is_logged_in()) { ?>

        <li style="display: inline-block;"><a href="<?php echo url_for('/bird-staff/index.php'); ?>">Members Area</a></li>
        <li style="display: inline-block;"><a href="<?php echo url_for('/bird-staff/logout.php'); ?>">Logout:<?php echo $session->username ?></a></li>
        <?php } ?>
      </ul>
    </header>
