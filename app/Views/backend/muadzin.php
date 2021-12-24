<?php include 'header.php' ?>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Jadwal Muadzin</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Kegiatan</li>
                <li class="breadcrumb-item active">Data Muadzin</li>
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
                        </div>
                        <br>

                        <!-- Table with stripped rows -->
                        <table class="table table-bordered">
                            <thead>
                                <tr>

                                    <th scope="col" colspan="6" class="text-center">Muadzin</th>
                                </tr>
                            </thead>
                            <thead>
                                <tr class="text-center" >
                                    <th scope="col" rowspan="2">Hari</th>
                                    <th scope="col">Subuh</th>
                                    <th scope="col">Dzuhur</th>
                                    <th scope="col">Ashar</th>
                                    <th scope="col">Magrib</th>
                                    <th scope="col">Isya</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <th scope="row" class="text-center">Senin</th>
                                    <td>KH.Mulyana</td>
                                    <td>KH.Mulyana</td>
                                    <td>Amir Mahmud</td>
                                    <td>Sobirin</td>
                                    <td>Sobirin</td>
                                    <td>
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit"><i class="bi bi-pencil-square"></i></button>
                                        <button type="button" class="btn btn-danger" onclick="confirm('Anda yakin akan menghapus data ?')"><i class="bi bi-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row" class="text-center">Selasa</th>
                                    <td>Ust. Abdul Khoir</td>
                                    <td>Ust. Abdul Khoir</td>
                                    <td>Ramli</td>
                                    <td>Bpk. Jamhari</td>
                                    <td>Bpk. Jamhari</td>
                                    <td>
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit"><i class="bi bi-pencil-square"></i></button>
                                        <button type="button" class="btn btn-danger" onclick="confirm('Anda yakin akan menghapus data ?')"><i class="bi bi-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row" class="text-center">Rabu</th>
                                    <td>Ust. Ahmad Rifa'i</td>
                                    <td>Ust. Ahmad Rifa'i</td>
                                    <td>Bpk. Holil</td>
                                    <td>Bpk. Eman</td>
                                    <td>Bpk. Eman</td>
                                    <td>
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit"><i class="bi bi-pencil-square"></i></button>
                                        <button type="button" class="btn btn-danger" onclick="confirm('Anda yakin akan menghapus data ?')"><i class="bi bi-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row" class="text-center">Kamis</th>
                                    <td>Ust.Lutfi</td>
                                    <td>Ust.Lutfi</td>
                                    <td>Kamil Fauzi</td>
                                    <td>Kamil Fauzi</td>
                                    <td>Kamil Fauzi</td>
                                    <td>
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit"><i class="bi bi-pencil-square"></i></button> <button type="button" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row" class="text-center">Jumat</th>
                                    <td>KH. Agus Kurniawan</td>
                                    <td>KH. Agus Kurniawan</td>
                                    <td>Raihan</td>
                                    <td>Raihan</td>
                                    <td>Raihan</td>
                                    <td>
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit"><i class="bi bi-pencil-square"></i></button> <button type="button" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row" class="text-center">Sabtu</th>

                                    <td>KH. Agus Kurniawan</td>
                                    <td>KH. Agus Kurniawan</td>
                                    <td>Raihan</td>
                                    <td>Raihan</td>
                                    <td>Raihan</td>
                                    <td>
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit"><i class="bi bi-pencil-square"></i></button>
                                        <button type="button" class="btn btn-danger" onclick="confirm('Anda yakin akan menghapus data ?')"><i class="bi bi-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row" class="text-center">Minggu</th>
                                    <td>KH. Agus Kurniawan</td>
                                    <td>KH. Agus Kurniawan</td>
                                    <td>Raihan</td>
                                    <td>Raihan</td>
                                    <td>Raihan</td>
                                    <td>
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit"><i class="bi bi-pencil-square"></i></button>
                                        <button type="button" class="btn btn-danger" onclick="confirm('Anda yakin akan menghapus data ?')"><i class="bi bi-trash"></i></button>
                                    </td>
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
                <h5 class="modal-title" id="editLabel">Edit Jadwal Imam</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="subuh" class="form-label">Subuh</label>
                        <input type="subuh" class="form-control" id="subuh" aria-describedby="emailHelp" />
                    </div>
                    <div class="mb-3">
                        <label for="dzuhur" class="form-label">Dzuhur</label>
                        <input type="dzuhur" class="form-control" id="dzuhur" aria-describedby="emailHelp" />
                    </div>
                    <div class="mb-3">
                        <label for="ashar" class="form-label">Ashar</label>
                        <input type="ashar" class="form-control" id="ashar" aria-describedby="emailHelp" />
                    </div>
                    <div class="mb-3">
                        <label for="magrib" class="form-label">Magrib</label>
                        <input type="magrib" class="form-control" id="magrib" aria-describedby="emailHelp" />
                    </div>
                    <div class="mb-3">
                        <label for="isya" class="form-label">Isya</label>
                        <input type="isya" class="form-control" id="isya" aria-describedby="emailHelp" />
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
