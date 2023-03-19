<div id="layoutSidenav">
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4 fw-bolder">Pengaduan</h1>

                <div class="card mb-4">
                    <div class="card-header">

                        <i class="fas fa-table me-1"></i>
                        Data Pengaduan




                    </div>
                    <div class="card-body">
                        <?= $this->session->flashdata('message'); ?>
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Pelapor</th>
                                    <th>Tanggal</th>
                                    <th>Kategori</th>
                                    <th>Laporan</th>
                                    <th>Detail</th>
                                    <th>Status</th>

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

                                        <td>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-outline-info btn-sm" data-bs-toggle="modal" data-bs-target="#detail<?= $pd['id_pengaduan'] ?>">
                                                <i class="fa-solid fa-magnifying-glass"></i>
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="detail<?= $pd['id_pengaduan'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-xl">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="detail">Detail
                                                            </h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <!-- form detail -->
                                                            <form action="">
                                                                <fieldset disabled>

                                                                    <div class="row">
                                                                        <div class="mb-3 col-md-6">
                                                                            <label for="disabledTextInput" class="form-label">Pelapor</label>
                                                                            <input type="text" class="form-control" id="nama" name="nama" placeholder="<?= $pd['nama'] ?>" aria-describedby="emailHelp" aria-label="Disabled input example" >
                                                                        </div>

                                                                        <div class="mb-3 col-md-6">
                                                                            <label for="exampleInputEmail1" class="form-label">NIK</label>
                                                                            <input type="text" class="form-control" id="nik" name="nik" placeholder="<?= $pd['nik'] ?>" aria-describedby="emailHelp" aria-label="Disabled input example" >
                                                                        </div>
                                                                    </div>

                                                                    <div class="mb-3 col-md-12">
                                                                        <label for="exampleInputEmail1" class="form-label">Tanggal</label>
                                                                        <input type="text" class="form-control" id="tanggal" name="tanggal" placeholder="<?= $pd['tanggal_pengaduan'] ?>" aria-describedby="emailHelp" aria-label="Disabled input example" >
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="mb-3 col-md-6">
                                                                            <label for="disabledTextInput" class="form-label">Kategori</label>
                                                                            <input type="text" class="form-control" id="kategori" name="kategori" placeholder="<?= $pd['kategori'] ?>" aria-describedby="emailHelp" aria-label="Disabled input example" >
                                                                        </div>

                                                                        <div class="mb-3 col-md-6">
                                                                            <label for="exampleInputEmail1" class="form-label">Subkategori</label>
                                                                            <input type="text" class="form-control" id="subkategori" name="subkategori" placeholder="<?= $pd['subkategori'] ?>" aria-describedby="emailHelp" aria-label="Disabled input example" >
                                                                        </div>
                                                                    </div>

                                                                    <div class="mb-3">
                                                                        <div class="mb-3 col-md-12">
                                                                            <label for="exampleInputEmail1" class="form-label">
                                                                                Laporan</label>
                                                                            <textarea class="form-control" value="<?= $pd['isi_laporan'] ?>" id="isi" name="isi" placeholder="<?= $pd['isi_laporan'] ?>"></textarea>
                                                                        </div>
                                                                    </div>


                                                                    <div class="mb-3">
                                                                        <p>Foto</p>
                                                                        <img src="<?= base_url('assets/uploads/') . $pd['foto'] ?>" alt="" width="400px">
                                                                    </div>

                                                                </fieldset>

                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                    </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>

                                        <td>
                                            <!-- Button trigger modal -->
                                            <!-- kondisi tanggapan  -->
                                            <?php if ($pd['status'] == 0) { ?>
                                                <button type="button" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#tindakan<?= $pd['id_pengaduan'] ?>">
                                                    Tindakan
                                                </button>
                                            <?php } elseif ($pd['status'] == 'proses') { ?>

                                                <a type="button" class="btn btn-outline-warning btn-sm" href="<?= base_url('C_adhiDashboard/tanggapan/') . $pd['id_pengaduan'] ?>">
                                                    Proses
                                                </a>

                                            <?php } elseif ($pd['status'] == 'selesai') { ?>
                                                <button type="button" class="btn btn-outline-success btn-sm" data-bs-toggle="modal" data-bs-target="#tindakan<?= $pd['id'] ?>">
                                                    Selesai
                                                </button>
                                            <?php } ?>
                                            <!-- akhir kondisi tanggapan  -->



                                            <!-- Modal -->
                                            <div class="modal fade" id="tindakan<?= $pd['id_pengaduan'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="tindakan">Tindakan</h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <!-- Form tindakan -->
                                                            <form method="post" action="<?= base_url('C_adhiDashboard/tindakan/') . $pd['id_pengaduan'] ?>">
                                                                <div class="row">
                                                                    <div class="mb-3 col-md-6">
                                                                        <label for="disabledTextInput" class="form-label">Pelapor</label>
                                                                        <input type="text" class="form-control" id="nama" name="nama" value="<?= $pd['nama'] ?>" aria-describedby="emailHelp" aria-label="Disabled input example" disabled>
                                                                    </div>

                                                                    <div class="mb-3 col-md-6">
                                                                        <label for="exampleInputEmail1" class="form-label">Tanggal</label>
                                                                        <input type="text" class="form-control" id="tanggal" name="tanggal" value="<?= $pd['tanggal_pengaduan'] ?>" aria-describedby="emailHelp" aria-label="Disabled input example" disabled>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="mb-3 col-md-6">
                                                                        <label for="disabledTextInput" class="form-label">Kategori</label>
                                                                        <input type="text" class="form-control" id="kategori" name="kategori" value="<?= $pd['kategori'] ?>" aria-describedby="emailHelp" aria-label="Disabled input example" disabled>
                                                                    </div>

                                                                    <div class="mb-3 col-md-6">
                                                                        <label for="exampleInputEmail1" class="form-label">Subkategori</label>
                                                                        <input type="text" class="form-control" id="subkategori" name="subkategori" value="<?= $pd['subkategori'] ?>" aria-describedby="emailHelp" aria-label="Disabled input example" disabled>
                                                                    </div>
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="exampleInputEmail1" class="form-label">Isi
                                                                        Laporan</label>
                                                                    <input type="text" class="form-control" id="isi" name="isi" value="<?= $pd['isi_laporan'] ?>" aria-describedby="emailHelp" aria-label="Disabled input example" disabled>

                                                                </div>



                                                                <div class="mb-3">
                                                                    <label for="exampleInputEmail1" class="form-label">Tanggapan</label>
                                                                    <input type="text" class="form-control" id="tanggapan" name="tanggapan" aria-describedby="emailHelp">
                                                                </div>

                                                                <div class="row">

                                                                    <!-- <div class="mb-3 col-md-8">
                                                                        <label for="exampleInputEmail1" class="form-label">Tanggal
                                                                            Tanggapan</label>
                                                                        <input type="date" class="form-control" id="tgl_tanggapan" name="tgl_tanggapan" aria-describedby="emailHelp">
                                                                    </div> -->

                                                                    <div class="mb-3 col-md-4">
                                                                        <label for="exampleInputEmail1" class="form-label">Status</label>
                                                                        <select class="form-select" aria-label="Default select example" id="status" name="status">
                                                                            <option selected>- Pilih -</option>
                                                                            <option value="proses">Proses</option>
                                                                            <option value="selesai">Selesai</option>

                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                    <button type="submit" class="btn btn-primary">Save
                                                                        changes</button>
                                                                </div>

                                                            </form>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>






                        </table>
                    </div>
                </div>







            </div>