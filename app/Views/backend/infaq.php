<?php include 'header.php' ?>
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Jadwal Pengajian Rutin</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Keropak</li>
                <li class="breadcrumb-item active">Infaq</li>
            </ol>
        </nav>
    </div>
    <!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-md">
                <div class="card">
                    <div class="card-body">
                    <div class="d-flex justify-content-between">
                            <h5 class="card-title">Mesjid Al-Huda Cibinong</h5>
                            <button type="button" class="btn btn-success mt-3 me-4" data-bs-toggle="modal" data-bs-target="#tambah" style="height: 40px;"><i class="bi bi-plus-circle"></i> Tambah Data</button>
                        </div>
                        <br>

                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Bulan</th>
                                    <th scope="col">Uang Masuk</th>
                                    <th scope="col">Uang Keluar</th>
                                    <th scope="col">Keterangan</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Januari</td>
                                    <td>Rp. 400.000</td>
                                    <td></td>
                                    <td>Infaq</td>
                                    <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit"><i class="bi bi-pencil-square"></i></button>
                                    <button type="button" class="btn btn-danger" onclick="confirm('Anda yakin akan menghapus data ?')"><i class="bi bi-trash"></i></button></td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Februari</td>
                                    <td>Rp. 900.000</td>
                                    <td></td>
                                    <td>Infaq</td>
                                    <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit"><i class="bi bi-pencil-square"></i></button>
                                    <button type="button" class="btn btn-danger" onclick="confirm('Anda yakin akan menghapus data ?')"><i class="bi bi-trash"></i></button></td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Maret</td>
                                    <td>Rp. 1.000.000</td>
                                    <td></td>
                                    <td>Infaq</td>
                                    <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit"><i class="bi bi-pencil-square"></i></button>
                                    <button type="button" class="btn btn-danger" onclick="confirm('Anda yakin akan menghapus data ?')"><i class="bi bi-trash"></i></button></td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>April</td>
                                    <td>Rp. 200.000</td>
                                    <td></td>
                                    <td>Infaq</td>
                                    <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit"><i class="bi bi-pencil-square"></i></button>
                                    <button type="button" class="btn btn-danger" onclick="confirm('Anda yakin akan menghapus data ?')"><i class="bi bi-trash"></i></button></td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>Mei</td>
                                    <td>Rp. 600.000</td>
                                    <td></td>
                                    <td>Infaq</td>
                                    <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit"><i class="bi bi-pencil-square"></i></button>
                                    <button type="button" class="btn btn-danger" onclick="confirm('Anda yakin akan menghapus data ?')"><i class="bi bi-trash"></i></button></td>
                                </tr>
                                <tr>
                                    <th scope="row">6</th>
                                    <td>Juni</td>
                                    <td>Rp.  --</td>
                                    <td>Rp. 500.000</td>
                                    <td>Pembelian alat kebersihan</td>
                                    <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit"><i class="bi bi-pencil-square"></i></button>
                                    <button type="button" class="btn btn-danger" onclick="confirm('Anda yakin akan menghapus data ?')"><i class="bi bi-trash"></i></button></td>
                                </tr>

                                <tr class="fw-bold">
                                    <th scope="row"></th>
                                    <td></td>
                                    <td>Total</td>
                                    <td>Rp. 3.100.000</td>
                                    <td></td>
                                    <td> </td>

                                </tr>

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </section>
</main>


<!-- Modal Edit -->
<div class="modal fade" id="edit" tabindex="-1" aria-labelledby="editLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editLabel">Edit data Infaq</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>

                    <div class="mb-3">
                        <label for="bulan" class="form-label">Bulan</label>
                        <input type="text" class="form-control" id="bulan" aria-describedby="emailHelp" />
                    </div>
                    <div class="mb-3">
                        <label for="masuk" class="form-label">Uang Masuk</label>
                        <input type="text" class="form-control" id="masuk" aria-describedby="emailHelp" />
                    </div>
                    <div class="mb-3">
                        <label for="keluar" class="form-label">Uang Keluar</label>
                        <input type="text" class="form-control" id="keluar" aria-describedby="emailHelp" />
                    </div>
                    <div class="mb-3">
                        <label for="keterangan" class="form-label">Keterangan</label>
                        <input type="text" class="form-control" id="keterangan" aria-describedby="emailHelp" />
                    </div>


                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>


<!-- Modal Tambah data -->
<div class="modal fade" id="tambah" tabindex="-1" aria-labelledby="tambahLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahLabel">Tambah data Infaq</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                 <div class="mb-3">
                <form>
                        <label for="bulan" class="form-label">Bulan</label>
                        <input type="text" class="form-control" id="bulan" aria-describedby="emailHelp" />
                    </div>
                    <div class="mb-3">
                        <label for="masuk" class="form-label">Uang Masuk</label>
                        <input type="text" class="form-control" id="masuk" aria-describedby="emailHelp" />
                    </div>
                    <div class="mb-3">
                        <label for="keluar" class="form-label">Uang Keluar</label>
                        <input type="text" class="form-control" id="keluar" aria-describedby="emailHelp" />
                    </div>
                    <div class="mb-3">
                        <label for="keterangan" class="form-label">Keterangan</label>
                        <input type="text" class="form-control" id="keterangan" aria-describedby="emailHelp" />
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php' ?>
