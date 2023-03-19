<div id="layoutSidenav">
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4 fw-bolder">Laporan</h1>

                <!-- kategori -->
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Data Laporan
                        <div class="d-md-flex justify-content-md-end">
                            <button type="button" class="btn btn-ligh btn-outline-danger" style="border-radius: 50px;" data-bs-toggle="modal">
                                <i class="fa-solid fa-download"></i> Download PDF
                            </button>   
                        </div>
                    </div>

                    <!-- <div class="card-body">
                        <?= $this->session->flashdata('message'); ?>
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kategori</th>
                                    <th>Subkategori</th>
                                    <th>Jumlah Pengadu</th>

                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($kategori as $kt) : ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $kt['kategori'] ?></td>
                                    <td><?= $kt['subkategori'] ?></td>
                                    <td>a</td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>

                        </table>
                    </div> -->

                    <div class="card-body">
                        <?= $this->session->flashdata('message'); ?>
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Pelapor</th>
                                    <th>Tanggal</th>
                                    <th>Kategori</th>
                                    <th>Isi</th>
                                </tr>
                            </thead>


                            <tbody>
                                <?php $no = 1;
                                foreach ($pengaduan as $pd) : ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $pd['nama'] ?></td>
                                        <td><?= $pd['tanggal_pengaduan'] ?></td>
                                        <td><?= $pd['kategori'] ?></td>
                                        <td><?= $pd['isi_laporan'] ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>






                        </table>
                    </div>



                </div>



            </div>