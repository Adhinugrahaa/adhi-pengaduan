<div id="layoutSidenav">
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">

                <!-- tambah petugas -->
                <!-- Button trigger modal -->
                <?php if ($user['level'] == 'admin') { ?>

                <div class="d-grid gap-2">
                    <button type="button" class="btn btn-light btn-outline-primary mt-4" style="border-radius: 50px;"
                        data-bs-toggle="modal" data-bs-target="#petugas">
                        <i class="fa-solid fa-plus me-1"></i>Admin / Petugas
                    </button>
                </div>
                <?php } ?>


                <!-- Modal -->
                <div class="modal fade" id="petugas" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="petugas">Tambah Petugas</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form method="post" action="<?= base_url('C_adhiDashboard/tambahPetugas') ?>">
                                    <div class="mb-3">
                                        <label for="petugas" class="form-label">Nama Petugas</label>
                                        <input type="text" class="form-control" id="nama_petugas" name="nama_petugas"
                                            aria-describedby="emailHelp">
                                    </div>
                                    <div class="mb-3">
                                        <label for="username" class="form-label">Username</label>
                                        <input type="text" class="form-control" id="username" name="username">
                                    </div>
                                    <div class="mb-3">
                                        <label for="telepon" class="form-label">Nomer Telepon</label>
                                        <input type="number" class="form-control" id="telepon" name="telepon">
                                    </div>
                                    <div class="mb-3">
                                        <label for="telepon" class="form-label">Sebagai</label>
                                        <select class="form-select" aria-label="Default select example" id="level"
                                            name="level">
                                            <option selected>- Pilih -</option>
                                            <option value="admin">Admin</option>
                                            <option value="petugas">Petugas</option>
                                        </select>
                                    </div>
                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                            <label for="password1" class="form-label">Password</label>
                                            <input type="password" class="form-control" id="password1" name="password1">
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="password2" class="form-label">Confirm Password</label>
                                            <input type="password" class="form-control" id="password2" name="password2">
                                        </div>
                                    </div>



                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>







                <h1 class="mt-4 fw-bolder">Admin</h1>
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Data Admin
                    </div>
                    <div class="card-body">
                        <?= $this->session->flashdata('admin'); ?>
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Petugas</th>
                                    <th>Nomer Telepon</th>
                                    <th>Sebagai</th>
                                    <th>Active</th>
                                    <?php if ($user['level'] == 'admin') { ?>
                                    <th>Edit</th>
                                    <th>Suspended</th>
                                    <?php } ?>
                                </tr>
                            </thead>


                            <tbody>
                                <?php $no = 1;
                                foreach ($admin as $pt) : ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $pt['nama_petugas'] ?></td>
                                    <td><?= $pt['telepon'] ?></td>
                                    <td><?= $pt['level'] ?></td>
                                    <td> <?= $pt['active'] ?></td>
                                    <?php if ($user['level'] == 'admin') { ?>
                                    <td>
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                            data-bs-target="#editAdmin<?= $pt['id_petugas'] ?>">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="editAdmin<?= $pt['id_petugas'] ?>" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title
                                                        </h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <!-- form edit admin -->
                                                        <form method="post"
                                                            action="<?= base_url('C_adhiDashboard/editAdmin/') . $pt['id_petugas'] ?>">
                                                            <div class="mb-3">
                                                                <label for="petugas" class="form-label">Nama
                                                                    Petugas</label>
                                                                <input type="text" class="form-control"
                                                                    id="nama_petugas" name="nama_petugas"
                                                                    aria-describedby="emailHelp"
                                                                    value="<?= $pt['nama_petugas'] ?>">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="username"
                                                                    class="form-label">Username</label>
                                                                <input type="text" class="form-control" id="username"
                                                                    name="username" value="<?= $pt['username'] ?>">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="telepon" class="form-label">Nomer
                                                                    Telepon</label>
                                                                <input type="number" class="form-control" id="telepon"
                                                                    name="telepon" value="<?= $pt['telepon'] ?>">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="telepon" class="form-label">Sebagai</label>
                                                                <!-- value untuk select -->
                                                                <select class="form-select"
                                                                    aria-label="Default select example" id="level"
                                                                    name="level">

                                                                    <?php if ($pt['level'] == 'admin') { ?>

                                                                    <option value="admin" selected>Admin</option>
                                                                    <option value="petugas">Petugas</option>
                                                                    <?php } else { ?>
                                                                    <option value="petugas" selected>Petugas</option>
                                                                    <option value="admin">Admin</option>
                                                                    <?php } ?>

                                                                </select>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-primary">Save
                                                                    changes</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <?php if ($pt['active'] == 'suspended') { ?>

                                    <td> <a href="<?= base_url('C_adhiDashboard/activeAdmin/' . $pt['id']) ?>"><button
                                                type="submit" class="btn btn-success btn-sm"
                                                onclick="return confirm('Apakah anda yakin ingin mengaktifkan ?')"><i
                                                    class="fa-solid fa-lock-open"></i></button></a></td>


                                    <?php } else if ($pt['active'] == 'active') { ?>

                                    <td> <a href="<?= base_url('C_adhiDashboard/suspendedAdmin/' . $pt['id']) ?>"><button
                                                type="submit" class="btn btn-danger btn-sm"
                                                onclick="return confirm('Apakah anda yakin ingin mengsuspended ?')"><i
                                                    class="fas fa-lock"></i></button></a></td>

                                    <?php } ?>

                                    <?php } ?>

                                </tr>

                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>



                <h1 class="mt-4 fw-bolder">Petugas</h1>
                <div class="card mb-4">
                    <div class="card-header">

                        <i class="fas fa-table me-1"></i>
                        Data Petugas




                    </div>


                    <div class="card-body">
                        <?= $this->session->flashdata('message'); ?>
                        <table id="tabelPetugas">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Petugas</th>
                                    <th>Nomer Telepon</th>
                                    <th>Sebagai</th>
                                    <th>status</th>
                                    <?php if ($user['level'] == 'admin') { ?>
                                    <th>Edit</th>
                                    <th>Suspended</th>
                                    <?php } ?>

                                </tr>
                            </thead>


                            <tbody>
                                <?php $no = 1;
                                foreach ($petugas as $pt) : ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $pt['nama_petugas'] ?></td>
                                    <td><?= $pt['telepon'] ?></td>
                                    <td><?= $pt['level'] ?></td>
                                    <td><?= $pt['active'] ?></td>
                                    <?php if ($user['level'] == 'admin') { ?>
                                    <td>
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                            data-bs-target="#editPetugas<?= $pt['id_petugas'] ?>">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="editPetugas<?= $pt['id_petugas'] ?>" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Petugas
                                                        </h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <!-- form edit petugas -->
                                                        <form method="post"
                                                            action="<?= base_url('C_adhiDashboard/editPetugas/') . $pt['id_petugas'] ?>">
                                                            <div class="mb-3">
                                                                <label for="petugas" class="form-label">Nama
                                                                    Petugas</label>
                                                                <input type="text" class="form-control"
                                                                    id="nama_petugas" name="nama_petugas"
                                                                    aria-describedby="emailHelp"
                                                                    value="<?= $pt['nama_petugas'] ?>">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="username"
                                                                    class="form-label">Username</label>
                                                                <input type="text" class="form-control" id="username"
                                                                    name="username" value="<?= $pt['username'] ?>">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="telepon" class="form-label">Nomer
                                                                    Telepon</label>
                                                                <input type="number" class="form-control" id="telepon"
                                                                    name="telepon" value="<?= $pt['telepon'] ?>">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="telepon" class="form-label">Sebagai</label>
                                                                <!-- value untuk select -->
                                                                <select class="form-select"
                                                                    aria-label="Default select example" id="level"
                                                                    name="level">


                                                                    <?php if ($pt['level'] == 'admin') { ?>

                                                                    <option value="admin" selected>Admin</option>
                                                                    <option value="petugas">Petugas</option>
                                                                    <?php } else { ?>
                                                                    <option value="petugas" selected>Petugas</option>
                                                                    <option value="admin">Admin</option>
                                                                    <?php } ?>





                                                                </select>
                                                            </div>


                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-primary">Save
                                                                    changes</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>

                                    <?php if ($pt['active'] == 'suspended') { ?>

                                    <td> <a href="<?= base_url('C_adhiDashboard/activePetugas/' . $pt['id']) ?>"><button
                                                type="submit" class="btn btn-success btn-sm"
                                                onclick="return confirm('Apakah anda yakin ingin mengaktifkan ?')"><i
                                                    class="fa-solid fa-lock-open"></i></button></a></td>


                                    <?php } else { ?>

                                    <td> <a href="<?= base_url('C_adhiDashboard/suspendedPetugas/' . $pt['id']) ?>"><button
                                                type="submit" class="btn btn-danger btn-sm"
                                                onclick="return confirm('Apakah anda yakin ingin mengsuspended ?')"><i
                                                    class="fa-solid fa-lock"></i></button></a></td>

                                    <?php } ?>

                                    <?php } ?>



                                </tr>

                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>

                </div>



            </div>