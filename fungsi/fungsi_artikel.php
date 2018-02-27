<?php

function tampilArtikel()
{
	global $conn;

	$query = "SELECT * FROM artikel";
	$res   = mysqli_query($conn, $query);

	$row   = [];

	while ($rows = mysqli_fetch_assoc($res)) {
		$row[] = $rows;
	}

	return $row;
}

function detailArtikel($idArtikel)
{
	global $conn;

	$query = "SELECT * FROM artikel WHERE id = '$idArtikel' ";
	$res   = mysqli_query($conn, $query);

	$row   = mysqli_fetch_assoc($res);

	return $row;
}

function postArtikel($data)
{
	global $conn;

	$judul = $data['judul'];
	$isi   = $data['isi'];

	$query = "INSERT INTO artikel VALUES ('', '$judul', '$isi') ";

	if (mysqli_query($conn, $query)) {
		echo "<div class='alert alert-success'>Sukses</div>";
	}
}

function editArtikel($data, $idArtikel)
{
	global $conn;

	$judul = $data['judul'];
	$isi   = $data['isi'];

	$query = "UPDATE artikel SET judul = '$judul', isi = '$isi' WHERE id = '$idArtikel' ";

	if (mysqli_query($conn, $query)) {
		echo "<div class='alert alert-success'>Sukses</div>";
	}
}

function hapusArtikel($idArtikel)
{
	global $conn; 

	$query = "DELETE FROM artikel WHERE id = '$idArtikel' ";

	if (mysqli_query($conn, $query)) {
		echo "Sukses";
	}
}

function hapusArtikelKomen($idArtikel)
{
	global $conn; 

	$query = "DELETE artikel.*, komentar.* FROM artikel, komentar WHERE artikel.id = '$idArtikel' AND komentar.artikel = '$idArtikel' ";

	if (mysqli_query($conn, $query)) {
		echo "Sukses";
	}
}

function cekPunyaKomen($idArtikel)
{
	global $conn;
	$query = "SELECT * FROM komentar WHERE artikel = '$idArtikel' ";
	$res   = mysqli_query($conn,$query);

	$cek   = mysqli_num_rows($res);

	if ($cek > 0 ) {
		hapusArtikelKomen($idArtikel);
	} else {
		hapusArtikel($idArtikel);
	}


}

