<?php require_once('../../../private/initialize.php'); ?>

<?php require_login(); ?>

<?php

$id = $_GET['id_mshm'] ?? '1'; // PHP > 7.0

$mushroom = Mushroom::find_by_id_mshm($id);

?>

<?php $page_title = 'Show Mushrooms: ' . h($mushroom->common_name_mshm); ?>
<?php include(SHARED_PATH . '/bird-staff-header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/bird-staff/views/mushroomindex.php'); ?>">&laquo; Back to List</a>

  <div class="bicycle show">

    <h1>Mushroom: <?php echo h($mushroom->common_name_mshm); ?></h1>

    <div class="attributes">
      <dl>
        <dt>Name</dt>
				<dd><a href="<?php echo h($mushroom->wiki_link_mshm); ?>"><?php echo h($mushroom->common_name_mshm); ?></a></dd>
      </dl>
      <dl>
        <dt>Description</dt>
        <dd><?php echo h($mushroom->description_mshm); ?></dd>
      </dl>
      <dl>
        <dt>Edibility</dt>
        <dd><?php echo h($mushroom->edibility()); ?></dd>
      </dl>
      <dl>
        <dt>Edibility Description</dt>
        <dd><?php echo h($mushroom->edible_description_mshm); ?></dd>
      </dl>
      
    </div>

  </div>

</div>
