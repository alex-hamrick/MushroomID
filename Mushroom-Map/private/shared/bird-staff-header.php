<?php
  if(!isset($page_title)) { $page_title = 'Mushroom Member Area'; }
?>

<!doctype html>

<html lang="en">
  <head>
    <title>Mushroom ID Map - <?php echo h($page_title); ?></title>
    <meta charset="utf-8">
    <link rel="stylesheet" media="all" href="<?php echo url_for('/stylesheets/staff.css'); ?>" />
  </head>

  <body>
    <header>
      <h1><a id="title" href="<?php echo url_for('/bird-staff/index.php'); ?>"><img class="mushroom" src="<?php echo url_for('/images/amanita.jpg') ?>" />MushroomID Map Member Area</a></h1>
    </header>

    <navigation>
      <ul>
				<li><a href="<?php echo url_for('bird.php'); ?>">Mushroom Map</a></li>
				<li style="display: <?php if($session->is_logged_in()){echo 'none';}else {echo 'inline-block';}?>"><a href="<?php echo url_for('/signup.php'); ?>">Sign Up</a></li>
        <?php if($session->is_logged_in()) { ?>
<!--
        <li>User: <?php echo $session->username ?></li>
        <li>User Level: <?php if($session->user_level == 'a'){echo 'Admin';}else{echo 'Member';} ?></li>
-->
        <li><a href="<?php echo url_for('/bird-staff/index.php'); ?>">Members Area</a></li>
        <li><a href="<?php echo url_for('/bird-staff/logout.php'); ?>">Logout:<?php echo $session->username ?></a></li>
        <?php } ?>
      </ul>
    </navigation>

    <?php echo display_session_message(); ?>
