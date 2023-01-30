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
                    
                <div id="card-{{$ps->pesanan->id}}" class="card mb-3">

                    <div class="card-body">
                        <div class="card-title row justify-content-between">
                            <div class="col-auto">
                                <h6 class="fs-5 fw-bold">Kode Kendaraan : {{$ps->pesanan->kendaraan->kode_kendaraan}}</h6>
                                <span><b>Driver :</b> {{$ps->pesanan->driver->nama_driver}}</span>
                            </div>

                            <div class="col-auto">
                                <span>{{$ps->created_at}}</span>
                            </div>

                            <div class="col-auto">
                                <span class="float-right badge bg-dark fs-6">Angkutan {{$ps->pesanan->kendaraan->jenis_kendaraan}}</span>
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
                                            <td>: {{$ps->pesanan->lama_pemakaian}} Jam</td>
                                        </tr>
                                        <tr>
                                            <td>Jumlah BBM&ensp;</td>
                                            <td>: {{$ps->pesanan->jumlah_bbm}} L</td>
                                        </tr>
                                        <tr>
                                            <td>Tgl Pakai&ensp;</td>
                                            <td>: {{$ps->pesanan->tgl_pakai}}</td>
                                        </tr>
                                        <tr>
                                            <td>Tgl Selesai&ensp;</td>
                                            <td>: {{$ps->pesanan->tgl_selesai}}</td>
                                        </tr>
                                    </table>
                                </div>

                                <div class="col-auto">
                                    <form action="/katambang-dashboard/update-{{$ps->pesanan->id}}" method="post">
                                        @csrf
                                        @method('PATCH')
                                        <button class="btn btn-success" type="submit" {{ $ps->status == 'disetujui' ? 'disabled' : '' }}>Setujui</button>
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
    @endsection
