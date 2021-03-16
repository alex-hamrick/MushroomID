<?php require_once('../private/initialize.php'); ?>

<?php $page_title = 'Mushroom ID Map'; ?>
<?php include(SHARED_PATH . '/public_header.php'); ?>

<div id="main">

<!--
  <div id="page">
    <div class="intro">
      <h2>Birds</h2>
    </div>

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
		
		<div id="page">
    <div class="intro">
      <h2>Mushroom Map</h2>
    </div>

    <table id="inventory">
      <tr>
        <th>Latin Name</th>
        <th>Common Name</th>
        <th>Description</th>
        <th>Wikipedia Link</th>
        <th>Edibility</th>
        <th>Edibility Description</th>
        <th>&nbsp;</th>
      </tr>


<?php

$mushrooms = Mushroom::find_all();

?>
      <?php foreach($mushrooms as $mushroom) { ?>
      <tr>
        <td><?php echo $mushroom->latin_name_mshm; ?></td>
        <td><?= $mushroom->common_name_mshm; ?></td>
        <td><?= $mushroom->description_mshm; ?></td>
        <td><?= $mushroom->wiki_link_mshm; ?></td>
        <td><?php echo $mushroom->edibility(); ?></td>
        <td><?= $mushroom->edible_description_mshm; ?></td>
        <td><a href="detail_mshm.php".php?id=<?= $mushroom->id_mshm; ?>">View</a></td>
      </tr>
<?php } ?>
    </table>

  </div>

</div>

<?php include(SHARED_PATH . '/public_footer.php'); ?>