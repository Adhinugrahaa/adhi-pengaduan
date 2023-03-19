<div class="card">
    <h1 class=" fw-bolder text-center " style="text-shadow: 2px 2px grey;">Riwayat Laporan Anda</h1>
    <div class="card-body">


        <div class="card mb-4">
            <div class="card-header">

                <i class="fas fa-table me-1"></i>
                Riwayat Laporan




            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Tanggal Pengaduan</th>
                            <th>Kategori</th>
                            <th>Isi</th>


                        </tr>
                    </thead>


                    <tbody>
                        <?php foreach ($riwayat as $r) : ?>
                        <tr>

                            <td><?= $r['tanggal_pengaduan'] ?></td>
                            <td><?= $r['kategori'] ?></td>
                            <td><?= $r['isi_laporan'] ?></td>

                        </tr>
                        <?php endforeach; ?>
                    </tbody>






                </table>

            </div>
        </div>
        <a href="<?= base_url('C_adhiUser') ?>"><button type="button" class="btn btn-light btn-outline-secondary"
                style="border-radius: 10px;"><i class="fa-solid fa-backward"></i></button></a>