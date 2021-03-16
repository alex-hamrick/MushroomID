<?php

require_once('../../../private/initialize.php');

require_login();

if(is_post_request()) {

  // Create record using post parameters
  $args = $_POST['submission'];
	
  $submission = new Submission($args);
  $result = $submission->save_sub();
  
  if ($result == true) {
    $new_id = $submission->id_sub;
    $_SESSION['message'] = 'The submission was created successfully.';
    redirect_to(url_for('/bird-staff/views/show_sub.php?id=' . $new_id));
  }   else {
    // show errors
  }

} else {
  // display the form
  $submission = new Submission();
}

?>

<?php $page_title = 'Create Submission'; ?>
<?php include(SHARED_PATH . '/bird-staff-header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/bird-staff/views/submissionindex.php'); ?>">&laquo; Back to List</a>

  <div class="bicycle new">
    <h1>Create Submission</h1>

    <?php echo display_errors($submission->errors); ?>

    <form action="<?php echo url_for('/bird-staff/views/new_sub.php'); ?>" method="post">

      <?php include('form_fields_sub.php'); ?>
      
      <div id="operations">
        <input type="submit" value="Create Submission" />
      </div>
    </form>

  </div>

</div>

<?php include(SHARED_PATH . '/bird-staff-footer.php'); ?>
