<div id="layoutSidenav">
		<div id="layoutSidenav_content">
			<main>
				<div class="container-fluid px-4">
					<h1 class="mt-4 fw-bolder">Kategori</h1>



					<!-- kategori -->
					<div class="card mb-4">
						<div class="card-header">

							<i class="fas fa-table me-1"></i>
							Data Kategori

							<?php if ($user['level'] == 'admin') { ?>
								<!-- modal tambah kategori -->
								<!-- Button trigger modal -->
								<div class="d-md-flex justify-content-md-end">
									<button type="button" class="btn btn-light btn-outline-primary" style="border-radius: 50px;" data-bs-toggle="modal" data-bs-target="#exampleModal">
										<i class="fa-solid fa-plus"></i> Kategori
									</button>
								</div>

								<!-- Modal -->
								<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Kategori</h1>
												<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
											</div>
											<div class="modal-body">
												<!-- form tambah kategori -->
												<form method="post" action="<?= base_url('C_adhiDashboard/tambahKategori') ?>">

													<div class="mb-3">
														<label for="exampleInputEmail1" class="form-label">Kategori</label>
														<input type="text" class="form-control" id="kategori" name="kategori" aria-describedby="emailHelp">

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
							<?php } ?>

						</div>
						<div class="card-body">
							<?= $this->session->flashdata('message'); ?>
							<table id="datatablesSimple">
								<thead>
									<tr>
										<th>No</th>
										<th>Kategori</th>
										<?php if ($user['level'] == 'admin') { ?>
											<th>Edit</th>
											<th>Delete</th>
										<?php } ?>
									</tr>
								</thead>


								<tbody>
									<?php
									$no = 1;
									foreach ($kategori as $kt) : ?>
										<tr>
											<td><?= $no++ ?></td>
											<td><?= $kt['kategori'] ?></td>
											<?php if ($user['level'] == 'admin') { ?>
												<td>
													<!-- modal edit -->
													<!-- Button trigger modal -->
													<button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editkategori<?= $kt['id'] ?>">
														<i class="fa-solid fa-pen-to-square"></i>
													</button>

													<!-- Modal -->
													<div class="modal fade" id="editkategori<?= $kt['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
														<div class="modal-dialog">
															<div class="modal-content">
																<div class="modal-header">
																	<h1 class="modal-title fs-5" id="editkategori<?= $kt['id'] ?>">
																		Edit Kategori</h1>
																	<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
																</div>
																<div class="modal-body">
																	<!-- form edit kategori -->
																	<form method="post" action="<?= base_url('C_adhiDashboard/editKategori/' . $kt['id']) ?>">

																		<div class="mb-3">
																			<label for="exampleInputEmail1" class="form-label">Kategori</label>
																			<input type="text" class="form-control" id="kategori" name="kategori" value="<?= $kt['kategori'] ?>" aria-describedby="emailHelp">
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

												<td> <a href="<?= base_url('C_adhiDashboard/deleteKategori/' . $kt['id']) ?>"><button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus ?')"><i class="fa-solid fa-trash"></i></button></a> </td>

											<?php } ?>



										</tr>
									<?php endforeach; ?>
								</tbody>





							</table>
						</div>
					</div>

					<!-- subkategori -->
					<div class="card mb-4">
						<div class="card-header">

							<i class="fas fa-table me-1"></i>
							Data Subkategori

							<!-- tambah submkategori -->
							<!-- Button trigger modal -->
							<div class="d-md-flex justify-content-md-end">
								<button type="button" class="btn btn-light btn-outline-primary" style="border-radius: 50px;" data-bs-toggle="modal" data-bs-target="#subkategori">
									<i class="fa-solid fa-plus"></i>Subkategori
								</button>
							</div>

							<!-- Modal -->
							<div class="modal fade" id="subkategori" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<h1 class="modal-title fs-5" id="subkategori">Modal title</h1>
											<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
										</div>
										<div class="modal-body">
											<!-- form tambah subkategori -->
											<form method="post" action="<?= base_url('C_adhiDashboard/tambahSub') ?>">

												<div class="mb-3">
													<label for="subkategori" class="form-label">Kategori</label>
													<select name="kategori" class="form form-select" id="">
														<option selected>- Pilih -</option>
														<?php foreach ($kategori as $k) : ?>
															<option value="<?= $k['id'] ?>"><?= $k['kategori'] ?></option>
														<?php endforeach ?>
													</select>
												</div>

												<div class="mb-3">
													<label for="subkategori" class="form-label">Subkategori</label>
													<input type="text" class="form-control" id="subkategori" name="subkategori" aria-describedby="emailHelp">

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
						<div class="card-body">
							<?= $this->session->flashdata('subkategori'); ?>
							<table id="subKategori">

								<thead>
									<tr>
										<th>No</th>
										<th>Kategori</th>
										<th>Subkategori</th>
										<th>Edit</th>
										<th>Delete</th>

									</tr>
								</thead>





								<tbody>



									<?php
									$no = 1;

									foreach ($joinKategori as $sk) : ?>

										<tr>
											<td><?= $no++ ?></td>
											<td><?= $sk['kategori'] ?></td>
											<td><?= $sk['subkategori'] ?></td>
											<td>
												<!-- Edit subkategori -->
												<!-- Button trigger modal -->
												<button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editsub<?= $sk['id'] ?>">
													<i class="fa-solid fa-pen-to-square"></i>
												</button>

												<!-- Modal -->
												<div class="modal fade" id="editsub<?= $sk['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
													<div class="modal-dialog">
														<div class="modal-content">
															<div class="modal-header">
																<h1 class="modal-title fs-5" id="editsub<?= $sk['subkategori_id'] ?>">Edit Subkategori
																</h1>
																<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
															</div>
															<div class="modal-body">
																<!-- form edit -->
																<form method="post" action="<?= base_url('C_adhiDashboard/editSub/' . $sk['subkategori_id']) ?>">
																	<div class="mb-3">
																		<label for="subkategori" class="form-label">Subkategori</label>
																		<input type="text" class="form-control" id="subkategori" name="subkategori" aria-describedby="emailHelp" value="<?= $sk['subkategori'] ?>">

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
											<td><a href="<?= base_url('C_adhiDashboard/deleteSub/' . $sk['subkategori_id']) ?>"><button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus ?')"><i class="fa-solid fa-trash"></i></button></a> </td>
										</tr>

									<?php endforeach; ?>
								</tbody>
							</table>
						</div>
					</div>





				</div>