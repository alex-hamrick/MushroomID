<?php
	include_once 'includes/database-connection.php';
?>

<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>

<h1>Mushroom table</h1>
<?php
	$sql = "SELECT * FROM mushroom_mshm;";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);

	if ($resultCheck > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			echo "Mushroom id: " . $row['id_mshm'] . "<br> " . "Mushroom latin name: " . $row['latin_name_mshm'] . "<br> " . "Mushroom common name: " . $row['common_name_mshm'] . "<br> " . "Mushroom description: " . $row['description_mshm'] . "<br> " . "Wikipedia link: " . $row['wiki_link_mshm'] . "<br> " . "Edible: " . $row['edible_mshm'] . "<br> " . "Edibility description: " . $row['edible_description_mshm'];
		}
	}
?>
	
	<h1>Image table</h1>
<?php
	$sql = "SELECT * FROM image_img;";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);

	if ($resultCheck > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			echo "Image id: " . $row['id_img'] . "<br> " . "Submission id: " . $row['id_sub'] . "<br> " . "Mushroom id: " . $row['id_mshm'] . "<br> " . "Image name: " . $row['image_name_img'];
		}
	}
?>
	
	<h1>User table</h1>
<?php
	$sql = "SELECT * FROM user_usr;";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);

	if ($resultCheck > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			echo "User id: " . $row['id_usr'] . "<br> " . "User first name: " . $row['first_name_usr'] . "<br> " . "User last name: " . $row['last_name_usr'] . "<br> " . "User email: " . $row['email_usr'] . "<br> " . "Username: " . $row['username_usr'] . "<br> " . "Hashed password: " . $row['hashed_password_usr'] . "<br> " . "User level: " . $row['user_level_usr'];
		}
	}
?>
	
	<h1>Submission table</h1>
<?php
	$sql = "SELECT * FROM submission_sub;";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);

	if ($resultCheck > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			echo "Submission id: " . $row['id_sub'] . "<br> " . "User id: " . $row['id_usr'] . "<br> " . "Mushroom id: " . $row['id_mshm'] . "<br> " . "lattitude: " . $row['lattitude_sub'] . "<br> " . "longitude: " . $row['longitude_sub'] . "<br> " . "Submission description: " . $row['description_sub'] . "<br> " . "Date found: " . $row['date_found_sub'];
		}
	}
?>
	
</body>
</html>