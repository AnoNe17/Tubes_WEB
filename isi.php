<table id="bodi" border="0">
        <tr>
            <td>
                <table border="0" width="1100px">
                <?php
                    $sql = "SELECT * FROM anime";
                    $query = mysqli_query($db, $sql);
                    while($data = mysqli_fetch_array($query)){
                    echo "<tr>";
                        echo "<td width='200px' height='100px'><center><img src='gambar/$data[gambar]' alt='' width='150px' height='100px'><br></td>";  
                        echo "<td width='200px' colspan='2'>
                                <table border='0'>
                                    <tr>
                                        <td><a href='detail_anime.php?id=$data[id]' style='font-size: 20px; text-decoration: none; color: black;'><b>$data[judul]</b></td>
                                    </tr>
                                    <tr>
                                        <td style='font-size: 15px;'>Tahun Rilis : $data[tahun_rilis]</td>
                                    </tr>
                                    <tr>
                                        <td style='font-size: 15px;'>Jumlah Episode : $data[jumlah_episode]</td>
                                    </tr> 
                                    <tr>
                                        <td style='font-size: 15px;'>Genre : $data[genre]</td>
                                    </tr>
                                    
                                </table>
                            </td>";
                    echo "</tr>";
                    }
                ?>
                </table>
            </td>
        </tr>
    </table>

<style>
body{
    font-family: Bradley Hand, cursive;
    background-image: url(../gambar/bg.jpg);
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
}

#bodi{
    
    width: 100%;
    height: 100%;
    padding-left: 7%;
    padding-right: 7% ;
}

.menu_bodi{
    background-color: #333333;
    color: white;
}
.next a{
    text-decoration: none;
    color: black;
}

.next :hover {
    color: #b1b1b1;
}

#menu_atas{
    width: 100%;
    height: 10px;
    border: 50px solid black;
}

.menu{
    list-style-type: none;
    padding: 0;
    margin 0;
    overflow: hidden;
    background-color: #333333;
}

.menu li{
    text-align: center;
    float: left;
}

.menu li a{
    display: block;
    color: white;
    text-align: center;
    padding: 16px;
    text-decoration: none;
}

.menu li a:hover{
    color: black;
    background-color: white;
}

#donlod a{
    color: white;
    background-color: #333333;
    text-align: center;
    padding: 10px;
    text-decoration: none;
}

#donlod :hover{
    color: black;
    background-color: white;
    text-decoration: none;
}
</style>