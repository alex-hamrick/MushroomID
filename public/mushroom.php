<div id="main">

  <div id="page">
    <div class="intro">
      <h2>Small Sampling Mushrooms</h2>
    </div>

    <table id="inventory">
      <tr>
        <th>ID</th>
        <th>Latin Name</th>
        <th>Common Name</th>
        <th>Description</th>
        <th>Wikipedia Link</th>
        <th>Edible</th>
        <th>Edibility Description</th>				
        <th>&nbsp;</th>
      </tr>


<?php

$mushrooms = Mushroom::find_all();

?>
      <?php foreach($mushrooms as $mushroom) { ?>
      <tr>
        <td><?php echo $mushroom->id_mshm; ?></td>
        <td><?= $mushroom->latin_name_mshm; ?></td>
        <td><?= $mushroom->common_name_mshm; ?></td>
        <td><?= $mushroom->description_mshm; ?></td>
        <td><?= $mushroom->wiki_link_mshm; ?></td>
        <td><?= $mushroom->edible_mshm; ?></td>
        <td><?= $mushroom->edible_description_mshm; ?></td>
      </tr>
<?php } ?>
    </table>

  </div>

</div>