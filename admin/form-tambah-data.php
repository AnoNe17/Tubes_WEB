<!DOCTYPE html>
<head>
    <title>Tubes WEB</title>
</head>
<body>
    <header>
        <h3>Tambah Data Anime</h3>
    </header>

    <form action="proses-tambah.php" method="POST" enctype="multipart/form-data">
    <fieldset>

    <p>
        <label for="judul">Judul  : </label>
        <input type="text" name="judul" placeholder="Judul" />
    </p>
    <p>
        <label for="thn_rls">Tahun Rilis   : </label>
        <input type="text" name="thn_rls" placeholder="Tahun Rilis" />
        <br>
    </p>
    <p>
        <label for="genre">Genre : </label>
        <input type="text" name="genre" placeholder="Genre" />
    </p>
    <p>
        <label for="jml_eps">Jumlah Episode : </label>
        <input type="text" name="jml_eps" placeholder="Jumlah Episode" />
    </p>
    <p>
        <label for="deskripsi">Deskripsi  : </label>
        <textarea name="deskripsi"></textarea>
    </p>
    <p>
        <label for="link">Link : </label>
        <input type="text" name="link" placeholder="Link" />
    </p>
    <p>
        <label>Foto :</label>
		<input type="file" name="foto">
    </p>
    <p>
        <input type="submit" value="Simpan" name="tambah" />
    </p>
    </fieldset>
    
    </form>
</body>
</html>