<?php require_once('../../../private/initialize.php'); ?>

<?php require_login(); ?>

<?php $birds = Bird::find_all();?>
<?php $page_title = 'Submission Index'; ?>
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
      <h2>Submissions</h2>
    </div>
	   <div class="actions">
      <a class="action" href="<?php echo url_for('/bird-staff/views/new_sub.php'); ?>">Add Submission</a>
    </div>
       
				
    <table class="list">
      <tr>
        <th>Lattitude</th>
        <th>Longitude</th>
        <th>Date Found</th>
        <th>&nbsp;</th>
				<?php if($session->user_level == 'a') {?>
        <th>&nbsp;</th>
      <?php } ?>
        
      </tr>


<?php

$subs = Submission::find_all();

?>
      <?php foreach($subs as $sub) { ?>
      <tr>
        <td><?php echo $sub->latitude_sub; ?></td>
        <td><?= $sub->longitude_sub; ?></td>
        <td><?= $sub->date_found_sub; ?></td>
        <td><a class="action" href="<?php echo url_for('/bird-staff/views/show_sub.php?id=' . h(u($sub->id_sub))); ?>">View</a></td>
				
				<?php if($session->user_level == 'a') {?>
        <td><a class="action" href="<?php echo url_for('/bird-staff/views/delete_mshm.php?id=' . h(u($mushroom->id_mshm))); ?>">Delete</a></td>
      <?php } ?>
      </tr>
<?php } ?>
    </table>

  </div>

</div>

<?php include(SHARED_PATH . '/bird-staff-footer.php'); ?>
