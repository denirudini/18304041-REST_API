<?php

// api mysql untuk koneksi ke database
$mysqli = new mysqli("localhost", "root", "", "universitas_pasundan");

$result = $mysqli->query("SELECT * FROM mahasiswa");
$rows = $result->fetch_all();

$data_json = json_encode($rows);

?>