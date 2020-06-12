<div class="panel panel-default">
<div class="panel-heading">
    Tambah Anggota
</div>
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">

                                    <form method="POST" >
                                        <div class="form-group">
                                            <label>Nik</label>
                                            <input class="form-control" name="nik"/>
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input class="form-control" name="nama"/>
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Tanggal Lahir</label>
                                            <input class="form-control" name="tanggal_lahir" type="date"/>
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Jenis Kelamin</label>
                                            <select class="form-control" name="jenis_kelamin">
                                                <option>laki laki</option>
                                                <option>perempuan</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <input class="form-control" name="alamat"/>
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Agama</label>
                                            <input class="form-control" name="agama"/>
                                            
                                        </div>

                                        
                                        <div class="form-group">
                                            <label>Status</label>
                                            <select class="form-control" name="status">
                                                <option>kawin</option>
                                                <option>belum kawin</option>
                                            </select>
                                        </div>


                                        <div class="form-group">
                                            <label>Telepon</label>
                                            <input class="form-control" name="telepon"/>
                                            
                                        </div>

                                        <div>
                                            <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
                                        </div>
                                        

                                    </div>
                                    </form>
                                </div>
</div>
</div>
</div>

<?php
    $judul = $_POST ['nik'];
    $nama = $_POST ['nama'];
    $tanggal_lahir = $_POST ['tanggal_lahir'];
    $jenis_kelamin = $_POST ['jenis_kelamin'];
    $alamat = $_POST ['alamat'];
    $agama = $_POST ['agama'];
    $status = $_POST ['status'];
    $telepon = $_POST ['telepon'];
    
    $simpan = $_POST ['simpan'];

    if ($simpan){
        $sql = $koneksi->query("insert into tb_pendaftaran (nik, nama, tanggal_lahir, jenis_kelamin, alamat, agama, status, telepon) values ('$nik', '$nama', ' $tanggal_lahir', '$jenis_kelamin', '$alamat', '$agama', '$status', '$telepon')");

        if ($sql) {
            ?>
                <script type="text/javascript">

                alert ("Data Berhasil Disimpan");
                window.location.href="?page=buku";
                </script>
                <?php
        }
    }
?>