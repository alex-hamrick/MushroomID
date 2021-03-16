<?php require_once('../../../private/initialize.php'); ?>

<?php require_login(); ?>

<?php

$id = $_GET['id_sub'] ?? '1'; // PHP > 7.0

$sub = Submission::find_by_id_sub($id);

?>

<?php $page_title = 'Show Submissions: '; ?>
<?php include(SHARED_PATH . '/bird-staff-header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/bird-staff/views/submissionindex.php'); ?>">&laquo; Back to List</a>

  <div class="bicycle show">

    <h1>Submission: <?php echo h($sub->id_sub); ?></h1>

    <div class="attributes">
      <dl>
        <dt>Latitude</dt>
				<dd><?php echo h($sub->latitude_sub); ?></dd>
      </dl>
      <dl>
        <dt>Longitude</dt>
        <dd><?php echo h($sub->longitude_sub); ?></dd>
      </dl>
      <dl>
        <dt>Description</dt>
        <dd><?php echo h($sub->description_sub); ?></dd>
      </dl>
      <dl>
        <dt>Date Found</dt>
        <dd><?php echo h($sub->date_found_sub); ?></dd>
      </dl>
      
    </div>

  </div>

</div>
