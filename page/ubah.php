<?php 
    $nik = $_GET['nik'];

    $sql = $koneksi->query("SELECT * FROM tb_pendaftaran WHERE nik='$nik'");
    
    $tampil =$sql->fetch_assoc();

 
?>
<div class="panel panel-default">
<div class="panel-heading">
    Ubah Anggota
</div>
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">

                                    <form method="POST" >
                                        <div class="form-group">
                                            <label>Nik</label>
                                            <input class="form-control" name="nik" value="<?= $tampil['nik']; ?>"/>
                                        </div>

                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input class="form-control" name="nama" value="<?= $tampil['nama']; ?>"/> 
                                        </div>

                                        <div class="form-group">
                                            <label>Tanggal Lahir</label>
                                            <input class="form-control" name="tanggal_lahir" type="date" value="<?= $tampil['tanggal_lahir'] ?>"/>
                                        </div>

                                        <div class="form-group">
                                            <label>Jenis Kelamin</label>
                                            <select class="form-control" name="jenis_kelamin">
                                                <option value="laki_laki">laki laki</option>
                                                <option value="perempuan">perempuan</option>                                            
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <input class="form-control" name="alamat" value="<?= $tampil['alamat']; ?>"/>
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Agama</label>
                                            <input class="form-control" name="agama" value="<?= $tampil['agama']; ?>"/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Status</label>
                                            <select class="form-control" name="status">
                                                <option value="kawin">kawin</option>
                                                <option value="belum_kawin">belum kawin</option>
                                            </select>
                                        </div>


                                        <div class="form-group">
                                            <label>Telepon</label>
                                            <input class="form-control" name="telepon" value="<?= $tampil['telepon']; ?>"/>
                                            
                                        </div>

                                        <div>
                                            <input type="submit" name="simpan" value="Ubah" class="btn btn-primary">
                                        </div>
                                        

                                    </div>
                                    </form>
                                </div>
</div>
</div>
</div>

<?php
    if (isset($_POST['simpan'])){
        $judul = $_POST['nik'];
        $nama = $_POST['nama'];
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $alamat = $_POST['alamat'];
        $agama = $_POST['agama'];
        $status = $_POST['status'];
        $telepon = $_POST['telepon'];
        $sql = $koneksi->query("update tb_pendaftaran set nik='$nik', nama='$nama', tanggal_lahir='$tanggal_lahir', Jenis_kelamin='$jenis_kelamin', alamat='$alamat', agama='$agama', status='$status', telepon= '$telepon' where nik='$nik'");
        if ($sql) {
            ?>
                <script type="text/javascript">

                alert ("Data Berhasil Diubah");
                window.location.href="?page=buku";
                </script>
            <?php
        }
    }
?>