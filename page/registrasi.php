<a href="?page=registrasi&aksi=tambah" class="btn btn-primary" style="margin-bottom: 5px;">Registrasi</a>

<div class="row">
                <div class="col-md-12">
                    
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Anggota registrasi
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>Nik</th>
                                            <th>Nama</th>
                                            <th>tanggal lahir</th>
                                            <th>jenis kelamin</th>
                                            <th>alamat</th>
                                            <th>agama</th>
                                            <th>status</th>
                                            <th>telepon</th>
                                            <th>edit</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php

                                        $no = 1;

                                        $sql = $koneksi ->query("select * from tb_pendaftaran");

                                        while ($data = $sql->fetch_assoc()){

                                        ?>

                                    <tr>
                                        <td><?php echo $no++;?></td>
                                        <td><?php echo $data['nik'];?></td>
                                        <td><?php echo $data['nama'];?></td>
                                        <td><?php echo $data['tanggal_lahir'];?></td>
                                        <td><?php echo $data['Jenis_kelamin'];?></td>
                                        <td><?php echo $data['alamat'];?></td>
                                        <td><?php echo $data['agama'];?></td>
                                        <td><?php echo $data['status'];?></td>
                                        <td><?php echo $data['telepon'];?></td>
                                        <td>
                                            <a href ="?page=ubah&aksi=ubah&nik=<?php echo $data ['nik']; ?>" class="btn btn-info">Ubah</a>
                                            <a onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini.....????')" 
                                            href = "?page=hapus&aksi=hapus&nik=<?php echo $data ['nik']; ?>" class="btn btn-danger">hapus</a>
                                                                            </tr>
<?php } ?>
</tbody>
                                        </div>
                                        </div>
                                        </div>
                                        </div>
                                        </div> 