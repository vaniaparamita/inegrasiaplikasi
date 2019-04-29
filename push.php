<?php
	@$key = $_GET['key'];
	if($key != '1234'){
		exit();
	}

$servername = "localhost";
$username = "root";
$password = "";
$database = "integrasi";

//create connection
if (!empty($_POST["nama_depan"]) && !empty($_POST["nama_belakang"])){
    $nama_depan = $_POST["nama_depan"];
    $nama_belakang = $_POST["nama_belakang"];

    $sql = "INSERT INTO data_actor (nama_depan, nama_belakang) VALUES ('$nama_depan',
    '$nama_belakang');";
    if ($conn->query($sql) === TRUE) {
        echo "berhasil menambahkan data";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    } else {
        echo "first_name dan last_name harus diisi";
    }
mysqli_close($conn);