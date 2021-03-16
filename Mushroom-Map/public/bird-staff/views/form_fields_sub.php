<?php
// prevents this code from being loaded directly in the browser
// or without first setting the necessary object
if(!isset($submission)) {
  redirect_to(url_for('/bird-staff/views/submissionindex.php'));
}
?>

<dl>
  <dt>Latitude</dt>
  <dd><input type="text" name="submission[latitude_sub]" value="<?= $submission->latitude_sub; ?>" /></dd>
</dl>

<dl>
  <dt>Longitude</dt>
  <dd><input type="text" name="submission[longitude_sub]" value="<?= $submission->longitude_sub; ?>" /></dd>
</dl>

<dl>
  <dt>Submission Description</dt>
  <dd><textarea name="submission[description_sub]" rows="5" cols="50"><?= $submission->description_sub; ?></textarea></dd>
</dl>

<dl>
  <dt>Date Found</dt>
  <dd><input type="date" name="submission[date_found_sub]" value="<?= $submission->date_found_sub; ?>" /></dd>
</dl>
