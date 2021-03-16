<?php require_once('../../../private/initialize.php'); ?>

<?php require_login(); ?>

<?php $birds = Bird::find_all();?>
<?php $page_title = 'WNC Birds'; ?>
<?php include(SHARED_PATH . '/bird-staff-header.php'); ?>

<div id="content">
<!--
  <div class="bicycles listing">
    <h1>WNC Birds</h1>
    
    <div class="actions">
      <a class="action" href="<?php echo url_for('/bird-staff/views/new.php'); ?>">Add Bird</a>
    </div>
    
  	<table class="list">
      <tr>
        <th>ID</th>
        <th>Common Name</th>
        <th>Habitat</th>
        <th>Food</th>
        <th>Conservation Level</th>
        <th>Backyard Tips</th>
        <th></th>
        <th></th>
        <th></th>
      </tr>
      
      <?php foreach($birds as $bird) { ?>
        <tr>
          <td><?php echo h($bird->id); ?></td>
          <td><?php echo h($bird->common_name); ?></td>
          <td><?php echo h($bird->habitat); ?></td>
          <td><?php echo h($bird->food); ?></td>
          <td><?php echo h($bird->conservation()); ?></td>
          <td><?php echo h($bird->backyard_tips); ?></td>
          <td><a class="action" href="<?php echo url_for('/bird-staff/views/show.php?id=' . h(u($bird->id))); ?>">View</a></td>
          <td><a class="action" href="<?php echo url_for('/bird-staff/views/edit.php?id=' . h(u($bird->id))); ?>">Edit</a></td>
          <td><a class="action" href="<?php echo url_for('/bird-staff/views/delete.php?id=' . h(u($bird->id))); ?>">Delete</a></td>
    	  </tr>
      <?php } ?>
  	</table>

  </div>
-->
			<div id="page">
    <div class="intro">
      <h2>Mushrooms</h2>
    </div>
				<?php if($session->user_level == 'a') {?>
         <div class="actions">
      <a class="action" href="<?php echo url_for('/bird-staff/views/new_mshm.php'); ?>">Add Mushroom</a>
    </div>
      <?php } ?>
   
				
    <table class="list">
      <tr>
        <th>Latin Name</th>
        <th>Common Name</th>
<!--        <th>Description</th>-->
        <th>Wikipedia Link</th>
        <th>Edibility</th>
<!--        <th>Edibility Description</th>-->
        <th>&nbsp;</th>
				<?php if($session->user_level == 'a') {?>
        <th>&nbsp;</th>
      <?php } ?>
        
      </tr>


<?php

$mushrooms = Mushroom::find_all();

?>
      <?php foreach($mushrooms as $mushroom) { ?>
      <tr>
        <td><?php echo $mushroom->latin_name_mshm; ?></td>
        <td><?= $mushroom->common_name_mshm; ?></td>
<!--        <td><?= $mushroom->description_mshm; ?></td>-->
				<td><a href="<?= $mushroom->wiki_link_mshm; ?>">Wiki Link</a></td>
        <td><?php echo $mushroom->edibility(); ?></td>
<!--        <td><?= $mushroom->edible_description_mshm; ?></td>-->
        <td><a class="action" href="<?php echo url_for('/bird-staff/views/show_mshm.php?id=' . h(u($mushroom->id_mshm))); ?>">View</a></td>
				
				<?php if($session->user_level == 'a') {?>
        <td><a class="action" href="<?php echo url_for('/bird-staff/views/delete_mshm.php?id=' . h(u($mushroom->id_mshm))); ?>">Delete</a></td>
      <?php } ?>
      </tr>
<?php } ?>
    </table>

  </div>

</div>

<?php include(SHARED_PATH . '/bird-staff-footer.php'); ?>
