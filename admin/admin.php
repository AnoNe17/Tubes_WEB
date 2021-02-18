<?php include("menu-atas-admin.php");?>
<?php 
session_start();
if($_SESSION['status']!="login"){
	header("location:index.php?pesan=belum_login");
}
?>
<body>
<table id="bodi" border="0">
        <tr>
            <td>
                <table border="0">
                    <tr>
                        <td width="30%" height="50" colspan="3" class="menu_bodi"><center>ADMIN</a></td>
                    </tr>
                    <tr>
                        <td width="100%" height="200" colspan="2"><br><?php include("list-data.php");?><br></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
            </td>
        </tr>
</table>
<?php include("menu_bawah_admin.php");?>
</body