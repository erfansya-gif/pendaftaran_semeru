<?php 
    $nik = $_GET ['nik'];

    $koneksi ->query("delete from tb_pendaftaran where nik='$nik'");
    ?>

    <script type="text/javascript">
        window.location.href="?page=buku";
        </script>