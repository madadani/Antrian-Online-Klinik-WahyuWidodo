@extends('dashboard.layouts.main')

@section('content')
    <div>
        <div class="container">
            <div class="card mt-3">
                <div class="card-body">
                    <div class="card-title">Tambah Data Rekam Medis</div>

                    <form action="/dashboard/rekam-medis/{{ $rm->id }}" method="POST">
                        @method('put')
                        @csrf

                        <div class="mb-3">
                            <label for="nama">Nama Pasien</label>
                            <input type="text" name="nama" class="form-control" value="{{ old('nama', $rm->nama) }}">
                            @error('nama')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="no_rm">No Rekam Medis</label>
                            <input type="text" name="no_rm" class="form-control"
                                value="{{ old('no_rm', $rm->no_rm) }}">
                            @error('no_rm')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="no_rm">Jenis Kelamin</label>
                            <select class="form-control" name="jenis_kelamin" id="jenis_kelamin"
                                value="{{ old('jenis_kelamin') }}">
                                @foreach (['laki-laki', 'perempuan'] as $jenis_kelamin)
                                    <option value="{{ $jenis_kelamin }}" @if ($jenis_kelamin == $rm->jenis_kelamin) selected @endif>
                                        {{ ucfirst($jenis_kelamin) }}</option>
                                @endforeach
                            </select>
                            </select>
                            @error('jenis_kelamin')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="no_ktp">No KTP</label>
                                    <input type="number" name="no_ktp" class="form-control"
                                        value="{{ old('no_ktp', $rm->no_ktp) }}">
                                    @error('no_ktp')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="no_bpjs">No BPJS</label>
                                    <input type="number" name="no_bpjs" class="form-control"
                                        value="{{ old('no_bpjs', $rm->no_bpjs) }}">
                                    @error('no_bpjs')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="dokter">Dokter</label>
                            <input type="text" name="dokter" class="form-control"
                                value="{{ old('dokter', $rm->dokter) }}">
                            @error('dokter')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="keluhan">Keluhan</label>
                            <textarea name="keluhan" class="form-control" cols="30" rows="5">{{ $rm->keluhan }}</textarea>
                            @error('keluhan')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="diagnosa">Diagnosa</label>
                                    <input type="text" name="diagnosa" class="form-control"
                                        value="{{ old('diagnosa', $rm->diagnosa) }}">
                                    @error('diagnosa')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="obat">Obat</label>
                                    <input type="text" name="obat" class="form-control"
                                        value="{{ old('obat', $rm->obat) }}">
                                    @error('obat')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="tanggal">Tanggal</label>
                                    <input type="date" name="tanggal" class="form-control"
                                        value="{{ old('tanggal', $rm->tanggal) }}">
                                    @error('tanggal')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="poli">Poli</label>
                                    <select class="form-control" name="poli" id="poli" value="{{ old('poli') }}">
                                        @foreach (['Umum', 'Gigi', 'Kia'] as $poli)
                                            <option value="{{ $poli }}"
                                                @if ($poli == $rm->poli) selected @endif>
                                                {{ ucfirst($poli) }}</option>
                                        @endforeach
                                    </select>
                                    @error('poli')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary my-3 float-end">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
