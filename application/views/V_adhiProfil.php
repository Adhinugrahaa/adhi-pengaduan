<div class="card mb-4">
    <div class="container">
        <h3 class="mb-3 mt-3">
            <i class="fa-solid fa-user"></i> <?= $user['nama'] ?>
        </h3>
        
        <?= $this->session->flashdata('message'); ?>

        <table class="table">
            <tr>
                <td>
                    <h6>Nama</h6>
                </td>
                <td>
                    <h6> : <?= $user['nama'] ?></h6>
                </td>
            </tr>
            <tr>
                <td>
                    <h6>Username</h6>
                </td>
                <td>
                    <h6> : <?= $user['username'] ?></h6>
                </td>
            </tr>
            <tr>
                <td>
                    <h6>Nomor Telepon</h6>
                </td>
                <td>
                    <h6> : <?= $user['telepon'] ?></h6>
                </td>
            </tr>
            <tr>
                <td>
                    <h6>NIK</h6>
                </td>
                <td>
                    <h6> : <?= $user['nik'] ?></h6>
                </td>
            </tr>
        </table>

        <div class="mb-3 mt-5">
            <a href="<?= base_url('C_adhiUser') ?>"><button type="button" class="btn btn-light btn-outline-secondary" style="border-radius: 10px;"><i class="fa-solid fa-backward"></i></button></a>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-light btn-outline-warning" style="border-radius: 10px;" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Edit
                Profil
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Profil</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="<?= base_url('C_adhiUser/editProfil') ?>">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Nama</label>
                                            <input type="text" class="form-control" id="nama" name="nama" value="<?= $user['nama'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Username</label>
                                            <input type="text" class="form-control" id="username" name="username" value="<?= $user['username'] ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Nomor Telepon</label>
                                            <input type="text" class="form-control" id="telepon" name="telepon" value="<?= $user['telepon'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">NIK</label>
                                            <input type="text" class="form-control" id="nik" name="nik" value="<?= $user['nik'] ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>