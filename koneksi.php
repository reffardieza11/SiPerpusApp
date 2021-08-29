<?php
	$conn = new mysqli('localhost','root','','db_perpus');

	if ($conn->connect_error){
		exit("Koneksi ke database Gagal".$conn->connect_error);
	}