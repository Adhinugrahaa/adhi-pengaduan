<div id="layoutSidenav">
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4 fw-bolder"> Tanggapan Telah
                    Selesai <i class="fa-solid fa-check" style="color: green;"></i>
                </h1>
                <div class="card mb-4">
                    <div class="card-header">
                        Pengaduan



                    </div>
                    <div class="card-body">

                        <form action="<?= base_url('C_bagusDashboard/tanggapan/') . $tanggapan['id_pengaduan'] ?>"
                            method="post">

                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label for="disabledTextInput" class="form-label">Pelapor</label>
                                    <input type="text" class="form-control" id="nama" name="nama"
                                        value="<?= $tanggapan['nama'] ?>" aria-describedby="emailHelp"
                                        aria-label="Disabled input example" disabled>
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label for="exampleInputEmail1" class="form-label">Tanggal</label>
                                    <input type="text" class="form-control" id="tanggal" name="tanggal"
                                        value="<?= $tanggapan['tanggal_pengaduan'] ?>" aria-describedby="emailHelp"
                                        aria-label="Disabled input example" disabled>
                                </div>
                            </div>

                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label for="disabledTextInput" class="form-label">Kategori</label>
                                    <input type="text" class="form-control" id="kategori" name="kategori"
                                        value="<?= $tanggapan['kategori'] ?>" aria-describedby="emailHelp"
                                        aria-label="Disabled input example" disabled>
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label for="exampleInputEmail1" class="form-label">Subkategori</label>
                                    <input type="text" class="form-control" id="subkategori" name="sugbkategori"
                                        value="<?= $tanggapan['subkategori'] ?>" aria-describedby="emailHelp"
                                        aria-label="Disabled input example" disabled>
                                </div>
                            </div>

                            <div class="row">
                                <div class="mb-3 col-md-12">
                                    <label for="disabledTextInput" class="form-label">Isi Laporan</label>
                                    <textarea type="text" class="form-control" id="isi" name="isi"
                                        value="<?= $tanggapan['isi_laporan'] ?>" aria-describedby="emailHelp"
                                        aria-label="Disabled input example"
                                        disabled><?= $tanggapan['isi_laporan'] ?></textarea>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-header">
                        Tanggapan





                    </div>

                    <div class="card-body">

                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal</th>
                                    <th>Isi Tanggapan</th>
                                    <th>Petugas</th>

                                </tr>
                            </thead>


                            <tbody>
                                <?php if ($tanggapanPetugas) { ?>
                                <?php $no = 1; ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $tanggapanPetugas['tanggal_tanggapan'] ?></td>
                                    <td><?= $tanggapanPetugas['tanggapan'] ?></td>
                                    <td><?= $tanggapanPetugas['nama_petugas'] ?></td>

                                </tr>
                                <?php } ?>



                            </tbody>








                        </table>
                    </div>

                </div>


            </div>
        </main>
