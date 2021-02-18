<?php include("config.php"); ?>

<!DOCTYPE html>
<head>
    <title>Tubes WEB</title>
</head>
<body>
    <nav>
        <a href="form-tambah-data.php">[ + ] Tambah data baru</a>
    </nav>
    <br>
    <table border="1" width="1130px">
        <thead>
            <tr>
                <th width="10px">No</th>
                <th width="150px">Judul</th>
                <th width="60px">Tahun Rilis</th>
                <th width="100px">Genre</th>
                <th width="70px">Jumlah Episode</th>
                <th width="500px">Deskripsi</th>
                <th width="200px">Link</th>
                <th width="200px">Gambar</th>
                <th width="100px">Menu</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM anime";
            $query = mysqli_query($db, $sql);

            while($data = mysqli_fetch_array($query)){
                echo "<tr>";

                echo "<td>".$data['id']."</td>";
                echo "<td>".$data['judul']."</td>";
                echo "<td>".$data['tahun_rilis']."</td>";
                echo "<td>".$data['genre']."</td>";
                echo "<td>".$data['jumlah_episode']."</td>";
                echo "<td>".$data['deskripsi']."</td>";
                echo "<td>".$data['link']."</td>";
                echo "<td><center><img src='../gambar/$data[gambar]' alt='' width='150px' height='100px'><br></td>";

                echo "<td>";
                echo "<a href='form-edit-data.php?id=".$data['id']."'>Edit</a> | ";
                echo "<a href='hapus-data.php?id=".$data['id']."'>Hapus</a>";
                echo "</td>";

            echo "</tr>";
            }
            ?>
        </tbody>
    </table>

    <p>Total : <?php echo mysqli_num_rows($query) ?></p>
</body>
</html>