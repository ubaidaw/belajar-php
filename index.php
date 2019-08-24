<?php 

	require("db.php");

	$articles = mysqli_query($connection, "SELECT *, categories.name as 'category_name' FROM articles inner join categories on articles.category_id = categories.id");
	// mysqli_fetch_all($articles);

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Halaman Utama</title>
</head>
<body>
	<h1>Data Artikel</h1>


	<a href="create.php"> Tambah Artikel </a>
	<br><br><br>

	<table border="1" cellpadding="5" cellspacing="0" width="50%">
		<thead>
			<tr>
				<th>Judul</th>
				<th>Konten</th>
				<th>Tanggal</th>
				<th>Kategori</th>
			</tr>
		</thead>
		<tbody>
			<?php while ($article = mysqli_fetch_assoc($articles)) {  ?>
				<tr>
					<td><?php echo $article['title']; ?></td>
					<td><?= $article['content'];?></td>
					<td><?= $article['date'];?></td>
					<td><?= $article['category_name'];?></td>
				</tr>
			<?php } ?>
		</tbody>

	</table>
</body>
</html>