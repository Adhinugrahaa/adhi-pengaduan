<div class="row">
    <a href="<?= base_url('C_adhiAuth/logoutUser') ?>">
        <button type="button" class="btn btn-dark btn-outline-danger">
            <i class="fa-solid fa-right-from-bracket me-1"></i>
            Logout
        </button>
    </a>
</div>

<h1 class="text-white fw-bolder" style="text-shadow: 2px 2px grey;">Lapor Pak!</h1>
<h3 class="text-white fw-bolder" style="text-shadow: 2px 2px grey;">Selamat Datang <?= $user['nama'] ?></h3>
<h3 class="text-white mb-5 fw-bolder" style="text-shadow: 2px 2px grey;">Layanan Aspirasi dan Pengaduan Online Rakyat
</h3>
<?= $this->session->flashdata('message'); ?>
<div class="row text-center ">

    <div class="col-md-4">
        <a href="<?= base_url('C_adhiUser/pengaduan') ?>">
            <button type="button" class="btn btn-dark btn-outline-primary">
                <i class="fas fa-plus me-1"></i>
                Tambah Laporan
            </button>
        </a>
    </div>
    <div class="col-md-4">
        <a href="<?= base_url('C_adhiUser/riwayat') ?>">
            <button type="button" class="btn btn-dark btn-outline-primary">
                <i class="fas fa-history me-1"></i>
                Riwayat Laporan
            </button>
        </a>
    </div>
    <div class="col-md-4">
        <a href="<?= base_url('C_adhiUser/profil') ?>">
            <button type="button" class="btn btn-dark btn-outline-primary">
            <i class="fa-solid fa-user"></i>
            Profil
            </button>
        </a>
    </div>
</div>













































</html>