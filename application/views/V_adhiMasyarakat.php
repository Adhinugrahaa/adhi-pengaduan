<div id="layoutSidenav">
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4 fw-bolder">Masyarakat</h1>




                <div class="card mb-4">
                    <div class="card-header">

                        <i class="fas fa-table me-1"></i>
                        Data Masyaraka




                    </div>
                    <div class="card-body">
                    <?= $this->session->flashdata('message'); ?>
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>NIK</th>
                                    <th>No Telepon</th>
                                    <th>Status</th>

                                </tr>
                            </thead>


                            <tbody>
                                <?php $no = 1;
                                foreach ($masyarakat as $ms) : ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $ms['nama'] ?></td>
                                        <td><?= $ms['nik'] ?></td>
                                        <td><?= $ms['telepon'] ?></td>


                                        <?php if ($ms['active'] == 'suspended') { ?>

                                            <td> <a href="<?= base_url('C_adhiDashboard/activeMasyarakat/' . $ms['id']) ?>"><button type="submit" class="btn btn-success btn-sm" onclick="return confirm('Apakah anda yakin ingin mengaktifkan ?')"><i class="fa-solid fa-lock-open"></i></button></a> </td>




                                        <?php } else if ($ms['active'] == 'active') { ?>

                                            <td> <a href="<?= base_url('C_adhiDashboard/suspendedMasyarakat/' . $ms['id']) ?>"><button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin mengsuspended ?')"><i class="fas fa-lock"></i></button></a></td>

                                        <?php } ?>


                                    </tr>
                                <?php endforeach; ?>
                            </tbody>






                        </table>
                    </div>
                </div>










            </div>