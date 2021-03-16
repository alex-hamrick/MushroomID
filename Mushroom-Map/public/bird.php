<?php require_once('../private/initialize.php'); ?>

<?php $page_title = 'Mushroom ID Map'; ?>
<div id="wrapper">
<?php include(SHARED_PATH . '/public_header.php'); ?>


<div id="main">

  <div id="page">
    <div class="intro">
      <h2>Mushroom Map</h2>
    </div>
		

<!--
    <table id="inventory">
      <tr>
        <th>Common Name</th>
        <th>Habitat</th>
        <th>Food</th>
        <th>Conservation Level</th>
        <th>Backyard Tips</th>
        <th>&nbsp;</th>
      </tr>


<?php

$birds = Bird::find_all();

?>
      <?php foreach($birds as $bird) { ?>
      <tr>
        <td><?php echo $bird->common_name; ?></td>
        <td><?= $bird->habitat; ?></td>
        <td><?= $bird->food; ?></td>
        <td><?php echo $bird->conservation(); ?></td>
        <td><?= $bird->backyard_tips; ?></td>
        <td><a href="detail.php?id=<?= $bird->id; ?>">View</a></td>
      </tr>
<?php } ?>
    </table>
-->
			<div id="map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3248.3405605454723!2d-82.60741178439143!3d35.49585634772277!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8859928fee660a3b%3A0x4585c3a152c29f6b!2sThe%20North%20Carolina%20Arboretum!5e0!3m2!1sen!2sus!4v1615753228341!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
		</div>
  </div>

</div>

<?php include(SHARED_PATH . '/public_footer.php'); ?>
</div>