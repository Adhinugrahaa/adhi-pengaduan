<div id="layoutSidenav">
    <div id="layoutSidenav_content" style="background: #f4f6f9;">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4 fw-bolder">Dashboard</h1>

                <div class="row">
                    <div class="col-xl-4 col-md-6">
                        <div class="card bg-primary text-white mb-4">
                            <div class="card-body fw-bolder">Pengaduan</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <?= $jumlah['pengaduan'] ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="card bg-warning text-white mb-4">
                            <div class="card-body fw-bolder">Proses</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <?= $jumlah['proses'] ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="card bg-success text-white mb-4">
                            <div class="card-body fw-bolder">Selesai</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <?= $jumlah['pengaduan'] ?>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-xl-6">
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-user me-1"></i>
                                Data Diri
                            </div>

                            <table class="table table-bordered">

                                <tr>
                                    <td>
                                        <h6>Nama</h6>
                                    </td>
                                    <td>
                                        <h6>: <?= $user['nama_petugas'] ?></h6>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <h6>Sebagai</h6>
                                    </td>
                                    <td>
                                        <h6>: <?= $user['level'] ?></h6>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <h6>Nomor Telepon</h6>
                                    </td>
                                    <td>
                                        <h6>: <?= $user['telepon'] ?></h6>
                                    </td>
                                </tr>

                            </table>

                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-chart-bar me-1"></i>
                                Masyarakat Yang Telah Register
                            </div>

                            <table class="table table-bordered">

                                <thead class="bg-secondary">
                                    <tr>
                                        <td>Nama</td>
                                        <td>NIK</td>
                                        <td>Nomer Telepon</td>
                                    </tr>

                                </thead>

                                <tbody>
                                    <?php foreach ($masyarakat as $m) : ?>
                                    <tr>
                                        <td><?= $m['nama'] ?></td>
                                        <td><?= $m['nik'] ?></td>
                                        <td><?= $m['telepon'] ?></td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        DataTable Example
                    </div>
                    content
                </div>







         
   </div>