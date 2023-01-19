@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="row justify-content-between">
                    <div class="col-md-5">
                        <div class="row">
                            <div class="col-auto">
                                <select class="form-select">
                                    <option value="5">5</option>
                                    <option value="10">10</option>
                                    <option value="25">25</option>
                                </select>
                            </div>
                            <div class="col-auto">
                                <a href="" class="btn btn-success" data-bs-toggle="modal"
                                    data-bs-target="#addModal">Buat Pesanan</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <input class="form-control" type="text" placeholder="Search..">
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center mt-4">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-body">
                        <div class="card-title row">
                            <div class="col">
                                <h6 class="fs-5 fw-bold">Kode Kendaraan : H67JK</h6>
                                <span><b>Driver :</b> Suyatno</span>
                            </div>

                            <div class="col">
                                <span class="float-right badge bg-dark fs-6">Angkutan Orang</span>
                                <span>01/02/2023</span>
                                <div class="accordion accordion-flush" id="accordionFlush">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingOne">
                                            <span class="accordion-button collapsed" data-bs-toggle="collapse"
                                                data-bs-target="#flush-collapseOne" aria-expanded="false"
                                                aria-controls="flush-collapseOne"></span>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                            data-bs-parent="#accordionFlush">
                            <hr class="mt-0">
                            <div class="row justify-content-center">
                                <div class="col">
                                    <table>
                                        <tr>
                                            <td>Lama Pemakaian&ensp;</td>
                                            <td>: 50 jam</td>
                                        </tr>
                                        <tr>
                                            <td>Jumlah BBM&ensp;</td>
                                            <td>: 200 L</td>
                                        </tr>
                                        <tr>
                                            <td>Tgl Pakai&ensp;</td>
                                            <td>: 01/02/2023</td>
                                        </tr>
                                        <tr>
                                            <td>Tgl Selesai&ensp;</td>
                                            <td>: 01/02/2023</td>
                                        </tr>
                                    </table>
                                </div>

                                <div class="col text-center">
                                    <div class="row justify-content-center">
                                        <div class="col">
                                            <h6 class="fw-bold">Kepala Tambang</h6>
                                            <span class="fw-bold color-success">
                                                <i class="fas fa-check-double fa-3x"></i>
                                                <br>
                                                Disetujui
                                            </span>
                                        </div>
                                        <div class="col">
                                            <h6 class="fw-bold">Kepala Pool</h6>
                                            {{-- <span class="fw-bold color-danger">
                                                <i class="fas fa-times-circle fa-3x"></i>
                                                <br>
                                                Ditolak
                                            </span> --}}
                                            <span class="fw-bold color-primary">
                                                <i class="fas fa-pause-circle fa-3x"></i>
                                                <br>
                                                Menunggu
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row justify-content-center mt-4">
                <div class="col-md-4 align-middle">
                    <span>Show 1 to 2 of 10 entries</span>
                </div>
                <div class="col-md-4 align-middle">
                    <nav>
                        <ul class="pagination justify-content-end">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active" aria-current="page">
                                <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addModalLabel">Buat Pesanan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="" method="post">
                        @csrf
                        @method('POST')
                        <div class="modal-body">
                            <div class="row g-3 mb-3">
                                <div class="col">
                                    <label for="kendaraan" class="form-label">Kendaraan</label>
                                    <select id="kendaraan" name="kendaraan" class="form-select">
                                        <option value="5">Pilih Kendaraan</option>
                                        <option value="5">5</option>
                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <label for="pakai" class="form-label">Tanggal Pakai</label>
                                    <input id="pakai" name="pakai" type="date" class="form-control">
                                </div>
                            </div>
                            <div class="row g-3 mb-3">
                                <div class="col">
                                    <label for="driver" class="form-label">Driver</label>
                                    <select id="driver" name="driver" class="form-select">
                                        <option value="5">Pilih Driver</option>
                                        <option value="5">5</option>
                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <label for="selesai" class="form-label">Tanggal Selesai</label>
                                    <input id="selesai" name="selesai" type="date" class="form-control">
                                </div>
                            </div>
                            <div class="row g-3 mb-3">
                                <div class="col">
                                    <label for="lamaPakai" class="form-label">Lama Pakai</label>
                                    <input id="lamaPakai" name="lamaPakai" type="number" class="form-control"
                                        placeholder="Lama Pemakaian">
                                </div>
                                <div class="col">
                                    <label for="katambang" class="form-label">Kepala Tambang</label>
                                    <select id="katambang" name="katambang" class="form-select">
                                        <option value="5">Pilih Kepala Tambang</option>
                                        <option value="5">5</option>
                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row g-3">
                                <div class="col">
                                    <label for="bbm" class="form-label">BBM</label>
                                    <input id="bbm" name="bbm" type="number" class="form-control"
                                        placeholder="Jumlah BBM">
                                </div>
                                <div class="col">
                                    {{-- <input type="text" class="form-control" placeholder="Last name" aria-label="Last name"> --}}
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-success">Buat</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endsection
