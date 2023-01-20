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
                @foreach ($allPesanan as $index => $ps)
                    
                <div id="card-{{$ps->id}}" class="card mb-3">

                    <div class="card-body">
                        <div class="card-title row justify-content-between">
                            <div class="col-auto">
                                <h6 class="fs-5 fw-bold">Kode Kendaraan : {{$ps->kendaraan->kode_kendaraan}}</h6>
                                <span><b>Driver :</b> {{$ps->driver->nama_driver}}</span>
                            </div>

                            <div class="col-auto">
                                <span>{{$ps->created_at}}</span>
                            </div>

                            <div class="col-auto">
                                <span class="float-right badge bg-dark fs-6">Angkutan {{$ps->kendaraan->jenis_kendaraan}}</span>
                                <div class="accordion accordion-flush" id="accordionFlush-{{$index}}">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingOne-{{$index}}">
                                            <span class="accordion-button collapsed" data-bs-toggle="collapse"
                                                data-bs-target="#flush-collapse-{{$index}}" aria-expanded="false"></span>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="flush-collapse-{{$index}}" class="accordion-collapse collapse" data-bs-parent="#accordionFlush-{{$index}}">
                            <hr class="mt-0">
                            <div class="row justify-content-between align-items-end">
                                <div class="col-auto">
                                    <table>
                                        <tr>
                                            <td>Lama Pemakaian&ensp;</td>
                                            <td>: {{$ps->lama_pemakaian}} Jam</td>
                                        </tr>
                                        <tr>
                                            <td>Jumlah BBM&ensp;</td>
                                            <td>: {{$ps->jumlah_bbm}} L</td>
                                        </tr>
                                        <tr>
                                            <td>Tgl Pakai&ensp;</td>
                                            <td>: {{$ps->tgl_pakai}}</td>
                                        </tr>
                                        <tr>
                                            <td>Tgl Selesai&ensp;</td>
                                            <td>: {{$ps->tgl_selesai}}</td>
                                        </tr>
                                    </table>
                                </div>

                                <div class="col-auto">
                                    <form action="/katambang-dashboard/update-{{$ps->id}}" method="post">
                                        @csrf
                                        @method('PATCH')
                                        <input type="hidden" name="status" value="disetujui">
                                        <button class="btn btn-success" type="submit">Setujui</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                @endforeach
            </div>

            <div class="row justify-content-center mt-2">
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
                    <form action="/admin-dashboard/pesan" method="post">
                        @csrf
                        @method('POST')
                        <div class="modal-body">
                            <div class="row g-3 mb-3">
                                <div class="col">
                                    <label for="kendaraan" class="form-label">Kendaraan</label>
                                    <select id="kendaraan" name="kendaraan" class="form-select">
                                        <option value="null">Pilih Kendaraan</option>
                                        @foreach ($allKendaraan as $kd)
                                            <option value="{{$kd->id}}">{{$kd->kode_kendaraan}}</option>
                                        @endforeach
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
                                        <option value="null">Pilih Driver</option>
                                        @foreach ($allDriver as $dr)
                                            <option value="{{$dr->id}}">{{$dr->nama_driver}}</option>
                                        @endforeach
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
                                        <option value="null">Pilih Kepala Tambang</option>
                                        @foreach ($allKatambang as $kt)
                                            <option value="{{$kt->id}}">{{$kt->username}}</option>
                                        @endforeach
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
