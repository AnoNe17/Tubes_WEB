<?php

include("../config.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $thn_rls = $_POST['thn_rls'];
    $genre = $_POST['genre'];
    $jml_eps = $_POST['jml_eps'];
    $deskripsi = $_POST['deskripsi'];
    $link = $_POST['link'];

    $filename = $_FILES['foto']['name'];
    move_uploaded_file($_FILES['foto']['tmp_name'], '../gambar/'.$filename);

    //UPDATE siswa SET nama='asd', ttl='qwe', alamat='ere', asal_sekolah='qqq', jenis_kelamin='q' WHERE id=7
    // buat query update
    $sql = "UPDATE anime SET judul='$judul', tahun_rilis='$thn_rls', genre='$genre', jumlah_episode='$jml_eps', deskripsi='$deskripsi', link='$link', gambar='$filename' WHERE id='$id'";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: admin.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>