<?php

require_once('../../../private/initialize.php');

require_login();

if(is_post_request()) {

  // Create record using post parameters
  $args = $_POST['mushroom'];
	
  $mushroom = new Mushroom($args);
  $result = $mushroom->save_mshm();
  
  if ($result == true) {
    $new_id = $mushroom->id_mshm;
    $_SESSION['message'] = 'The mushroom was created successfully.';
    redirect_to(url_for('/bird-staff/views/show_mshm.php?id=' . $new_id));
  }   else {
    // show errorss
  }

} else {
  // display the form
  $mushroom = new Mushroom();
}

?>

<?php $page_title = 'Create Mushroom'; ?>
<?php include(SHARED_PATH . '/bird-staff-header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/bird-staff/views/mushroomindex.php'); ?>">&laquo; Back to List</a>

  <div class="bicycle new">
    <h1>Create Mushroom</h1>

    <?php echo display_errors($mushroom->errors); ?>

    <form action="<?php echo url_for('/bird-staff/views/new_mshm.php'); ?>" method="post">

      <?php include('form_fields_mshm.php'); ?>
      
      <div id="operations">
        <input type="submit" value="Create Mushroom" />
      </div>
    </form>

  </div>

</div>

<?php include(SHARED_PATH . '/bird-staff-footer.php'); ?>
