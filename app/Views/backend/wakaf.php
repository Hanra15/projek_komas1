<?php include 'header.php' ?>
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Wakaf</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Keropak</li>
                <li class="breadcrumb-item active">Wakaf</li>
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
                            <button type="button" class="btn btn-success mt-3 me-4" data-bs-toggle="modal" data-bs-target="#tambah" style="height: 40px"><i class="bi bi-plus-circle"></i> Tambah Data</button>
                        </div>
                        <br />

                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Dari</th>
                                    <th scope="col">Uang Masuk</th>
                                    <th scope="col">Uang Keluar</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>04/01/2022</td>
                                    <td>Hamba Allah</td>
                                    <td>Rp. 400.000</td>
                                    <td></td>
                                    <td>
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit"><i class="bi bi-pencil-square"></i></button>
                                        <button type="button" class="btn btn-danger"onclick="confirm('Anda yakin akan menghapus data ?')"><i class="bi bi-trash"></i></button>
                                    </td>
                                </tr>

                                <tr>
                                    <th scope="row">2</th>
                                    <td>11/01/2022</td>
                                    <td>Faisal Rahman Hadi</td>
                                    <td>Rp. 900.000</td>
                                    <td></td>
                                    <td>
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit"><i class="bi bi-pencil-square"></i></button>
                                        <button type="button" class="btn btn-danger"onclick="confirm('Anda yakin akan menghapus data ?')"><i class="bi bi-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>15/01/2022</td>
                                    <td>Bpk. Zulkifli</td>
                                    <td>Rp. 1.000.000</td>
                                    <td></td>
                                    <td>
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit" ><i class="bi bi-pencil-square"></i></button>
                                        <button type="button" class="btn btn-danger"onclick="confirm('Anda yakin akan menghapus data ?')"><i class="bi bi-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>22/01/2022</td>
                                    <td>Ma'ruf</td>
                                    <td>Rp. 200.000</td>
                                    <td></td>
                                    <td>
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit"><i class="bi bi-pencil-square"></i></button>
                                        <button type="button" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>28/01/2022</td>
                                    <td>Bu Wiwin</td>
                                    <td>Rp. 600.000</td>
                                    <td></td>
                                    <td>
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit"><i class="bi bi-pencil-square"></i></button>
                                        <button type="button" class="btn btn-danger"onclick="confirm('Anda yakin akan menghapus data ?')"><i class="bi bi-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">6</th>
                                    <td>30/01/2022</td>
                                    <td>Pembelian alat kebersihan</td>
                                    <td>Rp. --</td>
                                    <td>Rp. 500.000</td>
                                    <td>
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit"><i class="bi bi-pencil-square"></i></button>
                                        <button type="button" class="btn btn-danger"onclick="confirm('Anda yakin akan menghapus data ?')"><i class="bi bi-trash"></i></button>
                                    </td>
                                </tr>

                                <tr class="fw-bold">
                                    <th scope="row"></th>
                                    <td></td>
                                    <td>Total</td>
                                    <td>Rp. 3.100.000</td>
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
                <h5 class="modal-title" id="editLabel">Edit data wakaf</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                <div class="mb-3">
                    <label for="date" class="form-label">Tanggal</label>
                        <input type="date" class="form-control" id="date" aria-describedby="emailHelp" />
                    </div>
                    <div class="mb-3">
                        <label for="dari" class="form-label">Dari</label>
                        <input type="dari" class="form-control" id="dari" aria-describedby="emailHelp" />
                    </div>
                    <div class="mb-3">
                        <label for="dari" class="form-label">Uang Masuk</label>
                        <input type="dari" class="form-control" id="dari" aria-describedby="emailHelp" />
                    </div>
                    <div class="mb-3">
                        <label for="dari" class="form-label">Uang Keluar</label>
                        <input type="dari" class="form-control" id="dari" aria-describedby="emailHelp" />
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
                <h5 class="modal-title" id="tambahLabel">Tambah data wakaf</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                <div class="mb-3">
                    <label for="date" class="form-label">Tanggal</label>
                        <input type="date" class="form-control" id="date" aria-describedby="emailHelp" />
                    </div>
                    <div class="mb-3">
                        <label for="dari" class="form-label">Dari</label>
                        <input type="dari" class="form-control" id="dari" aria-describedby="emailHelp" />
                    </div>
                    <div class="mb-3">
                        <label for="dari" class="form-label">Uang Masuk</label>
                        <input type="dari" class="form-control" id="dari" aria-describedby="emailHelp" />
                    </div>
                    <div class="mb-3">
                        <label for="dari" class="form-label">Uang Keluar</label>
                        <input type="dari" class="form-control" id="dari" aria-describedby="emailHelp" />
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
