@extends('dashboard.layouts.main')

@section('content')
    <div>
        <div class="container">
            <div class="card mt-3">
                <div class="card-body">
                    <div class="card-title">Data Rekam Medis</div>

                    @if (session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert"> {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif


                    <form action="/dashboard/rekam-medis/get-data" method="GET">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="tanggal_mulai">Tanggal Mulai</label>
                                    <input type="date" class="form-control" id="tanggal_mulai" name="tanggal_mulai">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="tanggal_selesai">Tanggal Selesai</label>
                                    <input type="date" class="form-control" id="tanggal_selesai" name="tanggal_selesai">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-primary mt-4">Filter</button>
                                <a href="/dashboard/rekam-medis/" class="btn btn-warning mt-4">Reset</a>
                                <a class="btn btn-success mt-4" a
                                    href="{{ route('printData', ['tanggal_mulai' => $request->tanggal_mulai, 'tanggal_selesai' => $request->tanggal_selesai]) }}"
                                    target="_blank">Print</a>
                            </div>
                        </div>
                    </form>


                    <a href="/dashboard/rekam-medis/create" class="btn btn-primary my-3">Tambah Data</a>
                    <div class="row">
                        <div class="col">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="table_id">
                                    <thead>
                                        <tr style="text-align: center">
                                            <th scope="col">No</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">No. RM</th>
                                            <th scope="col">Jenis Kelamin</th>
                                            <th scope="col">No. BPJS</th>
                                            <th scope="col">No. KTP</th>
                                            <th scope="col">Dokter</th>
                                            <th scope="col">Keluhan</th>
                                            <th scope="col">Diagnosa</th>
                                            <th scope="col">Obat</th>
                                            <th scope="col">Tanggal</th>
                                            <th scope="col">Poli</th>
                                            <th scope="col">Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($rekamMedises as $rm)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $rm->nama }}</td>
                                                <td>{{ $rm->no_rm }}</td>
                                                <td>{{ $rm->jenis_kelamin }}</td>
                                                <td>{{ $rm->no_bpjs }}</td>
                                                <td>{{ $rm->no_ktp }}</td>
                                                <td>{{ $rm->dokter }}</td>
                                                <td>{{ $rm->keluhan }}</td>
                                                <td>{{ $rm->diagnosa }}</td>
                                                <td>{{ $rm->obat }}</td>
                                                <td>{{ \Carbon\Carbon::parse($rm->tanggal)->format('d-m-Y') }}</td>
                                                <td>{{ $rm->poli }}</td>
                                                <td>
                                                    <a href="/dashboard/rekam-medis/{{ $rm->id }}/edit"
                                                        class="btn btn-warning">Edit</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        let table = new DataTable('#table_id');
    </script>
@endsection
