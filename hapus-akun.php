<?php
    include 'Koneksi.php';

    if(isset($_GET['id'])){
        $delete = mysqli_query($conn, "DELETE FROM tb_user WHERE id_user = '".$_GET['id']."' ");
        echo '<script>window.location="data-akun-peserta.php"</script>';
    }
?>