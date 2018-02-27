<?php include 'fungsi/config.php'; $row = detailArtikel($_GET['id']) ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Artikel Komen Mysqli</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
	
	<div class="container">
		<h3 class="text-center">Edit <?= $row['judul'] ?></h3>
		<form method="post">
			<div class="form-group">
				<label>Judul</label>
				<input type="text" name="judul" class="form-control" value="<?= $row['judul'] ?>">
			</div>
			<div class="form-group">
				<label>Isi</label>
				<textarea name="isi" class="form-control" rows="10"><?= $row['isi'] ?></textarea>
			</div>
			<button class="btn btn-primary" type="submit" name="btnedit">
				Edit
			</button>
		</form>
		<?php if (isset($_POST['btnedit'])) {
			editArtikel($_POST, $_GET['id']);
			echo "<meta http-equiv='refresh' content='1;url=index.php'>";
		} ?>
	</div>

	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>