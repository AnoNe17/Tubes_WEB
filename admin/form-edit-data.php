<?php

include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: list-data.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM anime WHERE id=$id";
$query = mysqli_query($db, $sql);
$data = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Tubes WEB</title>
</head>

<body>
    <header>
        <h3>Form Edit Data</h3>
    </header>

    <form action="proses-edit-data.php" method="POST" enctype="multipart/form-data">

        <fieldset>

            <input type="hidden" name="id" value="<?php echo $data['id'] ?>" />

        <p>
            <label for="judul">Judul : </label>
            <input type="text" name="judul" placeholder="judul" value="<?php echo $data['judul'] ?>" />
        </p>
        <p>
            <label for="thn_rls">Tahun Rilis    : </label>
            <input type="text" name="thn_rls" placeholder="Tahun Rilis" value="<?php echo $data['tahun_rilis'] ?>" />
        </p>
        <p>
            <label for="genre">Genre    : </label>
            <input type="text" name="genre" placeholder="Genre" value="<?php echo $data['genre'] ?>" />
        </p>
        <p>
            <label for="jml_eps">Jumlah Episode    : </label>
            <input type="text" name="jml_eps" placeholder="Jumlah Episode" value="<?php echo $data['jumlah_episode'] ?>" />
        </p>
        <p>
            <label for="deskripsi">Deskripsi : </label>
            <textarea name="deskripsi"><?php echo $data['deskripsi'] ?></textarea>
        </p>
        <p>
            <label for="link">Link : </label>
            <input type="text" name="link" placeholder="Link" value="<?php echo $data['link'] ?>" />
        </p>
        <p>
            <label>Foto :</label>
		    <input type="file" name="foto">
        </p>
        <p>
            <input type="submit" value="Simpan" name="simpan" />
        </p>

        </fieldset>


    </form>

    </body>
</html>