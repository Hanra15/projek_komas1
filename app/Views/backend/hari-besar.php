<?php include 'header.php' ?>
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Jadwal Peringatan Hari Besar Islam</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Kegiatan</li>
                <li class="breadcrumb-item active">Peringatan Hari Besar Islam</li>
            </ol>
        </nav>
    </div>
    <!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                    <div class="d-flex justify-content-between">
                            <h5 class="card-title">Mesjid Al-Huda Cibinong</h5>
                            <button type="button" class="btn btn-success mt-3 me-1" data-bs-toggle="modal" data-bs-target="#tambah" style="height: 40px;"><i class="bi bi-plus-circle"></i> Tambah Data</button>
                        </div>
                        <br>

                        <table class="table table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Tempat</th>
                                    <th scope="col">Kegiatan</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                 <tr>
                                     <th scope="row">1</th>
                                     <td>28/02/2022</td>
                                     <td>Mesjid Al-huda</td>
                                     <td>Isra Mi'raj</td>
                                     <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit"><i class="bi bi-pencil-square"></i></button>
                                     <button type="button" class="btn btn-danger" onclick="confirm('Anda yakin akan menghapus data ?')"><i class="bi bi-trash"></i></button></td>
                                 </tr>
                                 <tr>
                                     <th scope="row">2</th>
                                     <td>02/05/2022</td>
                                     <td>Mesjid Al-huda</td>
                                     <td>Idul Fitri</td>
                                     <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit"><i class="bi bi-pencil-square"></i></button>
                                     <button type="button" class="btn btn-danger" onclick="confirm('Anda yakin akan menghapus data ?')"><i class="bi bi-trash"></i></button></td>
                                 </tr>
                                 <tr>
                                     <th scope="row">3</th>
                                     <td>09/07/2022</td>
                                     <td>Mesjid Al-huda</td>
                                     <td>Idul Adha</td>
                                     <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit"><i class="bi bi-pencil-square"></i></button>
                                     <button type="button" class="btn btn-danger" onclick="confirm('Anda yakin akan menghapus data ?')"><i class="bi bi-trash"></i></button></td>
                                 </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>08/10/2022</td>
                                    <td>Mesjid Al-huda</td>
                                    <td>Maulid Nabi Muhamad SAW</td>
                                    <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit"><i class="bi bi-pencil-square"></i></button>
                                    <button type="button" class="btn btn-danger" onclick="confirm('Anda yakin akan menghapus data ?')"><i class="bi bi-trash"></i></button></td>
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
                <h5 class="modal-title" id="editLabel">Edit Jadwal Peringatan Hari Besar Islam</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form>
                    <div class="mb-3">
                        <label for="date" class="form-label">Tanggal</label>
                        <input type="date" class="form-control" id="date" aria-describedby="emailHelp" />
                    </div>
                    <div class="mb-3">
                        <label for="tempat" class="form-label">Tempat</label>
                        <input type="text" class="form-control" id="tempat" aria-describedby="emailHelp" />
                    </div>
                    <div class="mb-3">
                        <label for="kegiatan" class="form-label">Kegiatan</label>
                        <input type="text" class="form-control" id="kegiatan" aria-describedby="emailHelp" />
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
                <h5 class="modal-title" id="tambahLabel">Tambah Jadwal Peringatan Hari Besar Islam</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                    <label for="date" class="form-label">Tanggal</label>
                        <input type="date" class="form-control" id="date" aria-describedby="emailHelp" />
                    </div>
                    <div class="mb-3">
                        <label for="imam" class="form-label">Imam</label>
                        <input type="text" class="form-control" id="imam" aria-describedby="emailHelp" />
                    </div>
                    <div class="mb-3">
                        <label for="khatib" class="form-label">Khatib</label>
                        <input type="text" class="form-control" id="khatib" aria-describedby="emailHelp" />
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