<?php 

	require("db.php");

	$data = mysqli_query($connection, "SELECT * FROM categories");
	$categories = mysqli_fetch_all($data, MYSQLI_ASSOC);

	// var_dump($categories);
	$id = $_GET['id'];
	$article = mysqli_query($connection, "SELECT * from articles where id = $id");
	$article = mysqli_fetch_assoc($article);
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Edit Article</title>
</head>
<body>
	<h2>Edit Article</h2>

	<form method="post" action="action_edit.php">
		<p>
			<label>Title</label><br>
			<input type="text" name="title" value="<?= $article['title'];  ?>">
		</p>

		<p>
			<label>Category</label><br>
			<select name="category_id">
				<?php foreach($categories as $category) { ?>
					<option 
					value="<?php echo $category['id']; ?>"
					<?= $category['id'] == $article['category_id'] ? 'selected' : '' ?>
					>
					<?php echo $category['name'];  ?> </option>
				<?php } ?>
			</select>
		</p>

		<p>
			<label>Content</label><br>
			<textarea name="content"><?= $article['content'];  ?></textarea>
		</p>

		<input type="hidden" name="article_id" value="<?= $id;  ?>">

		<p>
			<input type="submit" value="Submit">
		</p>
	</form>
</body>
</html>