

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    </div>

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-success">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>NIK</th>
                                            <th>Gol.Darah</th>
                                            <th>Tempat tanggal lahir</th>
                                            <th>Pekerjaan</th>
                                            <th>Agama</th>
                                            <th>Alamat</th>
                                            <th>No.Telepon</th>
                                        </tr>
                                    </thead>
                                    
                                    <!-- proses memmanggil data dari tabel -->

                                    <tbody>
                                        <?php 
                                        $id = 1;
                                        foreach ($data_ibu as $key) : ?>
                                        <tr>
                                            <td><?= $id++?></td>
                                            <td><?= $key['nama_ibu']?></td>
                                            <td><?= $key['nik']?></td>
                                            <td><?= $key['gol_darah']?></td>
                                            <td><?= $key['tempat_lahir']?>, <?= $key['tanggal_lahir']?></td>
                                            <td><?= $key['pekerjaan']?></td>
                                            <td><?= $key['agama']?></td>
                                            <td><?= $key['alamat']?></td>
                                            <td><?= $key['no_tlp']?></td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                    
                                </table>
                            </div>  
                        </div>
                    </div>

                    

                </div>
                <!-- /.container-fluid -->
