<?php include 'fungsi/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Artikel Komen Mysqli</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
	
	<div class="container">
		<h3 class="text-center">Daftar Artikel</h3>
		<a href="inputArtikel.php">
			<button class="btn btn-primary">
				Tambah Artikel
			</button>
		</a>
		<hr>
		<?php $data = tampilArtikel(); foreach($data as $row): ?>
			<div class="well">
				<a href="detail.php?id=<?= $row['id'] ?>">
					<?= $row['judul'] ?>
				</a>
				<a href="editArtikel.php?id=<?= $row['id'] ?>">
					<i class="glyphicon glyphicon-edit"></i>
				</a>
				<a href="hapusArtikel.php?id=<?= $row['id'] ?>" onclick="return confirm('Yakin?')">
					<i class="glyphicon glyphicon-trash"></i>
				</a>
				<div class="pull-right"><?= jumlahKomentar($row['id']) ?> Komentar</div>
			</div>
			
		<?php endforeach ?>
	</div>

	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>