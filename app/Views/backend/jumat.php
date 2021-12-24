<?php include 'header.php' ?>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Jadwal Shalat Jumat</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Kegiatan</li>
                <li class="breadcrumb-item active">Shalat Jumat</li>
            </ol>
        </nav>
    </div>
    <!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                     <div class="card-body">
                          <div class="d-flex justify-content-between">
                            <h5 class="card-title">Mesjid Al-Huda Cibinong</h5>
                            <button type="button" class="btn btn-success mt-3 me-4" data-bs-toggle="modal" data-bs-target="#tambah" style="height: 40px;"><i class="bi bi-plus-circle"></i> Tambah Data</button>
                        </div>
                         <br>

                         <!-- Table with stripped rows -->
                         <table class="table table-hover table-bordered">
                              <thead>
                                   <tr>
                                        <th scope="col">Tanggal</th>
                                        <th scope="col">Imam</th>
                                        <th scope="col">Khatib</th>
                                        <th scope="col">Muadzin</th>
                                        <th scope="col">Bilal</th>
                                        <th scope="col">Aksi</th>
                                   </tr>
                              </thead>
                              <tbody>
                                   <tr>
                                        <td>7 Januari 2022</td>
                                        <td>KH.Mulyana</td>
                                        <td>KH.Mulyana</td>
                                        <td>Amir Mahmud</td>
                                        <td>Sobirin</td>
                                        <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit"><i class="bi bi-pencil-square"></i></button>
                                        <button type="button" class="btn btn-danger" onclick="confirm('Anda yakin akan menghapus data ?')"><i class="bi bi-trash"></i></button></td>
                                   </tr>
                                   <tr>
                                        <td>14 Januari 2022</td>
                                    <td>Ust. Abdul Khoir</td>
                                    <td>Ust. Abdul Khoir</td>
                                    <td>Ramli</td>
                                    <td>Bpk. Jamhari</td>
                                    <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit"><i class="bi bi-pencil-square"></i></button>
                                    <button type="button" class="btn btn-danger" onclick="confirm('Anda yakin akan menghapus data ?')"><i class="bi bi-trash"></i></button></td>
                                </tr>
                                <tr>
                                    <td>21 Januari 2022</td>
                                    <td>Ust. Ahmad Rifa'i</td>
                                    <td>Ust. Ahmad Rifa'i</td>
                                    <td>Bpk. Holil</td>
                                    <td>Bpk. Eman</td>
                                    <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit"><i class="bi bi-pencil-square"></i></button>
                                   <button type="button" class="btn btn-danger" onclick="confirm('Anda yakin akan menghapus data ?')"> <i class="bi bi-trash"></i></button></td>
                                </tr>
                                <tr>
                                    <td>28 Januari 2022</td>
                                    <td>Ust.Lutfi</td>
                                    <td>Ust.Lutfi</td>
                                    <td>Kamil Fauzi</td>
                                    <td>Kamil Fauzi</td>
                                    <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit"><i class="bi bi-pencil-square"></i></button>
                                    <button type="button" class="btn btn-danger" onclick="confirm('Anda yakin akan menghapus data ?')"><i class="bi bi-trash"></i></button></td>

                                   </tr>
                                <tr>
                                    <td>4 Februari 2022</td>
                                    <td>KH. Agus Kurniawan</td>
                                    <td>KH. Agus Kurniawan</td>
                                    <td>Raihan</td>
                                    <td>Raihan</td>
                                    <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit"><i class="bi bi-pencil-square"></i></button>
                                    <button type="button" class="btn btn-danger" class="btn btn-danger" onclick="confirm('Anda yakin akan menghapus data ?')"><i class="bi bi-trash"></i></button></td>

                                </tr>
                            </tbody>
                        </table>


                        <!-- End Table with stripped rows -->
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
                <h5 class="modal-title" id="editLabel">Edit Jadwal Shalat Jumat</h5>
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
                    <div class="mb-3">
                        <label for="muadzin" class="form-label">Muadzin</label>
                        <input type="text" class="form-control" id="muadzin" aria-describedby="emailHelp" />
                    </div>
                    <div class="mb-3">
                        <label for="bilal" class="form-label">Bilal</label>
                        <input type="text" class="form-control" id="bilal" aria-describedby="emailHelp" />
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
                <h5 class="modal-title" id="tambahLabel">Tambah data Shalat Jumat</h5>
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
                    <div class="mb-3">
                        <label for="muadzin" class="form-label">Muadzin</label>
                        <input type="text" class="form-control" id="muadzin" aria-describedby="emailHelp" />
                    </div>
                    <div class="mb-3">
                        <label for="bilal" class="form-label">Bilal</label>
                        <input type="text" class="form-control" id="bilal" aria-describedby="emailHelp" />
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
