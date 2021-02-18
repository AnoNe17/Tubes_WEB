<?php include("config.php");?>
<?php include("menu_atas.php");?>
<?php
$id = $_GET['id'];
$sql = "SELECT * FROM anime WHERE id=$id";
$query = mysqli_query($db, $sql);
$data = mysqli_fetch_assoc($query);
?>
<table id="bodi" border="0">
    <tr>
        <td>
            <table border="0" width="1100px" height="">
                <tr>
                    <td><img src="gambar/<?php echo $data['gambar'] ?>" alt='' width='800px' height='450px'></td>
                </tr>
                <tr>
                    <td>
                        <table>
                            <tr>
                                <td colspan="2"><h2><?php echo "$data[judul]"; ?></h2></td>
                                
                            </tr>
                            <tr>
                                <td>Tahun Rilis </td>
                                <td> : <?php echo "$data[tahun_rilis]"; ?></td>
                            </tr>
                            <tr>
                                <td>Jumlah Episode </td>
                                <td> : <?php echo "$data[jumlah_episode]"; ?></td>
                            </tr>
                            <tr>
                                <td>Genre </td>
                                <td> : <?php echo "$data[genre]"; ?></td>
                            </tr>
                        </table>
                    </td>
                    <td width="300px"></td>
                </tr>
                <tr>
                    <td><br><?php echo "$data[deskripsi]"; ?></td>
                </tr>
                <tr>
                    <td><br><?php echo "Link Download : <a href='$data[link]'>GOOGLE DRIVE</a><br>"; ?></td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<?
echo $id;








?>

<?php include("menu_bawah.php");?>