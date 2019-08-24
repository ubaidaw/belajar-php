<?php 

	require("db.php");

	$data = mysqli_query($connection, "SELECT * FROM categories");
	$categories = mysqli_fetch_all($data, MYSQLI_ASSOC);

	// var_dump($categories);
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Create Article</title>
</head>
<body>
	<h2>Create Article</h2>

	<form method="post" action="action_create.php">
		<p>
			<label>Title</label><br>
			<input type="text" name="title">
		</p>

		<p>
			<label>Category</label><br>
			<select name="category_id">
				<?php foreach($categories as $category) { ?>
					<option value="<?php echo $category['id']; ?>"> <?php echo $category['name'];  ?> </option>
				<?php } ?>
			</select>
		</p>

		<p>
			<label>Content</label><br>
			<textarea name="content"></textarea>
		</p>

		<p>
			<input type="submit" value="Submit">
		</p>
	</form>
</body>
</html>