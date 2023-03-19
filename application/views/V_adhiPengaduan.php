<h1 class="text-white fw-bolder text-center " style="text-shadow: 2px 2px grey;">Lapor Pak!</h1>
<h3 class="text-white  mb-5 text-center fw-bolder " style="text-shadow: 2px 2px grey;">Layanan Aspirasi dan Pengaduan
    Online Rakyat
</h3>

<div class="card mb-5">
    <div class="card-header bg-secondary">
        <h4 class="fw-bolder">Sampaikan Laporan Anda</h4>
    </div>
    <div class="card-body">
        <form method="post" action="<?= base_url('C_adhiUser/tambahPengaduan') ?>" enctype="multipart/form-data">

            <!-- <div class="mb-3">
                <label for="tgl_pengaduan" class="form-label">Tanggal Pengaduan</label>
                <input type="date" class="form-control" id="tgl_pengaduan" name="tgl_pengaduan" aria-describedby="emailHelp">
            </div> -->

            <div class="mb-3">
                <label for="nik" class="form-label">NIK</label>
                <input type="number" class="form-control" id="nik" name="nik" placeholder="Masukan NIK Anda" value="<?= $user['nik'] ?>" aria-label="Disabled input example" disabled>
            </div>

            <div class="row">
                <div class="mb-3 col-md-6">
                    <label for="nik" class="form-label">Kategori</label>
                    <select name="kategori" class="form form-select" id="kategori">
                        <option selected>- Pilih -</option>
                        <?php foreach ($kategori as $k) : ?>
                            <option value="<?= $k['id'] ?>"><?= $k['kategori'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="mb-3 col-md-6">
                    <label for="nik" class="form-label">Subkategori</label>
                    <select name="subkategori" class="form form-select" id="subkategori">
                        <option selected>- Pilih -</option>
                        <?php foreach ($subkategori as $sk) : ?>
                            <option value="<?= $sk['subkategori_id'] ?>"><?= $sk['subkategori'] ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
            </div>

            <div class="mb-3">
                <label for="laporan" class="form-label">Laporan Anda</label>
                <textarea type="text" class="form-control" id="laporan" name="laporan" placeholder="Ketik Isi Laporan Anda"> </textarea>
            </div>

            <div class="mb-3">
                <label for="foto" class="form-label">Foto</label>
                <input type="file" class="form-control" id="foto" name="foto">
            </div>


            <a href="<?= base_url('C_adhiUser') ?>"><button type="button" class="btn btn-light btn-outline-secondary" style="border-radius: 10px;"><i class="fa-solid fa-backward"></i></button></a>

            <button type="submit" class="btn btn-light btn-outline-primary" style="border-radius: 10px;">Submit</button>



        </form>















    </div>

</div>