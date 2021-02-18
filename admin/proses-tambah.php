<?php

include("../config.php");

//cek tombol daftar sudah di klick
if(isset($_POST['tambah'])){

    //ambil data POST dri form-daftar
    $judul = $_POST['judul'];
    $thn_rls = $_POST['thn_rls'];
    $genre = $_POST['genre'];
    $jml_eps = $_POST['jml_eps'];
    $deskripsi = $_POST['deskripsi'];
    $link = $_POST['link'];

    $filename = $_FILES['foto']['name'];
    move_uploaded_file($_FILES['foto']['tmp_name'], '../gambar/'.$filename);

        $sql = "INSERT INTO anime VALUES ('', '$judul', '$thn_rls', '$genre', '$jml_eps', '$deskripsi', '$link','$filename' )";
        $query = mysqli_query($db, $sql);
    
        if( $query ) {
            header('Location: admin.php?');
        } else {
            header('Location: admin.php?status=gagal');
        }
    // }      
} else {
    die("Akses dilarang...");
}

?>